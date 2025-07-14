<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ExportModel;

class ExportController extends BaseController
{

    public function exportCards()
    {
        $model = new ExportModel();
        $model->exportCardData();
    }

    public function exportUsers()
    {
        $model = new ExportModel();
        $model->exportUserData();
    }

    public function exportDecks()
    {
        $model = new ExportModel();
        $model->exportDeckData();
    }

    public function accessRole()
    {
        return ["Administrator"];
    }
}