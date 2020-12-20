<?php

/**
 * 
 */
//Connect to DB
session_start();

include_once '../../config/localArg.php';

class Login {

    protected $servername = "";
    protected $username = "";
    protected $password = "";
    protected $dbname = "";

	
	public function Creat_Cookie()
	{ //this is for adding cookie
		$random_value = "randddd"; 
	}

    function __construct() {
    	global $server_name;
    	global $user_name ; 
    	global $password ; 
    	global $db_name;
        
        $this->servername = localArg::$server_name;
        $this->username = localArg::$user_name;
        $this->password = localArg::$password;
        $this->dbname = localArg::$db_name;
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


    public function hash_pass($pwd) {

        $pepper = "just rendome salt thing for making the hash harder ";
        $pwd_peppered = hash_hmac("sha256", $pwd, $pepper);
        $pwd_peppered = md5($pwd_peppered);
        $pwd_peppered = hash_hmac("sha256", $pwd_peppered, $pepper);
        $pwd_peppered = md5($pwd_peppered);

        return $pwd_peppered;
    }

    public function CheckUser($usr, $pass) {
        try {
            $query = "SELECT * FROM `user` WHERE `userName` =:username AND password=:pass";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam('username', $usr, PDO::PARAM_STR);
            $hpass = $this->hash_pass($pass);
            $stmt->bindValue('pass', $hpass, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($count == 1 && !empty($row)) {
                $_SESSION['sess_user_id'] = $row['id'];
                $_SESSION['sess_user_name'] = $row['userName'];
                $_SESSION['sess_grade'] = $row['grade'];
                return True;
                // /******************** Your code ***********************/
            } else {
                return False;
            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    }

}


$Login_ = new Login();

if (isset($_GET["logout"])) {
    $_SESSION['sess_user_id'] = "";
    $_SESSION['sess_user_name'] = "";
    $_SESSION['sess_grade'] = "";
    if (empty($_SESSION['sess_user_id']))
        header('location:login.php');
}
if (isset($_POST['user']) && isset($_POST['password'])) {

    if ($Login_->CheckUser($_POST['user'], $_POST['password'])) {
        header('location:../../index.php');
    } else {
        // header('location:../loginUseCase/login.php');
    }
}
?>