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
                    <li class="active"><a class="nav-link" href="/products">Product</a></li>
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
                        <h1>Product</h1>
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                <!-- Start Column  -->
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="/products/{{ $product->id }}">
                            <img src="{{ $product->image }}" class="img-fluid product-thumbnail" />
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <strong class="product-price">{{ format_rp($product->price) }}</strong>

                            <form action="/carts" method="POST" class="icon-cross">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                <button type="submit" style="border: none; padding: 0; margin: 0; background: none;">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </button>
                            </form>
                        </a>
                    </div>
                @endforeach
                <!-- End Column -->
            </div>
        </div>

        <!-- Start Footer Section -->
        <footer class="footer-section">
            <div class="container relative">

                <div class="row">
                    <div class="col-lg-8"></div>
                </div>

                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="mb-4 footer-logo-wrap">
                            <a href="#" class="footer-logo">Beauty Cosmetics<span>.</span></a>
                        </div>
                        <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik yang
                            kami
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
                                                href="https://themewagon.com">ThemeWagon</a>
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

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>
