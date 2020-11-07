@extends('master')

@section("content")
    <div class="container">
        <div class="text-center">
            <h4>
                {{__('messages.type_personne')}}
            </h4>
        </div>

        <div class="d-flex justify-content-around align-items-center text-center" style="height: 50vh">
            <a href="inscription/etudiant">
                <h5>

                    <img src="{{asset('/images/students.png')}}" alt="Etudiant" width="150" height="150">
                    <br/><br/>{{__('messages.etudiant')}}
                </h5>
            </a>

            <a href="inscription/professeur">
                <h5 style="direction: rtl">
                    <img src="{{asset('/images/teachers.png')}}" alt="Professeur" width="150" height="150">
                    <br/><br/>{{__('messages.professeur')}}
                </h5>
            </a>
        </div>
    </div>
@endsection()
