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
    @include('partials.nav')
    <!-- End Header/Navigation -->

    {{-- show all error --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger" style="margin-top: 10px; margin-bottom: 0px">
            <ul style="margin-bottom: 0px">
                @foreach ($errors->all() as $error)
                    <li style="margin-bottom: 0px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

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
        @if($is_cart_empty)
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="border p-4 rounded" role="alert">Your cart is empty. <a href="/products">Click here</a> to shop</div>
                </div>
            </div>
        </div>
        @else
        <div class="container">
            {{-- <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border p-4 rounded" role="alert"><a href="/login">Click here</a> to login</div>
                </div>
            </div> --}}
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
                                    <input type="text" class="form-control" id="street_address" name="street_address"
                                        placeholder="Street address" value="{{ old('street_address') }}" />
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
                                    <label for="state" class="text-black">State  <span
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
                                        @error('provider_id')
                                            <div class="text-danger" style="margin-top: -10px; margin-bottom: 10px;">Please select payment provider</div>
                                        @enderror

                                        <div>
                                            <label for="account_number" class="text-black">Account Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="account_number"
                                                name="account_number" placeholder="Enter Your Account Number"
                                                value="{{ old('account_number') }}" />
                                            @error('account_number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button class="btn btn-black btn-lg py-3 btn-block" style="margin-top: 30px">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- </form> -->
        </div>
        @endif
    </div>

    <!-- Start Footer Section -->
    @include('partials.footer')
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

            function proceedCoupon(event) {
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
                        if (response == -1) {
                            $("#coupon-message").html("Coupon code is not valid").css("color",
                                "red");
                        } else {
                            $("#coupon-message").html("Coupon code is applied").css("color",
                                "green");
                            couponInput.prop("disabled", true);
                            applyButton.prop("disabled", true);
                            $("#coupon-id").val(response);

                            response = JSON.parse(response);
                            // strike through the order total
                            $("#order-total").html("<del>" + $("#order-total").html() + "</del>")
                                .css("color", "red");
                            // add new total price beside the old one
                            const newTotalPriceInRp = new Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            }).format(response.new_total_price);
                            $("#order-total").parent().append("<br><span>" + newTotalPriceInRp +
                                "</span>").css("font-weight", "bold");
                            // add discount message
                            $("#discount-message").html(response.coupon.description).css("color",
                                "green");
                            // set coupon id
                            $("#coupon-id").val(response.coupon.id);
                        }
                    }
                });

            }

            applyButton.on("click", function(event) {
                proceedCoupon(event);
            });

            couponInput.on("keydown", function(event) {
                if (event.keyCode == 13) proceedCoupon(event);
            });
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
