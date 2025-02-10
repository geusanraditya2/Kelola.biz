@extends('template.dashboard')
@section('content')
    <div class="col-lg-5">
        <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner border-radius-lg h-100">
                    <div class="carousel-item h-100 active"
                        style="background-image: url('{{ asset('img/carousel-1.jpg') }}');
                         background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="ni ni-camera-compact text-dark opacity-10"></i>
                            </div>
                            <h5 class="text-white mb-1">Get started with Argon</h5>
                            <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item h-100"
                        style="background-image: url('{{ asset('img/carousel-2.jpg') }}');
                         background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                            </div>
                            <h5 class="text-white mb-1">Faster way to create web pages</h5>
                            <p>That’s my skill. I’m not really specifically talented at anything except for the
                                ability to learn.</p>
                        </div>
                    </div>
                    <div class="carousel-item h-100"
                        style="background-image: url('{{ asset('img/carousel-3.jpg') }}');
                        background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="ni ni-trophy text-dark opacity-10"></i>
                            </div>
                            <h5 class="text-white mb-1">Share with us your design tips!</h5>
                            <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex justify-content-end mb-9">
                    <div class="bg-primary text-white text-center py-2 px-3 rounded shadow-sm"
                        style="width: 150px; display: flex; align-items: center; flex-direction: column;">
                        <i class="bi bi-people-fill" style="font-size: 1.5rem; margin-bottom: 0.3rem;"></i>
                        <div style="font-size: 0.9rem; font-weight: bold;">Total Users</div>
                        <div style="font-size: 1.2rem;">{{ $totalUsers }}</div> <!-- Perbaikan di sini -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </h6>
    </div>
    </div>
    </td>
    <td>

    </td>
    <div class="d-flex">
        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                class="ni ni-bold-right" aria-hidden="true"></i></button>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>

    </div>
@endsection
