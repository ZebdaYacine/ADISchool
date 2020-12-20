<?php
$GlobalPath=".";
include_once $GlobalPath."/modeles/models.php";
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] == "") {
    header('location:useCases/loginUseCase/login.php');
}
header('location:useCases\statisticsUseCase\statics.php');
?>
