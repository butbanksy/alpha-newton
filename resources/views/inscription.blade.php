@extends('master')

@section("content")

<nav class="navbar navbar-expand-lg " >
<a href="../">
            <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
                Revenir à l'accueil 
            </div>
        </a>
    <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/entete.png')}}" height="150" width="700"/> </a>
    </nav>
    
    <div class="container">
        <div class="text-center">
            <h4><br><br><b style="color:black";>
                {{__('messages.type_personne')}}</b>
            </h4>
        </div>

        <div class="d-flex justify-content-around align-items-center text-center" style="height: 50vh">
            <a href="inscription/etudiant">
                <h5>

                    <img src="{{asset('/images/students.png')}}" alt="Etudiant" width="150" height="150">
                    <br/><br/><h3 style="color:black";>{{__('messages.etudiant')}}</h3>
                </h5>
            </a>

            <a href="inscription/professeur">
                <h5 style="direction: rtl">
                    <img src="{{asset('/images/teachers.png')}}" alt="Professeur" width="150" height="150">
                    <br/><br/><h3 style="color:black";>{{__('messages.professeur')}}</h3>
                </h5>
            </a>
        </div>
    </div>
   
@endsection()
