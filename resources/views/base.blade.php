<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <style>
    html{
        /* background-color: #ffffff; */
        background-image: url('../resources/images/bg.jpg');
        background-size: cover;
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
    h1{
      font-size: 30px;
      margin-left: 10px;
      text-align: center;
    }
    .content{
      z-index: 1;
      font-family: "Nexa-Regular";
      text-align: left;
      margin-top: 50px;
      margin-left: 300px;
      margin-right: 300px;
      padding: 10px;
      background: rgba(0,0,0,0.5);
    }
    .form-group{
      padding: 20px;
    }
    .btn-login{
      box-sizing: border-box;
      margin-left: 500px;
      background-color: #3385ff;
      color: white;
      font-size: 16px;
      border: none;
      padding: 15px;
      font-family: "Nexa-Regular";
      padding-right: 70px;
      padding-left: 70px;
    }
    .btn-login:hover{
      box-shadow: 1px 1px 3px 3px #737373;

    }
    </style>

    <title></title>

    <!-- Scripts -->


    <!-- Fonts -->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
