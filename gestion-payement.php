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
            <h1 class="h3 mb-0 text-gray-800">Gestion des payements de scolarité</h1>
            
<!-- Modal -->
    </div>        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">payement des scolarités</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Etat du compte</th>
                      <th>Nom élève</th>
                      <th>Prenom élève</th>
                      <th>Numero matricule</th>
                      <th>Classe</th>
                      <th>Date de naissance</th>
                      <th>Lieu de naissance</th>
                      <th>parent</th>
                      <th>Payement</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Etat du compte</th>
                      <th>Nom élève</th>
                      <th>Prenom élève</th>
                      <th>Numero matricule</th>
                      <th>Classe</th>
                      <th>Date de naissance</th>
                      <th>Lieu de naissance</th>
                      <th>parent</th>
                      <th>Payement</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                    <td>Toure</td>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                     <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                     <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>OUI</td>
                      <td>Sacko</td>
                      <td>Abdallah</td>
                      <td>HT24JUP234</td>
                      <td>Licence2</td>
                      <td>2001-08-23</td>
                      <td>BAMAKO</td>
                      <td>TOURE Modibo</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                  </tbody>
<!-- Debut du boutton MODIF -->
                  <!-- Modal -->
               
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gerer le payement</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body"> 
            
                                           <!-- Form Group (username)-->
                         <form class="user" action="#" method="post">
                                           
                                            <!-- Form Row-->
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                               <div class="form-group col-md-6">
                                                    <div class="form-row">
                                                      <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>JANVIER</b></label>
                                                    </div>
                                                </div>
                                               
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>FEVRIER</b></label>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>MARS</b></label>
                                                </div>
                                               
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>AVRIL</b></label>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>MAI</b></label>
                                                </div>
                                               
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>JUIN</b></label>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                               <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>JUILLET</b></label>
                                                </div>
                                               
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>AOUT</b></label>
                                                </div>
                                               
                                            </div>
                                              <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>SEPTEMBRE</b></label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>OCTOBRE</b></label>
                                                </div>     
                                              </div>
                                              <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>NOVEMBRE</b></label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="selectMonth" name="mois-paye" type="checkbox"/>
                                                    <label class="small mb-1" for="selectMonth"><b>DECEMBRE</b></label>
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
<!-- Fin du boutton MODIF -->

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
