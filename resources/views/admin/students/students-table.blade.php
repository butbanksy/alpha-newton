@extends('master')
@section("content")
    <div class="container">
        <div class="row">

            <table
                id="table"
                data-toggle="table"
                data-pagination="true"
                data-locale="fr-FR"
                data-search="true">
                <thead>
                <tr>
                    <th data-sortable="true" data-field="id">ID</th>
                    <th date-sortable="true" data-field="prenom">Prénom</th>
                    <th date-sortable="true" data-field="nom">Nom</th>
                    <th data-field="date_naissance">Date de naissance</th>
                    <th data-field="telephone">Téléphone</th>
                    <th data-field="niveau_scolaire">Niveau scolaire</th>
                    <th data-field="option">Option</th>
                    <th data-field="etablissement">Etablissement</th>
                    <th data-field="button">Plus d'infos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($etudiants as $etudiant)
                    <tr>
                        <td data-toggle="table" scope="row" class="id" id={{$etudiant->id}}>{{$etudiant->id}}</td>
                        <td>{{$etudiant->person->nom}}</td>
                        <td>{{$etudiant->person->prenom}}</td>
                        <td class="text-right">{{$etudiant->person->date_naissance}}</td>
                        <td>{{$etudiant->person->telephone}}</td>
                        <td>{{$etudiant->person->niveau_scolaire}}</td>
                        <td>{{$etudiant->person->option}}</td>
                        <td>{{$etudiant->person->etablissement}}</td>
                        <td>
                            <a href="/fr/admin/student/{{$etudiant->id}}">
                                <div class="btn btn-primary more-info">
                                    Plus d'infos
                                </div>
                            </a>
                        </td>
                    </tr>
                @endforeach()

                </tbody>
            </table>


        </div>
    </div>



@endsection()
