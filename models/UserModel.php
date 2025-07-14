<?php

namespace app\models;

use app\core\BaseModel;

class UserModel extends BaseModel
{
    public int $id;

    public string $email = '';
    public string $username = '';

    public function tableName() :string
    {
        return 'users';
    }

    public function readColumns() : array
    {
        return ["id", "email", "username"];
    }

    public function editColumns() : array
    {
        return ["email", "username"];
    }

    public function validationRules() : array
    {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "username" => [self::RULE_REQUIRED]
        ];
    }
}