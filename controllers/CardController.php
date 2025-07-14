<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\CardModel;

class CardController extends BaseController
{
    public function listAdmin()
    {
        $model = new CardModel();

        $result = $model->all("");

        $this->view->render('cards', 'main', $result);
    }

    public function create()
    {
        $this->view->render('createCard', 'main', new CardModel());
    }

    public function processCreate()
    {
        $model = new CardModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Card not created!');
            $this->view->render('createCard', 'main', $model);
            exit;
        }

        $target_dir = __DIR__ . "/../public/assets/uploads/";
        $original_file_name = basename($_FILES["artwork"]["name"]);
        $file_extension = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));
        $new_file_name = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_file_name;

        if (file_exists($target_file)) {
            Application::$app->session->set('errorNotification', 'File already exists!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        if ($_FILES["artwork"]["size"] > 5000000) {
            Application::$app->session->set('errorNotification', 'File is too large!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        if ($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg") {
            Application::$app->session->set('errorNotification', 'File format is not allowed!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        if (!move_uploaded_file($_FILES["artwork"]["tmp_name"], $target_file)) {
            Application::$app->session->set('errorNotification', 'Failed upload!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        $model->artwork = $new_file_name;

        $model->insert();
        Application::$app->session->set('successNotification', 'Card created!');
        header("location:" . "/cards");
    }

    public function update()
    {
        $model = new CardModel();

        $model->mapData($_GET);

        $model->one("where id=$model->id");

        $this->view->render('updateCard', 'main', $model);
    }

    public function processUpdate()
    {
        $model = new CardModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Card not updated!');
            $this->view->render('updateCard', 'main', $model);
            exit;
        }

        $target_dir = __DIR__ . "/../public/assets/uploads/";
        $original_file_name = basename($_FILES["artwork"]["name"]);
        $file_extension = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));
        $new_file_name = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_file_name;

        if (file_exists($target_file)) {
            Application::$app->session->set('errorNotification', 'File already exists!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        if ($_FILES["artwork"]["size"] > 5000000) {
            Application::$app->session->set('errorNotification', 'File is too large!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        if ($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg") {
            Application::$app->session->set('errorNotification', 'File format is not allowed!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        if (!move_uploaded_file($_FILES["artwork"]["tmp_name"], $target_file)) {
            Application::$app->session->set('errorNotification', 'Failed upload!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        $model->artwork = $new_file_name;

        $model->update("where id=$model->id");
        Application::$app->session->set('successNotification', 'Card updated!');

        header("location:" . "/cards");
    }



    public function accessRole()
    {
        return ["Administrator"];
    }
}