
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
 	function __construct()
 	{
 		$this->db = new db ; 
 	}
 
 	public function AddCategory() {
		
 		if (isset($_POST['CategoryName'])) {
 			Errortype(1,$_POST['CategoryName']);
 			$cname = htmlspecialchars($_POST['CategoryName']);
 			$this->db->Add_Category($cname);
 			
 			$Category = json_encode($this->db->Get_lastCategory()) ; 
 			
 			$data = ["error"=>false,"data"=>$Category];
 			$data = json_encode($data);
 			echo $data ;
 				
 		}

 	}

 	public function GetCategory() { 
 		$Category = json_encode($this->db->Get_Category()); 
 		$data = ["error"=>false,"data"=>$Category];
 		$data = json_encode($data);
 		echo $data ; 
 	}

 	public function DellCategory() {

		if(isset($_POST['ID'])) {
					 	Errortype(0,$_POST['ID']);
						$this->db->Del_Category($_POST['ID']); 
						$data = ["error"=>false,"data"=>true]; 
						$data = json_encode($data); 
						echo $data ; 
				} 

 	} 
 } 

if (IsAuth()) {

	if(isset($_POST['action'])){
		$CT = new Category() ; 
		
		
		if(IsPrivileged($_POST['action']) == 'Add_C') $CT->AddCategory() ; 
		elseif(IsPrivileged($_POST['action']) == 'Get_C') $CT->GetCategory(); 
		elseif(IsPrivileged($_POST['action']) == 'Dell_C') $CT->DellCategory();
	} 


}

?>
