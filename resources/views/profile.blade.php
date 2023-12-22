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
                        <h1>Profile</h1>
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- create edit profile password and email -->
    <div class="untree_co-section">
        <div class="container">
            <div class="block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 pb-4">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="col-md-12 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" value="{{ $user->password }}"
                                        class="form-control" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="password_confirmation">Password Confirmation</label>
                                    <input type="password" name="password_confirmation"
                                        value="{{ $user->password_confirmation }}" class="form-control" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Update Profile" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
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
