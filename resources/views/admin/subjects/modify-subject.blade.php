@extends('master')
@section('content')
@include('admin.header')

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


        <form method="POST" action="/fr/admin/subject/edit/{{$subject->id}}" class="border border-light p-5">
            @csrf
            @method('PUT')
            <p class="h4 mb-4 text-center">Modifier une matière</p>


            <label for="nom">Nom de la matière</label>
            <input type="text" id="nom" name="nom" value={{$subject->nom}} class="form-control mb-4
                       placeholder=" Entrer le nom de la matière...">

            <label for="prix">Prix </label>
            <input type="number" id="prix" name="prix" value={{$subject->prix}} class="form-control mb-4
                       placeholder=" Entrer le prix de la matière...">

            <label for="niveau">Niveau </label>
            <select name="niveau" id="niveau" placeholder="{{__('messages.niveau_scolaire')}}">
                <option disabled selected>Choisissez votre niveau scolaire</option>
                <option value="college">Collège</option>
                <option value="5eme">5ème</option>
                <option value="6eme">6ème</option>
                <option value="bacar">Bac Arabe</option>
                <option value="bacfr">Bac Francais</option>
            </select>

            <button class="btn btn-info btn-block" type="submit">Modifier</button>
        </form>
    </div>
</div>

@endsection
