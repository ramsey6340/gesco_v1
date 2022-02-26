<?php session_start(); ?>
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
            <h1 class="h3 mb-0 text-gray-800">Gestion des sessions</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Inscription d'utilisateur</a> -->
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
          <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Ajouter une session</span>
  </button>


<!-- Modal -->
               
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'une nouvelle session</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body"> 
            
                                           <!-- Form Group (username)-->
                         <form class="user" action="#" method="post">
                                           
                                            <!-- Form Row-->
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputFirstName"><b>Date de debut</b></label>
                                                    <input class="form-control" id="inputFirstName" name="prenom" type="date" placeholder="Entrer votre prénom" required />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputLastName"><b>Date de fermeture</b></label>
                                                    <input class="form-control" id="inputLastName" name="nom" type="date" placeholder="Enter votre nom" required />
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
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Les sessions enregistrés</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Année scolaire</th>
                      <th>Debut session</th>
                      <th>Fin session</th>
                      <th>Année en cour</th>
                      <th>Select</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Année scolaire</th>
                      <th>Debut session</th>
                      <th>Fin session</th>
                      <th>Année en cour</th>
                      <th>Select</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>1</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                     <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                     <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                     <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                     <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👎</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>2019-05-10</td>
                      <td>2020-03-05</td>
                      <td>0</td>
                      <td>👍</td>
                      <td>MODIF</td>
                      <td><img src="img/supprimer.png"></td>
                    </tr>
                    >
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include("footer.php"); ?> 

</body>

</html>
