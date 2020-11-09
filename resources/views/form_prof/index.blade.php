@extends('master')


@section("title","Login")

@push("top")
@endpush

@section("content")

<nav class="navbar navbar-expand-lg " >
    <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/log.png')}}" height="150" width="700"/> </a>
    </nav>
      <meta charset="utf-8">
      <title>Formulaire Professeur</title>

      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Font-->
      <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/opensans-font.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::asset('/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
      <!-- Main Style Css -->
      <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}"/>

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Font-->
      <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/montserrat-font.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::asset('/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">


    <div class="page-content">
        <div class="form-v10-content mb-50 mt-5">
            <form class="form-detail"  method="post" action="{{url('{language}/inscription/professeur')}}" id="myform">
                {{$app->getLocale()}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf

                <div class="form-left">
                    <h2>{{__('messages.informations_personnelles')}}</h2>
                    <h6></h6>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="prenom" id="first_name" class="input-text" placeholder="Nom" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="nom" id="last_name" class="input-text" placeholder="Prénom" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <h6 style="color: black">Date de naissance</h6>
                        <input type="date" name="date_naissance" class="company" id="company" placeholder="Date de Naissance" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="lieu_naissance" class="company" id="company" placeholder="Lieu de Naissance" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="adresse" class="company" id="company" placeholder="Adresse Actuelle" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="telephone" class="company" id="company" placeholder="Téléphone" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" class="company" id="company" placeholder="Courriel" required>
                    </div>




                    <div class="form-row">
                        <input type="text" name="niveau_scolaire" class="company" id="company" placeholder="Niveau Scolaire" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="option" class="company" id="company" placeholder="Option" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="etablissement" class="company" id="company" placeholder="Etablissement" required>
                    </div>

                </div>
                <div class="form-right">
                    <h2>Informations Médicaux</h2>


                    <div class="form-row">
                        <h6 style="color: bisque">Suivez-vous un traitement pour une maladie spécifique?</h6>
                        <select name="maladie_specifique">
                            <option disabled selected>choisissez votre réponse</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">Suivez-vous un traitement pour une maladie spécifique?</h6>
                        <select name="maladie_respiratoire">
                            <option disabled selected>choisissez votre réponse</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">Suivez-vous un traitement pour une maladie spécifique?</h6>
                        <select name="maladie_vue">
                            <option disabled>choisissez votre réponse</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">Suivez-vous un traitement pour une maladie spécifique?</h6>
                        <select name="maladie_audition">
                            <option disabled selected>choisissez votre réponse</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>

                        </select>

                    </div>

                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
