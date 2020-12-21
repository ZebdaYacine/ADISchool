<?php
$GlobalPath = '../..';
include_once '../../modeles/db.php';
include_once '../../modeles/lib.php';


class formation
{

	protected $db ; 
	function __construct()
	{
		$this->db = new db;
	}
	public function addformation() {
		if(isset($_POST['fname'])){
				// for prevent xss 
				#$this->db = new db;
				$name = htmlspecialchars($_POST['fname']);
				$this->db->Add_Fomation($name);
				header("Location:formation.php");
						}
	

			}


	public function dellformation() {
		if(isset($_POST['ID'])) {
			$id =intval($_POST['ID']);
			
			$this->db->Del_Formation($id);
			
			header("Location:formation.php");

		}
	}

	public function modformation()
	{
		if(isset($_POST['ID']) && isset($_POST['F_name'])) {

			$name = htmlspecialchars($_POST['F_name']);
			
			$id =intval($_POST['ID']);
			$this->db->Mod_Formation($id,$name);
			header("Location:formation.php");
		}
	}

}


if (IsAuth()) {

	if(isset($_POST['action'])){
		$FM = new formation() ; 

		
		if(IsPrivileged($_POST['action'] == 'add')) $FM->addformation() ; 
		elseif(IsPrivileged($_POST['action']) == 'dell') $FM->dellformation() ; 
		elseif(IsPrivileged($_POST['action']) == 'modify' ) $FM->modformation();
		

	} else header('location:../../index.php'); 


}
else header('location:../loginUseCase/login.php');
?>


