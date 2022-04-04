@extends('mainpage')

@section('title')
    iit
@endsection

@section('kontenmaps')

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
                <div class="col-lg-6">
                    <div class="col-lg-12 mb-2" style="color: #C4C4C4; text-Justify; font-family:Secular One;">
                        <h2>Location 1</h2>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="google-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126639.11465038288!2d112.754688!3d-7.300710400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd13ab103fb5%3A0x63e6b07bea0b1ef1!2sWisata%20Bukit%20Mas%202!5e0!3m2!1sid!2sid!4v1648897274629!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12 mb-2" style="color: #C4C4C4; text-Justify; font-family:Secular One;">
                        <h2>CCTV</h2>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div data-setup="{}" style="width: 100%;height: 47vh" preload="auto" class="video-js vjs-controls-enabled vjs-workinghover vjs-v7 vjs-live vjs-has-started cctv-video-player-dimensions vjs-user-inactive vjs-playing" id="cctv-video-player" tabindex="-1" lang="en" role="region" aria-label="Video Player">
                                    <video id="cctv-video-player_html5_api" class="vjs-tech" preload="auto" style="width: 100%;height: 50vh" data-setup="{}" tabindex="-1" src="blob:http://silamparismartcity.lubuklinggaukota.go.id/e0555b74-6a4f-49c5-a437-31ab1ce34499">
                                    <source src="http://silamparismartcity.lubuklinggaukota.go.id/web/cctv/pertigaan_stasiun.m3u8" type="video/x-mpegURL" id="cctv-src">
                                    </video>
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