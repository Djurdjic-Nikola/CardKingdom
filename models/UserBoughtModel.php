<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;

class UserBoughtModel extends BaseModel
{
    public string $name='';

    public string $text='';
    public string $purchase_time='';
    public $artwork;

    public function tableName()
    {
        return '';
    }

    public function readColumns()
    {
        return ['id','name','text','artwork','purchase_time'];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
    }

    public function getBoughtData(){

        $id_user=0;

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $query="select r.purchase_time, s.* from user_cards r left join cards s on r.id_card=s.id where r.id_user=$id_user";

        $dbResult = $this->con->query($query);

        $resultArray=[];

        while ($result = $dbResult->fetch_assoc())
        {
            $resultArray[]=$result;
        }

        return $resultArray;
    }
}