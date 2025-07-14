<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\CardModel;

class UserCardController extends BaseController
{
    public function listAll()
    {
        $model = new CardModel();

        $result = $model->all("");

        $this->view->render('allCards', 'main', $result);
    }

    public function accessRole()
    {
        return ["Korisnik","Administrator"];
    }
}