<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Simple CMS"/>
    <meta name="author" content="Sheikh Heera"/>

    <title>Alpha Newton</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-table.min.css') }}">

    <!-- ***************************** -->

    <meta charset="utf-8"/>
    <script src="{{URL::asset('/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{URL::asset('/js/jquery.steps.js')}}"></script>
	<script src="{{URL::asset('/js/main.js')}}"></script>


    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/opensans-font.css')}}"/>
    <link
        rel="stylesheet"
        type="text/css"
        href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}"
    />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/util.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <!-- jQuery core JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap core JS -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-table.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-table-fr-FR.js')}}"></script>
    <script src="{{ asset('js/bootstrap-table-filter-control.min.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script>


    <!-- Custom styles for this template -->
<!-- <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" /> -->

    <!-- Optional theme -->
<!-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}"> -->

</head>
<body>
<main class="py-4">
    @yield('content')
</main>
<footer>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© {{date('Y')}} Site Web créé par :
        <a href="https://mdbootstrap.com/"> AN FOR TECH sarl   &nbsp; &nbsp;&nbsp; anfortech@gmail.com   &nbsp;&nbsp;&nbsp; 0661533642</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
