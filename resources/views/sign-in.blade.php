<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>
        PKL
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.min.css') }}" rel="stylesheet" />
</head>

<body class="">
    @include('sweetalert::alert')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->

                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">

        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    {{-- <h4 class="font-weight-bolder">Sign In</h4> --}}
                                    <h4 class="font-weight-bolder">
                                        <marquee behavior="scroll" direction="left">Sign In</marquee>
                                    </h4>

                                    <form action="/sign-in" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <!-- Pesan error global -->
                                            {{-- @if ($errors->has('email'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif --}}

                                            <div class="mb-3">
                                                <input type="email" class="form-control form-control-lg"
                                                    name="email" placeholder="Email" aria-label="Email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" style="font-weight: bold;">Password</label>
                                                <div class="input-group"
                                                    style="position: relative; display: flex; align-items: center; border-radius: 5px; overflow: hidden; border: 1px solid #ced4da;">
                                                    <input type="password" id="password" name="password"
                                                        class="form-control" placeholder="Password"
                                                        style="border: none; padding-right: 40px; border-radius: 0;">
                                                    <button type="button" id="togglePassword"
                                                        style="
                                            position: absolute;
                                            right: 10px;
                                            background: none;
                                            border: none;
                                            cursor: pointer;
                                            height: 100%;F
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                        ">
                                                        <i class="fas fa-eye" id="toggleIcon"
                                                            style="font-size: 16px; color: #6c757d;"></i>
                                                    </button>
                                                </div>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" id="signInButton" class="btn btn-lg btn-primary w-100 mt-4 mb-0">
                                                    Sign In
                                                </button>
                                            </div>

                                        </div>
                                    </form>

                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="/register"
                                            class="text-primary text-gradient font-weight-bold">Register</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
            background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->



    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/argon-dashboard.min.js') }}"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            const isPasswordVisible = passwordField.type === 'text';

            passwordField.type = isPasswordVisible ? 'password' : 'text';
            toggleIcon.classList.toggle('fa-eye');
            toggleIcon.classList.toggle('fa-eye-slash');
        });

        document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const signInButton = document.getElementById("signInButton");

    form.addEventListener("submit", function () {
        // Ubah tombol menjadi loading spinner
        signInButton.disabled = true;
        signInButton.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`;
    });
});


    </script>

</body>

</html>
