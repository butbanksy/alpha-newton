@extends('../layouts.app')

@section("content")
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
            <br/>
            <div class="container p-5">
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <a href="/fr/admin/subjects">
                        <div class="btn btn-success">
                            Gérer les matières
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="btn btn-info">
                            Imprimer la fiche d'absence
                        </div>
                    </div>
                </div>
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
