@php
    $html_tag_data = [];
    $title = 'Tickets';
    $description= 'Service Provider Tickets';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
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
                    <!-- Add New Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <i data-acorn-icon="plus"></i>
                        <span>New Ticket</span>
                    </button>
                    <!-- Add New Button End -->
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
                    <div class="dropdown-as-select d-inline-block" data-childSelector="span">
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

        <!-- Ticket List Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <div class="card mb-2 bg-transparent no-shadow d-none d-md-block">
                    <div class="row g-0 sh-3">
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-1 d-flex align-items-center mb-2 mb-md-0 text-muted text-small">ID</div>
                                    <div class="col-6 col-md-6 d-flex align-items-center text-alternate text-medium text-muted text-small">TITLE</div>
                                    <div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">CATEGORY</div>
                                    <div class="col-6 col-md-2 d-flex align-items-center justify-content-end text-alternate text-medium text-muted text-small">
                                        STATUS
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-n2">
                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-body fw-bold">3368</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-body fw-bold">Database connection error</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-alternate fw-bold">Database</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">ACTIVE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-body fw-bold">3127</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-body fw-bold">Are the services offline?</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-alternate fw-bold">Database</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-primary">ACTIVE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">3044</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Extending storage</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Storage</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">2739</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Storage timeout again</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Storage</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">2320</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Just wanted to say hello :)</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Hosting</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">2301</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Domain name dns record</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Hosting</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">2159</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Background services</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Hosting</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">2104</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Storage timeout</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Storage</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">2004</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Extending to 50 GB</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Hosting</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="/Support/TicketsDetail" class="card mb-2 sh-22 sh-md-8 hover-border-primary">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-6 col-md-1 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1">
                                    <div class="text-muted text-small d-md-none">Id</div>
                                    <div class="text-muted">1955</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
                                    <div class="text-muted text-small d-md-none">Title</div>
                                    <div class="text-muted">Api documentation</div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
                                    <div class="text-muted text-small d-md-none">Category</div>
                                    <div class="text-muted">Api</div>
                                </div>
                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-2 mb-md-0 order-2 order-md-5">
                                    <div class="text-muted text-small d-md-none">Status</div>
                                    <div class="text-alternate">
                                        <span class="badge rounded-pill bg-outline-muted">SOLVED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Ticket List End -->

        <!-- Pagination Start -->
        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link shadow" href="#" tabindex="-1" aria-disabled="true">
                            <i data-acorn-icon="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link shadow" href="#">1</a></li>
                    <li class="page-item"><a class="page-link shadow" href="#">2</a></li>
                    <li class="page-item"><a class="page-link shadow" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i data-acorn-icon="chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Pagination End -->
    </div>
@endsection
