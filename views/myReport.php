<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="chart">
                    <div id="number-of-reservations-per-month-canvas">
                        <canvas id="number-of-reservations-per-month"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart">
                    <div id="price-per-month-canvas">
                        <canvas id="price-per-month"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="chart">
                    <div id="number-of-wins-per-deck-canvas">
                        <canvas id="number-of-wins-per-deck"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart">
                    <div id="price-per-deck-canvas">
                        <canvas id="price-per-deck"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="chart">
                    <div id="deck-value-canvas">
                        <canvas id="deck-value"
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
        generateNumberOfReservationsPerMonth();
        getPricePerMonth();
        winsPerDeck();
        pricePerDeck();
        deckValue()
    });

    function winsPerDeck() {
        let url = `/winsPerDeck`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.name;
            });

            let values = result.map(function (e) {
                return (e.number_of_wins*100);
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Deck winrate",
                        data: values,
                        backgroundColor: ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                            '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                            '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                            '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                            '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                            '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                            '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                            '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                            '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                            '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']

                    }]
            }

            let options = {}

            let graph = $("#number-of-wins-per-deck").get(0).getContext('2d');

            createGraph(setData, graph, 'bar', options);
        });
    }

    function deckValue() {
        let url = `/winsPerDeck`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.name;
            });

            let values2 = result.map(function (e) {
                return (e.total_deck_price/e.number_of_wins);
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Adjusted deck cost",
                        data: values2,
                        backgroundColor: ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                            '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                            '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                            '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                            '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                            '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                            '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                            '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                            '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                            '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']

                    }]
            }

            let options = {}

            let graph = $("#deck-value").get(0).getContext('2d');

            createGraph(setData, graph, 'line', options);
        });
    }

    function pricePerDeck() {
        let url = `/pricePerDeck`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.name;
            });

            let values = result.map(function (e) {
                return e.total_deck_price;
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Price per deck",
                        data: values
                    }]
            }

            let options = {}

            let graph = $("#price-per-deck").get(0).getContext('2d');

            createGraph(setData, graph, 'doughnut', options);
        });
    }

    function generateNumberOfReservationsPerMonth() {
        let url = `/getNumberOfReservationsPerMonth`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.month;
            });

            let values = result.map(function (e) {
                return e.number_of_reservations;
            });

            let graph = $("#number-of-reservations-per-month").get(0).getContext('2d');


            let gradientStroke1 = graph.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
            gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Number of purchases per month",
                        data: values,
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#5e72e4",
                        backgroundColor: gradientStroke1,
                        borderWidth: 3,
                        fill: true,
                        maxBarThickness: 6
                    }]
            }




            let options = {responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        min:0,
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#252121FF',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#252121FF',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            }


            createGraph(setData, graph, 'line', options);
        });
    }

    function getPricePerMonth() {
        let url = `/getPricePerMonth`;

        $.getJSON(url, function (result) {
            let labels = result.map(function (e) {
                return e.month;
            });

            let values = result.map(function (e) {
                return e.price;
            });

            let setData = {
                labels: labels,
                datasets: [
                    {
                        label: "Price per month",
                        data: values,
                        backgroundColor: ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                            '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                            '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                            '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                            '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                            '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                            '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                            '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                            '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                            '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']
                    }]
            }

            let options = {}

            let graph = $("#price-per-month").get(0).getContext('2d');

            createGraph(setData, graph, 'doughnut', options);
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