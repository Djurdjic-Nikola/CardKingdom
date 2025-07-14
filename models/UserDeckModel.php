<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;

class UserDeckModel extends BaseModel
{
    public string $deck_name='';

    public function tableName()
    {
        return '';
    }

    public function readColumns()
    {
        return ['id','name'];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
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
}