<?php

use app\core\Form;
use app\models\CardModel;

/** @var $params CardModel */
$form = new Form();
?>

<div class="card">
    <form action="/processCreateCard" method="post" enctype="multipart/form-data">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Create Card</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Card Information</p>
            <div class="row">
                <div class="col-md-12">
                    <?php $form->renderInputForm("text","Name", "name", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "Text","text", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "Set","cardSet", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("file","Image", "artwork", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text","Price", "price", $params);?>
                </div>
            </div>
        </div>
    </form>
</div>