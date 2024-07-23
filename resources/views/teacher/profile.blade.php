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
                            <li class="breadcrumb-item"><a href="{{ route('teacherIndex') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="profile">Profile</a></li>
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
                                    <img src="/images/teachers-images/{{ $profile->photo }}" class="img-fluid rounded-xl"
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
                                href="{{ route('logout') }}" role="tab">
                                <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
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
                                                <a href="#" class="heading stretched-link">Developing
                                                    Components</a>
                                                <div class="text-alternate">21.12.2020</div>
                                                <div class="text-muted mt-1">
                                                    Jujubes tootsie roll liquorice cake jelly beans
                                                    pudding gummi bears chocolate cake donut.
                                                    Jelly-o sugar plum fruitcake bonbon
                                                    bear claw cake cookie chocolate bar. Tiramisu
                                                    soufflé apple pie.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div
                                    class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
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
                                                <a href="#" class="heading stretched-link pt-0">HTML
                                                    Structure</a>
                                                <div class="text-alternate">14.12.2020</div>
                                                <div class="text-muted mt-1">
                                                    Pudding gummi bears chocolate chocolate apple
                                                    pie powder tart chupa chups bonbon. Donut
                                                    biscuit chocolate cake pie topping.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div
                                    class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
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
                                                <a href="#" class="heading stretched-link">Sass
                                                    Structure</a>
                                                <div class="text-alternate">03.11.2020</div>
                                                <div class="text-muted mt-1">
                                                    Jelly-o wafer sesame snaps candy canes. Danish
                                                    dragée toffee bonbon. Jelly-o marshmallow cake
                                                    oat cake caramels jujubes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div
                                    class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
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
                                                <a href="#" class="heading stretched-link pt-0">Final
                                                    Design</a>
                                                <div class="text-alternate">15.10.2020</div>
                                                <div class="text-muted mt-1">Chocolate apple pie
                                                    powder tart chupa chups bonbon. Donut biscuit
                                                    chocolate cake pie topping.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div
                                    class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                    <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                    </div>
                                    <div
                                        class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                    </div>
                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                </div>
                                <div class="col">
                                    <div class="h-100">
                                        <div class="d-flex flex-column justify-content-start">
                                            <div class="d-flex flex-column">
                                                <a href="#" class="heading stretched-link pt-0">Wireframe
                                                    Design</a>
                                                <div class="text-alternate">08.06.2020</div>
                                                <div class="text-muted mt-1">Chocolate apple pie
                                                    powder tart chupa chups bonbon. Donut biscuit
                                                    chocolate cake pie topping.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline End -->

                </div>
                <!-- Overview Tab End -->

                <!-- Projects Tab Start -->
                <div class="tab-pane fade" id="projectsTab" role="tabpanel">
                    <h2 class="small-title">Profile</h2>

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
                                                <td>Nomor HP</td>
                                                <td>:</td>
                                                <td>{{ $profile->no_hp }}</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td>{{ $profile->tempat_lahir }}, {{ $profile->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>{{ $profile->jenis_kelamin }}</td>
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
                                                <td>NPWP</td>
                                                <td>:</td>
                                                <td>{{ $profile->npwp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td>:</td>
                                                <td>{{ $profile->tempat_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Lengkap</td>
                                                <td>:</td>
                                                <td>{{ $profile->alamat_lengkap }}</td>
                                            </tr>
                                            <tr>
                                                <td>Desa - Rt / Rw</td>
                                                <td>:</td>
                                                <td>{{ $profile->desa }} - Rt {{ $profile->rt }} / Rw
                                                    {{ $profile->rw }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kecamatan</td>
                                                <td>:</td>
                                                <td>{{ $profile->kecamatan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kabupaten</td>
                                                <td>:</td>
                                                <td>{{ $profile->kota_kabupaten }} - {{ $profile->kode_pos }}</td>
                                            </tr>

                                        </table>
                                        <button type="button"
                                            class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                                            <i data-acorn-icon="edit-square"></i>
                                            <span>Edit</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Pendidikan --}}
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="heading mb-3">
                                        <a href="#" class="stretched-link">
                                            <span class="clamp-line sh-5" data-line="2">Data Pendidikan</span>
                                        </a>
                                    </h6>
                                    <div>
                                        <table class="table borderless">
                                            <tr>
                                                <td>Lulusan Terakhir</td>
                                                <td>:</td>
                                                <td>{{ $profile->lulusan_terakhir }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Lulus</td>
                                                <td>:</td>
                                                <td>{{ $profile->tahun_lulus }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan</td>
                                                <td>:</td>
                                                <td>{{ $profile->jurusan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Asal Universitas</td>
                                                <td>:</td>
                                                <td>{{ $profile->universitas }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Mulai Mengajar</td>
                                                <td>:</td>
                                                <td>{{ $profile->mulai_mengajar }}</td>
                                            </tr>
                                        </table>
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
                                                <td>Status Account</td>
                                                <td>:</td>
                                                <td>{{ Auth::user()->level }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $profile->email_aktif }}</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>:</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#rightModalExample">Standard</button>


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modal
                                                                        title</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Last Update</td>
                                                <td>:</td>
                                                <td>{{ $profile->updated_at }}</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Projects Content End -->
                </div>
                <!-- Projects Tab End -->

            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection
