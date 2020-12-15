<?php
//every action must be enter in this 
// if (IsAuth()) {}
// else 
//


function IsAuth()
{
	session_start();
	if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") return true ;
	header('location:../loginUseCase/login.php');
}


?>
