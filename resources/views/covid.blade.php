@extends('layout')
@section('content')
<style>
    #statewise {
        font-family: 'Poppins', sans-serif;
    }

    #alerts_data {
        margin-top: 10px;
    }

    #total_confirmed,
    #total_recovered,
    #total_deceased,
    #total_samples_tested {
        font-size: 24px;
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    #daily_confirmed,
    #daily_recovered,
    #daily_deceased,
    #update_timestamp {
        font-size: 18px;
        color: white;
    }

    .tested,
    .confirmed,
    .recovered,
    .deceased {
        border-radius: 10px;
        border-color: white;
        margin-bottom: 7px;
    }

    .tested h3,
    .confirmed h3,
    .recovered h3,
    .deceased h3 {
        color: white;
    }

    .tested {
        padding-top: 25px;
        padding-bottom: 25px;
        margin-bottom: 7px;
    }

    .confirmed {
        background: #ED213A;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #93291E, #ED213A);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #93291E, #ED213A);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .tested {
        background: #5433FF;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .recovered {
        background: #56ab2f;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #a8e063, #56ab2f);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #a8e063, #56ab2f);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .deceased {
        background: #232526;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #414345, #232526);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #414345, #232526);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .alert {
        animation: fadeInAnimation ease 2s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }

    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }

    .container strong {
        font-size: 35px;
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

    @media only screen and (max-width: 800px) {

        #total_confirmed,
        #total_recovered,
        #total_deceased,
        #total_samples_tested {
            font-size: 17px;
        }

        #daily_confirmed,
        #daily_recovered,
        #daily_deceased,
        #update_timestamp {
            font-size: 13px;
        }

        .tested,
        .confirmed,
        .recovered,
        .deceased,
        .tested {
            margin-bottom: 6px;
        }

        .alert h3 {
            font-size: 16px;
        }

        table {
            font-size: 12px;
        }

        .container strong {
            font-size: 24px;
        }
    }
</style>
</head>

<body>
    <div class="container" id="alerts_data">
        <div class="animate__animated animate__fadeIn">
            <strong>COVID - 19 Dashboard {INDIA}</strong><br>
            <div id="date"></div>IST (GMT+5:30)
        </div>
        <hr>
        <div class="row">

            <div class="col-lg-6 animate__animated animate__fadeIn">
                <div class="alert text-white confirmed back-widget-set text-center">
                    <h3>Confirmed</h3>
                    <b>
                        <div id="total_confirmed">
                        </div>
                    </b>
                    <div id="daily_confirmed"></div>
                </div>
            </div>

            <div class="col-lg-6 animate__animated animate__fadeIn">
                <div class="alert text-white recovered back-widget-set text-center">
                    <h3>Recovered</h3>
                    <b>
                        <div id="total_recovered"></div>
                    </b>
                    <div id="daily_recovered"></div>
                </div>
            </div>

            <div class="col-lg-6 animate__animated animate__fadeIn">
                <div class="alert text-white deceased back-widget-set text-center">
                    <h3>Deceased</h3>
                    <b>
                        <div id="total_deceased"></div>
                    </b>
                    <div id="daily_deceased"></div>
                </div>
            </div>

            <div class="col-lg-6 animate__animated animate__fadeIn">
                <div class="alert text-white tested back-widget-set text-center">
                    <h3>Tested</h3>
                    <b>
                        <div id="total_samples_tested"></div>
                    </b>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <h4 style="font-weight: 500;padding-left:8px;" class="animate__animated animate__fadeIn">COVID-19 Statewise Status</h4>
            <table class="table table-hover table-sm table-bordered animate__animated animate__fadeIn">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">State</th>
                        <th scope="col" class="table-warning">Confirmed</th>
                        <th scope="col" class="table-primary">Active</th>
                        <th scope="col" class="table-success">Recovered</th>
                        <th scope="col" class="table-danger">Deceased</th>
                    </tr>
                </thead>
                <tbody id="statewise">

                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card" style="padding: 10px; margin-top:10px; margin-bottom:10px;">
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
                <p>Source of this data is <a href="https://api.covid19india.org/" target="_blank">COVID19-India API.</a></p>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    //number to commas
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }

    //API 
    $.ajax({
        url: "https://api.covid19india.org/data.json",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            console.log(data);

            $.each(data.cases_time_series, function(key, value) {
                document.getElementById('total_confirmed').innerHTML = numberWithCommas(value.totalconfirmed)
                document.getElementById('daily_confirmed').innerHTML = '+ ' + numberWithCommas(value.dailyconfirmed)
                document.getElementById('total_recovered').innerHTML = numberWithCommas(value.totalrecovered)
                document.getElementById('daily_recovered').innerHTML = '+ ' + numberWithCommas(value.dailyrecovered)
                document.getElementById('total_deceased').innerHTML = numberWithCommas(value.totaldeceased)
                document.getElementById('daily_deceased').innerHTML = '+ ' + numberWithCommas(value.dailydeceased)
                document.getElementById('date').innerHTML = 'As on ' + value.date + '2020'
                //    console.log(key + " : " + value.totalconfirmed)
            });

            $.each(data.tested, function(key, value) {
                document.getElementById('total_samples_tested').innerHTML = numberWithCommas(value.totalsamplestested)
            });

            var sno = 1;
            $.each(data.statewise, function(key, value) {
                $("#statewise").append("<tr>" +
                    "<td>" + sno + "</td>" +
                    "<td>" + value.state + "</td>" +
                    "<td>" + value.confirmed + "</td>" +
                    "<td>" + value.active + "</td>" +
                    "<td>" + value.recovered + "</td>" +
                    "<td>" + value.deaths + "</td>"
                );
                sno++;
            });
        }
    });
</script>

<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
    window.onload = function() {
        var dataPoints = [];
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light1", //"light1", "dark1", "dark2"
            animationEnabled: true,
            zoomEnabled: true,
            title: {
                text: "Total Coronavirus Cases in India"
            },
            data: [{
                type: "area",
                lineThickness: 2,
                dataPoints: dataPoints,
            }]
        });
        $.getJSON("https://api.covid19india.org/data.json", function(data) {
            $.each(data.cases_time_series, function(key, value) {
                dataPoints.push({
                    x: new Date(value.date + '2020'),
                    y: parseInt(value.totalconfirmed)
                });
            });
            chart.render();
        });
    }
</script>
@endsection