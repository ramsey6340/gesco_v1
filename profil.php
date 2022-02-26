<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2</title>

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
            <div class="center">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="content-center">
                    <div><img class="profil" src="img/login.png"></div>
                    <div class="text-center">
                      <h3><?php echo $_SESSION['prenom_membre'].' '.$_SESSION['nom_membre']; ?></h3>
                      <h5><?php echo $_SESSION['email']; ?></h5>
                    </div>
                    <div class="text-center">
                      <h5>Nom de l'école: <?php echo $_SESSION['nom_ecole']; ?></h5>
                      <h5>Type de l'ecole: <?php echo $_SESSION['type_ecole']; ?></h5>
                      <h5>Date d'inscription: <?php echo $_SESSION['date_inscription']; ?></h5>
                      <h5>Année scolaire: <?php echo $_SESSION['annee_scolaire']; ?></h5>
                    </div>
                  </div>
                  <div class="user">
                    <a href="modifier.php" class="btn btn-primary btn-user btn-block">
                      Modifié
                    </a>
                  </div><br>
                  <div class="user">
                    <input type="button" value="Retour" onclick="history.back()" class="btn btn-google btn-user btn-block">
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
