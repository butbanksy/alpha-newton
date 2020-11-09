
@extends('master')


@section("title","Formulaire Etudiant")

@push("top")
  <style>
  </style>
@endpush

@section("content")

<nav class="navbar navbar-expand-lg " >
<a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/log.png')}}" height="150" width="700"/> </a>
</nav>
  <meta charset="utf-8">
  <title>Formulaire Etudiant</title>
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
 <form action="{{url('{language}/inscription/etudiant')}}" method="post">
	@csrf

<div class="page-content">
	<div class="form-v10-content mb-1 mt-5">
		<div class="form-detail"   id="myform">
			<div class="form-left">
				<h2>Informations Personnelles</h2>
				
				<div class="form-group">
					<div class="form-row form-row-1">
						<input type="text" name="prenom" id="first_name" class="input-text" placeholder="Nom" required>
					</div>
					<div class="form-row form-row-2">
						<input type="text" name="nom" id="last_name" class="input-text" placeholder="Prénom" required>
					</div>
				</div>
				<div class="form-row">
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
						<option disabled selected>choisissez votre réponse</option>
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
				
				
			</div>

		</div>
	</div>
</div>

			<div class="page-content" >
				<div class="form-v10-content mt-0">
					<div class="form-detail" id="myform">
						
			<div class="form-left">
				<h2>Matière de Soutien</h2>
				
							
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check1" name="matiere_id[]" value="1" checked>
        <label class="custom-control-label" for="check1" >Mathématique</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check2" name="matiere_id[]" value="2">
        <label class="custom-control-label" for="check2">Physique</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check3" checked name="matiere_id[]" value="3">
        <label class="custom-control-label" for="check3">naturel Science</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check4" checked name="matiere_id[]" value="4">
        <label class="custom-control-label" for="check4">Science d’ingénieur</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5" name="matiere_id[]" value="5">
        <label class="custom-control-label" for="check5">Economie</label>
      </div>
	</li>
	<li class="list-group-item">
		<!-- Default checked -->
		<div class="custom-control custom-checkbox">
		  <input type="checkbox" class="custom-control-input" id="check6" name="matiere_id[]" value="6">
		  <label class="custom-control-label" for="check6">Comptabilité</label>
		</div>
	  </li>
	  <li class="list-group-item">
		<!-- Default checked -->
		<div class="custom-control custom-checkbox">
		  <input type="checkbox" class="custom-control-input" id="check7" name="matiere_id[]" value="7">
		  <label class="custom-control-label" for="check7">Philosophie</label>
		</div>
	  </li>
	  <li class="list-group-item">
		<!-- Default checked -->
		<div class="custom-control custom-checkbox">
		  <input type="checkbox" class="custom-control-input" id="check8" name="matiere_id[]" value="8">
		  <label class="custom-control-label" for="check8">Français</label>
		</div>
	  </li>
	  <li class="list-group-item">
		<!-- Default checked -->
		<div class="custom-control custom-checkbox">
		  <input type="checkbox" class="custom-control-input" id="check9" name="matiere_id[]" value="9">
		  <label class="custom-control-label" for="check9">Anglais</label>
		</div>
	  </li>
	  <li class="list-group-item">
		<!-- Default checked -->
		<div class="custom-control custom-checkbox">
		  <input type="checkbox" class="custom-control-input" id="check10" name="matiere_id[]" value="10">
		  <label class="custom-control-label" for="check10">arabe Langue</label>
		</div>
	  </li>
	  <li class="list-group-item">
		<!-- Default checked -->
		<div class="custom-control custom-checkbox">
		  <input type="checkbox" class="custom-control-input" id="check11" name="matiere_id[]" value="11">
		  <label class="custom-control-label" for="check11">Histoire et Géographie</label>
		</div>
	  </li>
  </ul>		
				
			
			</div>
			<div class="form-right">
				<h2>Responsables Légaux</h2>

				<div class="form-group">
					<div class="form-row form-row-1">
						<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Nom de Responsable" required>
					</div>
					<div class="form-row form-row-2">
						<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Prénom de Responsable" required>
					</div>
				</div>
				
				<div class="form-row">
					<input type="text" name="email" class="company" id="company" placeholder="Courriel" required>
				</div>
				<div class="form-row">
					<input type="text" name="telephone" class="company" id="company" placeholder="Téléphone" required>
				</div>
				
				<div class="form-row">
					<input type="text" name="profession" class="company" id="company" placeholder="Profession" required>
				</div>
				<div class="form-row">
					<input type="text" name="adresse" class="company" id="company" placeholder="Adresse Actuelle" required>
					
				</div>

		
				
				
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Envoyer">
				</div>
			</div>
		</div>
	</div>
</div>
 </form>


    @endsection