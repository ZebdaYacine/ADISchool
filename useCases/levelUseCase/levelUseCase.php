<?php

include '../../modeles/db.php';
include '../../modeles/lib.php';

class level {

    protected $db;
    private $error;

    function __construct() {
        $this->db = new db;
    }

    function check_Validity_Data($data, $type) {
        if (empty($data)) {
            $this->error = " $data is empty";
            return false;
        }
        htmlspecialchars($data);
        switch ($type) {
            case "INTEGER": {
                    if (!is_numeric($data)) {
                        $this->error = " nomber of  sessions must be numeric";
                        return false;
                    }
                }
            case "STRING": {
                    if (!is_string($data)) {
                        $this->error = " levele name must be string";
                        return false;
                    }
                }
        }
        return true;
    }

    public function add_levele() {
        if (isset($_POST['name']) && isset($_POST['nbr'])) {
            if ($this->check_Validity_Data($_POST['name'], "STRING")) {
                if ($this->check_Validity_Data($_POST['nbr'], "INTEGER")) {
                    $this->db->Add_level($_POST['name'], $_POST['nbr']);
                } else {
                    $error = $this->error;
                }
            } else {
                $error = $this->error;
            }
        }
    }

    public function dell_level() {
        if (isset($_POST['ID'])) {
            $id = intval($_POST['ID']);
            $this->db->Del_Level($id);
            header("Location:level.php");
        }
    }

    public function update_level() {
        if (isset($_POST['ID']) && isset($_POST['nbr_name']) && isset($_POST['L_name'])) {
            $name = htmlspecialchars($_POST['L_name']);
            $nbr = htmlspecialchars($_POST['nbr_name']);
            $id = intval($_POST['ID']);
            $this->db->Updat_Level($id, $name, $nbr);
            header("Location:level.php");
        }
    }

    public function get_data_in_table() {
        $output = "";
        $list = $this->db->Get_levels();
        foreach ($list as $level) {
            $id = $level['id'];
            $name = $level['levelName'];
            $nbr = $level['nbrSession'];
            $output .= "<tr>
                        <td>" . $level['id'] . "</td>
                        <td>" . $level['levelName'] . " </td>
                        <td>" . $level['nbrSession'] . "</td>
                        <td>" . $level['nbrSession'] . "</td>
                        <td>
                          <a href='' id = 'btn_table' data-toggle = 'modal' data-target = '#ConfirmModal' onclick = 'Prepare_Del(\"$id\",\"$name\")'>
                                  <i title='delete' class='fas fa-trash-alt'></i></a>
                          <a href=''  data-toggle = 'modal' data-target = '#ModForModal' id = 'modify-btn' onclick ='Prepare_Modify_Level(\"$id\",\"$name\",\"$nbr\")'>"
                    . "<i title='edit' class='fas fa-edit'></i></a>"
                    . "</td >
                    </tr>";
        }
        return $output;
    }

    public function get_error() {
        return $this->error;
    }

}

if (IsAuth()) {
    if (isset($_POST['action'])) {
        $obj = new level();
        if ($_POST['action'] == 'add') {
            $obj->add_levele();
            echo json_encode(
                    array("error" => $obj->get_error(),
                        "levels" => $obj->get_data_in_table()));
        } elseif (IsPrivileged($_POST['action'] == 'dell')) {
            $obj->dell_level();
        } elseif (IsPrivileged($_POST['action'] == 'modify')) {
            $obj->update_level();
        }
    }

}
?>