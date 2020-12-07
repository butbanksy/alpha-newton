@extends('master')
@section("content")
    <div class="container">
        <div class="row">

            @if(session("message"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session("message")}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

                <a href="/fr/admin/">
                    <div class="btn btn-primary "><span aria-hidden="true">&#8592;</span>
                        Revenir à l'accueil
                    </div>
                </a>

            <table
                id="table"
                class="table-responsive"
                data-toggle="table"
                data-pagination="true"
                data-locale="fr-FR"
                data-filter-control="true"
                data-search="true">
                <thead>
                <tr>
                    <th data-sortable="true" data-field="id">ID</th>
                    <th date-sortable="true" data-field="prenom">Prénom</th>
                    <th date-sortable="true" data-field="nom" data-filter-control="input">Nom</th>
                    <th data-field="date_naissance">Date de naissance</th>
                    <th data-field="telephone">Téléphone</th>
                    <th data-field ="niveau_scolaire">Niveau scolaire</th>
                    <th data-field="option">Option</th>
                    <th data-field="etablissement">Etablissement</th>
                    <th data-field="button">Plus d'infos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($professeurs as $professeur)
                    <tr>
                        <td data-toggle="table" scope="row" class="id" id={{$professeur->id}}>{{$professeur->id}}</td>
                        <td>{{$professeur->person->nom}}</td>
                        <td>{{$professeur->person->prenom}}</td>
                        <td class="text-right">{{$professeur->person->date_naissance}}</td>
                        <td>{{$professeur->person->telephone}}</td>
                        <td>{{$professeur->person->niveau_scolaire}}</td>
                        <td>{{$professeur->person->option}}</td>
                        <td>{{$professeur->person->etablissement}}</td>
                        <td>
                            <a href="/fr/admin/professeur/{{$professeur->id}}">
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
