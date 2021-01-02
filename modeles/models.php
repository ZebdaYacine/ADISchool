<?php
include_once 'db.php';
?>

<?php

function logoutModal() {
    ?> 
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="useCases/loginUseCase/loginController.php?logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?> 


<?php

function ModifyModal_F() { ?>
    <div class="modal fade" id="ModForModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">modifier la formation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="formationController.php" method="POST" id='ModForm'>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-5 col-form-label">Nom de La Formation</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="F_name" id="ModFname">
                            </div>
                        </div>

                        <input type="hidden" name="ID" value="-1" id="ModId">
                        <input type="hidden" name="action" value="modify">
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" onclick="Submit_me('ModForm')">Modifier</button>

                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php

function ConfermDell_F() { ?>
    <div class="modal fade" id="ConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmer La Suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    êtes-vous sûr de vouloir supprimer la formation <span id="FormationVal" class="text-danger"></span>               
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                    <form action="formationController.php" method="POST">
                        <input type="hidden" name="action" value="dell">
                        <input type="hidden" name="ID" value="-1" id="IdFormation">
                        <button type="submit" class="btn btn-primary">Oui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php

function Add_Level() { ?>
    <div class="modal fade" id="insertModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" id="insert_form" action="levelUseCase.php">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">neveau Niveau</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Niveau</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">nombre de seances</label>
                            <input type="text" id="nbr" name="nbr" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="formation">formation</label>
                            <select class="form-control" id="formation" name="formation">
                                <?php
                                $db = new db();
                                $list = $db->Get_Formation();
                                echo "<option>select formation</option>";
                                foreach ($list as $formation) {
                                        echo "<option>".$formation['trainingName'] ."</option>";
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Annuler</button>
                        <input type="submit"  class="btn btn-outline-success" onclick="Submit_me" id="insert" name="insert"  value="Ajouter"/>
                    </div>
                    <input type="hidden" name="action" value="add">
                </div>
            </div>
        </form>
    </div>
<?php } ?>



<?php

function ModifyModal_L() { ?>
    <div class="modal fade" id="ModForModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">modifier le niveau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="levelUseCase.php" method="POST" id='ModForm'>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-5 col-form-label">Nom de Niveau</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="L_name" id="ModLname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-5 col-form-label">Nom de Niveau</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="nbr_name" id="Modnbr">
                            </div>
                        </div>
                        <input type="hidden" name="ID" value="-1" id="ModId">
                        <input type="hidden" name="action" value="modify">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" onclick="Submit_me('ModForm')">Modifier</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php

function ConfermDell_L() { ?>
    <div class="modal fade" id="ConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmer La Suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    êtes-vous sûr de vouloir supprimer le niveau <span id="FormationVal" class="text-danger"></span>               
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                    <form action="levelUseCase.php" method="POST">
                        <input type="hidden" name="action" value="dell">
                        <input type="hidden" name="ID" value="-1" id="IdFormation">
                        <button type="submit" class="btn btn-primary" onclick="Submit_me('ModForm')">Oui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>