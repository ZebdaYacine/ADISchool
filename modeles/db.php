<?php


include_once '../../config/localArg.php';

class db {
	protected $servername = "";
    protected $username = "";
    protected $password = "";
    protected $dbname = "";

	
	

    function __construct() {
    	global $server_name;
    	global $user_name ; 
    	global $password ; 
    	global $db_name;
        
        $this->servername = $server_name;
        $this->username = $user_name;
        $this->password = $password;
        $this->dbname = $db_name;
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            // and if this fails there is no point continuing so add an exit
            exit;
        }
    }

    function Add_Fomation($f_name) {
    	$query = "INSERT INTO `training`(`trainingName`) VALUES (?)";
    	$stmt = $this->conn->prepare($query);
    	$stmt->execute([$f_name]);

    }
    function Get_Formation(){
    	$query = "SELECT * FROM `training`";
    	$stmt = $this->conn->query($query);
    	return $stmt->fetchAll();

    }

}

//this is just for testing the db class make sure to remove them 

// $db = new db() ; 
// $db->Add_Fomation("juset testing !!");

//comment me or delete me after you finish

?>
