<?php

namespace App\Model;

use Core\Database;

class AccueilModel extends Database
{
    /**
     * Get my surveys
     */
    public function getMySurveys()
    {

        // Get my surveys from database
        $req = $this->query("SELECT a.id AS survey_id, a.title AS survey_title, a.topic AS survey_topic, b.username AS user_username, SUM(c.count) AS nb_answers
        FROM `surveys` a, `users` b, `surveys_answers` c
        WHERE a.author_id = b.id AND a.id = c.survey_id
        GROUP BY a.id, a.title, a.topic, b.username");

        echo json_encode($req);
        return $req;
    }

    /**
     * Get friends surveys
     */
    public function getFriendsSurveys()
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode([]);
            return [];
        }

        // Get my friends from database
        $datas = array(
            "myId" => $_SESSION['id']
        );
        $req = $this->query("SELECT survey.id AS survey_id, survey.title AS survey_title, user.id AS friend_id, user.username AS friend_username
                            FROM `surveys` AS survey INNER JOIN `users` AS user INNER JOIN `friends` 
                            WHERE (survey.author_id = user.id AND user.id = friends.user_id_A AND friends.user_id_B = :myId)
                            OR (survey.author_id = user.id AND user.id = friends.user_id_B AND friends.user_id_A = :myId)", $datas);

        echo json_encode($req);
        return $req;
    }
}





// Verify user connected
// if (!array_key_exists('id', $_SESSION)) {
//     echo json_encode([]);
//     return [];
// }
// Get my surveys from database
// $datas = array(
//     "myId" => $_SESSION['id']
// );
// $req = $this->query("SELECT id AS survey_id, title AS survey_title FROM `surveys` 
//                             WHERE surveys.author_id = :myId", 
//                             $datas);
// echo json_encode($req);
// return $req;