@extends('master')

<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }


    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>
@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="row justify-content-center">
                        <div
                            style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                            <i style="font-size:100px; color: #88B04B;">✓</i>
                        </div>
                    </div>
                    <h1>Inscription Réussie</h1>
                    <p>Votre inscription a bien été faite;<br/>Veuillez imprimer le reçu de l'inscription!</p>
                </div>
            </div>

        </div>
    </div>
@endsection
