@php
    $html_tag_data = [];
    $title = 'New Database';
    $description= 'Service Provider New Database';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/select2.full.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/services.databaseadd.js"></script>
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
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Authentication Start -->
            <div class="col-12 mb-5">
                <h2 class="small-title">Authentication</h2>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 filled">
                                <i data-acorn-icon="tag"></i>
                                <input class="form-control" placeholder="Database Name" />
                            </div>
                            <div class="mb-3 filled">
                                <i data-acorn-icon="user"></i>
                                <input class="form-control" placeholder="Username" />
                            </div>
                            <div class="mb-3 filled">
                                <i data-acorn-icon="lock-on"></i>
                                <input class="form-control" type="password" placeholder="Password" />
                            </div>
                            <div class="filled w-100 mb-0">
                                <i data-acorn-icon="server"></i>
                                <select class="select-single-no-search-filled" data-placeholder="Engine">
                                    <option label="&nbsp;"></option>
                                    <option value="Sql">Sql</option>
                                    <option value="NoSql">NoSql</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Authentication End -->

            <!-- Type Start -->
            <div class="col-12 mb-5">
                <h2 class="small-title">Type</h2>
                <div class="row g-2">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databaseType" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <i data-acorn-icon="database" class="text-primary"></i>
                <span class="heading mt-3 text-body text-primary d-block">MongoDB</span>
                <span class="text-extra-small fw-medium text-muted d-block">12.0.5</span>
              </span>
            </span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databaseType" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <i data-acorn-icon="screen" class="text-primary"></i>
                <span class="heading mt-3 text-body text-primary d-block">Redis</span>
                <span class="text-extra-small fw-medium text-muted d-block">2.11.9</span>
              </span>
            </span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databaseType" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <i data-acorn-icon="code" class="text-primary"></i>
                <span class="heading mt-3 text-body text-primary d-block">Neo4j</span>
                <span class="text-extra-small fw-medium text-muted d-block">16.0.2</span>
              </span>
            </span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databaseType" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <i data-acorn-icon="pentagon" class="text-primary"></i>
                <span class="heading mt-3 text-body text-primary d-block">Riak</span>
                <span class="text-extra-small fw-medium text-muted d-block">12.0.0</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- Type End -->

            <!-- Plan Start -->
            <div class="col-12 mb-5">
                <h2 class="small-title">Plan</h2>
                <div class="row g-2">
                    <div class="col-12 col-lg-4">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databasePlan" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <span class="heading text-body text-primary">Developer</span>
                <span class="display-4 d-block">$ 3.50</span>
                <span class="text-small text-muted d-block">User/Month</span>
              </span>
            </span>
                        </label>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databasePlan" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <span class="heading text-body text-primary">Team</span>
                <span class="display-4 d-block">$ 7.25</span>
                <span class="text-small text-muted d-block">User/Month</span>
              </span>
            </span>
                        </label>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="form-check custom-card w-100 position-relative p-0 m-0">
                            <input type="radio" class="form-check-input position-absolute e-2 t-2 z-index-1" name="databasePlan" />
                            <span class="card form-check-label w-100 text-center">
              <span class="card-body">
                <span class="heading text-body text-primary">Company</span>
                <span class="display-4 d-block">$ 12.75</span>
                <span class="text-small text-muted d-block">User/Month</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- Plan End -->

            <!-- Create Button Start -->
            <div class="col-12 text-center mt-3">
                <div class="shadow d-inline-block">
                    <button
                            class="btn btn-outline-primary btn-icon btn-icon-only"
                            data-delay='{"show":"500", "hide":"0"}'
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Save"
                    >
                        <i data-acorn-icon="save"></i>
                    </button>
                    <button class="btn btn-primary btn-lg btn-icon btn-icon-end">
                        <span>Create</span>
                        <i data-acorn-icon="chevron-right"></i>
                    </button>
                </div>
            </div>
            <!-- Create Button End -->
        </div>
    </div>
@endsection
