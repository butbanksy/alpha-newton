@extends('master')
@section("content")
    @include('admin.header')

    <div class="container ">
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
        <br>
        <form id="myForm" action="/fr/admin/students/excel" method="post">
            @csrf
            <select name="niveau_scolaire" id="niveaux" placeholder="{{__('messages.niveau_scolaire')}}">
                <option disabled selected>Choisissez votre niveau scolaire</option>
                <option value="college">Collège</option>
                <option value="5eme">5ème</option>
                <option value="6eme">6ème</option>
                <option value="bacar">Bac Arabe</option>
                <option value="bacfr">Bac Francais</option>
            </select>
&nbsp; &nbsp; &nbsp; &nbsp;
            <select name="matiere" id="matiere" placeholder="{{__('messages.niveau_scolaire')}}">
                <option disabled selected>Choisissez votre matière</option>
            </select>
&nbsp;&nbsp; &nbsp; &nbsp;
            <div class="btn btn-primary" id="getInfo">
               Exporter
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




</div>
</div>



@endsection()
