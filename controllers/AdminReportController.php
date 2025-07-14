<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\CardModel;
use app\models\ReportModel;

class AdminReportController extends BaseController
{

    public function adminReport()
    {
        $model = new CardModel();
        $result = $model->all("");
        $this->view->render('adminReport', 'main', $result);
    }

    public function getPricePerUser()
    {
        $model=new ReportModel();
        $model->mapData($_GET);
        $model->getPricePerUser();
    }

    public function getMinMaxSpent()
    {
        $model=new ReportModel();
        $model->mapData($_GET);

        $model->getMinMaxSpent();
    }

    public function getPricePerCard()
    {

        $model=new ReportModel();
        $model->mapData($_GET);

        $model->getPricePerCard();
    }

    public function accessRole()
    {
        return ["Administrator"];
    }
}