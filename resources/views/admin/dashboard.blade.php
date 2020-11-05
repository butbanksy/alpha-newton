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
                            <a href="#" class="btn btn-primary">Voir les étudiants inscrits</a>
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
                            <a href="#" class="btn btn-primary">Voir les professeurs inscrits</a>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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
