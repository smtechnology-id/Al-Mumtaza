@php
    $html_tag_data = [];
    $title = 'Storage';
    $description= 'Service Provider Storage'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
    <link rel="stylesheet" href="/css/vendor/dropzone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/baguetteBox.min.js"></script>
    <script src="/js/vendor/dropzone.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/cs/dropzone.templates.js"></script>
    <script src="/js/pages/services.storage.js"></script>
@endsection

@section('content')
    <div class="col">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container mb-3">
            <div class="row">
                <!-- Title Start -->
                <div class="col mb-2">
                    <h1 class="mb-2 pb-0 display-4" id="title">{{ $title }}</h1>
                    <div class="text-muted font-heading text-small">Let us manage the database engines for your applications so you can focus on building.</div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-auto d-flex align-items-center justify-content-end">
                    <!-- New Folder Button Start -->
                    <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-haspopup="true"
                            aria-expanded="false"
                    >
                        <i data-acorn-icon="folder"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end sw-40">
                        <div class="px-5 py-4">
                            <p class="mb-3">Create a Folder</p>
                            <form>
                                <div class="mb-3 filled">
                                    <i data-acorn-icon="tag"></i>
                                    <input class="form-control" placeholder="Folder name" />
                                </div>
                                <button class="btn btn-primary btn-icon btn-icon-end" type="submit">
                                    <span>Create</span>
                                    <i data-acorn-icon="chevron-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- New Folder Button End -->

                    <!-- Upload Button Start -->
                    <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto ms-1"
                            data-bs-toggle="modal"
                            data-bs-target="#uploadModal"
                    >
                        <i data-acorn-icon="upload"></i>
                        <span>Upload</span>
                    </button>
                    <!-- Upload Button End -->

                    <!-- Check Button Start -->
                    <div class="btn-group ms-1 check-all-container ms-1">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2" data-target="#checkboxTable">
            <span class="form-check float-end">
              <input type="checkbox" class="form-check-input" id="checkAll" />
            </span>
                        </div>
                        <button
                                type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-offset="0,3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                                <span class="align-middle d-inline-block">Status</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="align-middle d-inline-block">Move</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="align-middle d-inline-block">Delete</span>
                            </a>
                        </div>
                    </div>
                    <!-- Check Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" />
                    <span class="search-magnifier-icon">
          <i data-acorn-icon="search"></i>
        </span>
                    <span class="search-delete-icon d-none">
          <i data-acorn-icon="close"></i>
        </span>
                </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                    <!-- Export Dropdown Start -->
                    <div class="d-inline-block">
                        <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
            <span
                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                    data-bs-delay="0"
                    data-bs-placement="top"
                    data-bs-toggle="tooltip"
                    title="Export"
            >
              <i data-acorn-icon="download"></i>
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <button class="dropdown-item export-copy" type="button">Copy</button>
                            <button class="dropdown-item export-excel" type="button">Excel</button>
                            <button class="dropdown-item export-cvs" type="button">Cvs</button>
                        </div>
                    </div>
                    <!-- Export Dropdown End -->

                    <!-- Length Start -->
                    <div class="dropdown-as-select d-inline-block ms-1" data-childSelector="span">
                        <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
            <span
                    class="btn btn-foreground-alternate dropdown-toggle"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-delay="0"
                    title="Item Count"
            >
              10 Items
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <a class="dropdown-item" href="#">5 Items</a>
                            <a class="dropdown-item active" href="#">10 Items</a>
                            <a class="dropdown-item" href="#">20 Items</a>
                        </div>
                    </div>
                    <!-- Length End -->
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Item List Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <div class="card mb-2 bg-transparent no-shadow d-none d-md-block">
                    <div class="row g-0 sh-3">
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-6 col-md-6 d-flex align-items-center text-alternate text-medium text-muted text-small">NAME</div>
                                    <div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">DATE</div>
                                    <div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">SIZE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="checkboxTable" class="mb-5">
                    <div class="mb-n2">
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="/Services/StorageFolder" class="stretched-link body-link">
                                                    <i data-acorn-icon="folder" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">Products</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">—</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">13.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="/Services/StorageFolder" class="stretched-link body-link">
                                                    <i data-acorn-icon="folder" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">Uploads</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">—</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">12.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="/Services/StorageFolder" class="stretched-link body-link">
                                                    <i data-acorn-icon="folder" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">Users</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">—</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">12.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4239.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center mb-md-0 order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">238.5 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">12.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4240.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center mb-md-0 order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">423.5 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">11.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4241.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center mb-md-0 order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">351.0 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">09.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4242.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">154.0 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">05.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4242.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">442.3 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">03.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4243.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">322.7 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">01.04.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="row g-0 sh-14 sh-md-6">
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 px-4 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-11 col-md-6 d-flex flex-column justify-content-center mb-1 mb-md-0 h-md-100 position-relative">
                                                <a href="#" class="stretched-link body-link" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-focus="false">
                                                    <i data-acorn-icon="image" class="me-2 text-alternate" data-acorn-size="17"></i>
                                                    <span class="align-middle">234523_4244.webp</span>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-2 d-flex flex-column justify-content-center order-4 ms-5 ms-md-0">
                                                <div class="text-alternate">258.0 KB</div>
                                            </div>
                                            <div class="col-12 col-md-3 d-flex flex-column justify-content-center order-3 ms-5 ms-md-0">
                                                <div class="text-alternate">22.03.2021</div>
                                            </div>
                                            <div class="col-1 col-md-1 d-flex flex-column justify-content-center order-2 order-md-last">
                                                <div class="form-check d-flex flex-column justify-content-center align-items-end mb-0 pe-none">
                                                    <input type="checkbox" class="form-check-input ms-n2 mt-n3 ms-md-0 mt-md-0 me-0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-100 d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item prev disabled">
                            <a class="page page-link shadow" href="#">
                                <i data-acorn-icon="chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page page-link shadow" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page page-link shadow" href="#">2</a>
                        </li>
                        <li class="page-item next">
                            <a class="page page-link shadow" href="#">
                                <i data-acorn-icon="chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Item List End -->

        <!-- Image Detail Modal Start -->
        <div class="modal modal-right fade" id="imageModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">234523_4239.webp</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <a href="/img/product/large/product-1.webp" class="lightbox">
                            <img src="/img/product/small/product-1.webp" class="img-fluid rounded-md mb-4" alt="cornbread" />
                        </a>
                        <div class="mb-3">
                            <div class="text-small text-muted">TITLE</div>
                            <div>234523_4239.webp</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-small text-muted">PATH</div>
                            <div>/uploads/storage/234523_4239.webp</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-small text-muted">CREATED</div>
                            <div>12.05.2021 - 13:42</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-small text-muted">SIZE</div>
                            <div>259 KB</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-small text-muted">TYPE</div>
                            <div>Jpeg</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-small text-muted">RESOLUTION</div>
                            <div>1920x1080</div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <a
                                href="#"
                                class="btn btn-icon btn-icon-only btn-outline-primary"
                                data-delay='{"show":"500", "hide":"0"}'
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                data-bs-dismiss="modal"
                        >
                            <i data-acorn-icon="bin"></i>
                        </a>
                        <a
                                href="#"
                                class="btn btn-icon btn-icon-only btn-outline-primary"
                                data-delay='{"show":"500", "hide":"0"}'
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="View"
                                data-bs-dismiss="modal"
                        >
                            <i data-acorn-icon="shortcut"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-icon-end btn-primary" data-bs-dismiss="modal">
                            <span>Use</span>
                            <i data-acorn-icon="check-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Detail Modal End -->

        <!-- Upload Modal Start -->
        <div class="modal modal-right large fade" id="uploadModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload Files</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <form class="w-100">
                            <div class="filled mb-0 h-100">
                                <div class="dropzone dropzone-filled h-100"></div>
                                <i data-acorn-icon="upload"></i>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                        <a href="#" class="btn btn-icon btn-icon-end btn-primary" data-bs-dismiss="modal">
                            <span>Done</span>
                            <i data-acorn-icon="check-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Upload Modal End -->
    </div>
@endsection
