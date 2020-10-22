@extends('../layouts.app')

@section("content")
    <div class="container">
        <div class="d-flex justify-content-center col-sm-12 col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
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
                </tbody>
            @endsection()
        </div>
    </div>
