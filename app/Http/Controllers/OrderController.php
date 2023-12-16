<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkoutView()
    {
        $products_to_checkout = $this->getProductsInCart();
        $payment_choices = PaymentController::getPaymentProvidersWithMethods();
        // dd($payment_choices);

        return view('checkout', [
            'products_to_checkout' => $products_to_checkout['products_in_cart'],
            'total_price' => $products_to_checkout['total_price'],
            'payment_choices' => $payment_choices
        ]);
    }

    public function checkoutSuccessView()
    {
        return view('thankyou');
    }

    public function getProductsInCart()
    {
        $products_in_cart = Cart::with('product')->where('user_id', Auth::id())->get();
        $total_price = 0;
        foreach ($products_in_cart as $product_in_cart) {
            $total_price += $product_in_cart->product->price * $product_in_cart->quantity;
        }

        return [
            'products_in_cart' => $products_in_cart,
            'total_price' => $total_price
        ];
    }

    public function checkout(Request $request)
    {
        $this->saveOrderInfo($request);
        $price = $this->calculateOrderPrice($request);
        $order_id = $this->insertOrder($request, $price);
        $this->insertOrderDetail($order_id);

        Cart::where('user_id', Auth::id())->delete();

        return redirect('/thankyou');
    }

    public function insertOrder(Request $request, $price)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->payment_provider_id = $request->provider_id;
        $order->coupon_id = $request->coupon_id;
        $order->normal_price = $price['total_price'];
        $order->discount_fixed = $price['discount_fixed'];
        $order->final_price = $price['final_price'];
        $order->save();

        return $order->id;
    }

    public function insertOrderDetail($order_id)
    {
        $products_in_cart = Cart::with('product')->where('user_id', Auth::id())->get();
        foreach ($products_in_cart as $product_in_cart) {
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order_id;
            $order_detail->product_id = $product_in_cart->product_id;
            $order_detail->quantity = $product_in_cart->quantity;
            $order_detail->save();
        }
    }

    public function calculateOrderPrice(Request $request)
    {
        $coupon = Coupon::where('id', $request->coupon_id)->first();
        $total_price = 0;
        $products_in_cart = Cart::with('product')->where('user_id', Auth::id())->get();
        foreach ($products_in_cart as $product_in_cart) {
            $total_price += $product_in_cart->product->price * $product_in_cart->quantity;
        }

        // get discount value when coupon is applied
        $discount_fixed = 0;
        if ($coupon) {
            if ($coupon->type == 'fixed') {
                $discount_fixed = $coupon->value;
            } else {
                $discount_fixed = $total_price * $coupon->value / 100;
            }
        }

        $final_price = $total_price - $discount_fixed;

        return [
            'total_price' => $total_price,
            'discount_fixed' => $discount_fixed,
            'final_price' => $final_price
        ];
    }

    public function saveOrderInfo(Request $request)
    {
        // $request->validate([
        //     'country' => 'required',
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'company_name' => '',
        //     'street_address' => 'required',
        //     'apartment' => '',
        //     'state' => 'required',
        //     'city' => 'required',
        //     'postcode' => 'required|numeric',
        //     'phone' => 'required|numeric',
        //     'email' => 'required|email',
        //     'order_notes' => '',
        // ]);

        // $order_info = new OrderInfo();
        // $order_info->order_id = $request->order_id;
        // $order_info->user_id = Auth::id();
        // $order_info->country = $request->country;
        // $order_info->first_name = $request->first_name;
        // $order_info->last_name = $request->last_name;
        // $order_info->company_name = $request->company_name;
        // $order_info->street_address = $request->street_address;
        // $order_info->apartment = $request->apartment;
        // $order_info->state = $request->state;
        // $order_info->city = $request->city;
        // $order_info->postcode = $request->postcode;
        // $order_info->phone = $request->phone;
        // $order_info->email = $request->email;
        // $order_info->order_notes = $request->order_notes;
        // $order_info->save();
    }

    public function applyCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            echo -1;
            return;
        }

        $products_in_cart = Cart::with('product')->where('user_id', Auth::id())->get();
        $total_price = 0;
        foreach ($products_in_cart as $product_in_cart) {
            $total_price += $product_in_cart->product->price * $product_in_cart->quantity;
        }

        if ($coupon->type == 'fixed') {
            $total_price -= $coupon->value;
        } else {
            $total_price -= $total_price * $coupon->value / 100;
        }

        echo json_encode([
            'new_total_price' => $total_price,
            'coupon' => $coupon
        ]);
    }
}
