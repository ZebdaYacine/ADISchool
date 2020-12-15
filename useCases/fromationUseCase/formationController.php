<?php
include_once '../../modeles/db.php';



class formation
{
	protected db = new db();
	
	public function addformation($F_Name) {
		if(isset($_POST['action']) && isset($_POST['fname'])){
			
			if($_POST['action']=="add") {
				// for prevent xss 
				$name = htmlspecialchars($F_Name);
				$this->db->Add_Fomation($name);
		}
	}
	

	}
}




?>
