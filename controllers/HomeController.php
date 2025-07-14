<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\UserBoughtModel;

class HomeController extends BaseController
{
    public function home()
    {
        if (!Application::$app->session->isInRole("Admin") and !Application::$app->session->isInRole("Korisnik"))
        {
            header("location:" . "/cardForUser");
            exit();
        }
        $model = new UserBoughtModel();

        $result = $model->getBoughtData();

        $this->view->render('home', 'main', $result);
    }

    public function accessRole() : array
    {
        return ["Korisnik", "Administrator"];
    }
}