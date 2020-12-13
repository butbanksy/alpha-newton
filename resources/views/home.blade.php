@extends('master')


@section('content')
<nav class="navbar navbar-expand-lg " >
    <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/entete.png')}}" height="150" width="700"/> </a>
    <a href="/admin" >
       
        Partie Admin
    
</a>
    </nav>
    <div class="container">
        <div class="col-sm-12">
            <div class="text-center"><br><br>
                <h4><b style="color:black";>Veuillez séléctionner une langue</b></h4>
                <br>
                <h4 style="direction: rtl"><b style="color:black";>المرجو اختيار اللغة</b></h4>
            <div class="d-flex justify-content-around align-items-center" style="height: 50vh">
                <h5>
                    <a href="fr/inscription">
                <img src="{{asset('/images/Flag_of_France.svg')}}" alt="Français" width="200" height="133">
                    <br/><h3 style="color:black";>Français</h3>
                    </a>
                </h5>
                <h5 style="direction: rtl;">
                    <a href="ar/inscription">
                <img src="{{asset('/images/Flag_of_Morocco.svg')}}" alt="Arabe" width="200" height="133">
                    <br/><h3 style="color:black";>العربية</h3>
                    </a>

                </h5>
            </div>
        </div>
    </div>
    <br><br><br>
    
@endsection
