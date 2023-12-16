<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartView()
    {
        $products_in_cart = Cart::with('product')->where('user_id', Auth::id())->get();
        $total_price = 0;
        foreach ($products_in_cart as $product_in_cart) {
            $total_price += $product_in_cart->product->price * $product_in_cart->quantity;
        }

        return view('cart', [
            'products_in_cart' => $products_in_cart,
            'total_price' => $total_price
        ]);
    }

    public function addProduct(Request $request)
    {
        $product_in_cart = Cart::where('product_id', $request->product_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($product_in_cart) {
            $product_in_cart->quantity += 1;
            $product_in_cart->save();
        } else {
            Cart::create([
                'product_id' => $request->product_id,
                'user_id' => Auth::id(),
                'quantity' => 1
            ]);
        }

        return redirect('/cart')->with('success', 'Product added to cart successfully!');
    }

    public function delete(Request $request)
    {
        Cart::where('id', $request->id)->delete();
        return redirect('/cart')->with('success', 'Product deleted from cart successfully!');
    }

    public function updateQuantity(Request $request, $action)
    {
        // dd($request->all());
        $product_in_cart = Cart::where('id', $request->id)->first();

        if ($action === 'increment') {
            $product_in_cart->quantity += 1;
        } elseif ($action === 'decrement') {
            $product_in_cart->quantity = max(1, $product_in_cart->quantity - 1);
        }

        $product_in_cart->save();

        $products_in_cart = Cart::with('product')->where('user_id', Auth::id())->get();
        $total_price = 0;

        foreach ($products_in_cart as $item) {
            $total_price += $item->product->price * $item->quantity;
        }

        return response()->json([
            'quantity' => $product_in_cart->quantity,
            'subtotal' => $product_in_cart->product->price * $product_in_cart->quantity,
            'total_price' => $total_price
        ]);
    }
}
