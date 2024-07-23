@php
    $html_tag_data = [];
    $title = 'Knowledge Base';
    $description= 'Service Provider Knowledge Base';
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

        <!-- Guides by Product Start -->
        <div class="mb-5">
            <h2 class="small-title">Guides by Product</h2>
            <div class="row row-cols-1 row-cols-lg-2 g-2">
                <div class="col">
                    <div class="card mb-2 h-100">
                        <div class="card-body row g-0">
                            <div class="col-auto">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl">
                                    <div class="text-white d-flex justify-content-center align-items-center h-100">
                                        <i data-acorn-icon="database"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-column justify-content-center sh-6">
                                            <a href="#" class="heading">Database</a>
                                        </div>
                                    </div>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Chocolate cake marshmallow muffin</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Bear claw marzipan tiramisu topping</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Gingerbread biscuit bear claw marzipan tiramisu topping</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">
                                                    Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-2 h-100">
                        <div class="card-body row g-0">
                            <div class="col-auto">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl">
                                    <div class="text-white d-flex justify-content-center align-items-center h-100">
                                        <i data-acorn-icon="server"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-column justify-content-center sh-6">
                                            <a href="#" class="heading">Hosting</a>
                                        </div>
                                    </div>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Wafer halvah chocolate soufflé icing</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">
                                                    Lemon drops cupcake croissant liquorice bears dessert lemon drops gingerbread
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Gingerbread chocolate cake tootsie marzipan tiramisu topping</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Sweet roll cupcake dragée croissant</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-2 h-100">
                        <div class="card-body row g-0">
                            <div class="col-auto">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl">
                                    <div class="text-white d-flex justify-content-center align-items-center h-100">
                                        <i data-acorn-icon="image"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-column justify-content-center sh-6">
                                            <a href="#" class="heading">Storage</a>
                                        </div>
                                    </div>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">
                                                    Cookie tootsie roll candy canes marshmallow jujubes tiramisu apple pie carrot cake danish candy
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Croissant chocolate bar croissant drops gingerbread</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Marzipan bear claw marzipan tiramisu topping</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Sweet roll cupcake dragée croissant muffin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-2 h-100">
                        <div class="card-body row g-0">
                            <div class="col-auto">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl">
                                    <div class="text-white d-flex justify-content-center align-items-center h-100">
                                        <i data-acorn-icon="user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column pe-0 pt-0 pb-0 h-100 justify-content-start">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-column justify-content-center sh-6">
                                            <a href="#" class="heading">Users</a>
                                        </div>
                                    </div>
                                    <div class="mb-n2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Chupa chups marshmallow muffin liquorice</a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">
                                                    Chocolate cake sweet roll cupcake dragée croissant croissant muffin
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 me-1">
                                                    <i data-acorn-icon="chevron-right" class="text-muted align-top" data-acorn-size="17"></i>
                                                </div>
                                            </div>
                                            <div class="col lh-1-25">
                                                <a href="/Support/DocsDetail" class="alternate-link">Dragée croissant muffin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Guides by Product End -->

        <div class="row">
            <!-- Faq Start -->
            <div class="col-12 col-xxl-8 mb-5">
                <h2 class="small-title">Faq</h2>
                <div id="accordionCards">
                    <div class="mb-n2">
                        <div class="card d-flex mb-2">
                            <div
                                    class="d-flex flex-grow-1"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOneCards"
                                    aria-expanded="true"
                                    aria-controls="collapseOneCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Cupcake Lollipop Biscuit</div>
                                </div>
                            </div>
                            <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p><strong>Moon Tempor</strong></p>
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <br />
                                    <p><strong>Accusamus Labore</strong></p>
                                    <p>
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS.
                                        <br />
                                        <br />
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                        probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                    class="d-flex flex-grow-1"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwoCards"
                                    aria-expanded="true"
                                    aria-controls="collapseTwoCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Roll Marshmallow</div>
                                </div>
                            </div>
                            <div id="collapseTwoCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p><strong>Moon Tempor</strong></p>
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                    class="d-flex flex-grow-1"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThreeCards"
                                    aria-expanded="true"
                                    aria-controls="collapseThreeCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Pudding Soufflé Macaroon Carrot Cake</div>
                                </div>
                            </div>
                            <div id="collapseThreeCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p><strong>Moon Tempor</strong></p>
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card d-flex mb-2">
                            <div
                                    class="d-flex flex-grow-1"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFourCards"
                                    aria-expanded="true"
                                    aria-controls="collapseFourCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Sesame Snaps Cheesecake Muffin</div>
                                </div>
                            </div>
                            <div id="collapseFourCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex mb-2">
                            <div
                                    class="d-flex flex-grow-1"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFiveCards"
                                    aria-expanded="true"
                                    aria-controls="collapseFiveCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Candy Cupcake Ice Cream Gummies Dessert Muffin</div>
                                </div>
                            </div>
                            <div id="collapseFiveCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card d-flex mb-2">
                            <div
                                    class="d-flex flex-grow-1"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSixCards"
                                    aria-expanded="true"
                                    aria-controls="collapseSixCards"
                            >
                                <div class="card-body py-4">
                                    <div class="btn btn-link list-item-heading p-0">Powder Halvah Dessert Ice Cream</div>
                                </div>
                            </div>
                            <div id="collapseSixCards" class="collapse" data-bs-parent="#accordionCards">
                                <div class="card-body accordion-content pt-0">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faq End -->

            <!-- Video Guides Start -->
            <div class="col-12 col-xxl-4">
                <h2 class="small-title">Video Guides</h2>
                <div class="row g-2">
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="card">
                            <a href="#" class="row g-0 sh-11">
                                <div class="col-auto h-100">
                                    <img src="/img/video/video-thumbnail-5.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
                                    <div class="position-absolute bg-foreground opacity-75 text-primary px-1 py-1 text-extra-small b-1 s-1 rounded-lg">24:00</div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="font-heading">Backend Methods</div>
                                            <div class="text-small text-muted text-truncate">Cookie cream toffee cream chocolate.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="card">
                            <a href="#" class="row g-0 sh-11">
                                <div class="col-auto h-100">
                                    <img src="/img/video/video-thumbnail-2.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
                                    <div class="position-absolute bg-foreground opacity-75 text-primary px-1 py-1 text-extra-small b-1 s-1 rounded-lg">16:22</div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="font-heading">Shared Storage</div>
                                            <div class="text-small text-muted text-truncate">
                                                Jujubes cream toffee candy jelly chups jujubes muffin chupa chups carrot cake chupa.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="card">
                            <a href="#" class="row g-0 sh-11">
                                <div class="col-auto h-100">
                                    <img src="/img/video/video-thumbnail-3.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
                                    <div class="position-absolute bg-foreground opacity-75 text-primary px-1 py-1 text-extra-small b-1 s-1 rounded-lg">10:05</div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="font-heading">Javascript Api</div>
                                            <div class="text-small text-muted text-truncate">Candy jelly chups jujubes Cookie cream toffee cream chocolate.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="card">
                            <a href="#" class="row g-0 sh-11">
                                <div class="col-auto h-100">
                                    <img src="/img/video/video-thumbnail-4.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
                                    <div class="position-absolute bg-foreground opacity-75 text-primary px-1 py-1 text-extra-small b-1 s-1 rounded-lg">12:20</div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="font-heading">Frontend Methods</div>
                                            <div class="text-small text-muted text-truncate">Jelly chups jujubes chocolate bar pastry oat cake cream.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="card">
                            <a href="#" class="row g-0 sh-11">
                                <div class="col-auto h-100">
                                    <img src="/img/video/video-thumbnail-5.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
                                    <div class="position-absolute bg-foreground opacity-75 text-primary px-1 py-1 text-extra-small b-1 s-1 rounded-lg">24:00</div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="font-heading">Backend Methods</div>
                                            <div class="text-small text-muted text-truncate">Cookie cream toffee cream chocolate.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12">
                        <div class="card">
                            <a href="#" class="row g-0 sh-11">
                                <div class="col-auto h-100">
                                    <img src="/img/video/video-thumbnail-6.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
                                    <div class="position-absolute bg-foreground opacity-75 text-primary px-1 py-1 text-extra-small b-1 s-1 rounded-lg">16:50</div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="font-heading">Data Analysis</div>
                                            <div class="text-small text-muted text-truncate">Liquorice bar chocolate bar pastry oat cake cream.</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Guides End -->
        </div>
    </div>
@endsection
