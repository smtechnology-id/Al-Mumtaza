@php
    $html_tag_data = [];
    $title = 'Hosting';
    $description= 'Service Provider Hosting';
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
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- No Hosting Start -->
        <div class="card mb-5">
            <div class="card-body sh-50 d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <img src="/img/illustration/icon-launch.webp" class="theme-filter" alt="launch" />
                    <div class="cta-1">There is no hosting services!</div>
                    <div class="cta-3 text-primary mb-4">Would you like to create one?</div>
                    <a href="#" class="btn btn-primary btn-lg">NEW HOSTING</a>
                </div>
            </div>
        </div>
        <!-- No Hosting End -->

        <div class="row mb-n5">
            <!-- Guides Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title">Guides</h2>
                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="3">
                        <div class="card mb-2">
                            <a href="#" class="row g-0 sh-10">
                                <div class="col-auto">
                                    <div class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                        <div class="fw-bold text-primary">
                                            <i data-acorn-icon="server"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate">How to create hosting?</div>
                                            <div class="text-small text-muted">Snaps muffin macaroon.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card mb-2">
                            <a href="#" class="row g-0 sh-10">
                                <div class="col-auto">
                                    <div class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                        <div class="fw-bold text-primary">
                                            <i data-acorn-icon="antenna"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate">What to do with it?</div>
                                            <div class="text-small text-muted">Brownie ice cream marshmallow topping.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card mb-2">
                            <a href="#" class="row g-0 sh-10">
                                <div class="col-auto">
                                    <div class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                        <div class="fw-bold text-primary">
                                            <i data-acorn-icon="gear"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate">How does it work?</div>
                                            <div class="text-small text-muted">Sugar plum gummi bears jujubes.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card mb-2">
                            <a href="#" class="row g-0 sh-9">
                                <div class="col-auto">
                                    <div class="sw-9 sh-9 d-inline-block d-flex justify-content-center align-items-center">
                                        <div class="fw-bold text-primary">
                                            <i data-acorn-icon="wallet"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate">What is to cost?</div>
                                            <div class="text-small text-muted">Jujubes candy jelly-o topping.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card mb-2">
                            <a href="#" class="row g-0 sh-9">
                                <div class="col-auto">
                                    <div class="sw-9 sh-9 d-inline-block d-flex justify-content-center align-items-center">
                                        <div class="fw-bold text-primary">
                                            <i data-acorn-icon="router"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate">What are the alternatives?</div>
                                            <div class="text-small text-muted">Jujubes candy jelly-o topping.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Guides End -->

            <!-- Extend Your Knowledge Start -->
            <div class="col-xl-8 mb-5">
                <h2 class="small-title">Extend Your Knowledge</h2>
                <div class="row g-2 h-lg-100-card">
                    <div class="col-12 col-lg-6 h-100">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="cta-3">Need more details?</div>
                                    <div class="mb-3 cta-3 text-primary">Read the docs!</div>
                                    <div class="text-muted mb-4 clamp-line" data-line="3">
                                        Tootsie roll sweet roll pudding. Pastry liquorice wafer sweet. Chocolate bar jelly sugar plum cake sesame snaps gummies lollipop.
                                    </div>
                                </div>
                                <a href="/Support/Docs" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-15">
                                    <i data-acorn-icon="file-empty"></i>
                                    <span>Docs</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 h-100">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="cta-3">Have a specific issue?</div>
                                    <div class="mb-3 cta-3 text-primary">Check the forums!</div>
                                    <div class="text-muted mb-4 clamp-line" data-line="3">
                                        Candy canes jelly beans donut gummies gummi biscuit chocolate bar powder bears halvah oat cake marzipan.
                                    </div>
                                </div>
                                <a href="/Community" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-15">
                                    <i data-acorn-icon="user"></i>
                                    <span>Forums</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Extend Your Knowledge End -->
        </div>
    </div>
@endsection
