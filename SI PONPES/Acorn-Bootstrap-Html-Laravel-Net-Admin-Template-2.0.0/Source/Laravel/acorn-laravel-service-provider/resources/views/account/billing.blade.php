@php
    $html_tag_data = [];
    $title = 'Billing';
    $description= 'Service Provider Billing'
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

        <div class="row">
            <!-- Status Start -->
            <div class="col-12 col-xxl-8 mb-5">
                <h2 class="small-title">Status</h2>
                <div class="row g-2">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="h-100 row g-0 card-body py-5 align-items-center">
                                <div class="col-auto">
                                    <div class="bg-gradient-light sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                                        <i data-acorn-icon="dollar" class="text-white"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center lh-1-25 ps-3">This Months Estimated Cost</div>
                                </div>
                                <div class="col-auto ps-3">
                                    <div class="cta-2 text-primary">$26.75</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="h-100 row g-0 card-body py-5 align-items-center">
                                <div class="col-auto">
                                    <div class="bg-gradient-light sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                                        <i data-acorn-icon="board-2" class="text-white"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center lh-1-25 ps-3">Usage Over Budget</div>
                                </div>
                                <div class="col-auto ps-3">
                                    <div class="cta-2 text-primary">$5.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="h-100 row g-0 card-body py-5 align-items-center">
                                <div class="col-auto">
                                    <div class="bg-gradient-light sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                                        <i data-acorn-icon="calendar" class="text-white"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center lh-1-25 ps-3">Monthly Billing Day</div>
                                </div>
                                <div class="col-auto ps-3">
                                    <div class="cta-2 text-primary">19th</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="h-100 row g-0 card-body py-5 align-items-center">
                                <div class="col-auto">
                                    <div class="bg-gradient-light sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                                        <i data-acorn-icon="wallet" class="text-white"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center lh-1-25 ps-3">Active Payment Methods</div>
                                </div>
                                <div class="col-auto ps-3">
                                    <div class="cta-2 text-primary">4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Status End -->

            <!-- Promo Code Start -->
            <div class="col-12 col-xxl-4 mb-5">
                <h2 class="small-title">Promo Code</h2>
                <div class="card h-100-card">
                    <div class="card-body h-100">
                        <div class="row g-0">
                            <div class="col-12 col-sm-auto pe-4 d-flex justify-content-center">
                                <img src="/img/illustration/icon-integrate.webp" alt="integrate" class="theme-filter" />
                            </div>
                            <div class="col-12 col-sm">
                                <p>If you have a promo code, you may apply here!</p>
                                <form>
                                    <div class="filled mb-2">
                                        <i data-acorn-icon="invoice"></i>
                                        <input class="form-control" placeholder="Code" />
                                    </div>
                                    <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary mt-1">
                                        <i data-acorn-icon="chevron-right"></i>
                                        <span>Apply</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Promo Code End -->
        </div>

        <div class="row">
            <!-- Payment Methods Start -->
            <div class="col-12 mb-5">
                <h2 class="small-title">Payment Methods</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom border-separator-light pb-2 mb-2">
                            <div class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                <div class="col-11 col-md-5 d-flex flex-column pe-2 mb-2 mb-md-0 order-1">
                                    <div>xxxx-xxxx-xxxx-4294</div>
                                    <div class="text-muted text-small">Visa</div>
                                </div>
                                <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3 order-3">23.05.2021</div>
                                <div class="col-auto col-md-2 d-flex flex-column align-items-start align-items-md-end order-4">
                                    <span class="badge bg-outline-primary">ACTIVE</span>
                                </div>
                                <div class="col-1 col-md-2 d-flex flex-column align-items-start align-items-md-end order-2 order-md-4">
                                    <button
                                            class="btn btn-sm btn-icon btn-icon-only btn-outline-muted align-top float-end"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            aria-haspopup="true"
                                    >
                                        <i data-acorn-icon="more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-separator-light pb-2 mb-2">
                            <div class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                <div class="col-11 col-md-5 d-flex flex-column pe-2 mb-2 mb-md-0 order-1">
                                    <div>xxxx-xxxx-xxxx-2901</div>
                                    <div class="text-muted text-small">Visa</div>
                                </div>
                                <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3 order-3">12.04.2021</div>
                                <div class="col-auto col-md-2 d-flex flex-column align-items-start align-items-md-end order-4">
                                    <span class="badge bg-outline-primary">ACTIVE</span>
                                </div>
                                <div class="col-1 col-md-2 d-flex flex-column align-items-start align-items-md-end order-2 order-md-4">
                                    <button
                                            class="btn btn-sm btn-icon btn-icon-only btn-outline-muted align-top float-end"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            aria-haspopup="true"
                                    >
                                        <i data-acorn-icon="more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-separator-light pb-2 mb-2">
                            <div class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                <div class="col-11 col-md-5 d-flex flex-column pe-2 mb-2 mb-md-0 order-1">
                                    <div>joissekaycee@gmail.com</div>
                                    <div class="text-muted text-small">Paypal</div>
                                </div>
                                <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3 order-3">14.10.2020</div>
                                <div class="col-auto col-md-2 d-flex flex-column align-items-start align-items-md-end order-4">
                                    <span class="badge bg-outline-muted">DEACTIVE</span>
                                </div>
                                <div class="col-1 col-md-2 d-flex flex-column align-items-start align-items-md-end order-2 order-md-4">
                                    <button
                                            class="btn btn-sm btn-icon btn-icon-only btn-outline-muted align-top float-end"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            aria-haspopup="true"
                                    >
                                        <i data-acorn-icon="more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary mt-1">
                                <i data-acorn-icon="plus"></i>
                                <span>Add New</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment Methods End -->

            <!-- Billing Information Start -->
            <div class="col-12 mb-5">
                <h2 class="small-title">Billing Information</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="text-muted text-small mb-1">NAME</div>
                            <div>Joisse Kaycee</div>
                        </div>
                        <div class="mb-3">
                            <div class="text-muted text-small mb-1">ADDRESS</div>
                            <div>
                                4911 Jehovah Drive
                                <br />
                                Culpeper/Virginia
                                <br />
                                USA
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="text-muted text-small mb-1">TAX ID</div>
                            <div>161-97-2030</div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary mt-1">
                                <i data-acorn-icon="edit-square"></i>
                                <span>Edit</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Billing Information End -->

            <!-- Payment Logs Start -->
            <div class="col-12">
                <h2 class="small-title">Payment Logs</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 bg-transparent no-shadow d-none d-md-block g-0 sh-3">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0 text-muted text-small">TITLE</div>
                                <div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">AMOUNT</div>
                                <div class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium text-muted text-small">DATE</div>
                                <div class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted text-small">
                                    DOWNLOAD
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 border-last-none">
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Monthly Payment</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.03.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <a class="link" href="#">
                                            <i data-acorn-icon="download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Overuse Payment</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 8.50</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.03.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <a class="link" href="#">
                                            <i data-acorn-icon="download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Invoice</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.03.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Monthly Payment</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.02.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Overuse Payment</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 4.50</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.02.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Invoice</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.02.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Monthly Payment</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.01.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Invoice</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.01.2021</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Monthly Payment</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.12.2020</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-100 sh-md-4 border-bottom border-separator-light pb-3 mb-3">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-10 col-md-5 d-flex flex-column justify-content-center mb-1 mb-md-0 order-0">
                                        <div class="text-muted text-small d-md-none">Title</div>
                                        <div class="text-alternate">Invoice</div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-1 mb-md-0 order-2">
                                        <div class="text-muted text-small d-md-none">Amount</div>
                                        <div class="text-alternate">$ 16.25</div>
                                    </div>
                                    <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-1 mb-md-0 order-3">
                                        <div class="text-muted text-small d-md-none">Date</div>
                                        <div class="text-alternate">21.12.2020</div>
                                    </div>
                                    <div class="col-2 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0 order-1 order-md-4">
                                        <div class="text-alternate">
                                            <button class="btn btn-foreground btn-outline-hover pe-0"><i data-acorn-icon="download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-center mb-0 semibordered">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i data-acorn-icon="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i data-acorn-icon="chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Payment Logs End -->
        </div>
    </div>
@endsection
