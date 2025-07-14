<?php

use app\core\Form;
use app\models\DeckModel;

/** @var $params DeckModel */
$form = new Form();
?>

<div class="card">
    <form action="/processCreateDeck" method="post">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Create Deck</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Deck Information</p>
            <div class="row">
                <div class="col-md-12">
                    <?php $form->renderInputForm("text","Deck name", "deck_name", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text","Games won", "games_won", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text","Games lost", "games_lost", $params);?>
                </div>
            </div>
        </div>
    </form>
</div>