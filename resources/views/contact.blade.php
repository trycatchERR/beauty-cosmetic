<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="images/kosmetik1.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                        <h1>Contact</h1>
                        <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik yang
                            kami hadirkan!</p>
                        <p><a href="/products" class="btn btn-secondary me-2">Shop Now</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/fotoKosmetik (12).png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4">

                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">First name</label>
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Last name</label>
                                        <input type="text" class="form-control" id="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group mb-5">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-hover-outline" disabled>Send
                                Message</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>


    </div>
    </div>

    <!-- End Contact Form -->



    <!-- Start Footer Section -->
    @include('partials.footer')
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
