<?php 
session_start();
    include('db-connect.php');
    $req = $db->prepare('SELECT annee_scolaire, etat_annee FROM annee_scolaire_gesco WHERE id_ecole=:id_ecole');
    $req->execute(array('id_ecole'=>$_SESSION['id_ecole']));
 ?>
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
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Les année scolaire</h1>
                  </div>
                  <form class="user" method="post" action="traitement.php">
                    <div class="form-group">
                      <label>Choisissez une année scolaire</label>
                        <select name="choix_annee" class="form-control form-control-user" required>
                        <?php
                          while($data = $req->fetch()){
                            if($data['annee_scolaire'] == NULL){

                            }
                            else{
                              ?>   
                            <option value="<?php echo $data['annee_scolaire']; ?>"><?php echo $data['annee_scolaire']; ?></option>
                        <?php
                             }
                           }
                        ?>
                        </select>                      
                    </div>
                   
                    <div class="form-group">
                      
                    </div>
                    <input type="submit" value="Validé" class="btn btn-primary btn-user btn-block">
                    <a href="index.php" class="btn btn-google btn-user btn-block">Annulé</a>
                  </form>
                  <div class="text-center">
                    <a class="small" href="creation-annee.php">Créer une nouvelle année scolaire</a>
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
