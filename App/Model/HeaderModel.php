<?php

namespace App\Model;

use Core\Database;

class HeaderModel extends Database
{
    public function getUserUsername(){

        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            return;
        }

        $datas = array(
            "userPid" => $_SESSION['id'],
        );
        $req = $this->query("SELECT username FROM users WHERE id = userPid", $datas);
        json_encode($req);
        return $req;
    }
}