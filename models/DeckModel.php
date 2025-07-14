<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;

class DeckModel extends BaseModel
{
    public int $id;

    public string $deck_name = '';
    public string $id_user = '';

    public int $games_lost = 0;
    public int $games_won = 0;

    public function tableName() :string
    {
        return 'decks';
    }

    public function readColumns() : array
    {
        return ["id", "deck_name", "id_user", "games_lost", "games_won"];
    }

    public function editColumns() : array
    {
        return ["deck_name","id_user","games_lost","games_won"];
    }

    public function getDeckData(){

        $id_user=0;

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $query="select r.* from decks r left join users s on r.id_user=s.id where r.id_user=$id_user";

        $dbResult = $this->con->query($query);

        $resultArray=[];

        while ($result = $dbResult->fetch_assoc())
        {
            $resultArray[]=$result;
        }

        return $resultArray;
    }

    public function validationRules() : array
    {
        return [
            "deck_name" => [self::RULE_REQUIRED]
        ];
    }
}