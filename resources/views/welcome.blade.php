@extends('mainpage')

@section('title')
    iit
@endsection

@section('landing')
<div style="background-image: url('../bahan/landing/bg_full.svg'); background-repeat: no-repeat;background-attachment: local;  
background-size: cover; border:0;">
    <div class="container mt-4 mb-4">
        <div class="container" >
            <div class="row mt-4">
                    <div class="col col-sm-4 text-left">
                        <a href="/">
                            <img src="../bahan/login/logo.svg" class="img-fluid" alt="Responsive image" width="100" height= auto/>
                        </a>
                    </div>
                    <div class="col col-sm-4 offset-sm-4 text-right">
                        <a href="../login">
                            <img src="../bahan/landing/bt_masuk.svg" class="img-fluid" alt="Responsive image" width="130" height= auto/>
                        </a>
                    </div>
            </div>
        </div>
        <div class="container mt-3 mb-5">
            <div class="row">
                <div class="col-md-6 section-1-box mt-3 ">
                    <div class="ml-3">
                        <h1 style="color: #ffd60a; text-left; font-family:Secular One;"> Pantau Aktivitas Gunung Semeru Saat Ini</h1>
                        <p style="color: #C4C4C4; text-Justify; font-family:Sarabun;">A volcano is a rupture in the crust of a planetary-mass object, 
                        such as Earth, that allows hot lava, volcanic ash, and gases to escape from a magma chamber below the surface.<p>
                        <a href="#" width="500" height= auto style="color:#ffffff;"class="badge badge-pill badge-success p-2" data-aos="flip-right" data-aos-duration="1500">Lihat Detail</a>
                
                    </div>
                </div>
                    <div class="col-lg-6 section-1-box mt-3 mb-4 " style="text-align: center; " data-aos="zoom-in" data-aos-duration="3000">
                        <img src="../bahan/landing/ilustrasi_atas.svg" class="img w-75" >
                    </div>
                
            </div>
            
        </div>
    </div>
    <div class="container fluid mt-6">
        <div class="row">
            <div class="col col-lg text-center mt-4" data-aos="fade-down" data-aos-duration="3000">
                    <img src="../bahan/landing/Logo_Inkubator.svg" class="img-fluid w-25 mt-4"/>
            </div>
        </div>
    </div>
    <div class="container fluid mt-4">
        <div class="row">
            <div class="col col-lg-4">
                <div class="col col-lg text-left mt-4" data-aos="fade-down" data-aos-duration="3000">
                    <p style="color: #769CFF; text-center; font-family:Secular One;">About.inkubator<p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-6 text-left" data-aos="fade-down" data-aos-duration="3000">
                    <p style="color: #C4C4C4; text-center; font-family:Secular One;"><span>#INKUBATOR</span> Inovasi dan Teknologi adalah 
                    suatu divisi di Departemen Teknik Instrumentasi ITS yang bergerak pada pengembangan riset dan teknologi 
                    development. <p>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg text-center mt-4" data-aos="fade-down" data-aos-duration="3000">
                <p style="color: #007F5E; text-center; font-family:Secular One;">What we do?<p>
            </div>
        </div>
    
    </div>
    <div class="container fluid mt-4 mb-4">
        <div class="row">
            <div class="col col-lg" data-aos="fade-down" data-aos-duration="3000">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/thmuiOLaj7Y" allowfullscreen></iframe>
                </div>
            </div> 
        </div>
    </div>

    <div class="container fluid mt-4">
        <div class="row">
            <div class="col-lg-4 text-left mt-4">
                <p style="color: #000000; font-family:Secular One;">
                Kampus ITS Sukolilo - Surabaya <br>
                Fakultas Vokasi Teknik Instrumentasi
                </p>
            </div>
            <div class="col-lg-4 offset-lg-4 text-right">
                <a href=" https://www.instagram.com/iit.dtins/">
                    <img src="../bahan/landing/see_us_IG.svg" class="img-fluid w-100 mt-4 mb-4"/>
                </a>    
            </div>
        </div>
    </div>
    
        <div class="container fluid mt-4" >
            <div class="row">
                <div class="fixed-bottom" style="color:#ffffff; opacity:0.2;">
                    Created by.IIt
                </div>
            </div>
        </div>
</div>
@endsection