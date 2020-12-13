@extends('master')


@section("title","Formulaire Etudiant")

@push("top")
    <style>
    </style>
@endpush

@section("content")

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/entete.png')}}" height="150"
                                                           width="700"/> </a>
    </nav>
    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <meta charset="utf-8">
    <title>Formulaire Etudiant</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/opensans-font.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/montserrat-font.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <form action="/fr/admin/student/edit/{{$student->id}}" method="post">
        @csrf
        @method('PUT')

        <div class="page-content">
            <div class="form-v10-content mb-1 mt-5">
                <div class="form-detail" id="myform">
                    <div class="form-left">
                        <h2>{{__('messages.informations_personnelles')}}</h2>

                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" value="{{$student->person->prenom}}" name="prenom" id="first_name"
                                       class="input-text" placeholder="{{__('messages.prenom')}}" required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" value="{{$student->person->nom}}" name="nom" id="last_name"
                                       class="input-text"
                                       placeholder="{{__('messages.nom')}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="date" value="{{$student->person->date_naissance}}" name="date_naissance"
                                   class="company"
                                   id="company" placeholder="{{__('messages.date_naissance')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->person->lieu_naissance}}" name="lieu_naissance"
                                   class="company"
                                   id="company" placeholder="{{__('messages.lieu_naissance')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->person->adresse}}" name="adresse" class="company"
                                   id="company"
                                   placeholder="{{__('messages.adresse')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->person->telephone}}" name="telephone" class="company"
                                   id="company" placeholder="{{__('messages.tel')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->person->email}}" name="email" class="company"
                                   id="company"
                                   placeholder="{{__('messages.email')}}" required>
                        </div>


                        <div class="form-row">
                            <input type="text" value="{{$student->person->niveau_scolaire}}" name="niveau_scolaire"
                                   class="company"
                                   id="company" placeholder="{{__('messages.niveau_scolaire')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->person->option}}" name="option" class="company"
                                   id="company"
                                   placeholder="{{__('messages.option')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->person->etablissement}}" name="etablissement"
                                   class="company"
                                   id="company" placeholder="{{__('messages.etablissement')}}" required>
                        </div>


                    </div>
                    <div class="form-right">
                        <h2>{{__('messages.informations_medicaux')}}</h2>


                        <div class="form-row">
                            <h6 style="color: bisque">{{__('messages.maladie_specifique')}}</h6>
                            <select name="maladie_specifique">
                                @if($student->person->maladie_specifique)
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0">{{__('messages.non')}}</option>
                                @else
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0" selected>{{__('messages.non')}}</option>
                                @endif
                            </select>

                        </div>
                        <div class="form-row">
                            <h6 style="color: bisque">{{__('messages.maladie_respiratoire')}}</h6>
                            <select name="maladie_respiratoire">
                                @if($student->person->maladie_respiratoire)
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0">{{__('messages.non')}}</option>
                                @else
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0" selected>{{__('messages.non')}}</option>
                                @endif
                            </select>


                        </div>
                        <div class="form-row">
                            <h6 style="color: bisque">{{__('messages.maladie_vue')}}</h6>
                            <select name="maladie_vue">
                                @if($student->person->maladie_vue)
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0">{{__('messages.non')}}</option>
                                @else
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0" selected>{{__('messages.non')}}</option>
                                @endif
                            </select>

                        </div>
                        <div class="form-row">
                            <h6 style="color: bisque">{{__('messages.maladie_audition')}}</h6>
                            <select name="maladie_audition">
                                @if($student->person->maladie_audition)
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0">{{__('messages.non')}}</option>
                                @else
                                    <option value="1" selected>{{__('messages.oui')}}</option>
                                    <option value="0" selected>{{__('messages.non')}}</option>
                                @endif
                            </select>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="form-v10-content mt-0">
                <div class="form-detail" id="myform">

                    <div class="form-left">
                        <h2>{{__('messages.matiere_de_soutien')}}</h2>


                        <ul class="list-group list-group-flush">
                            @foreach($matieres as $matiere)
                                <li class="list-group-item">
                                    <!-- Default checked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="{{$matiere->id}}"
                                               name="matiere_id[]" value="{{$matiere->id}}">
                                        <label class="custom-control-label"
                                               for="{{$matiere->id}}">{{$matiere->nom}}</label>
                                    </div>
                                </li>
                            @endforeach()
                        </ul>


                    </div>
                    <div class="form-right">
                        <h2>{{__('messages.responsables_legaux')}}</h2>

                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" value="{{$student->responsable->prenom}}" name="prenom_resp"
                                       id="first_name"
                                       class="input-text" placeholder="{{__('messages.nom_resp')}}" required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" value="{{$student->responsable->nom}}" name="nom_resp" id="last_name"
                                       class="input-text" placeholder="{{__('messages.prenom_resp')}}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <input type="text" value="{{$student->responsable->email}}" name="email_resp"
                                   class="company"
                                   id="company" placeholder="{{__('messages.email')}}">
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->responsable->telephone}}" name="telephone_resp"
                                   class="company"
                                   id="company" placeholder="{{__('messages.tel')}}" required>
                        </div>

                        <div class="form-row">
                            <input type="text" value="{{$student->responsable->profession}}" name="profession_resp"
                                   class="company"
                                   id="company" placeholder="{{__('messages.profession')}}" required>
                        </div>
                        <div class="form-row">
                            <input type="text" value="{{$student->responsable->adresse}}" name="adresse_resp"
                                   class="company"
                                   id="company" placeholder="{{__('messages.adresse')}} " required>

                        </div>


                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="{{__('messages.envoyer')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
