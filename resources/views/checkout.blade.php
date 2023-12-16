<?php
function format_rp($number)
{
    return 'Rp ' . number_format($number, 0, '.', '.');
}
?>

<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border p-4 rounded" role="alert"><a href="/login">Click here</a> to login</div>
                </div>
            </div>
            <form action="/orders/checkout" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Billing Details</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <div class="form-group">
                                <label for="country" class="text-black">Country <span
                                        class="text-danger">*</span></label>
                                <select id="country" name="country" class="form-control">
                                    <option disabled>Select a country</option>
                                    <option value="Indonesia" {{ old('country') == 'Indonesia' ? 'selected' : '' }}>
                                        Indonesia</option>
                                    <option value="Bangladesh" {{ old('country') == 'Bangladesh' ? 'selected' : '' }}>
                                        Bangladesh</option>
                                    <option value="Algeria" {{ old('country') == 'Algeria' ? 'selected' : '' }}>Algeria
                                    </option>
                                    <option value="Afghanistan" {{ old('country') == 'Afghanistan' ? 'selected' : '' }}>
                                        Afghanistan</option>
                                    <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana
                                    </option>
                                    <option value="Albania" {{ old('country') == 'Albania' ? 'selected' : '' }}>Albania
                                    </option>
                                    <option value="Bahrain" {{ old('country') == 'Bahrain' ? 'selected' : '' }}>Bahrain
                                    </option>
                                    <option value="Colombia" {{ old('country') == 'Colombia' ? 'selected' : '' }}>
                                        Colombia</option>
                                    <option value="Dominican Republic"
                                        {{ old('country') == 'Dominican Republic' ? 'selected' : '' }}>Dominican
                                        Republic</option>
                                    <option value="Other" {{ old('country') == 'Other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                                @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row mt-2">
                                <div class="col-md-6">
                                    <label for="first_name" class="text-black">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ old('first_name') }}" />
                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="text-black">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ old('last_name') }}" />
                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <div class="col-md-12">
                                    <label for="company_name" class="text-black">Company Name </label>
                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                        value="{{ old('company_name') }}" />
                                    @error('company_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <div class="col-md-12">
                                    <label for="street_address" class="text-black">Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="street_address"
                                        name="street_address" placeholder="Street address"
                                        value="{{ old('street_address') }}" />
                                    @error('street_address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <input type="text" class="form-control" name="apartment"
                                    placeholder="Apartment, suite, unit etc. (optional)"
                                    value="{{ old('apartment') }}" />
                                @error('apartment')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group row mt-2">
                                <div class="col-md-6">
                                    <label for="state" class="text-black">State / Country <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        value="{{ old('state') }}" />
                                    @error('state')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="postcode" class="text-black">Postal / Zip <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="postcode" name="postcode"
                                        value="{{ old('postcode') }}" />
                                    @error('postcode')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <div class="col-md-6">
                                    <label for="email" class="text-black">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" />
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="text-black">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Phone Number" value="{{ old('phone') }}" />
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 10px">
                                <label for="order_notes" class="text-black">Order Notes</label>
                                <textarea name="order_notes" id="order_notes" cols="30" rows="5" class="form-control"
                                    placeholder="Write your notes here...">{{ old('order_notes') }}</textarea>
                                @error('order_notes')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                                <div class="p-3 p-lg-5 border bg-white">
                                    <input type="text" name="coupon_id" id="coupon-id" hidden>
                                    <label for="c_code" class="text-black mb-3">Enter your coupon code if you have
                                        one</label>
                                    <div class="input-group w-75 couponcode-wrap">
                                        <input type="text" class="form-control me-2" id="coupon-input"
                                            placeholder="Coupon Code" aria-label="Coupon Code"
                                            aria-describedby="button-addon2" />
                                        <div class="input-group-append">
                                            <button class="coupon-button btn btn-black btn-sm" type="button"
                                                id="button-addon2">Apply</button>
                                        </div>
                                    </div>
                                    <p id="coupon-message"></p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border bg-white">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($products_to_checkout as $item)
                                                <tr>
                                                    <td>{{ $item->product->name }}<strong
                                                            class="mx-2">x</strong>{{ format_rp($item->quantity) }}
                                                    </td>
                                                    <td>{{ format_rp($item->quantity * $item->product->price) }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong>
                                                </td>
                                                <td class="text-black">{{ format_rp($total_price) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Order Total</strong>
                                                </td>
                                                <td class="text-black font-weight-bold">
                                                    <strong id="order-total">{{ format_rp($total_price) }}</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p id="discount-message"></p>

                                    <input type="text" name="provider_id" id="selected-provider" hidden>
                                    @foreach ($payment_choices as $method)
                                        <div class="border p-3 mb-3">
                                            <h3 class="h6 mb-0">
                                                <a class="d-block" data-bs-toggle="collapse"
                                                    href="#collapsebank{{ $method->id }}" role="button"
                                                    aria-expanded="false"
                                                    aria-controls="collapsebank{{ $method->id }}">
                                                    {{ $method->name }}
                                                </a>
                                            </h3>
                                            <div class="collapse" id="collapsebank{{ $method->id }}">
                                                <div class="py-2 d-flex flex-grow gap-4">
                                                    @foreach ($method->payment_providers as $provider)
                                                        <div class="payment-provider-choice provider{{ $provider->id }} d-flex justify-content-center align-items-center"
                                                            style="cursor: pointer; border: 1px solid white"
                                                            provider-id={{ $provider->id }}>
                                                            <img src="{{ $provider->image }}" width="100"
                                                                alt="{{ $provider->name }}" class="p-2">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="form-group">
                                        <button class="btn btn-black btn-lg py-3 btn-block">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- </form> -->
        </div>
    </div>

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row g-5 mb-5">
                        <div class="col-lg-4">
                            <div class="mb-4 footer-logo-wrap">
                                <a href="#" class="footer-logo">Beauty Cosmetics<span>.</span></a>
                            </div>
                            <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik
                                yang kami hadirkan!. Temukan kami juga di:</p>

                            <ul class="list-unstyled custom-social">
                                <li>
                                    <a href="https://www.facebook.com/"><span
                                            class="fa fa-brands fa-facebook-f"></span></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/"><span class="fa fa-brands fa-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"><span
                                            class="fa fa-brands fa-instagram"></span></a>
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
        $(document).ready(function() {
            let providerId = null;
            console.log(providerId);
            $('.payment-provider-choice').click(function() {
                providerId = $(this).attr('provider-id');
                $('#selected-provider').val(providerId) // fix
                console.log(providerId);
                $('.payment-provider-choice').css('border', '1px solid white');
                $('.provider' + providerId).css('border', '1px solid blue');
            });
        });

        $(document).ready(function() {
            var applyButton = $("#button-addon2");
            var couponInput = $("#coupon-input");

            applyButton.on("click", function(event) {
                event.preventDefault();
                console.log("Coupon Code:", couponInput.val());
            });

            couponInput.on("keydown", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    console.log("Coupon Code:", couponInput.val());

                    $.ajax({
                        url: "/coupon/apply",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            coupon_code: couponInput.val()
                        },
                        success: function(response) {
                            console.log(response);
                            if(response == -1) {
                                $("#coupon-message").html("Coupon code is not valid").css("color", "red");
                            } else {
                                $("#coupon-message").html("Coupon code is applied").css("color", "green");
                                couponInput.prop("disabled", true);
                                applyButton.prop("disabled", true);
                                $("#coupon-id").val(response);

                                response = JSON.parse(response);
                                // strike through the order total
                                $("#order-total").html("<del>" + $("#order-total").html() + "</del>").css("color", "red");
                                // add new total price beside the old one
                                const newTotalPriceInRp = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(response.new_total_price);
                                $("#order-total").parent().append("<br><span>" + newTotalPriceInRp + "</span>").css("font-weight", "bold");
                                // add discount message
                                $("#discount-message").html(response.coupon.description).css("color", "green");
                                // set coupon id
                                $("#coupon-id").val(response.coupon.id);
                            }
                        }
                    });
                }
            });
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
