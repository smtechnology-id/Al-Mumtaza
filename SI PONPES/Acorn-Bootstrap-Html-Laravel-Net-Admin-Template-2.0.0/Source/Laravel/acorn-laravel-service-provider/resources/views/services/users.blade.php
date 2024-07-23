@php
    $html_tag_data = [];
    $title = 'Users';
    $description= 'Service Provider Users';
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
                        <span>Add New</span>
                    </button>
                    <!-- Add New Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- User Cards Start -->
        <div class="row row-cols-1 row-cols-md-3 row-cols-xxl-4 g-2">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <img class="sw-9 sh-9 rounded-xl mb-3" src="/img/profile/profile-1.webp" alt="card image" />
                            <h5 class="card-title">Blaine Cottrell</h5>
                            <p class="card-text text-muted text-center">
                                Muffin cheesecake sesame snaps. Donut lollipop chocolate cake. Cheesecake oat cake croissant topping lemon sweet roll.
                            </p>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex flex-row justify-content-center w-100">
                            <button type="button" class="btn btn-outline-primary me-2">Permissions</button>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <img class="sw-9 sh-9 rounded-xl mb-3" src="/img/profile/profile-2.webp" alt="card image" />
                            <h5 class="card-title">Cherish Kerr</h5>
                            <p class="card-text text-muted text-center">
                                Sweet sugar plum wafer carrot cake jelly chocolate bar. Brownie gummi bears wafer brownie drops macaroon.
                            </p>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex flex-row justify-content-center w-100">
                            <button type="button" class="btn btn-outline-primary me-2">Permissions</button>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <img class="sw-9 sh-9 rounded-xl mb-3" src="/img/profile/profile-3.webp" alt="card image" />
                            <h5 class="card-title">Beatrice Janelle</h5>
                            <p class="card-text text-muted text-center">
                                Dragée bear claw halvah. Ice cream chocolate cotton candy cotton candy biscuit chocolate bar powder.
                            </p>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex flex-row justify-content-center w-100">
                            <button type="button" class="btn btn-outline-primary me-2">Permissions</button>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <img class="sw-9 sh-9 rounded-xl mb-3" src="/img/profile/profile-9.webp" alt="card image" />
                            <h5 class="card-title">Eulalie Armel</h5>
                            <p class="card-text text-muted text-center">Cheesecake bear claw liquorice dragée lemon drops. Cheesecake candy gummies gingerbread.</p>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex flex-row justify-content-center w-100">
                            <button type="button" class="btn btn-outline-primary me-2">Permissions</button>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <img class="sw-9 sh-9 rounded-xl mb-3" src="/img/profile/profile-5.webp" alt="card image" />
                            <h5 class="card-title">Zayn Hartley</h5>
                            <p class="card-text text-muted text-center">
                                Jelly sesame snaps marshmallow lollipop. Brownie jelly-o carrot cake brownie lemon drops gummi bears.
                            </p>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex flex-row justify-content-center w-100">
                            <button type="button" class="btn btn-outline-primary me-2">Permissions</button>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <div class="d-flex flex-column align-items-center mb-5">
                            <img class="sw-9 sh-9 rounded-xl mb-3" src="/img/profile/profile-8.webp" alt="card image" />
                            <h5 class="card-title">Esperanza Lodge</h5>
                            <p class="card-text text-muted text-center">Topping cotton candy halvah marshmallow jujubes chupa chups macaroon cookie croissant.</p>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex flex-row justify-content-center w-100">
                            <button type="button" class="btn btn-outline-primary me-2">Permissions</button>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Cards End -->
    </div>
@endsection
