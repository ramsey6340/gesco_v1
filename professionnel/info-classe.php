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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
            <h1 class="h3 mb-0 text-gray-800">Information concernant la classe <?= $_SESSION['classe'] ?></h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Inscription d'utilisateur</a> -->
           
          </div>
      
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Information de la classe</h6>
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
