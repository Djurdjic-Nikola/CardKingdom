<?php

namespace app\core;

use mysqli;

abstract class BaseModel
{
    public const RULE_EMAIL = "rule_email";
    public const RULE_REQUIRED = "rule_required";

    public const RULE_UNIQUE_EMAIL = "rule_unique_email";

    public const RULE_UNIQUE_USERNAME = "rule_unique_username";

    public const RULE_GREATER_THAN_ZERO = "greater_than_zero";
    public $errors;
    private DbConnection $db;
    public mysqli $con;

    public function __construct()
    {
        $this->db = new DbConnection();
        $this->con = $this->db->connect();
    }

    abstract public function tableName();
    abstract public function readColumns();
    abstract public function editColumns();
    abstract public function validationRules();

    public function one($where)
    {
        $tableName = $this->tableName();
        $columns = $this->readColumns();

        $query = "select " . implode(',', $columns) . " from $tableName $where limit 1";

        $dbResult = $this->con->query($query);

        $result = $dbResult->fetch_assoc();

        if ($result != null) {
            $this->mapData($result);
        }
    }

    public function mapData($data)
    {
        if ($data !== null){
            foreach ($data as $key => $value) {
                if (property_exists($this, $key)){
                    $this->{$key} = $value;
                }
            }
        }
    }

    public function all($where)
    {
        $tableName = $this->tableName();
        $columns = $this->readColumns();

        $query = "select " . implode(',', $columns) . " from $tableName $where";

        $dbResult = $this->con->query($query);

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        return $resultArray;
    }

    public function update($where)
    {
        $tableName = $this->tableName();
        $columns = $this->editColumns();
        $columnsHelper = array_map(fn($attr) => ":$attr", $columns);

        $commonHelper=[];

        for ($i=0; $i < count($columns); $i++) {
            $commonHelper[] = "$columns[$i] = $columnsHelper[$i]";
        }

        $query = "update $tableName set ". implode(',',$commonHelper) ." $where";

        foreach ($columns as $attribute) {
            $query = str_replace(":$attribute", is_string($this->{$attribute}) ? '"' . $this->{$attribute} . '"' : $this->{$attribute}, $query);
        }

        $this->con->query($query);
    }

    public function insert()
    {
        $tableName = $this->tableName();
        $columns = $this->editColumns();
        $columnsHelper = array_map(fn($attr) => ":$attr", $columns);

        $query = "insert into $tableName (". implode(',',$columns) .") values (". implode(',',$columnsHelper) .")";

        foreach ($columns as $attribute) {
            $query = str_replace(":$attribute", is_string($this->{$attribute}) ? '"' . $this->{$attribute} . '"' : $this->{$attribute}, $query);
        }

        $this->con->query($query);
    }

    public function remove($where)
    {
        $tableName = $this->tableName();
        $columns = $this->editColumns();

        $query = "delete from $tableName $where";

        $this->con->query($query);
    }



    public function validate()
    {
        $allRules = $this->validationRules();

        foreach ($allRules as $attribute => $rules) {

            $value = $this->{$attribute};

            foreach ($rules as $rule) {

                if ($rule == self::RULE_REQUIRED){
                    if (!$value)
                    {
                        $this->errors[$attribute][] = "This field is required.";
                    }
                }

                if ($rule == self::RULE_EMAIL){
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)){
                        $this->errors[$attribute][] = "Must be a valid email address.";
                    }
                }
                if ($rule == self::RULE_UNIQUE_EMAIL){
                    if ($this->checkUniqueEmail($value)){
                        $this->errors[$attribute][] = "This email already exists.";
                    }
                }
                if ($rule == self::RULE_UNIQUE_USERNAME){
                    if ($this->checkUniqueUsername($value)){
                        $this->errors[$attribute][] = "This username already exists.";
                    }
                }
                if ($rule == self::RULE_GREATER_THAN_ZERO){
                    if ($value<=0){
                        $this->errors[$attribute][] = "Price must be greater than zero.";
                    }
                }

            }
        }
    }

    public function checkUniqueEmail($email)
    {
        $query = "select email from users where email='$email'";
        $dbResult = $this->con->query($query);
        $result = $dbResult->fetch_assoc();

        if ($result != null){
            return true;
        }
        else {
            return false;
        }
    }

    public function checkUniqueUsername($username)
    {
        $query = "select username from users where username='$username'";
        $dbResult = $this->con->query($query);
        $result = $dbResult->fetch_assoc();

        if ($result != null){
            return true;
        }
        else {
            return false;
        }
    }



}