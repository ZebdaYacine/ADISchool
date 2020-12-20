<?php
$GlobalPath = "../..";
include_once '../../modeles/db.php';
include_once '../../modeles/lib.php';
include_once $GlobalPath . "/modeles/models.php";
IsAuth();
?>

<!DOCTYPE html>
<html lang="en">


    <!-- header start  -->
    <?php include_once $GlobalPath . "/modeles/header.php"; ?>
    <!-- header end  -->

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


                    <!-- Topbar -->

                    <?php include_once $GlobalPath . "/modeles/topbar.php"; ?>
                    <!-- Topbar end -->
                    <form class="col-6 mt-5 ml-5" action="formationController.php" method="POST">
                        <div class="form-group ">
                            <label for="FormationName">Formation Name </label>
                            <input type="text" class="form-control" id="FormationName" aria-describedby="FormHelp" name="fname">
                            <small id="FormHelp" class="form-text text-muted">We'll choose the name of formation.</small>
                            <input type="hidden" name="action" value="add">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Formation</button>
                    </form>
                    <table class="table mt-5 mx-5 col-10">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">formation</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //this for the output 
                            $db = new db;
                            $list = $db->Get_Formation();
                            $id = 1;

                            foreach ($list as $formation) {
                                echo "<tr>";
                                echo "<th scope='row' class='align-middle'>$id</th>";
                                echo "<td class='align-middle'>" . $formation['trainingName'] . "</td>";

                                echo "<td>";
                                $F_name = $formation['trainingName'];
                                $F_id = $formation['id'];
                                echo "<button type='button' class='btn btn-outline-danger' id='btn_table' data-toggle='modal' data-target='#ConfirmModal' onclick='Prepare_Del(\"$F_id\",\"$F_name\")'>Supprimer</button>";

                                echo "<button  type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#ModForModal' id='modify-btn' onclick='Prepare_Modify(\"$F_id\",\"$F_name\")'>Modify</button></td>";
                                echo "</tr>";
                                $id++;
                            }
                            ?>

                        </tbody>
                    </table>
                    <!-- End of Topbar -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->

                <?php include_once $GlobalPath . "/modeles/footer.php"; ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!--  Modals -->

        <?php
        ModifyModal_F(); //modify modal 
        ConfermDell_F(); //confirm modall 
        logoutModal();

        include_once $GlobalPath . "/modeles/scripts.php";
        ?>



    </body>

</html>