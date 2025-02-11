<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/download.jpg') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>
        PKL
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- DataTables Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



    <!-- Bootstrap CSS (Pastikan hanya satu versi) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

    <!-- jQuery dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .dropdown-menu {
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            transform: translateY(10px);
            opacity: 0;
            display: block;
            visibility: hidden;
        }

        .show .dropdown-menu {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }

        table {
            table-layout: auto;
            width: 100%;

            white-space: nowrap;

        }

        th,
        td {
            white-space: nowrap;

        }

        .search-container {
            max-width: 400px;
            margin: auto;
        }

        .search-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
            width: 110px;
            height: 38px;
            white-space: nowrap;
        }

        .spinner {
            display: none;
            width: 16px;
            height: 16px;
            border: 3px solid transparent;
            border-radius: 50%;
            border-top-color: red;
            animation: spin 1s linear infinite, colorShift 2s infinite;
        }

        .loading .spinner {
            display: inline-block;
        }

        .loading .search-text {
            display: none;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes colorShift {
            0% {
                border-top-color: red;
            }

            25% {
                border-top-color: orange;
            }

            50% {
                border-top-color: yellow;
            }

            75% {
                border-top-color: green;
            }

            100% {
                border-top-color: blue;
            }
        }

        #searchButton {
            min-width: 100px;
            height: 38px;
        }

        #searchSpinner {
            width: 16px;
            height: 16px;
        }


        /* #loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(0, 0, 0, 0.1);
            border-top: 5px solid #007bff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Agar spinner tidak menghalangi klik setelah hilang */
        #loading-spinner.hidden {
            display: none !important;
            pointer-events: none;
        } */


    </style>

 </head>
 <body>
    <!-- Loading Spinner (di luar konten halaman) -->
    {{-- <div id="loading-spinner">
        <div class="spinner"></div>
    </div> --}}

     @include('sweetalert::alert')
    <div class="min-height-300 bg-dark position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="{{ asset('img/download.jpg') }}" width="26px" height="26px" class="navbar-brand-img h-100"
                    alt="main_logo">
                <span class="ms-1 font-weight-bold">Kelola.biz</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="/admin">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/tables">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Tables</span>
                    </a>
                </li>




            </ul>
        </div>

    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">


                    <li class="nav-item px-3 d-flex align-items-center dropdown" style="margin-left: auto;">
                        <a href="#" class="nav-link text-white p-0 dropdown-toggle d-flex align-items-center"
                            id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle text-white me-2" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.875rem; font-weight: 400;">{{ $person->username }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/">
                                    <i class="fas fa-sign-out-alt text-dark me-2"></i>
                                    <span style="font-size: 0.875rem;">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-5">




                                <div>
                                    <div class="container mt-5">
                                        <h1 class="mb-6">User Management</h1>
                                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                                            data-bs-target="#createModal" style="margin-top: 100px">
                                            Create User
                                        </button>
                                        <div class="d-flex justify-content-end mb-3">
                                            <form action="/user/filter" method="GET"
                                                class="d-flex align-items-center gap-2 me-5"
                                                style="max-width: 350px;">
                                                <select name="jurusan" class="form-select">
                                                    <option value="" disabled selected>Pilih Jurusan</option>
                                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                                                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan
                                                    </option>
                                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak
                                                    </option>
                                                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan
                                                    </option>
                                                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual
                                                    </option>
                                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                                    <option value="Manajemen">Manajemen</option>
                                                    <option value="Akuntansi">Akuntansi</option>
                                                </select>
                                                <input type="submit" class="btn btn-secondary" value="Filter">
                                            </form>


                                            <form action="/user/search" method="GET" class="d-flex gap-2"
                                                onsubmit="showLoading(this)" style="max-width: 400px; width: 100%;">
                                                <div class="input-group flex-grow-1">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-search"></i>
                                                    </span>
                                                    <input type="text" name="search" class="form-control"
                                                        placeholder="Search user..." required>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-primary px-3 d-flex align-items-center justify-content-center position-relative"
                                                    id="searchButton" style="width: 100px; height: 38px;">
                                                    <span class="btn-text">Search</span>
                                                    <span
                                                        class="spinner-border spinner-border-sm position-absolute d-none"
                                                        id="searchSpinner" role="status" aria-hidden="true"></span>
                                                </button>
                                            </form>





                                        </div>
    <table id="userTable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>No HP</th>
                                                    <th>Address</th>
                                                    <th>Jurusan</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->nohp }}</td>
                                                        <td>{{ $user->address }}</td>
                                                        <td>{{ $user->jurusan }}</td>
                                                        <td>
                                                            <span
                                                                class="badge {{ $user->status == 1 ? 'bg-success' : 'bg-secondary' }}">
                                                                {{ $user->status == 1 ? 'Active' : 'Inactive' }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <!-- Edit Button -->
                                                            <button type="button" class="btn btn-warning btn-sm"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editModal{{ $user->id }}">
                                                                Edit
                                                            </button>
                                                            <!-- Delete Button -->
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="confirmDelete({{ $user->id }})">
                                                                Delete
                                                            </button>
                                                            <!-- Hidden Delete Form -->
                                                            <form id="deleteForm{{ $user->id }}"
                                                                action="/user/delete/{{ $user->id }}"
                                                                method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <!-- Create User Modal -->
                                                    <div class="modal fade" id="createModal" tabindex="-1"
                                                        aria-labelledby="createUserModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="createUserModalLabel">
                                                                        Create New User</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form id="createUserForm" action="/user/store"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="new_username"
                                                                                        class="form-label">Username</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="username"
                                                                                        id="new_username" required>
                                                                                    <div class="text-danger"
                                                                                        id="usernameError"></div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="new_email"
                                                                                        class="form-label">Email</label>
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        name="email" id="new_email"
                                                                                        required>
                                                                                    <div class="text-danger"
                                                                                        id="emailError"></div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="new_nohp"
                                                                                        class="form-label">No
                                                                                        Handphone</label>
                                                                                    <input type="text"
                                                                                        id="new_nohp" name="nohp"
                                                                                        class="form-control"
                                                                                        placeholder="No Handphone"
                                                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                                                        minlength="11" maxlength="13"
                                                                                        required>
                                                                                    <div class="text-danger"
                                                                                        id="nohpError"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="new_address"
                                                                                        class="form-label">Address</label>
                                                                                    <textarea class="form-control" name="address" id="new_address" rows="4" required></textarea>
                                                                                    <div class="text-danger"
                                                                                        id="addressError"></div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="new_status"
                                                                                        class="form-label">Status</label>
                                                                                    <select class="form-control"
                                                                                        name="status" id="new_status"
                                                                                        required>
                                                                                        <option value="">Select
                                                                                            Status</option>
                                                                                        <option value="1">Active
                                                                                        </option>
                                                                                        <option value="0">Not
                                                                                            Active</option>
                                                                                    </select>
                                                                                    <div class="text-danger"
                                                                                        id="statusError"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="new_major"
                                                                                class="form-label">Jurusan</label>
                                                                            <select class="form-control"
                                                                                name="jurusan" id="new_major"
                                                                                required>
                                                                                <option value="">Select Jurusan
                                                                                </option>
                                                                                <option
                                                                                    value="Rekayasa Perangkat Lunak">
                                                                                    Rekayasa Perangkat Lunak</option>
                                                                                <option
                                                                                    value="Teknik Komputer Jaringan">
                                                                                    Teknik Komputer Jaringan</option>
                                                                                <option
                                                                                    value="Teknik Elektronika Industri">
                                                                                    Teknik Elektronika Industri</option>
                                                                                <option
                                                                                    value="Desain Komunikasi Visual">
                                                                                    Desain Komunikasi Visual</option>
                                                                                <option
                                                                                    value="Desain Pemodelan dan Informasi Bangunan">
                                                                                    Desain Pemodelan dan Informasi
                                                                                    Bangunan</option>
                                                                                <option value="Teknik Sepeda Motor">
                                                                                    Teknik Sepeda Motor</option>
                                                                                <option
                                                                                    value="Teknik Kendaraan Ringan">
                                                                                    Teknik Kendaraan Ringan</option>
                                                                            </select>
                                                                            <div class="text-danger" id="majorError">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Role Selection -->
                                                                        <div class="mb-3">
                                                                            <label for="new_role_name"
                                                                                class="form-label">Role</label>
                                                                            <select class="form-control"
                                                                                name="role_name" id="new_role_name"
                                                                                required>
                                                                                @if (auth()->user()->role_name == 'admin')
                                                                                    <option value="">Select Role
                                                                                    </option>
                                                                                    <option value="admin">Admin
                                                                                    </option>
                                                                                    <option value="user">User
                                                                                    </option>
                                                                                @else
                                                                                    <option value="user" selected>
                                                                                        User</option>
                                                                                @endif
                                                                            </select>
                                                                            <div class="text-danger"
                                                                                id="roleNameError"></div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="new_password"
                                                                                class="form-label">Password</label>
                                                                            <input type="password"
                                                                                class="form-control" name="password"
                                                                                id="new_password" minlength="8"
                                                                                required>
                                                                            <div class="text-danger"
                                                                                id="passwordError"></div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="confirm_password"
                                                                                class="form-label">Confirm
                                                                                Password</label>
                                                                            <input type="password"
                                                                                class="form-control"
                                                                                name="password_confirmation"
                                                                                id="confirm_password" required>
                                                                            <div class="text-danger"
                                                                                id="confirmPasswordError"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Create
                                                                            User</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <!-- Edit Modal -->
                                                    <div class="modal fade @if ($errors->any() && old('id') == $user->id)  @endif"
                                                        id="editModal{{ $user->id }}" tabindex="-1"
                                                        aria-labelledby="editModalLabel{{ $user->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editModalLabel{{ $user->id }}">Edit
                                                                        User</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form action="/user/update/{{ $user->id }}"
                                                                    method="POST" class="editUserForm"
                                                                    data-id="{{ $user->id }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label for="username{{ $user->id }}"
                                                                                class="form-label">Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="username{{ $user->id }}"
                                                                                name="username"
                                                                                value="{{ $user->username }}">
                                                                            <div class="text-danger"
                                                                                id="username{{ $user->id }}Error">
                                                                            </div> <!-- Tempat error muncul -->
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="email{{ $user->id }}"
                                                                                class="form-label">Email</label>
                                                                            <input type="email" class="form-control"
                                                                                id="email{{ $user->id }}"
                                                                                name="email"
                                                                                value="{{ $user->email }}">
                                                                            <div class="text-danger"
                                                                                id="email{{ $user->id }}Error">
                                                                            </div> <!-- Tempat error muncul -->
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="nohp{{ $user->id }}"
                                                                                class="form-label">No Handphone</label>
                                                                            <input type="text" class="form-control"
                                                                                id="nohp{{ $user->id }}"
                                                                                name="nohp"
                                                                                value="{{ $user->nohp }}"
                                                                                oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                                                            <div class="text-danger"
                                                                                id="nohp{{ $user->id }}Error">
                                                                            </div> <!-- Tempat error muncul -->
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="address{{ $user->id }}"
                                                                                class="form-label">Address</label>
                                                                            <textarea class="form-control" id="address{{ $user->id }}" name="address" rows="3">{{ $user->address }}</textarea>
                                                                            <div class="text-danger"
                                                                                id="address{{ $user->id }}Error">
                                                                            </div> <!-- Tempat error muncul -->
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="jurusan{{ $user->id }}"
                                                                                class="form-label">Jurusan</label>
                                                                            <select class="form-control"
                                                                                id="jurusan{{ $user->id }}"
                                                                                name="jurusan">
                                                                                <option value=" "
                                                                                    {{ !$user->jurusan ? 'selected' : '' }}>
                                                                                    Pilih Jurusan</option>
                                                                                <option value="Teknik Informatika"
                                                                                    {{ $user->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>
                                                                                    Teknik Informatika</option>
                                                                                <option value="Teknik sepeda motor"
                                                                                    {{ $user->jurusan == 'Teknik sepeda motor' ? 'selected' : '' }}>
                                                                                    Teknik sepeda motor</option>
                                                                                <option value="Teknik kendaraan ringan"
                                                                                    {{ $user->jurusan == 'Teknik kendaraan ringan' ? 'selected' : '' }}>
                                                                                    Teknik kendaraan ringan</option>
                                                                                <option
                                                                                    value="Rekayasa perangkat lunak"
                                                                                    {{ $user->jurusan == 'Rekayasa perangkat lunak' ? 'selected' : '' }}>
                                                                                    Rekayasa perangkat lunak</option>
                                                                                <option
                                                                                    value="Teknik komputer jaringan"{{ $user->jurusan == 'Teknik komputer jaringan' ? 'selected' : '' }}>
                                                                                    Teknik komputer jaringan</option>
                                                                                <option
                                                                                    value="Desain komunikasi visual"{{ $user->jurusan == 'Desain komunikai visual' ? 'selected' : '' }}>
                                                                                    Desain komunikasi visual</option>
                                                                                <option
                                                                                    value="Sistem Informasi"{{ $user->jurusan == 'Sistem Informasi' ? 'selected' : '' }}>
                                                                                    Sistem Informasi</option>
                                                                                <option
                                                                                    value="Manajemen"{{ $user->jurusan == 'Manajemen' ? 'selected' : '' }}>
                                                                                    Manajemen</option>
                                                                                <option
                                                                                    value="Akuntansi"{{ $user->jurusan == 'Akuntansi' ? 'selected' : '' }}>
                                                                                    Akuntansi</option>
                                                                                <!-- Tambahkan opsi jurusan lainnya -->
                                                                            </select>
                                                                            <div class="text-danger"
                                                                                id="jurusan{{ $user->id }}Error">
                                                                            </div> <!-- Tempat error muncul -->
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="status{{ $user->id }}"
                                                                                class="form-label">Status</label>
                                                                            <select class="form-control"
                                                                                id="status{{ $user->id }}"
                                                                                name="status">
                                                                                <option value="1"
                                                                                    {{ $user->status == 1 ? 'selected' : '' }}>
                                                                                    Active</option>
                                                                                <option value="0"
                                                                                    {{ $user->status == 0 ? 'selected' : '' }}>
                                                                                    Inactive</option>
                                                                            </select>
                                                                            <div class="text-danger"
                                                                                id="status{{ $user->id }}Error">
                                                                            </div> <!-- Tempat error muncul -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
     </table>
                                    </div>


                                    <footer class="footer pt-3">
                                        <div class="container-fluid">
                                            <div class="row align-items-center justify-content-lg-between">
                                                <div class="col-lg-6 mb-lg-0 mb-4">
                                                    <div
                                                        class="copyright text-center text-sm text-muted text-lg-start">
                                                        <marquee behavior="scroll" direction="left">
                                                            ©
                                                            <script>
                                                                document.write(new Date().getFullYear())
                                                            </script>, made with <i
                                                                class="fa fa-heart"></i>
                                                            by <a href="https://www.creative-tim.com"
                                                                class="font-weight-bold" target="_blank">
                                                                Geusan Raditya</a> for a better web.
                                                        </marquee>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>

                                </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                    Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const userTableBody = document.querySelector(
                'table tbody'); // Menggunakan querySelector untuk mengambil tbody tabel

            // Ambil query parameter dari URL (misalnya, search)
            const urlParams = new URLSearchParams(window.location.search);
            const searchTermFromURL = urlParams.get('search') || '';
            searchInput.value = searchTermFromURL; // Isi input dengan query parameter

            // Fungsi pencarian
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = userTableBody.querySelectorAll('tr');

                // Update URL dengan query parameter baru
                const newUrl = new URL(window.location);
                newUrl.searchParams.set('search', searchTerm);
                window.history.replaceState({}, '', newUrl); // Ganti URL tanpa reload

                // Menyaring baris berdasarkan term pencarian
                rows.forEach(row => {
                    const rowText = row.textContent.toLowerCase();
                    if (rowText.includes(searchTerm)) {
                        row.style.display = ''; // Tampilkan jika cocok
                    } else {
                        row.style.display = 'none'; // Sembunyikan jika tidak cocok
                    }
                });
            });

            // Jika ada term pencarian di URL saat pertama kali memuat
            if (searchTermFromURL) {
                const rows = userTableBody.querySelectorAll('tr');
                rows.forEach(row => {
                    const rowText = row.textContent.toLowerCase();
                    if (rowText.includes(searchTermFromURL.toLowerCase())) {
                        row.style.display = ''; // Tampilkan jika cocok
                    } else {
                        row.style.display = 'none'; // Sembunyikan jika tidak cocok
                    }
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "pageLength": 10,
                "lengthMenu": [5, 10, 25, 50, 100],
                "searching": false, // Menonaktifkan pencarian bawaan DataTables
                "ordering": true,
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ entri per halaman",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "paginate": {
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>








    <script src="{asset('bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js')}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete(userId) {
            if (confirm("Apakah Anda yakin ingin menghapus pengguna ini?")) {
                document.getElementById(`deleteForm${userId}`).submit();
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdown = document.getElementById("profileDropdown");
            dropdown.addEventListener("click", function(event) {
                console.log("Dropdown clicked");
            });
        });





        $(document).ready(function() {
            $('#createUserForm').submit(function(e) {
                e.preventDefault(); // Mencegah reload halaman

                let formData = {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    username: $('#new_username').val(),
                    email: $('#new_email').val(),
                    nohp: $('#new_nohp').val(),
                    address: $('#new_address').val(),
                    jurusan: $('#new_major').val(),
                    status: $('#new_status').val(),
                    role_name: $('#new_role_name').val(),
                    password: $('#new_password').val(),
                    password_confirmation: $('#confirm_password').val()
                };

                $.ajax({
                    url: "/user/store",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });

                        // Paksa modal tertutup dengan timeout agar sinkron
                        setTimeout(function() {
                            $('#createModal').modal(
                                'hide'); // Jika modal masih terbuka, coba hide paksa
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();

                            // Redirect setelah modal benar-benar tertutup
                            window.location.href =
                                "/tables"; // Ganti dengan halaman tujuan
                        }, 1000); // Delay 1 detik agar animasi modal selesai
                    },
                    error: function(xhr) {
                        console.log("Error Response:", xhr.responseJSON);
                        $('.text-danger').text('');
                        if (xhr.status === 422 && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key + 'Error').text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Something went wrong!',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    }
                });
            });
        });


        // Coba loading

        function showLoading(form) {
            let btn = form.querySelector("#searchBtn");
            let spinner = form.querySelector("#loadingSpinner");
            let btnText = form.querySelector("#btnText");

            // Tampilkan spinner dan ubah teks tombol
            spinner.classList.remove("d-none");
            btnText.textContent = "Searching...";
            btn.disabled = true;
        }

        function showLoading(form) {
            let btn = form.querySelector("#searchBtn");
            btn.classList.add("loading");
            btn.disabled = true;
        }




        $(document).ready(function() {
            $('.editUserForm').submit(function(e) {
                e.preventDefault(); // Mencegah reload halaman

                let userId = $(this).data('id'); // Ambil ID user dari atribut data-id di form
                let formData = {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    _method: "PUT",
                    username: $('#username' + userId).val(),
                    email: $('#email' + userId).val(),
                    nohp: $('#nohp' + userId).val(),
                    address: $('#address' + userId).val(),
                    jurusan: $('#jurusan' + userId).val(),
                    status: $('#status' + userId).val(),
                };

                $.ajax({
                    url: "/user/update/" + userId, // Sesuai route update
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });

                        // Tutup modal setelah sukses
                        $('#editModal' + userId).modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();

                        // Reload halaman untuk update data di table
                        setTimeout(function() {
                            location.reload();
                        }, 1500);
                    },
                    error: function(xhr) {
                        console.log("Error Response:", xhr.responseJSON);
                        $('.text-danger').text(''); // Hapus pesan error sebelumnya

                        if (xhr.status === 422 && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;

                            // Looping setiap error dan menampilkan di bawah input yang sesuai
                            $.each(errors, function(key, value) {
                                $('#' + key + userId + 'Error').text(value[
                                    0]); // Menampilkan error
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Something went wrong!',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    }
                });
            });
        });

        function showLoading(form) {
            const searchButton = form.querySelector("#searchButton");
            const searchText = searchButton.querySelector(".btn-text");
            const searchSpinner = searchButton.querySelector("#searchSpinner");

            // Pastikan tombol tetap dengan ukuran yang sama
            searchButton.style.width = `${searchButton.offsetWidth}px`;
            searchButton.style.height = `${searchButton.offsetHeight}px`;

            // Sembunyikan teks, tampilkan spinner
            searchText.classList.add("d-none");
            searchSpinner.classList.remove("d-none");

            // Disable tombol agar tidak bisa diklik berulang kali
            searchButton.disabled = true;
        }









    </script>




</body>

</html>
