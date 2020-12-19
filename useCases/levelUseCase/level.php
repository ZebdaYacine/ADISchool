<!DOCTYPE html>
<?php
//echo $_GET['opt'];
?>
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
        <script src="../../js/jquery.js"></script>  


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
                    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ml-5 mr-5">
                        <h2 class="h2 my-0 me-md-auto fw-normal">Niveaxu</h2>
                        <input type="text" class="mr-5 ml-5 mt-1 mb-1 form-control" placeholder="search">  
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#insertModale">ajouter</button>
                    </header>
                    <label id="error" class="h4 d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ml-5 mr-5 text-danger">

                    </label>
                    <div class="table-responsive mx-sm-0 mx-md-5 mx-lg-5 col-md-11 col-lg-11 col-sm-12">
                        <table class="table table-striped table-sm" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Niveau</th>
                                    <th>nomber de seances</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="leveles">

                            </tbody>
                        </table>
                    </div>
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
                            <i class="fas fa-times"></i>
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

        <div class="modal fade" id="insertModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="post" id="insert_form">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Annuler</button>
                            <input type="submit"  class="btn btn-outline-success " name="insert" id="insert" value="Ajouter"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script>
            $(document).ready(function () {
                $('#insert_form').on("submit", function (event) {
                    event.preventDefault();
                    if ($('#name').val() == "")
                    {
                        alert("nom de  niveau est recommandées");
                    } else
                    if ($('#nbr').val() == "")
                    {
                        alert("nomber de seances  est recommandées ");
                    } else
                    {
                        $.ajax({
                            url: "levelUseCase.php",
                            method: "POST",
                            dataType: 'json',
                            cache: false,
                            data: $('#insert_form').serialize(),
                            beforeSend: function () {
                                $('#insert').val("Ajoute...");
                            },
                            success: function (data) {
                                $('#insert_form')[0].reset();
                                $('#insertModale').modal('hide');
                                $('#error').html(data.error);
                                $('#leveles').html(data.levels);
                            }
                        });
                    }
                });
            });
            $(document).ready(function () {
                load_data();
                function load_data()
                {
                    var action = "Load";
                    $.ajax({
                        url: "levelUseCase.php",
                        method: "GET",
                        data: {action: action},
                        success: function (data)
                        {
                            $('#leveles').html(data);
                        }
                    });
                }
            });
        </script>
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