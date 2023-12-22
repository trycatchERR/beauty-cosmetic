<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign Up</title>
    <style>
        .link {
            color: #3b82f6;
            text-decoration: underline;
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            background-color: #3b82f6;
            color: #fff;
            cursor: pointer;
            display: block;
            max-width: max-content;
        }

        .input {
            padding: 0.7rem 0.7rem;
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
            outline: none;
            transition: box-shadow 0.3s ease;
        }

        .input:focus {
            box-shadow: 0 0 0 2px #2563eb;
            border-color: transparent;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .btn-primary {
            width: 100%;
            border-radius: 2rem;
            background-color: #3b5d50;
            padding: 0.7rem 0;
            font-weight: 600;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            opacity: 0.8;
        }

        .btn-primary-sm {
            padding: 0.5rem 1.25rem;
            border-radius: 2rem;
            background-color: #000;
            font-weight: 600;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary-sm:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .btn-sm-no-color {
            padding: 0.5rem 1.25rem;
            border-radius: 2rem;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }

        .btn-border {
            padding: 0.75rem 1.5rem;
            border-radius: 2rem;
            font-weight: 600;
            border: 1px solid #6b7280;
            color: #000;
            cursor: pointer;
            display: block;
            max-width: max-content;
        }

        .transitions {
            transition: all 0.3s ease-in-out;
        }


        .fa-solid.fa-bell {
            display: none;
        }

        .notification-btn:hover .fa-regular.fa-bell {
            display: none;
        }

        .notification-btn:hover .fa-solid.fa-bell {
            display: inline-block;
        }


        .fa-solid.fa-paper-plane {
            display: none;
        }

        .invitations-btn:hover .fa-regular.fa-paper-plane {
            display: none;
        }

        .invitations-btn:hover .fa-solid.fa-paper-plane {
            display: inline-block;
        }

        .group-card:hover .timer {
            display: block;
            opacity: 1;

            transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            -webkit-transition: opacity 0.3s ease-in-out;
            -o-transition: opacity 0.3s ease-in-out;

        }

        .text-gradient-mint-blue-dark {
            background: -webkit-linear-gradient(-70deg, #a2facf 0%, #64acff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-coral-yellow-dark {
            background: -webkit-linear-gradient(-70deg, #ff7170 0%, #ffe57f 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-turq-purple-dark {
            background: -webkit-linear-gradient(-70deg, #3bf0e4 0%, #bca1f7 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-blue-green {
            background: -webkit-linear-gradient(-70deg, #2188ff 0%, #01a49e 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-red-orange {
            background: -webkit-linear-gradient(-70deg, #ed4e50 0%, #f06f00 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-purple-coral {
            background: -webkit-linear-gradient(-70deg, #9867f0 0%, #ed4e50 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-blue-purple {
            background: -webkit-linear-gradient(-70deg, #2188ff 0%, #804eda 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-mint-blue {
            background: linear-gradient(271.72deg, #a2facf 7.09%, #64acff 96.61%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-pink-blue {
            background: -webkit-linear-gradient(-70deg, #db469f 0%, #2188ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-mktg {
            background: -webkit-linear-gradient(-70deg,
                    var(--mktg-accent-primary, #9867f0) 0%,
                    var(--mktg-accent-secondary, #ed4e50) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-copilot {
            background: -webkit-linear-gradient(300deg, #93f5ec 20%, #a77bf3 70%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .text-gradient-premium-support {
            background: -webkit-linear-gradient(0deg, #79c0ff 0%, #d2a8ff 57.57%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }
    </style>
</head>

<body>
    <div class="flex h-screen items-center">
        <div class="container mx-auto max-w-md px-4">
            <h1 class="text-[#3b5d50] mb-8 text-3xl font-bold">Sign up </h1>
            <form action="/signup" method="POST"> @csrf
                <div class="mt-6 flex flex-col">
                    <label for="email" class="font-semibold">Email</label>
                    <input type="email" name="email" class="input mt-2" value="{{ old('email') }}">
                    @error('email')
                        <div class="mt-0.5 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6 flex flex-col">
                    <label for="password" class="font-semibold">Password</label>
                    <input type="password" placeholder="6+ characters" name="password" id=""
                        class="input mt-2 placeholder:text-slate-300">
                    @error('password')
                        <div class="mt-0.5 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6 flex flex-col">
                    <label for="confirm_password" class="font-semibold">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" class="input mt-2">
                    @error('confirm_password')
                        <div class="mt-0.5 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex mt-8 gap-4">
                    <a href="/" class="btn-primary w-[20%] flex justify-center items-center ">
                        <i class="fa-solid fa-house fa-lg"></i>
                    </a>
                    <button class="btn-primary">Create
                        Account</button>
                </div>
            </form>
            <div class="mt-4 text-center text-sm">Already have an account? <a href="/login"
                    class="cursor-pointer font-thin underline">Sign
                    In</a>
            </div>
        </div>
    </div>

</body>

</html>
