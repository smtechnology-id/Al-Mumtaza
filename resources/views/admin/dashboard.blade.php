@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mumtaza</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Welcome!</li>
                </ol>
            </div>
            <h4 class="page-title">Welcome!</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xxl-3 col-sm-6">
        <div class="card widget-flat text-bg-pink">
            <div class="card-body">
                <div class="float-end">
                    <i class="ri-eye-line widget-icon"></i>
                </div>
                <h6 class="text-uppercase mt-0" title="Customers">Jumlah Siswa</h6>
                <h2 class="my-2">{{ $dataUser }}</h2>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-xxl-3 col-sm-6">
        <div class="card widget-flat text-bg-purple">
            <div class="card-body">
                <div class="float-end">
                    <i class="ri-wallet-2-line widget-icon"></i>
                </div>
                <h6 class="text-uppercase mt-0" title="Customers">Jumlah Guru</h6>
                <h2 class="my-2">{{ $dataTeacher }}</h2>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-xxl-3 col-sm-6">
        <div class="card widget-flat text-bg-info">
            <div class="card-body">
                <div class="float-end">
                    <i class="ri-shopping-basket-line widget-icon"></i>
                </div>
                <h6 class="text-uppercase mt-0" title="Customers">Data Pelanggaran Masuk</h6>
                <h2 class="my-2">753</h2>
                <p class="mb-0">
                    <span class="badge bg-white bg-opacity-25 me-1">-5.75%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div> <!-- end col-->

     <!-- end col-->
</div>
@endsection