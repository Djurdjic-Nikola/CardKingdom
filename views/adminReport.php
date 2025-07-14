<?php

use app\models\CardModel;

/** @var $params CardModel */
?>


<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label for="from">From:</label>
                        <input type="date" class="form-control date-helper" placeholder="From" id="from">
                    </div>
                    <div class="col-md-6">
                        <label for="from">To:</label>
                        <input type="date" class="form-control date-helper" placeholder="To" id="to">
                    </div>
                </div>
                <div class="chart">
                    <div id="price-per-user-canvas">
                        <canvas id="price-per-user"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label for="min">Minimum winrate:</label>
                        <input type="text" class="form-control price-helper" placeholder="Min" id="min" value="0">
                    </div>
                    <div class="col-md-6">
                        <label for="max">Maximum winrate:</label>
                        <input type="text" class="form-control price-helper" placeholder="Max" id="max" value="0">
                    </div>
                </div>
                <div class="chart">
                    <div id="min-max-spent-canvas">
                        <canvas id="min-max-spent"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label for="from_card">From:</label>
                        <input type="date" class="form-control date-helper-2" placeholder="From" id="from_card">
                    </div>
                    <div class="col-md-4">
                        <label for="to_card">To:</label>
                        <input type="date" class="form-control date-helper-2" placeholder="To" id="to_card">
                    </div>
                    <div class="col-md-4">
                        <label for="card_name">Choose a card:</label>
                        <div class="row">


                        <select name="card_name" id="card_name" class="select-helper">
                            <?php
                            foreach ($params as $param) {
                                echo "                      
                            <option value='$param[id]'>$param[name]</option>
                          ";
                            }

                            ?>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="chart">
                    <div id="price-per-card-canvas">
                        <canvas id="price-per-card"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        generatePricePerUser();
        getMinMaxSpent();
        generatePricePerCard();

        $(".date-helper").change(function () {
            generatePricePerUser();
        });

        $(".date-helper-2").change(function () {
            generatePricePerCard();
        });

        $(".select-helper").change(function () {
            generatePricePerCard();
        });

        $(".price-helper").change(function () {
            getMinMaxSpent();
        });
    });

    function generatePricePerUser() {
        $("#price-per-user-canvas").empty();
        $("#price-per-user-canvas").append(
            ' <canvas id="price-per-user"' +
            'style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"' +
            'class="chartjs-render-monitor"></canvas>'
        );

        let from = $("#from").val();
        let to = $("#to").val();

        let url = `/getPricePerUser?from=${from}&to=${to}`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.email;
            });

            let values = result.map(function (e) {
                return e.price;
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Profit per user",
                        data: values
                    }]
            }

            let options = {}

            let graph = $("#price-per-user").get(0).getContext('2d');

            createGraph(setData, graph, 'bar', options);
        });
    }

    function getMinMaxSpent() {
        $("#min-max-spent-canvas").empty();
        $("#min-max-spent-canvas").append(
            ' <canvas id="min-max-spent"' +
            'style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"' +
            'class="chartjs-render-monitor"></canvas>'
        );

        let min = $("#min").val();
        let max = $("#max").val();

        let url = `/getMinMaxSpent?min=${min}&max=${max}`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.email;
            });

            let values = result.map(function (e) {
                return (e.total_spent*100);
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Winrate",
                        data: values
                    }]
            }

            let options = {}

            let graph = $("#min-max-spent").get(0).getContext('2d');

            createGraph(setData, graph, 'bar', options);
        });
    }

    function generatePricePerCard() {
        $("#price-per-card-canvas").empty();
        $("#price-per-card-canvas").append(
            ' <canvas id="price-per-card"' +
            'style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"' +
            'class="chartjs-render-monitor"></canvas>'
        );

        let from_card = $("#from_card").val();
        let to_card = $("#to_card").val();
        let card = $("#card_name").val();

        let url = `/getPricePerCard?from_card=${from_card}&to_card=${to_card}&card=${card}`;
        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.date;
            });

            let values = result.map(function (e) {
                return e.price;
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Card total profit",
                        data: values
                    }]
            }

            let options = {}

            let graph = $("#price-per-card").get(0).getContext('2d');

            createGraph(setData, graph, 'line', options);
        });
    }



    function createGraph(setData, graph, chartType, options) {
        new Chart(graph, {
            type: chartType,
            data: setData,
            options: options
        });
    }
</script>