<?php

include_once '..\..\config\localArg.php';

class db {

    protected $servername = "";
    protected $username = "";
    protected $password = "";
    protected $dbname = "";

    function __construct() {
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

    function Add_Fomation($f_name) {
        $query = "INSERT INTO `training`(`trainingName`) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$f_name]);
    }

    function Get_Formation() {
        $query = "SELECT * FROM `training` ORDER BY id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
//        return "test";
    }

    function Get_Formations_Name() {
        $query = "SELECT trainingName FROM `training` ORDER BY id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }

    function Del_Formation($id) {
        $query = "DELETE FROM `training` WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    function Mod_Formation($id, $F_name) {
        $query = "UPDATE `training` SET `trainingName`=? WHERE `id`=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$F_name, $id]);
    }

    function Add_level($name, $nbr) {
        $query = "INSERT INTO level (levelName,nbrSession) VALUES (?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$name, $nbr]);
    }

    function Get_levels() {
        $query = "SELECT * FROM level ORDER BY id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }

    function Get_level_By_Name($name) {
        $query = "SELECT * FROM level where `levelName` LIKE '?%'";
        $stmt = $this->conn->query($query);
        $stmt->execute([$name]);
        $levles = $stmt->fetchAll();
        return $levles;
    }
    
    function Get_level_Name() {
        $query = "SELECT levelName FROM `level` ORDER BY id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }

    function Del_Level($id) {
        $query = "DELETE FROM `level` WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    function Modify_Level($id, $L_name, $nbr) {
        $query = "UPDATE `level` SET `levelName`=? ,nbrSession=? WHERE `id`=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$L_name, $nbr, $id]);
    }

    function Update_Level($id, $L_name, $nbr) {
        echo "update db";
//        $query = "UPDATE `level` SET `levelName`=? ,nbrSession=? WHERE `id`=?";
//        $stmt = $this->conn->prepare($query);
//        $stmt->execute([$L_name,$nbr,$id]);
    }
    
    function Get_student_Name() {
        $query = "SELECT firstName , lastName FROM `student` ORDER BY id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }
    
    function Get_category_Name() {
        $query = "SELECT categoryName FROM `category` ORDER BY id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }

    function Tets() {
        return "TEST";
    }

}

//this is just for testing the db class make sure to remove them 
// $db = new db() ; 
// $list =$db->Get_level_By_Name("dfg");
//echo $list;
//comment me or delete me after you finish
?>
