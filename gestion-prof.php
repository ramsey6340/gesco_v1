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
            <h1 class="h3 mb-0 text-gray-800">Gestion des enseignants et leurs payements</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Inscription d'utilisateur</a> -->
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
              <span class="icon text-white-50"><i class="fas fa-flag"></i></span>            
              <span class="text">Ajouter un enseignant</span>
            </button>


<!-- Modal -->
               
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un enseignant</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body"> 
            
                                           <!-- Form Group (username)-->
                         <form class="user" action="#" method="post">
                                           
                                            <!-- Form Row-->
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputFirstName"><b>Prenom enseignant</b></label>
                                                    <input class="form-control" id="inputFirstName" name="prenom-prof" type="text" placeholder="Entrer le prénom de l'enseignant" required />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputLastName"><b>Nom de l'enseignant</b></label>
                                                    <input class="form-control" id="inputLastName" name="nom-prof" type="text" placeholder="Entrer le nom de l'enseignant" required />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    
                                                    <label class="small mb-1" for="inputClassroom"><b>Classe</b></label>
                                                    <select name="classe" class="form-control">
                                                      <option value="licence1">Licence1</option>
                                                      <option value="licence2">Licence2</option>
                                                      <option value="licence3">Licence3</option>
                                                      <option value="master1">Master1</option>
                                                      <option value="master2">Master2</option>
                                                    </select>
                                                    
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputAge"><b>Age</b></label>
                                                    <input class="form-control" id="inputAge" name="age-prof" type="number" placeholder="Entrer l'age" required />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputPlaceOfBirth"><b>Heures</b></label>
                                                    <input class="form-control" id="inputNumberHours" name="heure-prof" type="number" placeholder="Entrer le nombre d'heure" required />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputGraduate"><b>Diplôme</b></label>
                                                     <select name="diplome" class="form-control">
                                                      <option value="baccalaureat">Baccalaureat</option>
                                                      <option value="licence">Licence</option>
                                                      <option value="master">Master</option>
                                                      <option value="doctorat">Doctorat</option>
                                                      <option value="ma">Maitre Assistant (MA)</option>
                                                      <option value="mc">Maitre de conference (MC)</option>
                                                      <option value="prof">Professeur</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <!-- Form Group (first name)-->
                                                
                                                <!-- Form Group (last name)-->
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputNumberActivity"><b>Activités</b></label>
                                                    <input class="form-control" id="inputNumberActivity" name="activite" type="number" placeholder="Enter le nombre d'activité extra-scolaire" required />
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
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Les enseignants enregistrés</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Age</th>
                      <th>Classes</th>
                      <th>Heures par semaine</th>
                      <th>Diplômes</th>
                      <th>Absences</th>
                      <th>Activités</th>
                      <th>Avis des élèves</th>
                      <th>Payements</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Age</th>
                      <th>Classes</th>
                      <th>Heures par semaine</th>
                      <th>Diplômes</th>
                      <th>Absences</th>
                      <th>Activités</th>
                      <th>Avis des élèves</th>
                      <th>Payements</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                       <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                       <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                       <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                       <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIDBE</td>
                      <td>Abdoulaye</td>
                      <td>34</td>
                      <td>GIT</td>
                      <td>12</td>
                      <td>DOCTORAT</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Bon</td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal-1">
                          <span class="icon text-white-50"><i class="fas fa-flag"></i></span>    
                          <span class="text">MODIF</span>
                        </button>
                      </td>
                    </tr>
                  </tbody>
<!-- Debut du boutton MODIF -->
                  <!-- Modal -->
               
<div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Faire une inscription</h5>
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
