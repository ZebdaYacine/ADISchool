

<?php  function logoutModal()
{ ?> 
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
                        <a class="btn btn-primary" href="<?php echo $GlobalPath ?>  /useCases/loginUseCase/loginController.php?logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
<?php } ?> 


<?php  function ModifyModal_F() { ?>


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

<?php function ConfermDell_F() { ?>

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
<?php }?>


<?php  function AddModale_C() { ?>


        <div class="modal fade" id="AddCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une nouvelle catégorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
              <form action="formationController.php" method="POST" id='AdCat'>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-5 col-form-label">Nom de La Category</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="CategoryName" id="AddCname" msg="Nom de catégorie">
                        </div>
                      </div>
                    
                    <input type="hidden" name="ID" value="-1" id="ModId">
                    <input type="hidden" name="action" value="Add_C">
              </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" onclick="Send_PostRequest('AdCat','categoryController.php')" id="insert">Ajouter</button>
                
              </div>
            </div>
          </div>
        </div>
<?php } ?>