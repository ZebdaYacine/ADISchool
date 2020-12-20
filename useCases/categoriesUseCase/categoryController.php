
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
 
 	public function Add_Category($C_name) {

 		if (isset($_POST['CategoryName'])) {
 			Errortype();
 			$cname = htmlspecialchars($_POST['CategoryName']))
 			$this->db->Add_Category($_POST['CategoryName']));
 		}

 	}

 } 

?>
