

           <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $GlobalPath ?>/index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="<?php echo $GlobalPath ?>/img/ADI_logo.png" alt="Avatar" width="50" height="50" style="border-radius: 50%;">
                    </div>
                    <div class="sidebar-brand-text mx-3"> ADISchool </div>
                </a>

                <!-- Divider --><!-- Main js -->
 
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $GlobalPath ?>/useCases\statisticsUseCase\statics.php">
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
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/fromationUseCase/formation.php" >
                        <i class="fas fa-sitemap"></i>
                        <span>Formations</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/levelUseCase/level.php" >
                        <i class="fas fa-layer-group"></i>
                        <span>Niveaux</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/categoriesUseCase/categories.php" >
                        <i class="fas fa-hiking"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/inscriptionsUseCase/inscriptions.php" >
                        <i class="fas fa-book"></i>
                        <span>Inscriptions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/seancesUseCase/seances.php" >
                        <i class="fas fa-clock"></i>
                        <span>Seances</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/utilisateursUseCase/utilisateurs.php" >
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/etudiantsUseCase/etudiants.php" >
                        <i class="fas fa-user-graduate"></i>
                        <span>Etudiants</span>
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $GlobalPath ?>/useCases/PaiementUseCase/paiement.php" >
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

