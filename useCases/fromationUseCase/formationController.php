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


	public function dellformation() {
		if(isset($_POST['id'])) {


		}
	}

}


if (IsAuth()) {

	if(isset($_POST['action'])){
		$FM = new formation() ; 
		if($_POST['action'] == 'add') $FM->addformation() ; 
		elseif($_POST['action'] == 'dell') $FM->dellformation() ; 

	} 


}
else header('location:../loginUseCase/login.php');
?>
