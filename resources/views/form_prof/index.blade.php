@extends("../master")
  <head>
    <meta charset="utf-8" />
    <title>Formulaire Prof</title>
    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>



  
  <body>
    <div class="page-content">
      <div class="form-v1-content">
        <div class="wizard-form">
          <form class="form-register" action="#" method="post">
            <div id="form-total">
              <!-- SECTION 1 -->
              <h2>
                <p class="step-icon"><span>1</span></p>
                <span class="step-text">Informations Personnelles</span>
              </h2>
              <section>
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
                          name="first-name"
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
                          name="last-name"
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
                          name="your_email"
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
                          name="phone"
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
                          name="date"
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
                          name="Lieu"
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
                          name="Lieu"
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
                          name="Niveau"
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
                        ><br /><br />
                        <select class="form-control">
                          <option value="oui">oui</option>
                          <option value="non">non</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row form-row-date">
                    <div class="form-holder form-holder-2">
                      <div class="plan-total">
                        <span class="plan-title"
                          >Souffrez-vous d'asthme ou d'essoufflement? </span
                        ><br /><br />
                        <select class="form-control">
                          <option value="oui">oui</option>
                          <option value="non">non</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row form-row-date">
                    <div class="form-holder form-holder-2">
                      <div class="plan-total">
                        <span class="plan-title"
                          >Souffrez-vous d'une mauvaise vue? </span
                        ><br /><br />
                        <select class="form-control">
                          <option value="oui">oui</option>
                          <option value="non">non</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row form-row-date">
                    <div class="form-holder form-holder-2">
                      <div class="plan-total">
                        <span class="plan-title"
                          >Souffrez-vous d'une mauvaise audition? </span
                        ><br /><br />
                        <select class="form-control">
                          <option value="oui">oui</option>
                          <option value="non">non</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- SECTION 3 -->
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/main.js"></script>
  </body>