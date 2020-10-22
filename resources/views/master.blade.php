<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Simple CMS"/>
    <meta name="author" content="Sheikh Heera"/>

    <title>Alpha Newton</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
<!-- ***************************** -->

<meta charset="utf-8" />
   
    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- jQuery core JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap core JS -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>



    <!-- Custom styles for this template -->
<!-- <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" /> -->

    <!-- Optional theme -->
<!-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}"> -->
</head>
<body>
<main class="py-4">
    @yield('content')
</main>

</body>
</html>
