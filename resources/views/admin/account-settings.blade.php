@extends('../master')

@section("content")

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

        @if(session("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session("success")}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session("error"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session("error")}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        @endif

        <div class="w-100"></div>


        <form method="POST" action="url{{/fr/admin/account/change-password/}}" class="border border-light p-5">
            @csrf
            <p class="h4 mb-4 text-center">Changer le mot de passe</p>


            <label for="nom">Mot de passe actuel</label>
            <input type="password" id="currentPassword" name="currentPassword" class="form-control mb-4" placeholder="Entrer le mot de passe actuel...">

            <label for="prix">Nouveau mot de passe </label>
            <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Entrer le nouveau mot de passe...">

            <label for="niveau">Confirmer le nouveau mot de passe </label>
            <input type="password" id="passwordConfirmation" name="passwordConfirmation" class="form-control mb-4" placeholder="Confirmer le nouveau mot de passe">

            <button class="btn btn-info btn-block" type="submit">Confirmer</button>
        </form>
    </div>
</div>



@endsection()
