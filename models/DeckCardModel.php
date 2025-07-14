<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;

class DeckCardModel extends BaseModel
{
    public int $id;
    public int $id_deck;
    public int $id_card;

    public $cards=[];

    public function tableName()
    {
        return 'deck_cards';
    }

    public function readColumns()
    {
        return ['id','id_deck','id_card'];
    }

    public function editColumns()
    {
        return ['id_deck','id_card'];
    }

    public function getDeckCardData($id_deck){

        $query="select s.* from deck_cards r left join cards s on r.id_card=s.id where r.id_deck=$id_deck";



        $dbResult = $this->con->query($query);

        $resultArray=[];

        while ($result = $dbResult->fetch_assoc())
        {
            $resultArray[]=$result;
        }

        return $resultArray;
    }

    public function validationRules()
    {
        return [
            'id_deck' => [self::RULE_REQUIRED],
            'id_card' => [self::RULE_REQUIRED]
        ];
    }
}