<?php 
session_start();
  if(isset($_GET['error'])){
    include('pop-up-error/error-login.php');
  }
  else if(isset($_COOKIE['souvenir_log'])){
    $_SESSION['email'] = $_COOKIE['email_login'];
    $_SESSION['password'] = $_COOKIE['password_login'];
    $_SESSION['id_membre'] = $_COOKIE['id_membre'];
    $_SESSION['nom_membre'] = $_COOKIE['nom_membre'];
    $_SESSION['prenom_membre'] = $_COOKIE['prenom_membre'];
    $_SESSION['password_no_hash'] = $_COOKIE['password_no_hash'];
    $_SESSION['date_inscription'] = $_COOKIE['date_inscription'];

    header('Location: choix-ecole.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">

              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bon retour!</h1>
                  </div>
                  <form class="user" method="post" action="traitement.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="inputEmail" aria-describedby="emailHelp" name="email_login" placeholder="entrer l'Adresse Email ..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="inputPassword" name="password_login" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="souvenir" value="souvenir">
                        <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                      </div>
                    </div>
                    <input type="submit" value="Se connecté" class="btn btn-primary btn-user btn-block">
                    <hr>
                    <a href="index.php" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Se connecté avec Google
                    </a>
                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Se connecté avec Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">J'ai oublier mon mot de passe</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">S'inscrire</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
