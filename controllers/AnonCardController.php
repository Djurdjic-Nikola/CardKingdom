<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\CardModel;

class AnonCardController extends BaseController
{
    public function listForUsers()
    {
        $model = new CardModel();

        $result = $model->all("");

        $this->view->render('cardForUser', 'auth', $result);
    }

    public function accessRole()
    {
        return [];
    }
}