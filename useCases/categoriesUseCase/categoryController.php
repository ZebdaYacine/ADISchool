
<?php
$GlobalPath = "../..";
include_once $GlobalPath."/modeles/db.php";
include_once $GlobalPath."/modeles/lib.php";



/**
  * 
  */
 class Category 
 {
	protected $db; 	
 	function __construct(argument)
 	{
 		$this->db = new db ; 
 	}
 
 	public function AddCategory($C_name) {

 		if (isset($_POST['CategoryName'])) {
 			Errortype(1,$_POST['CategoryName']);
 			$cname = htmlspecialchars($_POST['CategoryName']))
 			$this->db->Add_Category($cname));
 		}

 	}

 } 

if (IsAuth()) {

	if(isset($_POST['action'])){
		$CT = new Category() ; 

		
		if(IsPrivileged($_POST['action'] == 'add')) $CR->AddCategory() ; 
		
	} else header('location:../../index.php'); 


}

?>
