@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table
                id="table"
                data-toggle="table"
                data-pagination="true"
                data-locale="fr-FR"
                class="col-sm-12"
                data-search="true">
                <thead>
                <tr>
                    <th data-sortable="true" data-field="id">ID</th>
                    <th date-sortable="true" data-field="nom">Nom</th>
                    <th date-sortable="true" data-field="prix">Prix</th>
                    <th data-field="etablissement">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td data-toggle="table" scope="row" class="id" id={{$subject->id}}>{{$subject->id}}</td>
                        <td>{{$subject->nom}}</td>
                        <td>{{$subject->prix}}</td>
                        <td>
                            <a href="/fr/admin/subject/edit/{{$subject->id}}">
                                <div class="btn btn-primary more-info">
                                    Modifier
                                </div>
                            </a>
                            <a href="/fr/admin/subject/delete/{{$subject->id}}">
                                <div class="btn btn-danger">
                                    Supprimer
                                </div>
                            </a>
                        </td>
                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
        <div class="container justify-content-center">
            <div class="btn btn-primary">
                Ajouter une nouvelle matière
            </div>

        </div>

    </div>
@endsection()
