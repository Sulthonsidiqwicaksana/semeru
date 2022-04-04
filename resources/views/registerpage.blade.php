@extends('mainpage')

@section('title')
    iit.register
@endsection

@section('register')
<div  style="background-image: url('../bahan/landing/Background_bawah.svg'); background-repeat: no-repeat;background-attachment: local;  
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
        <div class="container fluid">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <div class="fadeIn first mt-3 ml-4 text-left">
                        <h1 style="color: #007F5E; text-left; font-family:Secular One; font-size:60px"> Daftar </h1>
                    </div>
                    <div class="ml-4 text-left" style="font-size:13px;">
                        <a>
                        Daftar dan pantau aktivitas gunung semeru sekarang
                        </a>
                    </div>
                    <form>
                        <input type="text" id="nama" class="fadeIn first" name="nama" placeholder="nama">
                        <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
                        <input type="text" id="pasword" class="fadeIn third" name="password" placeholder="password">
                        <input type="text" id="confirm_pass" class="fadeIn fourth" name="confirm_pass" placeholder="ulangi password">
                        <input type="submit" class="fadeIn fifth mt-2" value="Daftar">
                    </form>                        

                    <div id="formFooter">
                        <a>Punya akun?</a>
                        <a class="underlineHover" href="/login">masuk</a>
                        <a>disini.</a>
                    </div>

                </div>
                </div>
        </div>   
  
</div>
               
@endsection