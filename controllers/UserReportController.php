<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ReportModel;

class UserReportController extends BaseController
{

    public function myReport()
    {
        $this->view->render('myReport', 'main', null);
    }

    public function getNumberOfReservationsPerMonth()
    {
        $model=new ReportModel();
        $model->getNumberOfReservationsPerMonth();
    }

    public function winsPerDeck()
    {
        $model=new ReportModel();
        $model->winsPerDeck();
    }

    public function pricePerDeck()
    {
        $model=new ReportModel();
        $model->pricePerDeck();
    }

    public function getPricePerMonth()
    {
        $model=new ReportModel();
        $model->getPricePerMonth();
    }

    public function accessRole()
    {
        return ["Korisnik", "Administrator"];
    }
}