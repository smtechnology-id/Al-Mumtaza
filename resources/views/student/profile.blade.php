@extends('layouts.userlayout')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $user->name }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="Pages.Profile.html">Profile</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <i data-acorn-icon="edit-square"></i>
                        <span>Edit</span>
                    </button>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">Profile</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-column mb-4">
                            <div class="d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                    <img src="/images/students-images/{{ $profile->photo }}" class="img-fluid rounded-xl"
                                        alt="thumb" />
                                </div>
                                <div class="h5 mb-0">{{ $user->name }}</div>
                                <div class="text-muted">{{ $user->email }}</div>
                                <div class="text-muted">
                                    <i data-acorn-icon="pin" class="me-1"></i>
                                    <span class="align-middle">{{ $profile->tempat_lahir }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="nav flex-column" role="tablist">
                            <a class="nav-link active px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#overviewTab" role="tab">
                                <i data-acorn-icon="activity" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Hystory</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#projectsTab" role="tab">
                                <i data-acorn-icon="office" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Profile</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#permissionsTab" role="tab">
                                <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Account</span>
                            </a>

                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5 tab-content">
                <!-- Overview Tab Start -->
                <div class="tab-pane fade show active" id="overviewTab" role="tabpanel">
                    <!-- Stats Start -->
                    <h2 class="small-title">Stats</h2>
                    <div class="mb-5">
                        <div class="row g-2">
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Total Point</span>
                                            <i data-acorn-icon="check-square" class="text-primary"></i>
                                        </div>
                                        <div class="text-small text-muted mb-1">PENDING</div>
                                        <div class="cta-1 text-primary">153</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Pelanggaran</span>
                                            <i data-acorn-icon="activity" class="text-primary"></i>
                                        </div>
                                        <div class="text-small text-muted mb-1">RECENT</div>
                                        <div class="cta-1 text-primary">24</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Stats End -->


                    <!-- Timeline Start -->
                    <h2 class="small-title">History Pelanggaran</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            @foreach ($violationHistory as $data)
                            <div class="row g-0">
                                <div
                                    class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1"></div>
                                    <div
                                        class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                    </div>
                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="h-100">
                                        <div class="d-flex flex-column justify-content-start">
                                            <div class="d-flex flex-column">
                                                <a href="#" class="heading stretched-link">{{$data->category->nama_kategori}}</a>
                                                <div class="text-alternate">{{$data->created_at}}</div>
                                                <div class="text-muted mt-1">
                                                    {{$data->description}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Timeline End -->

                </div>
                <!-- Overview Tab End -->

                <!-- Projects Tab Start -->
                <div class="tab-pane fade" id="projectsTab" role="tabpanel">
                    <h2 class="small-title">Projects</h2>

                    <!-- Projects Content Start -->
                    <div class="row row-cols-1 row-cols-sm-2 g-2">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="heading mb-3">
                                        <a href="#" class="stretched-link">
                                            <span class="clamp-line sh-5" data-line="2">Profile</span>
                                        </a>
                                    </h6>
                                    <div>
                                        <table class="table borderless">
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td>:</td>
                                                <td>{{ $profile->nama_lengkap }}</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td>{{ $profile->tempat_lahir }}, {{ $profile->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td>NISN</td>
                                                <td>:</td>
                                                <td>{{ $profile->nisn }}</td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td>:</td>
                                                <td>{{ $profile->nik }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nomor KK</td>
                                                <td>:</td>
                                                <td>{{ $profile->no_kk }}</td>
                                            </tr>
                                            <tr>
                                                <td>NISN</td>
                                                <td>:</td>
                                                <td>{{ $profile->alamat_lengkap }}</td>
                                            </tr>
                                        </table>
                                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                                            <i data-acorn-icon="edit-square"></i>
                                            <span>Edit</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="heading mb-3">
                                        <a href="#" class="stretched-link">
                                            <span class="clamp-line sh-5" data-line="2">Account</span>
                                        </a>
                                    </h6>
                                    <div>
                                        <table class="table borderless">
                                            <tr>
                                                <td>Account Name</td>
                                                <td>:</td>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $profile->email }}, {{ $profile->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>:</td>
                                                <td><a href="" class="btn btn-outline-danger btn-sm ">Ganti Password</a></td>
                                            </tr>
                                            <tr>
                                                <td>Last Update</td>
                                                <td>:</td>
                                                <td>{{ $profile->updated_at }}</td>
                                            </tr>
                                            
                                        </table>
                                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                                            <i data-acorn-icon="edit-square"></i>
                                            <span>Edit</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="heading mb-3">
                                        <a href="#" class="stretched-link">
                                            <span class="clamp-line sh-5" data-line="2">Apple
                                                Cake Recipe for Starters</span>
                                        </a>
                                    </h6>
                                    <div>
                                        <div class="mb-2">
                                            <i data-acorn-icon="category" class="text-muted me-2"
                                                data-acorn-size="17"></i>
                                            <span class="align-middle text-alternate">Contributors:
                                                8</span>
                                        </div>
                                        <div class="mb-2">
                                            <i data-acorn-icon="lock-on" class="text-muted me-2"
                                                data-acorn-size="17"></i>
                                            <span class="align-middle text-alternate">Locked</span>
                                        </div>
                                        <div>
                                            <i data-acorn-icon="sync-horizontal" class="text-muted me-2"
                                                data-acorn-size="17"></i>
                                            <span class="align-middle text-alternate">Continuing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Projects Content End -->
                </div>
                <!-- Projects Tab End -->

                <!-- Permissions Tab Start -->
                <div class="tab-pane fade" id="permissionsTab" role="tabpanel">
                    <h2 class="small-title">Permissions</h2>
                    <div class="row row-cols-1 g-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" checked />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Create</span>
                                                <span class="d-block text-small text-muted">
                                                    Chocolate cake biscuit donut cotton candy
                                                    soufflé cake macaroon. Halvah chocolate cotton
                                                    candy sweet roll jelly-o candy danish
                                                    dragée.
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" checked />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Publish</span>
                                                <span class="d-block text-small text-muted">Jelly
                                                    beans wafer candy caramels fruitcake macaroon
                                                    sweet roll.</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" checked />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Edit</span>
                                                <span class="d-block text-small text-muted">Jelly
                                                    cake jelly sesame snaps jelly beans jelly beans.</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Delete</span>
                                                <span class="d-block text-small text-muted">Danish
                                                    oat cake pudding.</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" checked />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Add User</span>
                                                <span class="d-block text-small text-muted">Soufflé
                                                    chocolate cake chupa chups danish brownie
                                                    pudding fruitcake.</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Edit User</span>
                                                <span class="d-block text-small text-muted">Biscuit
                                                    powder brownie powder sesame snaps jelly-o
                                                    dragée cake.</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-check custom-icon mb-0 checked-opacity-100">
                                        <input type="checkbox" class="form-check-input" />
                                        <span class="form-check-label">
                                            <span class="content opacity-50">
                                                <span class="heading mb-1 lh-1-25">Delete User</span>
                                                <span class="d-block text-small text-muted">
                                                    Liquorice jelly powder fruitcake oat cake.
                                                    Gummies tiramisu cake jelly-o bonbon.
                                                    Marshmallow liquorice croissant.
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Permissions Tab End -->

                <!-- Friends Tab Start -->
                <div class="tab-pane fade" id="friendsTab" role="tabpanel">
                    <h2 class="small-title">Friends</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-2 mb-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-1.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Blaine Cottrell</div>
                                                    <div class="text-small text-muted">Project
                                                        Manager</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-4.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Cherish Kerr</div>
                                                    <div class="text-small text-muted">Development
                                                        Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-8.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kirby Peters</div>
                                                    <div class="text-small text-muted">Accounting</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-5.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Olli Hawkins</div>
                                                    <div class="text-small text-muted">Client
                                                        Relations Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-2.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Customer
                                                        Engagement</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-3.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Esperanza Lodge</div>
                                                    <div class="text-small text-muted">UX Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-4.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kerr Jackson</div>
                                                    <div class="text-small text-muted">Frontend
                                                        Developer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-6.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kathryn Mengel</div>
                                                    <div class="text-small text-muted">Team Leader</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-6.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Joisse Kaycee</div>
                                                    <div class="text-small text-muted">Copywriter</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-7.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Visual Effect
                                                        Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Friends Tab End -->

                <!-- About Tab Start -->
                <div class="tab-pane fade" id="aboutTab" role="tabpanel">
                    <h2 class="small-title">About</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">ME</p>
                                <p>
                                    Jujubes brownie marshmallow apple pie donut ice cream
                                    jelly-o jelly-o gummi bears. Tootsie roll chocolate bar
                                    dragée bonbon cheesecake
                                    icing. Danish wafer donut cookie caramels gummies
                                    topping.
                                </p>
                            </div>
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">INTERESTS</p>
                                <p>
                                    Chocolate cake biscuit donut cotton candy soufflé cake
                                    macaroon. Halvah chocolate cotton candy sweet roll
                                    jelly-o candy danish dragée.
                                    Apple pie cotton candy tiramisu biscuit cake muffin
                                    tootsie roll bear claw cake. Cupcake cake fruitcake.
                                </p>
                            </div>
                            <div>
                                <p class="text-small text-muted mb-2">CONTACT</p>
                                <a href="#" class="d-block body-link mb-1">
                                    <i data-acorn-icon="screen" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">blainecottrell.com</span>
                                </a>
                                <a href="#" class="d-block body-link">
                                    <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">contact@blainecottrell.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Tab End -->
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection