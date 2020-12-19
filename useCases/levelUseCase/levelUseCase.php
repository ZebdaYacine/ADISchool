<?php

include '../../modeles/db.php';

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
                    return $this->error;
                }
            } else {
                return $this->error;
            }
        }
    }

    public function get_data_in_table() {
        $output = "";
        $list = $this->db->Get_levels();
        foreach ($list as $level) {
            $i=$level['id'];
            $output .= "<tr>
                        <td>" . $level['id'] . "</td>
                        <td>" . $level['levelName'] . " </td>
                        <td>" . $level['nbrSession'] . "</td>
                        <td><a href='levelUseCase.php?id=$i&action=update'>update</a></td>
                        <td><a href='levelUseCase.php?id=$i&action=delete'>delete</a></td>
                    </tr>";
        }
        return $output;
    }

    public function get_error() {
        return $this->error;
    }

}

$obj = new level();
if (isset($_GET["action"])) {
    switch ($_GET['action']) {
        case 'Load': {
                echo $obj->get_data_in_table();
                break;
            }
        case 'delete': {
                header("Location: level.php");
                break;
            }
        case 'update': {
                header("Location: level.php");
                break;
            }
    }
} else {
    $obj->add_levele();
    echo json_encode(
            array("error" => $obj->get_error(),
                "levels" => $obj->get_data_in_table()));
}
?>