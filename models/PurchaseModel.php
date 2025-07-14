<?php

namespace app\models;

use app\core\BaseModel;

class PurchaseModel extends BaseModel
{
    public int $id;

    public string $purchase_time = '';
    public int $id_user;
    public int $id_card;

    public int $price;

    public function tableName()
    {
        return 'user_cards';
    }

    public function readColumns()
    {
        return ['id','purchase_time','id_user','id_card','price'];
    }

    public function editColumns()
    {
        return ['purchase_time','id_user','id_card','price'];
    }

    public function validationRules()
    {
        return [
            'purchase_time' => [self::RULE_REQUIRED],
            'id_user' => [self::RULE_REQUIRED],
            'id_card' => [self::RULE_REQUIRED]
        ];
    }
}