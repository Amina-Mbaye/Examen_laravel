<!DOCTYPE html>
<html lang="zxx">

   <head>
      <title>Sign-Up | Hotline</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Hotline is the perfect WHMCS HTML template for your Hosting Business">
      <meta name="keywords" content="Web hosting, WHMCS template, hosting template">
      <meta name="author" content=“DesigningMedia”>
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
      <link rel="stylesheet" href="assets/css/all.css" >
      <link rel="stylesheet" href="assets/css/all.min.css" >
      <link rel="stylesheet" href="assets/css/style.css" type="text/css">
      <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
      <link rel="stylesheet" href="assets/css/custom-style.css" type="text/css">
      <link rel="stylesheet" href="assets/css/special-classes.css" type="text/css">
   </head>
   <body>
      <!-- Sign-Up Form section-->
      <section class="login-form sign-up-form d-flex align-items-center">
         <div class="container">
            <div class="login-form-title text-center">
               <a href="index.html">

               </a>
               <h2 class="text-white">Créer votre compte</h2>
            </div>
               <div class="login-form-box">
                  <div class="login-card">
                     <form method="POST" action="/user">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName1">Votre Prénom*:</label>
                          <input  class="input-field form-control" type="text"  id="Prenom" name="Prénom" placeholder="Elon Musk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Votre Nom*:</label>
                            <input  class="input-field form-control" type="text"  id="nom" name="Nom" placeholder="Elon Musk">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Votre e-mail*:</label>
                          <input  class="input-field form-control" type="email"  id="Email" name="Email" placeholder="eelon@tesla.com">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Entre Votre Mot de passe*: <small>min. 6 characters</small></label>
                           <input  class="input-field form-control" type="password"  id="Mot-de-passe" name="Mot-de-passe" placeholder="mot de passse">
                         </div>
                         <div class="form-group">
                           <label for="inputNoncorehub">Votre Numéro*:</label>
                           <input  class="input-field form-control" type="tel" name="Tel" id="Tel" placeholder="+221" pattern="[0-9]{09}" title="Le numéro de téléphone doit être composé de 9 chiffres.">
                         </div>
                         <div class="form-group">
                            <label for="inputNoncorehub">Votre Genre*:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexe" id="Sexe" value="Homme">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Homme
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexe" id="Sexe" value="Femme">
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Femme
                                </label>
                              </div>
                         </div>
                         <div class="form-group">
                            <label for="inputNoncorehub">Votre Entreprise ou Société*:</label>
                            <input  class="input-field form-control" type="text" name="Etreprise-Société" id="Entreprise-Societe" placeholder="SOCCOSIM">
                          </div>

                        <div class="form-group">
                            <label for="inputNoncorehub">Votre Adresse*:</label>
                            <input  class="input-field form-control" type="text" name="Adresse" id="Adresse" placeholder="New york">
                          </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-0">S'inscrire</button>
                        </div>
                     </form>
                  </div>
                  <div class="join-now-outer text-center">
                     <a class="text-white" href="/">Retourner à la page d'accueil</a>
                  </div>
               </div>
         </div>
      </section>


      <script src="assets/js/wow.js"></script>
      <script>new WOW().init();</script>
      <script src="assets/js/counter-script.js"></script>
   </body>
</html>







