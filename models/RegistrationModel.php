<?php

namespace app\models;

use app\core\BaseModel;

class RegistrationModel extends BaseModel
{
    public int $id;
    public string $email = '';
    public string $username = '';

    public string $password = '';

    public function tableName() :string
    {
        return 'users';
    }

    public function readColumns() : array
    {
        return ["id","email", "username","password"];
    }

    public function editColumns() : array
    {
        return ["email", "username","password"];
    }

    public function validationRules() : array
    {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL, self::RULE_UNIQUE_EMAIL],
            "username" => [self::RULE_REQUIRED,self::RULE_UNIQUE_USERNAME],
            "password" => [self::RULE_REQUIRED]
        ];
    }
}