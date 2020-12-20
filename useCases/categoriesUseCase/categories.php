<?php
$GlobalPath = "../..";
include_once $GlobalPath."/modeles/models.php";
include_once $GlobalPath."/modeles/lib.php";
IsAuth();

//header('location:useCases\statisticsUseCase\statics.php');
?>
<!DOCTYPE html>
<html lang="en">
    


    <!-- header start  -->
    <?php include_once $GlobalPath."/modeles/header.php"; ?>
    <!-- header end  -->
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php include_once $GlobalPath."/modeles/sidebar.php"; ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php include_once $GlobalPath."/modeles/topbar.php";  ?>
                    <!-- End of Topbar -->
                    

                    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ml-5 mr-5">
                        <h2 class="h2 my-0 me-md-auto fw-normal">Niveaxu</h2>
                        <input type="text" class="mr-5 ml-5 mt-1 mb-1 form-control" placeholder="search">  
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#insertModale">ajouter</button>
                    </header>

                    <label id="error" class="h4 d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ml-5 mr-5 text-danger">

                    </label>
                   
                    
                    <div class="table-responsive mx-sm-0 mx-md-5 mx-lg-5 col-md-11 col-lg-11 col-sm-12">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Niveau</th>
                                    <th>nomber de seances</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="leveles"><tr>
                        <td>1</td>
                        <td>test </td>
                        <td>20</td>
                        <td><a href="levelUseCase.php?id=1&amp;action=update">update</a></td>
                        <td><a href="levelUseCase.php?id=1&amp;action=delete">delete</a></td>
                    </tr><tr>
                        <td>4</td>
                        <td>testt </td>
                        <td>6</td>
                        <td><a href="levelUseCase.php?id=4&amp;action=update">update</a></td>
                        <td><a href="levelUseCase.php?id=4&amp;action=delete">delete</a></td>
                    </tr></tbody>
                        </table>
                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php include_once $GlobalPath."/modeles/footer.php";  ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
      
        <?php  
        logoutModal();
        ?>

        <!-- Scripts  --> 
        <?php include_once $GlobalPath."/modeles/scripts.php";

         ?>

    </body>

</html>