<?php 
/**
 * 
 */
//Connect to DB


class Login {
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "ADI";
	function __construct() {
		

		try {
		    $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    // set the PDO error mode to exception
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 	
		}
		catch(PDOException $e) {
		    echo "Connection failed: " . $e->getMessage();
		    // and if this fails there is no point continuing so add an exit
		    exit;
		}

	}
	public function hash_pass($pwd) {

		$pepper = "just rendome salt thing for making the hash harder ";
		$pwd_peppered = hash_hmac("sha256", $pwd, $pepper);
		$pwd_peppered = md5($pwd_peppered);
		$pwd_peppered = hash_hmac("sha256", $pwd_peppered, $pepper);
		$pwd_peppered = md5($pwd_peppered);
		
		return $pwd_peppered;

	}
	public function CheckUser($usr,$pass)
	{
		try {
			$query="SELECT * FROM `user` WHERE `userName` =:username AND password=:pass";
			$stmt = $this->conn->prepare($query); 
			$stmt->bindParam('username', $usr, PDO::PARAM_STR);
      		$hpass = $this->hash_pass($pass);
      		$stmt->bindValue('pass',$hpass, PDO::PARAM_STR);
      		$stmt->execute();
      		$count = $stmt->rowCount();
      		$row   = $stmt->fetch(PDO::FETCH_ASSOC);
		    if($count == 1 && !empty($row)) {
		       	return True ; 
		        // /******************** Your code ***********************/
		        // $_SESSION['sess_user_id']   = $row['uid'];
		        // $_SESSION['sess_user_name'] = $row['username'];
		        // $_SESSION['sess_name'] = $row['name'];
		       
		      } 
		    else {
		    	return False ;
		      }


		} catch (PDOException $e) {
			 echo "Error : ".$e->getMessage();
		}
	}

}
 $Login_ = new Login() ;
 
 ?>