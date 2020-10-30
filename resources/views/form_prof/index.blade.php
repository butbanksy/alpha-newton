@extends('master')


@section("title","Login")

@push("top")
@endpush

@section("content")
    <div class="page-content">
        <div class="form-v1-content">
            <div class="wizard-form">
                <form class="form-register" action="/inscription/professeur" method="post">
                    <div id="form-total">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                    <!-- SECTION 1 -->
                        <h2>
                            <p class="step-icon"><span>1</span></p>
                            <span class="step-text">Informations Personnelles</span>
                        </h2>

                        <section>
                            @csrf
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading"></h3>
                                    <p></p>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Nom</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="first-name"
                                                name="nom"
                                                placeholder="Votre Nom"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Prénom</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="last-name"
                                                name="prenom"
                                                placeholder="Votre Prénom"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Courriel</legend>
                                            <input
                                                type="text"
                                                name="email"
                                                id="your_email"
                                                class="form-control"
                                                pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"
                                                placeholder="example@email.com"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Téléphone</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="phone"
                                                name="telephone"
                                                placeholder="+21267891011112"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Date de Naissance</legend>
                                            <input
                                                type="date"
                                                class="form-control"
                                                id="date_naiss"
                                                name="date_naissance"
                                                placeholder="jour/mois/année"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Lieu de Naissance</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="lieu"
                                                name="lieu_naissance"
                                                placeholder="Safi"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Adresse</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="lieu"
                                                name="adresse"
                                                placeholder="N° 11 quartier AMAL1 Safi"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Niveau Scolaire</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="niveau"
                                                name="niveau_scolaire"
                                                placeholder="2ème année Bac"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Matière</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="option"
                                                name="option"
                                                placeholder="SVT"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Etablissement</legend>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="etablissement"
                                                name="etablissement"
                                                placeholder="AlPHA Newton"
                                                required
                                            />
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <p class="step-icon"><span>2</span></p>
                            <span class="step-text">Informations Médicaux</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading"></h3>
                                    <p></p>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <div class="plan-total">
                    <span class="plan-title"
                    >Suivez-vous un traitement pour une maladie
                      spécifique? </span
                    ><br/><br/>
                                            <select class="form-control" name="maladie_specifique">
                                                <option value="1">oui</option>
                                                <option value="0">non</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <div class="plan-total">
                    <span class="plan-title"
                    >Souffrez-vous d'asthme ou d'essoufflement? </span
                    ><br/><br/>
                                            <select class="form-control" name="maladie_respiratoire">
                                                <option value="1">oui</option>
                                                <option value="0">non</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <div class="plan-total">
                    <span class="plan-title"
                    >Souffrez-vous d'une mauvaise vue? </span
                    ><br/><br/>
                                            <select class="form-control" name="maladie_vue">
                                                <option value="1">oui</option>
                                                <option value="0">non</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <div class="plan-total">
                    <span class="plan-title"
                    >Souffrez-vous d'une mauvaise audition? </span
                    ><br/><br/>
                                            <select class="form-control" name="maladie_audition">
                                                <option value="1">Oui</option>
                                                <option value="0">Non</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- SECTION 3 -->
                    </div>
                    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/jquery.steps.js')}}"></script>

@endsection
