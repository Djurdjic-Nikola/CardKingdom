<?php

use app\core\Form;
use app\models\DeckModel;

/** @var $params DeckModel */
$form = new Form();
?>

<div class="card">
    <form action="/processUpdateDeck" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $params->id ?>">
        <input type="hidden" name="games_won" value="<?php echo $params->games_won ?>">
        <input type="hidden" name="games_lost" value="<?php echo $params->games_lost ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Deck</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Deck Information</p>
            <div class="row">
                <div class="col-md-12">
                    <?php $form->renderInputForm("text","Name", "deck_name", $params);?>
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