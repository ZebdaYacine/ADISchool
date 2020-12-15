<?php
include_once '../../modeles/db.php';
include_once '../../modeles/lib.php';


class formation
{

	protected $db ; 
	
	public function addformation() {
		if(isset($_POST['fname'])){
				// for prevent xss 
				$this->db = new db;
				$name = htmlspecialchars($_POST['fname']);
				$this->db->Add_Fomation($name);
				header("Location:formation.php");
	}
	

	}
}


if (IsAuth()) {

	if(isset($_POST['action'])){
		$FM = new formation() ; 
		if($_POST['action'] == 'add') $FM->addformation() ; 


	}


}
else header('location:../loginUseCase/login.php');
?>
