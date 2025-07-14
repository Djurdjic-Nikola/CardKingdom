<?php
use app\models\CardModel;

/** @var $params CardModel */

?>

<div class="card">
    <div class="card-header pb-0">
        <div class="d-flex align-items-center">
            <h6>Cards</h6>
            <a class="btn btn-primary btn-sm ms-auto" href="/createCard">Create</a>
            <a class="btn btn-outline-primary btn-sm ms-auto" href="/exportCards">Export cards</a>
        </div>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Card</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($params as $param) {
                    echo "<tr>";
                    echo "<td>";
                    echo "<div class='d-flex px-2 py-1'>";
                    echo "<div>";
                    echo "<img src='../assets/uploads/$param[artwork]' class='avatar avatar-sm me-3' alt='user1'>";
                    echo "</div>";
                    echo "<div class='d-flex flex-column justify-content-center'>";
                    echo "<h6 class='mb-0 text-sm'>$param[name] - $param[price]$</h6>";
                    echo "<p class='text-xs text-secondary mb-0'>$param[text]</p>";
                    echo "</div>";
                    echo "</div>";
                    echo " </td>";
                    echo "<td class='align-middle'>";
                    echo "<a href='/updateCard?id=$param[id]' class='text-secondary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit card'>";
                    echo "Edit";
                    echo "</a>";
                    echo " </td>";
                    echo "  </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
