<?php
$GlobalPath = "../..";
include_once '../../modeles/db.php';
include_once '../../modeles/lib.php';
include_once $GlobalPath . "/modeles/models.php";
IsAuth();
?>
<!DOCTYPE html>
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
                    <div class="row">
                        <h3 class="display-6 col-12 text-center">Statistiques</h3>
                        <select name="cars" class="form-control col-6 offset-3 mt-3 mb-5">
                            <option value="volvo">month</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>

                    <div class="container">
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">frainçais</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">8500 <small class="text-muted">DA</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>10 Etudiants inscrits</li>
                                        <li>5 Etudiants engages</li>
                                        <li>0 Etudiants abandonnés</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">details</button>
                                </div>
                            </div>

                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">frainçais</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">8500 <small class="text-muted">DA</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>10 Etudiants inscrits</li>
                                        <li>5 Etudiants engages</li>
                                        <li>0 Etudiants abandonnés</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">details</button>
                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">frainçais</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">8500 <small class="text-muted">DA</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>10 Etudiants inscrits</li>
                                        <li>5 Etudiants engages</li>
                                        <li>0 Etudiants abandonnés</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Topbar -->
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

        <!-- Logout Modal-->
        <!-- Logout Modal-->
        <?php
             ModifyModal_F(); //modify modal 
             ConfermDell_F(); //confirm modall 
             logoutModal();
             include_once $GlobalPath . "/modeles/scripts.php";
        ?>

    </body>

</html>