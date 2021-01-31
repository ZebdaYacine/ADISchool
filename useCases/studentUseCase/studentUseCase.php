<?php

include '../../modeles/db.php';
include '../../modeles/lib.php';

class student{
    
    protected $db;
    private $error;

    function __construct() {
        $this->db = new db;
    }
    
}

if (IsAuth()) {
    $obj = new student();
    
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'dell') {
            //$obj->dell_level();
        } elseif ($_POST['action'] == 'modify') {
            //$obj->update_level();
        } elseif ($_POST['action'] == 'add') {
            ///echo "Hi I am here";
            //$obj->add_levele();
            //reload_page("", $obj);
        } 
    }
     echo json_encode(
                array("error" => "",
                    "levels" => ""));
}
