<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\CardModel;
use app\models\PurchaseModel;

class PurchaseController extends BaseController
{
    public function processPurchase()
    {

        if (!Application::$app->session->isInRole("Admin") and !Application::$app->session->isInRole("Korisnik"))
        {
            header("location:" . "/login");
            exit();
        }
        $model = new PurchaseModel();

        $model->mapData($_POST);



        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session)
        {
                $model->id_user = $session['id_user'];
        }

        $cardModel=new CardModel();
        $cardModel->one("where id='$model->id_card'");
        $model->price=$cardModel->price;
        $model->purchase_time=date('Y/m/d H:i:s');

        $model->insert();

        Application::$app->session->set('successNotification', 'Card bought successfully!');

        header("location:" . "/");
    }

    public function accessRole()
    {
        return ['Korisnik','Administrator'];
    }
}