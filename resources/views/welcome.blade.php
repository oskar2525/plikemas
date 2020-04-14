<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PLIKEMAS</title>

        <!-- Fonts -->
        <link href="" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #ffffff; */
                background-image: url('../resources/images/bg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                position:relative;
                color: #ffffff;
                font-family: 'Nexa-Bold';
                font-weight: 150;
                height: 100vh;
                margin: 0;
            }
            @font-face {
              font-family: 'Nexa-Bold';
              src: url('../resources/fonts/Nexa-Bold.otf');
            }
            @font-face {
              font-family: 'Nexa-Regular';
              src: url('../resources/fonts/Nexa-Light.otf');
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #f2f2f2;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .subcontent{
              font-size: 34px;
              font-family: 'Nexa-Regular';
            }

            footer{
                height: 20px;
                width: 100%;
                position: absolute;
                display: inline;
                bottom: 0;
            }
            .top-right{
              background: rgba(0,0,0,0.4);
              padding: 10px;

            }
            a:hover{
              color:#d9d9d9;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

                <div class="top-right links">
                    <a href="{{url('login')}}">Login</a>
                    <a href="{{url('masyarakat/register')}}">Register</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    Aplikasi Pengaduan masyarakat
                </div>
                <div class="subcontent">
                  <p>
                    PLIKEMAS
                  </p>

                </div>

            </div>
        </div>

        <footer>
        </footer>

    </body>
</html>
