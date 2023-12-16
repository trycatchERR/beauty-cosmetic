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
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="/">Beauty Cosmetics<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li><a class="nav-link" href="/products">Product</a></li>
                    <li><a class="nav-link" href="/about">About us</a></li>
                    <li><a class="nav-link" href="/contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li>
                        <a class="nav-link" href="/login"><img src="images/user.svg" /></a>
                    </li>
                    <li>
                        <a class="nav-link" href="/cart"><img src="images/cart.svg" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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

    <div class="untree_co-section before-footer-section">
        @if ($products_in_cart->count() == 0)
            <h1 class="text-center">Your cart is empty</h1>
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
    <footer class="footer-section">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-8">
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap">
                        <a href="#" class="footer-logo">Beauty Cosmetics<span>.</span></a>
                    </div>
                    <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik yang kami
                        hadirkan!. Temukan kami juga di:</p>

                    <ul class="list-unstyled custom-social">
                        <li>
                            <a href="https://www.facebook.com/"><span class="fa fa-brands fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><span class="fa fa-brands fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><span class="fa fa-brands fa-instagram"></span></a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/"><span class="fa fa-brands fa-tiktok"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="/login">Login</a></li>
                                <li><a href="/products">Product</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="/cart">Cart</a></li>
                                <li><a href="/checkout">Checkout</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="/testimonials">Testimonials</a></li>
                                <li><a href="/about">About us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="/contact">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="border-top copyright">
                            <div class="row pt-4">
                                <div class="col-lg-6">
                                    <p class="mb-2 text-center text-lg-start">
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        . All Rights Reserved. &mdash; Designed with love by <a
                                            href="https://untree.co">Untree.co</a> Distributed By <a
                                            hreff="https://themewagon.com">ThemeWagon</a>
                                        <!-- License information: https://untree.co/license/ -->
                                    </p>
                                </div>

                                <div class="col-lg-6 text-center text-lg-end">
                                    <ul class="list-unstyled d-inline-flex ms-auto">
                                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    </footer>
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
