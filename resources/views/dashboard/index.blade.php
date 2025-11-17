@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="card mt-3" style="height: 800px">
            <div class="card-body">
                <div class="card-title">Dashboard</div>

                <div class="col-xxl col-xl-12">
                    <div class="card info-card customers-card">

                        <div class="card-body">
                            <h5 class="card-title">Selamat Datang <span>| {{ auth()->user()->name }}</span></h5>
                            <div class="d-flex align-items-center">
                                <h2>SISTEM INFORMASI ANTRIAN KLINIK WAHYU WIDODO </h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-title">Antrian Masuk</div>

                <div class="row">
                    <div class="col-xxl col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Poli Umum</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-plus-medical"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $poliUmum }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Poli Gigi</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-dna"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $poliGigi }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Poli KIA</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-shield-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $poliKia }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
