@extends('../master')

@section("content")
    <nav class="navbar navbar-expand-lg ">
        <a href="../">
            <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
                Revenir à l'accueil 
            </div>
        </a>
        <a class="navbar-brand" style="margin:auto;"> <img src="{{URL::asset('/images/entete.png')}}" height="150"
                                                           width="700"/> </a>
                                                          
    </nav>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top p-5" src="{{asset('/images/students.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre d'étudiants inscrits</h5>
                        <h4 class="text-center">{{count($etudiants) }}</h4>
                        <br/>
                        <a href="/fr/admin/students" class="btn btn-primary">Voir les étudiants inscrits</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top p-5" src="{{asset('/images/teachers.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de professeurs inscrits</h5>
                        <h4 class="text-center">{{count($professeurs)}}</h4>
                        <br/>
                        <a href="/fr/admin/professeurs" class="btn btn-primary">Voir les professeurs inscrits</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top p-5" src="{{asset('/images/subject.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de matières de soutien</h5>
                        <h4 class="text-center">{{count($matieres)}}</h4>
                        <br/>
                        <a href="/fr/admin/subjects" class="btn btn-primary">Gérer la liste des matières</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top p-5" src="{{asset('/images/pdf.png')}}" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">La Liste de Présence du Jour</h5>
                       
                        
                        <a href="{{asset('/images/fiche.pdf')}}" class="btn btn-primary">Télécharger votre liste d'absence</a><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top p-5" src="{{asset('/images/excel.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Exporter en EXCEL</h5>
                       
                        <br/><br>
                        <a href="/fr/admin/students/excel_export" class="btn btn-primary">Télécharger votre liste en EXCEL</a>
                    </div>
                </div>
            </div>

            <br/>
        </div>
    </div>
    <!--
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">ID Etudiant</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Etablissement</th>
            </tr>
            </thead>
            <tbody>
            @foreach($etudiants as $etudiant)
        <tr>
            <th scope="row">{{$etudiant->id}}</th>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                    <td>{{$etudiant->etablissement}}</td>
                </tr>
            @endforeach()
        </tbody> -->
    @endsection()
    </div>
    </div>
