@extends("master")
@section("content")

    <head>
        <style>
            body {
                padding-top: 68px;
                padding-bottom: 50px;
            }

            .image-container {
                position: relative;
            }

            .image {
                opacity: 1;
                display: block;
                width: 100%;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }

            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }

            .image-container:hover .image {
                opacity: 0.3;
            }

            .image-container:hover .middle {
                opacity: 1;
            }
        </style>
    </head>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/fr/admin/students">
                    <div class="btn btn-primary mb-3"><span aria-hidden="true">&#8592;</span>
                        Revenir à l'accueil
                    </div>
                </a>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img
                                        src="{{asset('/images/student.png')}}"
                                        id="imgProfile"
                                        style="width: 150px; height: 150px" class="img-thumbnail"/>
                                </div>
                                <div class="userData ml-3">
                                    <h6 class="d-block"
                                        style="font-size: 1.5rem; font-weight: bold">{{$etudiant->person->nom . " " . $etudiant->person->prenom}}</h6>
                                </div>
                                <div class="pl-2 float-right">
                                    <a href="/fr/admin/student/edit/{{$etudiant->id}}">
                                        <div class="btn btn-info mb-3">Modifier
                                        </div>
                                    </a>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                           value="Discard Changes"/>
                                    <a>
                                        <div class="btn btn-danger mb-3" data-toggle="modal"
                                        data-target="#exampleModal">Supprimer <span aria-hidden="true">&#10005;
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab"
                                           href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Données
                                            Personelles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="maladies-tab" data-toggle="tab"
                                           href="#maladies" role="tab" aria-controls="maladies"
                                           aria-selected="false">Maladies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="responsable-tab" data-toggle="tab"
                                           href="#responsable" role="tab" aria-controls="responsable"
                                           aria-selected="false">Responsable Légal(e)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="matiere-tab" data-toggle="tab"
                                           href="#matieres" role="tab" aria-controls="matieres"
                                           aria-selected="false">Matieres</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                         aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nom et Prénom</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->nom . " " . $etudiant->person->prenom}}
                                            </div>
                                        </div>
                                        <hr/>


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Adresse</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->adresse}}
                                            </div>
                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->email}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Téléphone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->telephone}}
                                            </div>
                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Date de Naissance</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->date_naissance}}
                                            </div>
                                        </div>
                                        <hr/>


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Lieu de Naissance</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->lieu_naissance}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Etablissement</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->etablissement}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Niveau Scolaire</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->niveau_scolaire}}
                                            </div>
                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Option</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->option}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nouvel étudiant</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->nouvel_etudiant ? "Oui" : "Non"}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Redoublant</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->redoublant ? "Oui" : "Non"}}
                                            </div>
                                        </div>
                                        <hr/>

                                    </div>
                                    <div class="tab-pane fade" id="maladies" role="tabpanel"
                                         aria-labelledby="maladies-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Maladie Spécifique</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->maladie_specifique ? "Oui" : "Non"}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Maladie Respiratoire</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->maladie_respiratoire ? "Oui" : "Non"}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Maladie Auditive</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->maladie_audition ? "Oui" : "Non"}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Maladie Vue</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->person->maladie_vue ? "Oui" : "Non"}}
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>

                                    <div class="tab-pane fade" id="responsable" role="tabpanel"
                                         aria-labelledby="responsable-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Prénom </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->responsable->prenom}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nom </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->responsable->nom}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Adresse </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->responsable->adresse}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Téléphone </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->responsable->telephone}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->responsable->email}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Profession </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$etudiant->responsable->profession}}
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                    <div class="tab-pane fade" id="matieres" role="tabpanel"
                                         aria-labelledby="matieres-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Matières </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                @foreach($etudiant->subjects as $subject)
                                                    {{" | ". $subject->nom}}
                                                @endforeach()
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suppresion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Voulez-vous vraiment
                    supprimer {{$etudiant->person->prenom." ".$etudiant->person->nom}} ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Revenir <span
                            aria-hidden="true">&times;</span>
                    </button>
                    <a href="/fr/admin/student/delete/{{$etudiant->id}}">
                        <button type="button" class="btn btn-danger">Oui <span aria-hidden="true">&#10003;</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
