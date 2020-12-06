@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row col-12 justify-content-center">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="w-100"></div>


            <form method="POST" action="/fr/admin/subject/add" class="border border-light p-5">
                @csrf
                <p class="h4 mb-4 text-center">Ajouter une nouvelle matière</p>


                <label for="nom">Nom de la matière</label>
                <input type="text" id="nom" name="nom" class="form-control mb-4"
                       placeholder="Entrer le nom de la matière...">

                <label for="prix">Prix </label>
                <input type="number" id="prix" name="prix" class="form-control mb-4"
                       placeholder="Entrer le prix de la matière...">

                       <label for="niveau">Niveau </label>
                <input type="text" id="niveau" name="niveau" class="form-control mb-4"
                       placeholder="Entrer le niveau de la matière...">

                <button class="btn btn-info btn-block" type="submit">Ajouter</button>
            </form>
        </div>
    </div>

@endsection
