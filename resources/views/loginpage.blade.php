@extends('mainpage')

@section('title')
    iit.login
@endsection

@section('login')
  <div style="background-image: url('../bahan/landing/Background_bawah.svg'); background-repeat: no-repeat;background-attachment: local;  
  background-size: cover;">
  
     <div class="container-fluid" >
                <div class="row mt-4 ml-2">
                        <div class="col col-sm-4 offset-sm-4 text-center">
                            <a href="/">
                                <img src="../bahan/login/logo.svg" class="img-fluid" alt="Responsive image" width="100" height= auto/>
                            </a>
                        </div>
                </div>
            </div>
        <div class="container fluid mt-4">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <div class="fadeIn first mt-3 ml-4 text-left">
                        <h1 style="color: #007F5E; text-left; font-family:Secular One; font-size:60px"> Masuk </h1>
                    </div>
                    <div class="mb-4 ml-4 text-left" style="font-size:13.5px;">
                        <a>
                            Masuk dan pantau aktivitas gunung semeru sekarang
                        </a>
                    </div>
                    <form>
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="nama">
                        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                        <input type="submit" class="fadeIn fourth mt-3" value="Masuk">
                    </form>

                    <div id="formFooter">
                        <a>Belum punya akun?</a>
                        <a class="underlineHover" href="/register">daftar</a>
                        <a>disini.</a>
                    </div>

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