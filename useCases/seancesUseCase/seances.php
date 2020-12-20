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