@extends('layouts.dashboard')

@section('title')
    Store Dashboard Products
@endsection

@section('content')
<!-- START: Section Content -->
    <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Transactions</h2>
        <p class="dashboard-subtitle">Big result start from the small one</p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-12 mt-2">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="true">Sell Product</a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-buy-tab" data-toggle="pill" href="#pills-buy" role="tab" aria-controls="pills-buy" aria-selected="false">Buy Product</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
                <!-- START: Transaction -->
            <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img src="/images/dashboard-icon-product-1.png" alt="icon product 1">
                    </div>
                    <div class="col-md-4">
                    Shirup Marzaan
                    </div>
                    <div class="col-md-3">
                    Angga Risky
                    </div>
                    <div class="col-md-3">
                    12 Januari, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                    </div>
                </div>
                </div>
                </a>
                <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-2.png" alt="icon product 2">
                    </div>
                    <div class="col-md-4">
                        LeBrone X
                    </div>
                    <div class="col-md-3">
                        Masayoshi
                    </div>
                    <div class="col-md-3">
                        11 January, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                    </div>
                    </div>
                </div>
                </a>
                <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-3.png" alt="icon product 3">
                    </div>
                    <div class="col-md-4">
                        Soffa Lembutte
                    </div>
                    <div class="col-md-3">
                        Shayna
                    </div>
                    <div class="col-md-3">
                        11 January, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                    </div>
                    </div>
                </div>
                </a>
                <!-- END: Transaction -->
                </div>
                <div class="tab-pane fade" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
                <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-3.png" alt="icon product 3">
                        </div>
                        <div class="col-md-4">
                        Soffa Lembutte
                        </div>
                        <div class="col-md-3">
                        Shayna
                        </div>
                        <div class="col-md-3">
                        11 January, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                        </div>
                    </div>
                    </div>
                </a>
                </div>
            </div>

            
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- END: Section Content -->
@endsection