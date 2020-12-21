<?php

namespace App\Controller;

use App\Model\HeaderModel;

class HeaderController
{
    public function __construct()
    {
        $this->model = new HeaderModel();
    }

    public function getUser(){
        $this->model->getUserUsername();
    }

    public function render()
    {
        require ROOT . "/public/inc/header.php";
    }
}