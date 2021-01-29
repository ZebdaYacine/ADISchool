<!DOCTYPE html>
<?php
$GlobalPath = "../..";
include_once '../../modeles/db.php';
include_once '../../modeles/lib.php';
include_once $GlobalPath . "/modeles/models.php";
IsAuth();
?>
<html lang="en">

    <head>
        <!-- header start  -->
        <?php include_once $GlobalPath . "/modeles/header.php"; ?>
        <!-- header end  --> 
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php include_once $GlobalPath . "/modeles/sidebar.php"; ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <?php include_once $GlobalPath . "/modeles/topbar.php"; ?>
                    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ml-5 mr-5">
                        <h2 class="h2 my-0 me-md-auto fw-normal">Inscriptions</h2>
                        <form  class="mr-5 ml-5 mt-1 mb-1" id="search_form" >
                            <input type="text" id="Lname" name="Lname" class="form-control" placeholder="search"> 
                            <input type="hidden" name="action" value="search">
                        </form>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#studentModel">ajouter</button>
                    </header>
                    <label id="error" class="h4 d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ml-5 mr-5 text-danger">

                    </label>
                    <div class="table-responsive mx-sm-0 mx-md-5 mx-lg-5 col-md-11 col-lg-11 col-sm-12">
                        <table class="table table-striped table-sm" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>etudiant</th>
                                    <th>formation</th>
                                    <th>catégorie</th>
                                    <th>niveau</th>
                                    <th>prix</th>
                                    <th>date</th>
                                    <th>option</th>
                                </tr>
                            </thead>
                            <tbody id="leveles">
                                <?php
                                $db = new db;
                                $list = $db->Get_levels();
                                foreach ($list as $level) {
                                    $id = $level['id'];
                                    $name = $level['levelName'];
                                    $nbr = $level['nbrSession'];
                                    echo "<tr>
                                        <td>" . $level['id'] . "</td>
                                        <td>" . $level['levelName'] . " </td>
                                        <td>" . $level['nbrSession'] . "</td>
                                        <td>" . $level['levelName'] . " </td>
                                        <td>" . $level['levelName'] . " </td>
                                        <td>" . $level['nbrSession'] . "</td>
                                        <td>" . $level['nbrSession'] . "</td>
                                        <td>
                                            <a href='' id = 'btn_table' data-toggle = 'modal' data-target = '#ConfirmModal' onclick = 'Prepare_Del(\"$id\",\"$name\")'>
                                                <i title='delete' class='fas fa-trash-alt'></i></a>
                                        <a href=''  data-toggle = 'modal' data-target = '#ModForModal' id = 'modify-btn' onclick ='Prepare_Modify_Level(\"$id\",\"$name\",\"$nbr\")'>"
                                    . "<i title='edit' class='fas fa-edit'></i></a>"
                                    . "</td >
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End of Main Content -->
                <?php include_once $GlobalPath . "/modeles/footer.php"; ?>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

        <?php
        include_once $GlobalPath . "/modeles/scripts.php";
        Add_Inscri();
        sss();
        ?>
    </body>

</html>