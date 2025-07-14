<?php

namespace app\models;

use app\core\BaseModel;

class CardModel extends BaseModel
{
    public int $id;

    public string $name='';
    public string $text='';
    public string $cardSet='';

    public string $artwork='';

    public int $price = 0;

    public function tableName()
    {
        return 'cards';
    }

    public function readColumns()
    {
        return ['id','name','text','cardSet','artwork','price'];
    }

    public function editColumns()
    {
        return ['name','text','cardSet','artwork','price'];
    }

    public function validationRules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'text' => [self::RULE_REQUIRED],
            'cardSet' => [self::RULE_REQUIRED],
            'price' => [self::RULE_REQUIRED,self::RULE_GREATER_THAN_ZERO],
        ];
    }
}