@extends('master')


@section('content')
<nav class="navbar navbar-expand-lg " >
    <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/log.png')}}" height="150" width="700"/> </a>
    <a href="/admin" >
       
        Partie Admin
    
</a>
    </nav>
    <div class="container">
        <div class="col-sm-12">
            <div class="text-center"><br><br>
                <h4>Veuillez séléctionner une langue</h4>
                <br>
                <h4 style="direction: rtl">المرجو اختيار اللغة</h4>
            <div class="d-flex justify-content-around align-items-center" style="height: 50vh">
                <h5>
                    <a href="fr/inscription">
                <img src="{{asset('/images/Flag_of_France.svg')}}" alt="Français" width="200" height="133">
                    <br/>Français
                    </a>
                </h5>
                <h5 style="direction: rtl;">
                    <a href="ar/inscription">
                <img src="{{asset('/images/Flag_of_Morocco.svg')}}" alt="Arabe" width="200" height="133">
                    <br/>العربية
                    </a>

                </h5>
            </div>
        </div>
    </div>
    <br><br><br>
    
@endsection
