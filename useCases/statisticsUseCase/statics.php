<?php 
include_once '../../modeles/db.php';
include_once '../../modeles/lib.php';
IsAuth(); 
 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../../bootstrap-5.0.0-beta1-dist/css/bootstrap-grid.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../../bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="../../bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ADISchoole</title>
        <!-- Custom fonts for this template-->
        <link rel="apple-touch-icon" sizes="76x76" href="../ADISchool/img/ADI_logo.png">
        <link rel="icon" type="image/png" href="../ADISchool/img/ADI_logo.png">
        <!-- Custom styles for this template-->
        <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../../fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" type="text/css">
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php include '../dashboard.php'; ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <?php include '../navBar.php'; ?>
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
                <?php include '../footer.php'; ?>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
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
                        <a class="btn btn-primary" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../js/demo/chart-area-demo.js"></script>
        <script src="../../js/demo/chart-pie-demo.js"></script>

    </body>

</html>