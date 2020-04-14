<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->


    <title></title>

    <!-- Scripts -->
    <style>
    html{
      background-color: #e6e6e6;
      font-family: "Nexa-Regular";
    }
    .btn-logout{
          color: black;
          font-size: 24px;
          text-decoration: none;
          float: right;
    }
    /* .adddata{
      color: white;
      text-decoration: none;
      background: rgba(0,0,0,0.5);
      text-align: center;
      padding: 50px;
    }
    .adddata:hover{
      background: rgba(0,0,0,0.4);

    } */

    @font-face {
      font-family: 'Nexa-Bold';
      src: url('../../resources/fonts/Nexa-Bold.otf');
    }
    @font-face {
      font-family: 'Nexa-Regular';
      src: url('../../resources/fonts/Nexa-Light.otf');
    }
    .table{
      width: 100%;
      text-align: center;
      margin-top: 20px;
     border-color: rgba(0,0,0,0.5);
     border-style: solid;
    }
    </style>

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
