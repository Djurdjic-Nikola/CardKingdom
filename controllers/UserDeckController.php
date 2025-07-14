<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\DeckCardModel;
use app\models\UserBoughtModel;

class UserDeckController extends BaseController
{
    public function cardsInDeck()
    {
        $model = new DeckCardModel();

        $model->mapData($_GET);

        $result = $model->getDeckCardData($model->id_deck);

        $model->cards = $result;

        $this->view->render('cardsInDeck', 'main', $model);
    }

    public function addToDeck()
    {
        $model = new UserBoughtModel();

        $result = $model->getBoughtData();

        $sendModel=new DeckCardModel();

        $sendModel->mapData($_GET);

        $sendModel->cards=$result;

        $this->view->render('addToDeck', 'main', $sendModel);
    }

    public function processAddToDeck()
    {
        $model = new DeckCardModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Card not updated!');
            $this->view->render('updateUser', 'main', $model);
            exit;
        }

        $model->insert();
        Application::$app->session->set('successNotification', 'Card added!');

        header("location:" . "/cardsInDeck?id_deck=$model->id_deck");
    }

    public function processRemoveFromDeck()
    {
        $model = new DeckCardModel();

        $model->mapData($_GET);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Card not removed!');
            $this->view->render('updateUser', 'main', $model);
            exit;
        }

        $model->remove("where id_deck=$model->id_deck and id_card=$model->id_card");
        Application::$app->session->set('successNotification', 'Card removed!');

        header("location:" . "/cardsInDeck?id_deck=$model->id_deck");
    }




    public function accessRole() : array
    {
        return ["Korisnik", "Administrator"];
    }
}