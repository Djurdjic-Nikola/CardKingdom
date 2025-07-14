<?php

use app\models\CardModel;

/** @var $params CardModel */
?>

<div class="overflow-scroll pt-7" style="max-height: 750px;">
    <?php
    foreach ($params as $param) {
        echo '
        <div class="card mb-3 ms-3 me-3">
        <form action="/processPurchase" method="post" autocomplete="off">
        <input type="hidden" name="id_card" value="'."$param[id]".'">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="'."../assets/uploads/$param[artwork]".'" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body p-2">
                    <p class="card-title p-0 m-0">'."$param[name]".'</p>
                    <p class="card-text p-0 m-0">'."$param[text]".'</p>
                </div>
                <div class="card-footer p-2">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <button class="btn btn-sm btn-primary mb-0">Get now - '."$param[price]".'$</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>   
        </div>
        ';
    }
    ?>
</div>


