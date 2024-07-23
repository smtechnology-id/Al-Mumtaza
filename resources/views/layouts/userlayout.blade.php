<!DOCTYPE html>
<html lang="en" data-footer="true">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Sistem Informasi | Ponpes Mumtaza</title>
    <meta name="description" content="Beradab - Berilmu - Beramal" />

    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/font/CS-Interface/style.css') }}" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/OverlayScrollbars.min.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <!-- Template Base Styles End -->

    {{-- Data Tables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />


    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('assets/js/base/loader.js') }}"></script>
</head>

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class="logo position-relative">
                    <a
                        href=" {{ Auth::user()->level === 'guru' && $profile->photo ? route('teacherIndex') : ($profile->photo ? route('studentIndex') : '#') }}">
                        <!-- Logo can be added directly -->
                        <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                        <!-- Or added via css to provide different ones for different color themes -->
                        <div class="img"></div>
                    </a>
                </div>
                <!-- Logo End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user()->level === 'guru' && $profile->photo)
                            <img class="profile" alt="profile" src="/images/teachers-images/{{ $profile->photo }}" />
                        @elseif ($profile->photo)
                            <img class="profile" alt="profile" src="/images/students-images/{{ $profile->photo }}" />
                        @else
                            <p>Foto Profil tidak tersedia</p>
                        @endif
                        <div class="name">{{ Auth::user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-3 ms-0 me-0">
                            <div class="col-12 ps-1 mb-2">
                                <div class="text-extra-small text-primary">ACCOUNT</div>
                            </div>
                            <div class="col-12 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="profile">User Info</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-3 ms-0 me-0">
                            <div class="col-12 ps-1 mb-2">
                                <div class="text-extra-small text-primary">Auth</div>
                            </div>
                            <div class="col-12 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- User Menu End -->

                <!-- Icons Menu Start -->
                <ul class="list-unstyled list-inline text-center menu-icons">

                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                            <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                        </a>
                    </li>

                </ul>
                <!-- Icons Menu End -->

                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                    @if (Auth::user()->level === 'guru')
                        <ul id="menu" class="menu">
                            <li>
                                <a href="{{ route('teacherIndex') }}" data-href="">
                                    <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Dashboards</span>
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('dataSantri') }}">
                                    <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Data Santri</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('laporanSantri') }}">
                                    <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Laporan Saya</span>
                                </a>
                            </li>
                            @php
                                $idUser = Auth::user()->id;
                                $teacher = DB::table('profile_teachers')
                                    ->where('id_user', $idUser)
                                    ->first();
                                $status_teacher = $teacher ? $teacher->teacher_admin : null; // Ganti dengan logika Anda
                            @endphp

                            <!-- Kemudian, gunakan kondisi untuk menampilkan bagian menu jika kondisi terpenuhi -->
                            @if ($status_teacher === 'have access')
                                <li>
                                    <a href="{{ route('verifikasiLaporan') }}">
                                        <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                        <span class="label">Verifikasi Laporan</span>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    @elseif(Auth::user()->level === 'siswa')
                        <ul id="menu" class="menu">
                            <li>
                                <a href="{{ route('studentIndex') }}" data-href="">
                                    <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Dashboards</span>
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('SantriData') }}">
                                    <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Data Santri</span>
                                </a>
                            </li>
                        </ul>
                    @endif
                </div>
                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">
                    <!-- Scrollspy Mobile Button Start -->
                    <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                        <i data-acorn-icon="menu-dropdown"></i>
                    </a>
                    <!-- Scrollspy Mobile Button End -->

                    <!-- Scrollspy Mobile Dropdown Start -->
                    <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                    <!-- Scrollspy Mobile Dropdown End -->

                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-acorn-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->
                </div>
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>

        <main>
            @yield('content')
        </main>

        <!-- Layout Footer Start -->
        <footer>
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p class="mb-0 text-muted text-medium">SM-Technology.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Layout Footer End -->
    </div>



    <!-- Vendor Scripts Start -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/clamp.min.js') }}"></script>

    <script src="{{ asset('assets/icon/acorn-icons.js') }}"></script>
    <script src="{{ asset('assets/icon/acorn-icons-interface.js') }}"></script>

    {{-- <script src="{{ asset('assets/js/vendor/Chart.bundle.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/vendor/chartjs-plugin-datalabels.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/vendor/chartjs-plugin-rounded-bar.min.js') }}"></script> --}}

    <!-- Vendor Scripts End -->
    <script src="{{ asset('assets/js/cs/scrollspy.js') }}"></script>


    <!-- Template Base Scripts Start -->
    <script src="{{ asset('assets/js/base/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/base/globals.js') }}"></script>
    <script src="{{ asset('assets/js/base/nav.js') }}"></script>
    <script src="{{ asset('assets/js/base/search.js') }}"></script>
    <script src="{{ asset('assets/js/base/settings.js') }}"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="{{ asset('assets/js/cs/charts.extend.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.analytic.js') }}"></script>

    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- Page Specific Scripts End -->

    {{-- Data tables --}}

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables').DataTable();
        });
    </script>

</body>

</html>
