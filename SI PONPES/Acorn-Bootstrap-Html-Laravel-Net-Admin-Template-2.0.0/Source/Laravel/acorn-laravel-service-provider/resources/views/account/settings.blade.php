@php
    $html_tag_data = [];
    $title = 'Settings';
    $description= 'Service Provider Settings';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/singleimageupload.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/account.settings.js"></script>
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

        <!-- Public Info Start -->
        <h2 class="small-title">Public Info</h2>
        <div class="card mb-5">
            <div class="card-body">
                <form class="d-flex flex-column mb-4">
                    <div class="mb-3 mx-auto position-relative" id="singleImageUploadExample">
                        <img
                                src="/img/profile/profile-9.webp"
                                alt="alternate text"
                                class="rounded-xl border border-separator-light border-4 sw-12 sh-12"
                                id="contactThumbModal"
                        />
                        <button class="btn btn-sm btn-icon btn-icon-only btn-separator-light position-absolute rounded-xl e-0 b-0" type="button">
                            <i data-acorn-icon="upload"></i>
                        </button>
                        <input class="file-upload d-none" type="file" accept="image/*" />
                    </div>
                    <div class="mb-3 filled w-100 d-flex flex-column">
                        <i data-acorn-icon="user"></i>
                        <input class="form-control" placeholder="Name" value="Lisa Jackson" />
                    </div>
                    <div class="mb-3 filled w-100 d-flex flex-column">
                        <i data-acorn-icon="tag"></i>
                        <input class="form-control" placeholder="User Name" value="lisajackson" />
                    </div>
                    <div class="mb-3 filled w-100 d-flex flex-column">
                        <i data-acorn-icon="email"></i>
                        <input class="form-control" placeholder="Email" value="lisajackson@gmail.com" disabled />
                    </div>
                    <div class="mb-3 filled w-100 d-flex flex-column">
                        <i data-acorn-icon="phone"></i>
                        <input class="form-control" placeholder="Phone" value="+643452345" />
                    </div>
                    <div class="filled mb-0 w-100">
                        <i data-acorn-icon="gender"></i>
                        <select class="select-single-no-search-filled" data-placeholder="Gender">
                            <option label="&nbsp;"></option>
                            <option value="Male">Male</option>
                            <option value="Female" selected>Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </form>
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
        <!-- Public Info End -->

        <!-- Email Settings Start -->
        <h2 class="small-title">Email Settings</h2>
        <div class="card mb-5">
            <div class="card-body">
                <form class="mb-4">
                    <div class="mb-3 filled custom-control-container">
                        <i data-acorn-icon="shield"></i>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="securityCheck" checked />
                            <label class="form-check-label" for="securityCheck">Security Warnings</label>
                        </div>
                    </div>
                    <div class="mb-3 filled custom-control-container">
                        <i data-acorn-icon="money"></i>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="budgetCheck" checked />
                            <label class="form-check-label" for="budgetCheck">Over Budget</label>
                        </div>
                    </div>
                    <div class="mb-3 filled custom-control-container">
                        <i data-acorn-icon="server"></i>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="quotaCheck" checked />
                            <label class="form-check-label" for="quotaCheck">Quota Warnings</label>
                        </div>
                    </div>
                    <div class="mb-3 filled custom-control-container">
                        <i data-acorn-icon="bell"></i>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="generalCheck" checked />
                            <label class="form-check-label" for="generalCheck">General Notifications</label>
                        </div>
                    </div>
                    <div class="mb-3 filled custom-control-container">
                        <i data-acorn-icon="news"></i>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="newsletterCheck" />
                            <label class="form-check-label" for="newsletterCheck">Monthly Newsletter</label>
                        </div>
                    </div>
                </form>
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
        <!-- Email Settings End -->

        <!-- Language Start -->
        <h2 class="small-title">Language Settings</h2>
        <div class="card mb-5">
            <div class="card-body">
                <form class="mb-4">
                    <div class="filled mb-0 w-100">
                        <i data-acorn-icon="web"></i>
                        <select class="select-single-no-search-filled" data-placeholder="Language">
                            <option label="&nbsp;"></option>
                            <option value="English" selected>English</option>
                            <option value="Spanish">Spanish</option>
                        </select>
                    </div>
                </form>
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
        <!-- Language End -->
    </div>
@endsection
