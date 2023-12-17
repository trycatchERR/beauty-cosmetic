<?php
function format_rp($number)
{
    return 'Rp ' . number_format($number, 0, '.', '.');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="images/kosmetik1.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="css/tiny-slider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Beauty Cosmetics</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Start Header/Navigation -->
    @include('partials.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Cart</h1>
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section {{-- before-footer-section --}}">
        @if ($products_in_cart->count() == 0)
            {{-- <h1 class="text-center">Your cart is empty</h1> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="border p-4 rounded" role="alert">Your cart is empty. <a href="/products">Click
                                here</a> to shop</div>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products_in_cart as $item)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <img src="{{ $item->product->image }}" alt="Image"
                                                    class="img-fluid" />
                                            </td>
                                            <td class="product-name">
                                                <h2 class="h5 text-black">{{ $item->product->name }}</h2>
                                            </td>
                                            <td>{{ format_rp($item->product->price) }}</td>
                                            <td>
                                                <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                                    style="max-width: 120px">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-black decrement"
                                                            data-cart-id="{{ $item->id }}"
                                                            type="button">&minus;</button>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control text-center quantity-amount q{{ $item->id }}"
                                                        value="{{ $item->quantity }}" placeholder="" disabled
                                                        aria-label="Example text with button addon"
                                                        aria-describedby="button-addon1" />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-black increment"
                                                            data-cart-id="{{ $item->id }}"
                                                            type="button">&plus;</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="subtotal{{ $item->id }}">
                                                {{ format_rp($item->quantity * $item->product->price) }}</td>
                                            <td>
                                                <a href="/carts/{{ $item->id }}/delete">X</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="row mb-5">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <a href="/products" class="btn btn-outline-black btn-sm btn-block">Continue
                                    Shopping</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="text-black h4" for="coupon">Coupon</label>
                                <p>Enter your coupon code if you have one.</p>
                            </div>
                            <div class="col-md-8 mb-3 mb-md-0">
                                <input type="text" class="form-control py-3" id="coupon"
                                    placeholder="Coupon Code" />
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-black">Apply Coupon</button>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-6 pl-5">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-5">
                                        <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <span class="text-black">Subtotal</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black total-price">{{ format_rp($total_price) }}</strong>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black">Total</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black total-price">{{ format_rp($total_price) }}</strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-black btn-lg py-3 btn-block"
                                            onclick="window.location='/checkout'">Proceed To Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Start Footer Section -->
    @include('partials.footer')
    <!-- End Footer Section -->

    <script>
        $('.increment').click(function() {
            handleQuantityChange($(this), 'increment');
        });

        $('.decrement').click(function() {
            handleQuantityChange($(this), 'decrement');
        });

        function handleQuantityChange(button, action) {
            let cart_id = button.data('cart-id');

            $.ajax({
                url: '/carts/' + action,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: cart_id
                }
            }).done(function(result) {
                // console.log(result);
                $('.q' + cart_id).val(result.quantity);
                $('.total-price').html('Rp ' + result.total_price.toLocaleString('en-US').replace(/,/g, '.'));
                $('.subtotal' + cart_id).html('Rp ' + result.subtotal.toLocaleString('en-US').replace(/,/g, '.'));
            });
        }
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
