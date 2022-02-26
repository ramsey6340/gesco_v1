<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include("menu.php"); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Liste des sous classes</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Inscription d'utilisateur</a> -->
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
              <span class="icon text-white-50"><i class="fas fa-flag"></i></span>            
              <span class="text">Ajouter une sous classe</span>
            </button>
<!-- Modal -->               
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une sous classe</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body"> 
                                           <!-- Form Group (username)-->
                         <form class="user" action="liste-sous-classe-config.php" method="post">
                                           
                                            <!-- Form Row-->
                                            <div class="form-row">                              
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputNameClassroom"><b>Nom de la sous classe</b></label>
                                                    <input class="form-control" id="inputNameClassroom" name="nom-sous-classe" type="text" placeholder="Entrer le nom de la sous classe" required />
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
          <!-- Content Row -->
          <!-- Debut des nouvelle insertion -->
<?php 
 $liste_sous_classe = array();
  if(isset($_POST['nom-sous-classe'])){
    $liste_sous_classe[]=$_POST['nom-sous-classe'];
    foreach ($liste_sous_classe as $classe) {
      $_SESSION['classe'] = $classe;
      $_SESSION['choix']="non";
      include("create-case.php");
    }
 }
 ?>
      <!-- Fin des nouvelles insertion -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <?php include("footer.php"); ?> 
</body>
</html>
