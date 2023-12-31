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
    @include('partials.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Products</h1>
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
                        <a class="product-item" {{-- href="/products/{{ $product->id }}" --}} style="cursor: default">
                            <img src="{{ $product->image }}" class="img-fluid product-thumbnail" />
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <strong class="product-price">{{ format_rp($product->price) }}</strong>

                            <form action="/carts" method="POST" class="icon-cross">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                <button type="submit"
                                    style="border: none; padding: 0; padding: 20px; background: none;">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </button>
                            </form>
                        </a>
                    </div>
                @endforeach
                <!-- End Column -->
            </div>
        </div>
    </div>

    <!-- Start Footer Section -->
    @include('partials.footer')
    <!-- End Footer Section -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
