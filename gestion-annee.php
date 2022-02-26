<?php 
session_start();
if(isset($_GET['error'])){
  include('pop-up-error/error-annee.php');
}
$_SESSION['lien'] = 'gestion-annee.php';
include('db-connect.php');
$req = $db->query('SELECT * FROM annee_scolaire_gesco ORDER BY etat_annee DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <a href="https://icons8.com/icon/43949/supprimer"></a>
  <a href="https://icons8.com/icon/oR5tfd18Ei7C/modifier"></a>

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/ths/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

      <?php include("menu.php"); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gestion des années scolaire</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Inscription d'utilisateur</a> -->
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
          <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Ajouter une année</span>
  </button>
<!-- Modal -->              
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'une nouvelle année scolaire</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body"> 
            
                                           <!-- Form Group (username)-->
                         <form class="user" action="traitement.php" method="post">
                                           
                                            <!-- Form Row-->
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="firstDate"><b>Date de debut</b></label>
                                                    <input class="form-control" id="firstDate" name="annee_depart" type="date" required />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="lastDate"><b>Date de fin</b></label>
                                                    <input class="form-control" id="lastDate" name="annee_fin" type="date" required />
                                                </div>
                                            </div>
            <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button>
            <input type="submit" value="Enregistrer" class="btn btn-primary" >
                </div></form>  
            </div>  
        </div>
    </div>
</div>        
         </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Les années enregistrés</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Année scolaire</th>
                      <th>Debut année</th>
                      <th>Fin année</th>
                      <th>Année en cour</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Année scolaire</th>
                      <th>Debut année</th>
                      <th>Fin année</th>
                      <th>Année en cour</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                  while($data = $req->fetch()){
                    echo '<tr>';
                      echo '<td>'.$data['annee_scolaire'].'</td>';
                      echo '<td>'.$data['annee_depart'].'</td>';
                      echo '<td>'.$data['annee_fin'].'</td>';
                      echo '<td>';
                        if($data['etat_annee'] == 1){
                          echo '<div class="text-center">';
                            echo '<input type="image" data-toggle="modal" data-target="#logoutActuallyYear" src="https://img.icons8.com/ios-glyphs/33/26e07f/ok.png" alt="icone-annee-actuel"/>';
                          echo '</div>';
                        }
                        else{
                          echo '<div class="text-center">';
                            echo '<input type="image" data-toggle="modal" data-target="#logoutNoActuallyYear" src="https://img.icons8.com/ios-filled/30/fa314a/xbox-x.png" alt="icone-annee-pas-actuel"/>';
                            echo '</div>';
                        }
                      echo '</td>';
                      echo '<td>';
                        echo '<div class="text-center">';
                          echo '<input type="image" data-toggle="modal" data-target="#logoutModif" src="https://img.icons8.com/material-outlined/24/000000/edit--v4.png" alt="icone-modif"/>';
                        echo '</div>';
                      echo '</td>';
                      echo '<td>';
                        echo '<div class="text-center">';
                          echo '<input type="image" src="https://img.icons8.com/small/32/000000/filled-trash.png" alt="icon-supprime" data-toggle="modal" data-target="#logoutDelete"/>';
                        echo '</div>';
                      echo '</td>';
                    echo '</tr>';
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->


      <!-- Logout Delete-->
  <div class="modal fade" id="logoutDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prêt à supprimer ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Clique sur "Supprimer" si tu es prêt à supprimer l'année.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <a class="btn btn-primary" href="#">Supprimer</a>
        </div>
      </div>
    </div>
  </div>



<!-- Logout Modif-->
<div class="modal fade" id="logoutModif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prêt à modifier ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">
          <form class="user" action="traitement.php" method="post">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="small mb-1" for="firstDate"><b>Date de debut</b></label>
                <input class="form-control" id="firstDate" name="annee_depart_modify" type="date" required />
              </div>
              <div class="form-group col-md-6">
                <label class="small mb-1" for="lastDate"><b>Date de fin</b></label>
                <input class="form-control" id="lastDate" name="annee_fin_modify" type="date" required />
              </div>
            </div>
            <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Annulé</button>
        <input type="submit" value="Modifier" class="btn btn-primary" >
      </div>     
          </form>
        </div>
      </div>
    </div>
  </div>



<!-- Logout logoutActuallyYear-->
<div class="modal fade" id="logoutActuallyYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prêt à modifier ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Ne plus definir comme etant l'année en cour ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
          <a class="btn btn-primary" href="#">Oui</a>
        </div>
      </div>
    </div>
  </div>


<!-- Logout logoutNoActuallyYear-->
<div class="modal fade" id="logoutNoActuallyYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prêt à modifier ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Definir comme etant la nouvelle année en cour ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
          <a class="btn btn-primary" href="#">Oui</a>
        </div>
      </div>
    </div>
  </div>

     <?php include("footer.php"); ?>
</body>
</html>
