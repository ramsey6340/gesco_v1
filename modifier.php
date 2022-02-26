<?php 
session_start();
if(isset($_SESSION['nom_membre']) AND isset($_SESSION['prenom_membre']) AND isset($_SESSION['email']) AND isset($_SESSION['password']) AND isset($_SESSION['nom_ecole']) AND isset($_SESSION['type_ecole']) AND $_SESSION['annee_depart'] != NULL AND $_SESSION['annee_fin'] != NULL){
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="center">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modification</h1>
              </div>
              <form class="user" method="post" action="traitement.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="firstName" name="prenom_modif" value="<?= $_SESSION['prenom_membre'] ?>" placeholder="Prenom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="lLastName" name="nom_modif" value="<?= $_SESSION['nom_membre'] ?>" placeholder="Nom">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="inputEmail" name="email_modif" value="<?= $_SESSION['email'] ?>" placeholder="Adresse Email">
                </div>
                <div class="form-group row">

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="inputPassword" name="password_modif" value="<?= $_SESSION['password_no_hash'] ?>" placeholder="Mot de passe">
                    <input type="checkbox" onclick="myFunction()">voir le mot de passe
                    <script>
                    function myFunction(){
                      var x = document.getElementById("inputPassword");
                      if (x.type === "password") {
                        x.type = "text";
                      }
                      else{
                        x.type = "password";
                      }
                    }
                    </script>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="newNameSchool" name="nom_ecole_modif" value="<?= $_SESSION['nom_ecole']; ?>" placeholder="Nom de l'ecole">
                  </div>
                </div>
                <div class="form-group">
                  <label>Type de l'ecole</label>
                  <select name="type_ecole_modif" class="form-control form-control-user">
                    <option value="universite" <?php if($_SESSION['type_ecole'] == "universite"){echo 'selected';} ?>>Université</option>
                    <option value="lycee" <?php if($_SESSION['type_ecole'] == "lycée"){echo 'selected';} ?>>Lycée</option>
                    <option value="fondamentale" <?php if($_SESSION['type_ecole'] == "fondamentale"){echo 'selected';} ?>>Fondamental</option>
                    <option value="professionnel" <?php if($_SESSION['type_ecole'] == "professionnel"){echo 'selected';} ?>>Professionel</option>
                  </select> 
                </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="date" class="form-control form-control-user" id="firstYear" name="annee_depart_modif" value="<?= $_SESSION['annee_depart'] ?>" placeholder="année de depart" minlength="4" maxlength="4">
                    </div>
                    <div class="col-sm-6">
                      <input type="date" class="form-control form-control-user" id="lastYear" name="annee_fin_modif" value="<?= $_SESSION['annee_fin'] ?>" placeholder="année de fin" minlength="4" maxlength="4">
                    </div>
                </div>

                <input type="submit" value="Modifier" class="btn btn-primary btn-user btn-block">
                <input type="button" value="Annulé" onclick="history.back()" class="btn btn-google btn-user btn-block">
              </form>
              <hr>
                <div class="text-center">
                  <a class="small" href="creation-ecole.php">Créer une nouvelle école</a>
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
<?php 
}
 ?>