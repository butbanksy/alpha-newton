@extends('master')
@section("content")
    @include('admin.header')

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

    </div>

        <div class="col-sm-12 pt-5">
            <h4>Filtrer votre recherche</h4>
        </div>
        <form id="myForm" action="/fr/admin/students/filter" method="post">
            @csrf
            <select name="niveau_scolaire" id="niveaux" placeholder="{{__('messages.niveau_scolaire')}}">
                <option disabled selected>Choisissez votre niveau scolaire</option>
                <option value="college">Collège</option>
                <option value="5eme">5ème</option>
                <option value="6eme">6ème</option>
                <option value="bacar">Bac Arabe</option>
                <option value="bacfr">Bac Francais</option>
            </select>

            <select name="matiere" id="matiere" placeholder="{{__('messages.niveau_scolaire')}}">
                <option disabled selected>Choisissez votre matière</option>
            </select>

            <div class="btn btn-primary" id="getInfo">
               Chercher
            </div>

        </form>


    <script>
        $('#getInfo').click(function() {
            let niveau = $("select#niveaux").val();
            let matiere = $("select#matiere").val();

            if (matiere && niveau) {
                $('#myForm').submit();
            } else alert('Veuillez choisir un niveau et une matière!');


        })

        $('#niveaux').on('change', function(e) {

            let url = `/fr/getNiveau/${e.target.value}`;
            fetch(url)
                .then(res => res.json(res))
                .then(res => {
                    let html = `
                    <select name="niveau_scolaire" id="select" placeholder="{{__('messages.niveau_scolaire')}}">
                        <option disabled selected>Choisissez votre matière</option>`
                    for (let el of res) {
                        html += `
                            <option value="${el.nom}">${el.nom}</option>

                `
                    }
                    html += `</select>`
                    $("#matiere").html(html)
                })
                .catch(err => console.log('Request Failed', err));

        });
    </script>

    <table id="table" data-toggle="table" data-pagination="true" data-locale="fr-FR" data-filter-control="true" data-search="true">
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
                <td> {{$etudiant->person->etablissement}}
                </td>
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
