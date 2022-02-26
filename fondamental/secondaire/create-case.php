<div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $_SESSION['classe'] ?></div>         
                   	</div>
                    <div class="col-auto">
                        <?php 
                        if($_SESSION['choix']=='oui'){
                         ?>
                         <a href="liste-sous-classe.php"><i class="fas fa-calendar fa-2x text-gray-300"></i></a>
                        <?php 
                        }
                        else{
                            ?>
                            <a href="info-classe.php"><i class="fas fa-calendar fa-2x text-gray-300"></i></a>
                        <?php
                        }
                      	?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>