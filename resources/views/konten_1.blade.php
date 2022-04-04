@extends('mainpage')

@section('title')
    iit
@endsection

@section('konten1')

<div style="background-image: url('../bahan/konten/bg_ct.svg'); background-repeat: repeat;background-attachment: local;  
  background-size: cover;">
    <div class="page-wrapper chiller-theme toggled">
        @include('sidebar')
        <main class="page-content">
            <div class="container-fluid" >
                <div class="row">
                        <div class="col col-sm-4 offset-sm-4 text-center">
                            <a href="/">
                                <img src="../bahan/login/logo.svg" class="img-fluid" alt="Responsive image" width="100" height= auto/>
                            </a>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-2" style="color: #C4C4C4; text-Justify; font-family:Secular One;">
                    <h2>Location 1</h2>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Temperature</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">... °C</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thermometer-empty fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Soil Moisture</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> ... %</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-percent fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Rainfall</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">... cm/h</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cloud fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-2" style="color: #C4C4C4; text-Justify; font-family:Secular One;">
                    <h2>Location 2</h2>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Temperature</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="ini">... °C</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thermometer-empty fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Soil Moisture</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> ... %</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-percent fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Rainfall</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">... cm/h</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cloud fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
    