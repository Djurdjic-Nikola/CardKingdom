<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AdminReportController;
use app\controllers\AuthController;
use app\controllers\CardController;
use app\controllers\DeckController;
use app\controllers\ExportController;
use app\controllers\PurchaseController;
use app\controllers\AnonCardController;
use app\controllers\UserCardController;
use app\controllers\UserController;
use app\controllers\HomeController;
use app\controllers\UserDeckController;
use app\controllers\UserReportController;
use app\core\Application;


$app = new Application();

//Home
$app->router->get('/', [HomeController::class, 'home']);

//Users
$app->router->get('/getUser', [UserController::class, 'readUser']);
$app->router->get('/users', [UserController::class, 'readAll']);
$app->router->get('/updateUser', [UserController::class, 'updateUser']);
$app->router->post('/processUpdateUser', [UserController::class, 'processUpdateUser']);
$app->router->get('/createUser', [UserController::class, 'createUser']);
$app->router->post('/processCreateUser', [UserController::class, 'processCreateUser']);

//Authentication
$app->router->get('/accessDenied', [AuthController::class, 'accessDenied']);
$app->router->get('/registration', [AuthController::class, 'registration']);
$app->router->post('/processRegistration', [AuthController::class, 'processRegistration']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/processLogin', [AuthController::class, 'processLogin']);
$app->router->get('/processLogout', [AuthController::class, 'processLogout']);

//Cards
$app->router->get('/cards', [CardController::class, 'listAdmin']);
$app->router->get('/allCards', [UserCardController::class, 'listAll']);
$app->router->get('/updateCard', [CardController::class, 'update']);
$app->router->post('/processUpdateCard', [CardController::class, 'processUpdate']);
$app->router->get('/createCard', [CardController::class, 'create']);
$app->router->post('/processCreateCard', [CardController::class, 'processCreate']);
$app->router->get('/cardForUser', [AnonCardController::class, 'listForUsers']);

//Purchase
$app->router->post('/processPurchase', [PurchaseController::class, 'processPurchase']);

//Decks
$app->router->get('/userDecks', [DeckController::class, 'userDecks']);
$app->router->get('/updateDeck', [DeckController::class, 'updateDeck']);
$app->router->post('/processUpdateDeck', [DeckController::class, 'processUpdateDeck']);
$app->router->get('/createDeck', [DeckController::class, 'createDeck']);
$app->router->post('/processCreateDeck', [DeckController::class, 'processCreateDeck']);
$app->router->get('/decks', [DeckController::class, 'list']);

//DECK CARDS
$app->router->get('/cardsInDeck', [UserDeckController::class, 'cardsInDeck']);
$app->router->get('/addToDeck', [UserDeckController::class, 'addToDeck']);
$app->router->post('/processAddToDeck', [UserDeckController::class, 'processAddToDeck']);
$app->router->get('/removeCardFromDeck', [UserDeckController::class, 'processRemoveFromDeck']);

//Report
$app->router->get('/myReport', [UserReportController::class, 'myReport']);
$app->router->get("/getNumberOfReservationsPerMonth",[UserReportController::class, 'getNumberOfReservationsPerMonth']);
$app->router->get("/getPricePerMonth",[UserReportController::class, 'getPricePerMonth']);
$app->router->get("/winsPerDeck",[UserReportController::class, 'winsPerDeck']);
$app->router->get("/pricePerDeck",[UserReportController::class, 'pricePerDeck']);

//Admin Report
$app->router->get("/adminReport",[AdminReportController::class, 'adminReport']);
$app->router->get("/getPricePerUser",[AdminReportController::class, 'getPricePerUser']);
$app->router->get("/getMinMaxSpent",[AdminReportController::class, 'getMinMaxSpent']);
$app->router->get("/getPricePerCard",[AdminReportController::class, 'getPricePerCard']);

//Data export
$app->router->get("/exportCards",[ExportController::class, 'exportCards']);
$app->router->get("/exportDecks",[ExportController::class, 'exportDecks']);
$app->router->get("/exportUsers",[ExportController::class, 'exportUsers']);

$app->run();
