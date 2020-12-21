@extends('master')


@section("title","Formulaire Etudiant")

@push("top")
<style>
</style>
@endpush

@section("content")

<nav class="navbar navbar-expand-lg ">
    <a href="javascript:history.back()">
        <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
            Page Précédente
        </div>
    </a>
    <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/entete.png')}}" height="150" width="700" /> </a>
    <a href="/">
        <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
            Revenir à l'accueil
        </div>
    </a>
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
<link rel="stylesheet" type="text/css" href="{{URL::asset('/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
<!-- Main Style Css -->
<link rel="stylesheet" href="{{URL::asset('/css/style.css')}}" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Font-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/montserrat-font.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
<form action="/{{$app->getLocale()}}/inscription/etudiant" method="post">
    @csrf

    <div class="page-content">
        <div class="form-v10-content mb-1 mt-5">
            <div class="form-detail" id="myform">
                <div class="form-left">
                    <h2>{{__('messages.informations_personnelles')}}</h2>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" value="{{old('prenom')}}" name="prenom" id="first_name" class="input-text" placeholder="{{__('messages.prenom')}}" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" value="{{old('nom')}}" name="nom" id="last_name" class="input-text" placeholder="{{__('messages.nom')}}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <input type="date" value="{{old('date_naissance')}}" name="date_naissance" class="company" id="company" placeholder="{{__('messages.date_naissance')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('lieu_naissance')}}" name="lieu_naissance" class="company" id="company" placeholder="{{__('messages.lieu_naissance')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('adresse')}}" name="adresse" class="company" id="company" placeholder="{{__('messages.adresse')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('telephone')}}" name="telephone" class="company" id="company" placeholder="{{__('messages.tel')}}" required>
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('email')}}" name="email" class="company" id="company" placeholder="{{__('messages.email')}}">
                    </div>


                    <div class="form-row">


                        <select name="niveau_scolaire" id="select" placeholder="{{__('messages.niveau_scolaire')}}">
                            <option disabled selected>Choisissez votre niveau scolaire</option>
                            <option value="college">Collège</option>
                            <option value="5eme">5ème</option>
                            <option value="6eme">6ème</option>
                            <option value="bacar">Bac Arabe</option>
                            <option value="bacfr">Bac Francais</option>

                        </select>
                        <script>
                            $(document).on("change", ".custom-control-input", function() {
                                var total = 0;
                                $('.custom-control-input:checked').each(function() {
                                    total += parseInt($(this).attr('title'));
                                })
                                $('.total').html("Total : " + total + ' DH');
                            })


                            $('select').on('change', function(e) {


                                let url = `/fr/getNiveau/${e.target.value}`;
                                fetch(url)
                                    .then(res => res.json(res))
                                    .then(res => {
                                        let html = ""
                                        for (let el of res) {
                                            parsedPrice = String(el.prix);
                                            html += `<ul class="list-group list-group-flush">

                           <li class="list-group-item">
                               <!-- Default checked -->
                               <div class="custom-control custom-checkbox">
                                   <input type="checkbox" title= ${el.prix} class="custom-control-input" id="${el.id}"
                                          name="matiere_id[]" value="${el.id}">
                                   <label class="custom-control-label"
                                          for="${el.id}">${el.nom}
                                      </label>
                               </div>
                           </li>
                   </ul>
                                        `
                                        }
                                        $("#a").html(html)
                                        $('.total').html('Total : 0 DH');

                                    })
                                    .catch(err => console.log('Request Failed', err));

                            });
                        </script>
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('option')}}" name="option" class="company" id="company" placeholder="{{__('messages.option')}}" >
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('etablissement')}}" name="etablissement" class="company" id="company" placeholder="{{__('messages.etablissement')}}">
                    </div>


                </div>
                <div class="form-right">
                    <h2>{{__('messages.informations_medicaux')}}</h2>


                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_specifique')}}</h6>
                        <select name="maladie_specifique">
                            <option disabled selected value="0">{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_respiratoire')}}</h6>
                        <select name="maladie_respiratoire">
                            <option disabled selected value="0">{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_vue')}}</h6>
                        <select name="maladie_vue">
                            <option disabled selected value="0">{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

                        </select>

                    </div>
                    <div class="form-row">
                        <h6 style="color: bisque">{{__('messages.maladie_audition')}}</h6>
                        <select name="maladie_audition">
                            <option disabled selected value="0">{{__('messages.choisisssez_une_reponse')}}</option>
                            <option value="1">{{__('messages.oui')}}</option>
                            <option value="0">{{__('messages.non')}}</option>

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

                    <div id="a"></div>
                    <div class="container-fluid" style="position:absolute; bottom:0;">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <hr style="height: 3px;" />

                            <h5 class="total">Total : 0 DH</h5>
                        </div>
                    </div>





                </div>
                <div class="form-right">
                    <h2>{{__('messages.responsables_legaux')}}</h2>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" value="{{old('prenom_resp')}}" name="prenom_resp" id="first_name" class="input-text" placeholder="{{__('messages.nom_resp')}}" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" value="{{old('nom_resp')}}" name="nom_resp" id="last_name" class="input-text" placeholder="{{__('messages.prenom_resp')}}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <input type="text" value="{{old('email_resp')}}" name="email_resp" class="company" id="company" placeholder="{{__('messages.email')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('telephone_resp')}}" name="telephone_resp" class="company" id="company" placeholder="{{__('messages.tel')}}" required>
                    </div>

                    <div class="form-row">
                        <input type="text" value="{{old('profession')}}" name="profession_resp" class="company" id="company" placeholder="{{__('messages.profession')}}">
                    </div>
                    <div class="form-row">
                        <input type="text" value="{{old('adresse_resp')}}" name="adresse_resp" class="company" id="company" placeholder="{{__('messages.adresse')}} ">

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
