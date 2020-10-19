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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">

    <!-- Custom styles for this template -->
<!-- <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" /> -->

    <!-- Optional theme -->
<!-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}"> -->
</head>
<body>
@include("layouts.header")
@yield("content")

</body>
</html>
