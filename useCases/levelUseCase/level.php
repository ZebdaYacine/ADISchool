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
                        <h2 class="h2 my-0 me-md-auto fw-normal">Niveaxu</h2>
                        <form  class="mr-5 ml-5 mt-1 mb-1" id="search_form" >
                            <input type="text" id="Lname" name="Lname" class="form-control" placeholder="search"> 
                            <input type="hidden" name="action" value="search">
                        </form>
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
                                    <th>seances</th>
                                    <th>formation</th>
                                    <th>options</th>
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

        <?php
        include_once $GlobalPath . "/modeles/scripts.php";
        Add_Level();
        ConfermDell_L();
        ModifyModal_L();
        logoutModal();
        ?>

        <script>
            $(document).ready(function () {
                $('#Lname').keyup(function (event) {
                    $.ajax({
                        url: "levelUseCase.php",
                        method: "POST",
                        dataType: 'json',
                        cache: false,
                        data: $('#search_form').serialize(),
                        beforeSend: function () {
                            $('#search').val('search..!!')
                        },
                        success: function (data) {
                            $('#insert_form')[0].reset();
                            $('#insertModale').modal('hide');
                            $('#error').html(data.error);
                            $('#leveles').html(data.levels);
                        }
                    });
                });
            });
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
        </script>


    </body>

</html>