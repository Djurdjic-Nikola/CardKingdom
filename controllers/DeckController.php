<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\DeckModel;

class DeckController extends BaseController
{

    public function list()
    {
        $model = new DeckModel();

        $result = $model->all("");

        $this->view->render('decks', 'main', $result);
    }
    public function userDecks()
    {
        $model = new DeckModel();

        $result = $model->getDeckData();

        $this->view->render('userDecks', 'main', $result);
    }

    public function updateDeck()
    {
        $model = new DeckModel();

        $model->mapData($_GET);

        $model->one("where id=$model->id");

        $this->view->render('updateDeck', 'main', $model);
    }

    public function processUpdateDeck()
    {
        $model = new DeckModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Deck not updated!');
            $this->view->render('updateDeck', 'main', $model);
            exit;
        }

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session)
        {
            $model->id_user = $session['id_user'];
        }

        $model->update("where id=$model->id");
        Application::$app->session->set('successNotification', 'Deck updated!');

        if (Application::$app->session->isInRole("Administrator")) {
            header("location:" . "/decks");
        }
        else {
            header("location:" . "/userDecks");
        }
    }

    public function createDeck()
    {
        $this->view->render('createDeck', 'main', new DeckModel());
    }

    public function processCreateDeck()
    {
        $model = new DeckModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Deck not created!');
            $this->view->render('createUser', 'main', $model);
            exit;
        }

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session)
        {
            $model->id_user = $session['id_user'];
        }

        $model->insert();
        Application::$app->session->set('successNotification', 'Deck created!');
        header("location:" . "/userDecks");
    }

    public function accessRole() : array
    {
        return ["Korisnik", "Administrator"];
    }
}