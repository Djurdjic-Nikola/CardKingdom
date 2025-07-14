<?php

use app\models\CardModel;

/** @var $params CardModel */
?>

<div class="card" style="max-height: 100vh;">
    <div class="card-body p-2 overflow-y-scroll overflow-x-hidden">
        <div class='row'>
            <?php
            if ($params) {
                foreach ($params->cards as $param) {
                    echo "
                            <div class='col-md-6'>
                            <form action='/processAddToDeck' method='post' autocomplete='off'>
                            <input type='hidden' name='id_card' value='$param[id]'>
                            <input type='hidden' name='id_deck' value='$params->id_deck'>
                                <div class='card mb-3 ms-3 me-3'>
                                    <div class='row g-0'>
                                        <div class='col-md-4'>
                                            <img src='../assets/uploads/$param[artwork]' class='img-fluid rounded-start' alt='...'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body p-2'>
                                                <p class='card-title p-0 m-0'>$param[name] - $param[cardSet]</p>
                                                <p class='card-text  p-0 m-0'>$param[text]</p>
                                            </div>
                                            <div class='card-footer p-2'>
                                                <div class='row'>
                                                <div class='col-md-6 d-flex justify-content-center align-items-center'>
                                                  <button class='btn btn-sm btn-success mb-0'>Add</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                </form>
                            </div>
                          ";
                }
            } else {
                echo "<h3>No reserved services!</h3>";
            }
            ?>
        </div>
    </div>
</div>