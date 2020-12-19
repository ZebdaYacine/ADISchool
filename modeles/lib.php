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

function IsPrivileged($action){
	$prev_table= [
		"0"=>"777",
		"1"=>["addformation","dellformation","modcureentuser"]
	];	
	
	if (isset($_SESSION['sess_grade']) && isset($_SESSION['sess_grade']) != ""){
		if ($prev_table[$_SESSION['sess_grade']] == "777") return $action;
		if (in_array($action,$prev_table[$_SESSION['sess_grade']])) return $action; 
		return "This action is not prevelaged To current user";
		
	}
}
?>
