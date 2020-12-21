<?php

namespace App\Controller;

use App\Model\CreateSurveyModel;

class CreateSurveyController
{

    public function __construct()
    {
        $this->model = new CreateSurveyModel();
    }

    /**
     * Call to create survey in the database
     */
    public function saveSurvey($datas)
    {
        if (array_key_exists("title", $datas) && array_key_exists("date", $datas) && array_key_exists("topic", $datas)) {
            $answers = $this->model->formatAnswers($datas);
            $this->model->createSurvey(
                htmlspecialchars($datas["title"]),
                htmlspecialchars($datas["date"]),
                htmlspecialchars($datas["topic"]),
                $answers
            );
        }
    }

    /**
     * Call to diplay view
     */
    public function render()
    {
        require ROOT . "/App/View/createSurveyView.php";
    }
}
