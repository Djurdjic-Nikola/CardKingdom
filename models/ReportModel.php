<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;
use DateTime;

class ReportModel extends BaseModel
{
    public string $from = '';
    public string $to = '';

    public int $min = 0;
    public int $max = 0;

    public string $from_card = '';
    public string $to_card = '';
    public string $card = '';

    public function getNumberOfReservationsPerMonth()
    {
        $id_user = 0;
        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $dbResult = $this->con->query("SELECT MONTHNAME(purchase_time) as 'month', count(id) as 'number_of_reservations'
                                                FROM user_cards where id_user = $id_user group by MONTHNAME(purchase_time);");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }

    public function winsPerDeck()
    {
        $id_user = 0;
        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $dbResult = $this->con->query("SELECT
    d.deck_name as 'name',
    SUM(c.price) AS 'total_deck_price',
    games_won/(games_won+games_lost) as 'number_of_wins'
FROM
    decks d
JOIN
    deck_cards dc ON d.id = dc.id_deck
JOIN
    cards c ON dc.id_card = c.id
WHERE d.id_user = $id_user
GROUP BY
    d.id
ORDER BY d.deck_name;");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }

    public function pricePerDeck()
    {
        $id_user = 0;
        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $dbResult = $this->con->query("SELECT
    d.deck_name as 'name',
    SUM(c.price) AS 'total_deck_price'
FROM
    decks d
JOIN
    deck_cards dc ON d.id = dc.id_deck
JOIN
    cards c ON dc.id_card = c.id
WHERE d.id_user = $id_user
GROUP BY
    d.id
ORDER BY d.deck_name;
");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }

    public function getPricePerMonth()
    {
        $id_user = 0;
        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $dbResult = $this->con->query("SELECT MONTHNAME(purchase_time) as 'month',  sum(price) as 'price'
                                FROM user_cards where id_user = $id_user group by MONTHNAME(purchase_time);");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }

    public function getPricePerUser()
    {
        if (!$this->from || $this->from == '') {
            $fromDate = new DateTime('2024-01-01');
            $this->from = $fromDate->format('Y-m-d');
        }

        if (!$this->to  || $this->to == '') {
            $toDate = new DateTime();
            $this->to = $toDate->format('Y-m-d');
        }

        $dbResult = $this->con->query("select u.email,
                                                     sum(price) as price
                                              from user_cards r
                                              left join users u on r.id_user = u.id
                                              where date(purchase_time) between  '$this->from' and  '$this->to'
                                              group by u.email;");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }

    public function getMinMaxSpent()
    {
        if (!$this->min || $this->min == '') {
            $this->min = 0;
        }

        if (!$this->max  || $this->max == '') {
            $this->max = PHP_INT_MAX;
        }

        $id_user = 0;
        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $dbResult = $this->con->query("SELECT
    d.deck_name as 'email',
    d.games_won/(d.games_won+d.games_lost) as 'total_spent'
FROM
    decks d
where (d.games_won/(d.games_won+d.games_lost)*100) between  '$this->min' and  '$this->max'
ORDER BY d.deck_name;");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }

    public function getPricePerCard()
    {
        if (!$this->from_card || $this->from_card == '') {
            $fromDate = new DateTime('2024-01-01');
            $this->from_card = $fromDate->format('Y-m-d');
        }

        if (!$this->to_card  || $this->to_card == '') {
            $toDate = new DateTime();
            $this->to_card = $toDate->format('Y-m-d');
        }

        $dbResult = $this->con->query("select MONTHNAME(r.purchase_time) as 'date',sum(r.price) as 'price'
                                              from user_cards r
                                              left join cards u on r.id_card = u.id
                                              where u.id = $this->card and date(purchase_time) between  '$this->from_card' and  '$this->to_card'
                                              group by MONTHNAME(r.purchase_time)");

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        echo json_encode($resultArray);
    }


    public function tableName()
    {
        return '';
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