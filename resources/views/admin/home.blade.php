@extends('layouts.admin')

@section('main')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                <!-- Total Products Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $totalProducts }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Products Card -->

                <div class="col-xxl-5 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Revenue</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>Rp {{ number_format($totalRevenue, 0, '.', '.') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Revenue Card -->

                <!-- Total Orders Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal-text"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $totalOrders }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Orders Card -->

                

                <div class="col-xxl-5 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Profit</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>Rp {{ number_format($totalProfit, 0, '.', '.') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Revenue Card -->
            </div><!-- End Right side columns -->
        </div>
    </div>
</section>
@endsection
