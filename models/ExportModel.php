<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;

class ExportModel extends BaseModel
{

    public function exportCardData()
    {

        $target_dir ="c:/";
        $original_file_name = "cardData";
        $file_extension = "csv";
        $new_file_name = "cardData-".uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_file_name;

        if (file_exists($target_file)) {
            Application::$app->session->set('errorNotification', 'File already exists!');
            exit;
        }

        $query = "SELECT * INTO OUTFILE '$target_file'
                    FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '" . '"' . "'
                    LINES TERMINATED BY '\\n'
                    FROM cards;";

        $this->con->query($query);

        Application::$app->session->set('successNotification', 'Cards exported!');

        header("location: /cards");

    }

    public function exportUserData()
    {

        $target_dir ="c:/";
        $original_file_name = "userData";
        $file_extension = "csv";
        $new_file_name = "userData-".uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_file_name;

        if (file_exists($target_file)) {
            Application::$app->session->set('errorNotification', 'File already exists!');
            exit;
        }

        $query = "SELECT * INTO OUTFILE '$target_file'
                    FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '" . '"' . "'
                    LINES TERMINATED BY '\\n'
                    FROM users;";

        $this->con->query($query);

        Application::$app->session->set('successNotification', 'Users exported!');

        header("location: /users");

    }

    public function exportDeckData()
    {

        $target_dir ="c:/";
        $original_file_name = "deckData";
        $file_extension = "csv";
        $new_file_name = "deckData-".uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_file_name;

        if (file_exists($target_file)) {
            Application::$app->session->set('errorNotification', 'File already exists!');
            exit;
        }

        $query = "SELECT * INTO OUTFILE '$target_file'
                    FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '" . '"' . "'
                    LINES TERMINATED BY '\\n'
                    FROM decks;";

        $this->con->query($query);

        Application::$app->session->set('successNotification', 'Decks exported!');

        header("location: /decks");

    }

    public function tableName()
    {
        return "";
    }

    public function readColumns()
    {
        return [];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
    }
}