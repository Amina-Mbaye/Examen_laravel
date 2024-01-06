<!DOCTYPE html>
<html lang="zxx">

   <head>
      <title>Accueil</title>
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
    <div class="sub-banner-section-outer">
    <header class="header">
        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="index.html">
                            <figure class="navbar-logo mb-0">
                            <img class="img-fluid" src="assets/images/logo.png" alt="">
                            </figure>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a class="nav-link scroll" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="/user">la liste des inscrits</a>
                            </li>


                        </ul>
                        <div class="login-outer-div">
                            <ul class="login-listing m-0 p-0">
                                <li class="list-unstyled d-lg-inline-block"><a class="nav-link scroll" href="/connexion">Connexion</a></li>
                                <li class="list-unstyled d-lg-inline-block"><a class="nav-link scroll sign-up" href="/inscrit">S'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">La liste des inscrits</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- MAIN SECTION -->
<section class="blog-posts">
    <div class="container">
       <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div id="blog" class="three-column col-xl-12">
             <div class="row">
                <div class="">
                   <div class="float-left w-100 post-item border mb-4">
                    <div class="table-responsive">
                        @if ($users)

                        <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                            <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Numéro</th>
                                    <th>Genre</th>
                                    <th>Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                    <td>{{$user->Prenom}}</td>
                                    <td><a  class="mr-2 bg-primary rounded-circle text-center text-uppercase d-inline-block"></a> <span class="text-pale-sky">{{$user->Nom}}</span>
                                    </td>
                                    <td class="text-muted">Pour le:{{$user->Email}}</td>
                                    <td><a  class="text-primary">{{$user->Tel}}</a></td>
                                    <td><a  class="text-primary">{{$user->Sexe}}</a></td>
                                    <td><span class="label label-xl label-rounded label-warning">{{$user->Adresse}}</span>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        @else
                        <div class="sub-banner-text">
                            <h1 class="text-black mb-lg-4 mb-3">Personne n'est inscrit.</h1>

                        </div>
                        @endif
                      <!--post-item-->
                   </div>
                   <!--col-->
                </div>
            </div>
            <!--blog-->
         </div>
         <!--row-->
      </div>
   </div>
</section>

<script src="assets/js/wow.js"></script>
<script>new WOW().init();</script>
<script src="assets/js/counter-script.js"></script>
</body>
</html>
