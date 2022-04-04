<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Secular+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../welcome.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../konten_sidebar.css" media="screen" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield ('title') || Monitoring Semeru</title>
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />

    <script type="text/javascript"src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../konten_sidebar.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
   
</head>
<style>
    .google-maps {
            position: relative;
            padding-bottom: 60%; // This is the aspect ratio
            height: 0;
            overflow: hidden;
        }
        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 47vh !important;
        }
        h1{
            font-size: 2rem;
        }
        p{
            font-size: 1rem;
        }
        @media (min-width: 768px) and (max-width: 991px) {

        .section-description p { padding: 0; }

        .section-1-box .section-1-box-icon { width: 50px; height: 50px; font-size: 26px; line-height: 50px; }

        .section-3-box .section-3-box-icon { width: 50px; height: 50px; font-size: 26px; line-height: 50px; }

        }
        @media (max-width:991px){
                h1{
                font-size: calc(1vw + 1rem);
                }
                p{
                font-size: calc(1vw + 0.45rem);
                }
                /*img {
                width: 70px;
                }*/
        }
        .video-fluid {
            width: 50%;
            height: auto;
            }
        $embed-responsive-aspect-ratios: (
            (21 9),
            (16 9),
            (4 3),
            (1 1)
            );
            
    </style>
<body>
    <div>
        @yield('landing')
    </div>
    <div>
        @yield('login')
    </div>
    <div>
        @yield('register')
    </div>
    <div>
        @yield('konten1')
    </div>
    <div>
        @yield('kontenmaps')
    </div>
    <div>
        @yield('kontencctv')
    </div>
    <div>
        @yield('kontenseismic')
    </div>
    
    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    feather.replace()
    </script>
</body>
</html>