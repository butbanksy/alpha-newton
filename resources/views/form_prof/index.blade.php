@extends('master')


@section("title","Login")

@push("top")
@endpush

@section("content")

    <nav class="navbar navbar-expand-lg ">
        <a href="javascript:history.back()">
            <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
                Page Précédente
            </div>
        </a>
        <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/entete.png')}}" height="150"
                                                           width="700"/> </a>
        <a href="/">
            <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
                Revenir à l'accueil
            </div>
        </a>

    </nav>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <meta charset="utf-8">
    <title>Formulaire Professeur</title>

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


    <div class="page-content">
        <div class="form-v10-content mb-50 mt-5">
            <form class="form-detail" method="post" action="/{{$app->getLocale()}}/inscription/professeur" id="myform">

                @csrf

                <div class="form-left">
                    <h2> {{__('messages.informations_personnelles')}}</h2>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" value="{{old('prenom')}}" name="prenom" id="first_name"
                                   class="input-text" placeholder="{{__('messages.prenom')}}" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" value="{{old('nom')}}" name="nom" id="last_name" class="input-text"
                                   placeholder="{{__('messages.nom')}}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <h6 style="color: black">Date de naissance</h6>
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('lieu_naissance')}}" name="lieu_naissance" class="company"
                               id="company" placeholder="{{__('messages.lieu_naissance')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('adresse')}}" name="adresse" class="company" id="company"
                               placeholder="{{__('messages.adresse')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('telephone')}}" name="telephone" class="company" id="company"
                               placeholder="{{__('messages.tel')}}" required>
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('email')}}" name="email" class="company" id="company"
                               placeholder="{{__('messages.email')}}">
                    </div>


                    <div class="form-row">
                        <input type="text" value="{{old('niveau_scolaire')}}" name="niveau_scolaire" class="company"
                               id="company" placeholder="{{__('messages.niveau_scolaire')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('option')}}" name="option" class="company" id="company"
                               placeholder="{{__('messages.option')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('etablissement')}}" name="etablissement" class="company"
                               id="company"
                               placeholder="{{__('messages.etablissement')}}">
                    </div>

                </div>
                <div class="form-right">
                    <h2>{{__('messages.informations_medicaux')}} </h2>


                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_specifique')}}</h6>
                        <select name="maladie_specifique">
                            <option disabled selected>{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_respiratoire')}}</h6>
                        <select name="maladie_respiratoire">
                            <option disabled selected>{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_vue')}}</h6>
                        <select name="maladie_vue">
                            <option disabled selected>{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_audition')}}</h6>
                        <select name="maladie_audition">
                            <option disabled selected>{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>

                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="{{__('messages.envoyer')}}">
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
