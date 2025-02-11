<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons@8.10.0/icons/apple.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons@8.10.0/icons/google.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons@8.10.0/icons/facebook.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Animasi untuk fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Apply fade-in animation ke body */
        body {
            animation: fadeIn 1s ease-out;
        }


        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }

            .input-group .form-control {
                border-right: none;
                /* Hilangkan garis tepi kanan input */
            }

            .input-group .btn {
                border-left: none;
                /* Hilangkan garis tepi kiri tombol */
            }

            .input-group .btn i {
                margin: 0;
                /* Pastikan ikon tidak memiliki margin berlebih */
            }
        }

        /* Apply slide-in animation ke form card */
        .card {
            animation: slideIn 1s ease-out;
        }
    </style>

</head>

<body class="">
    @include('sweetalert::alert')
    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
        Argon Dashboard 3
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
              <i class="fa fa-chart-pie opacity-6  me-1"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="../pages/profile.html">
              <i class="fa fa-user opacity-6  me-1"></i>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="../pages/sign-up.html">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Sign Up
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="../pages/sign-in.html">
              <i class="fas fa-key opacity-6  me-1"></i>
              Sign In
            </a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-sm mb-0 me-1 bg-gradient-light">Free Download</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
    <!-- End Navbar -->
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                            project for free.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form card moved here, after the text -->
        <div class="container">
            <div class="row justify-content-center" style="padding-top: 40px;">
                <!-- Adjusting top padding for spacing -->
                <div class="card"
                    style="max-width: 800px; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <div class="card-header text-center"
                        style="background-color: #f8f9fa; padding: 1rem; border-bottom: 1px solid #ddd;">
                        <h5>Register with</h5>
                    </div>

                    <div class="mt-3 text-center">
                        <p
                            style="font-size: 0.9rem; font-weight: bold; margin-bottom: 1rem; color: #6c757d; position: relative; display: inline-block; z-index: 2; background-color: white; padding: 0 10px; line-height: 1.2;">
                            <span
                                style="position: absolute; top: 50%; left: 0; width: 50%; height: 1px; background: #ddd; transform: translateY(-50%);"></span>
                            <span
                                style="position: absolute; top: 50%; right: 0; width: 50%; height: 1px; background: #ddd; transform: translateY(-50%);"></span>
                            or
                        </p>
                    </div>

                    <div class="row px-4 pt-3">
                        <div class="col-4 text-center">
                            <a href="#" class="btn btn-outline-light w-100"
                                style="border-color: #ddd; padding: 10px;">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@8.10.0/icons/facebook.svg"
                                    alt="Facebook" style="width: 20px; height: 20px;">
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#" class="btn btn-outline-light w-100"
                                style="border-color: #ddd; padding: 10px;">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@8.10.0/icons/google.svg"
                                    alt="Google" style="width: 20px; height: 20px;">
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#" class="btn btn-outline-light w-100"
                                style="border-color: #ddd; padding: 10px;">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@8.10.0/icons/apple.svg"
                                    alt="Apple" style="width: 20px; height: 20px;">
                            </a>
                        </div>
                    </div>

                    <div class="card-body" style="padding: 1.5rem;">
                        <form action="/register" method="POST">
                            @csrf
                            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="username" style="font-weight: bold;">Name</label>
                                        <input type="text" id="username" name="username" class="form-control"
                                            placeholder="Name" />
                                        @error('username')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" style="font-weight: bold;">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email" />
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nohp" style="font-weight: bold;">No HandPhone</label>
                                        <input type="text" id="nohp" name="nohp" class="form-control"
                                            placeholder="No Handphone"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                                        @error('nohp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" style="font-weight: bold;">Address</label>
                                        <textarea id="address" name="address" class="form-control" placeholder="Enter your address here" rows="3"></textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="jurusan" style="font-weight: bold;">Jurusan</label>
                                        <select id="jurusan" name="jurusan" class="form-control">
                                            <option value="" disabled selected>Pilih Jurusan</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik sepeda motor">Teknik sepeda motor</option>
                                            <option value="Teknik kendaraan ringan ">Teknik kendaraan ringan</option>
                                            <option value="Teknik elektro">Teknik elektro</option>
                                            <option value="Rekaya perangkat lunak">Rekayasa perangkat lunak</option>
                                            <option value="Teknik komputer jaringan">Teknik komputer jaringan</option>
                                            <option value="Desain komunikasi visual">Desain komunikasi visual</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                            <option value="Manajemen">Manajemen</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <!-- Tambahkan opsi jurusan lainnya sesuai kebutuhan -->
                                        </select>
                                        @error('jurusan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
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
                                    <div class="mb-3">
                                        <label for="password_confirmation" style="font-weight: bold;">Confirm
                                            Password</label>
                                        <div class="input-group"
                                            style="position: relative; display: flex; align-items: center; border-radius: 5px; overflow: hidden; border: 1px solid #ced4da;">
                                            <input type="password" id="password_confirmation"
                                                name="password_confirmation" class="form-control"
                                                placeholder="Confirm Password"
                                                style="border: none; padding-right: 40px; border-radius: 0;">
                                            <button type="button" id="toggleConfirmPassword"
                                                style="
                                        position: absolute;
                                        right: 10px;
                                        background: none;
                                        border: none;
                                        cursor: pointer;
                                        height: 100%;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                    ">
                                                <i class="fas fa-eye" id="toggleConfirmIcon"
                                                    style="font-size: 16px; color: #6c757d;"></i>
                                            </button>
                                        </div>
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>




                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn bg-gradient-dark w-100"
                                    style="margin: 20px 0; background-color: #343a40; color: white;"></input>
                            </div>

                        </form>
                        <p style="font-size: 0.9rem; text-align: center;">
                            Already have an account? <a href="/" style="color: #343a40; font-weight: bold;">Sign
                                in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>






    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div> --}}
                {{-- <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div> --}}
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-8 mx-auto text-center mt-1">
                    <marquee behavior="scroll" direction="left">
                        <p class="mb-0 text-secondary">
                            Copyright © <script>document.write(new Date().getFullYear())</script> Soft by Geusan Raditya.
                        </p>
                    </marquee>
                </div>
            </div>

        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
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
    </script>
    <script>
        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            let passwordField = document.getElementById('password_confirmation');
            let icon = document.getElementById('toggleConfirmIcon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>


</body>

</html>



{{-- <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div> --}}
