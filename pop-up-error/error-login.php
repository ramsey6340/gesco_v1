<div class="form-row">
    <button hidden class="btn btn-primary" id="clickButton" type="button" data-toggle="modal" data-target="#exampleModalOk">
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalOk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">ERREUR</h5>
            </div>
            <div class="modal-body"> 
                <form class="user">  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h5>Mot de passe ou login incorrecte</h5>
                            </div>
                        </div>
            		<div class="modal-footer">
            			<input type="submit" value="OK" class="btn btn-primary" >
                	</div>
                </form>  
            </div>
        </div>
    </div>
</div>

<?php 
if(!isset($_POST['nom_ecole'])){
        ?>
            <script type="text/javascript">
                window.onload = function(){
                    document.getElementById('clickButton').click();
                }
</script>
        <?php
}
 ?>