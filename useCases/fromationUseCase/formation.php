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
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="../../img/ADI_logo.png" alt="Avatar" width="50" height="50" style="border-radius: 50%;">
                    </div>
                    <div class="sidebar-brand-text mx-3"> ADISchool </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="../statisticsUseCase/statics.php">
                        <i class="fas fa-chart-line"></i>
                        <span>Statistiques</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Options
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-sitemap"></i>
                        <span>Formations</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-layer-group"></i>
                        <span>Niveaux</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-hiking"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-book"></i>
                        <span>Inscriptions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-clock"></i>
                        <span>Seances</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-user-graduate"></i>
                        <span>Etudiants</span>
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" >
                        <i class="fas fa-money-check-alt"></i>
                        <span>Paiement</span>
                    </a>
                </li>


                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                    <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
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
                            $db = new db ;
                            $list = $db->Get_Formation();
                            $id = 1 ;
                            
                            foreach ($list as $formation) {
                                echo "<tr>";
                                echo "<th scope='row' class='align-middle'>$id</th>";
                                echo "<td class='align-middle'>".$formation['trainingName']."</td>";
                                
                                echo "<td>";
                                $F_name = $formation['trainingName'];
                                $F_id=$formation['id'];
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
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Modify Modal -->
        

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

        <!-- Confirm dell Modal -->
        

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
        <!-- Main js  -->
        <script type="text/javascript" src="../../js/main.js"></script>
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