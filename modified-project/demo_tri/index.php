<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
    <meta name="author" content="DazeinCreative">
    <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio MRI</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/indexCss.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" ></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script> -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery-ui.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/MrRio/jsPDF/dist/jspdf.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/niklasvh/html2canvas@0.5.0-alpha2/dist/html2canvas.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <!-- <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script> -->
    
    <style>
        body {
            background-color: #F1F3F3
        }

        .axis {
            font: 15px sans-serif;
        }

        .axis path,
        .axis line {
            fill: none;
            stroke: #D4D8DA;
            stroke-width: 1px;
            shape-rendering: crispEdges;
        }

        .toolTip {
            position: absolute;
            display: none;
            min-width: 80px;
            height: auto;
            background: none repeat scroll 0 0 #ffffff;
            border: 1px solid #6F257F;
            padding: 14px;
            text-align: center;
        }
    </style>
    <style type="text/css">
        #res {
            position: absolute;
            /*padding: 50px 0 0 20px;*/
        }

        #country-list {
            float: left;
            list-style: none;
            padding: 0;
            width: 100%;
            position: absolute;
        }

        #country-list li {
            padding: 10px;
            background: #f0f0f0;
            border-bottom: #bbb9b9 1px solid;
        }

        #country-list li:hover {
            background: #ece3d2;
            cursor: pointer;
        }
    </style>

</head>




<script type="text/javascript">
       
    </script>

    <body>


        <!--Smooth Scroll-->
        <div class="smooth-overflow">


            <div class="content-wrapper">

                <div class="breadcrumb clearfix" style="display: none">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li><a href="index.html">Dashboard</a></li>
                        <li> <a>Data </a></li>
                        <li class="active">Stock</li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="one-normal">
                                <div class="row" style="background: #f8f8f8; margin: 15px 15px; display: none ">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div id="show"></div>
                                    </div>
                                </div>

                                <!-- <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <h2 style="padding-left: 10px;">Price Chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <canvas id="dynamicsparkline" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div> -->


                                <div class="row" style="background: #f8f8f8; margin: 15px 15px; display: none">
                                    <h2 style="padding-left: 10px;">Adj. Price Chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <canvas id="adj_close_price_chart" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div>

                                <!-- <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                        <canvas id="dynamicsparkline" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div> -->

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px ;display: none">
                                    <h2 style="padding-left: 10px;">TRI chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <canvas id="trichart" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div>


                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <h2 style="padding-left: 10px;">Adj. Price & TRI chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <canvas id="pri_adjpri_tri" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--/Smooth Scroll  scroll top -->
        <div class="scroll-top-wrapper hidden-xs"> <i class="fa fa-angle-up"></i> </div>
        <!-- /scroll top -->

        <!--Modals-->
        <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->

        <script type="text/javascript">

            $(document).ready(function(){
                
                $.ajax({
                    type: "GET",
                    url: "tri.csv",
                    dataType: "text",
                    success: function(data) {
                        processData(data);
                    }
                });

            });

                function processData(allText) {
                    var allTextLines = allText.split(/\r\n|\n/);
                    var headers = allTextLines[0].split(',');
                    var priceChart = [];
                    var adj_priceChart = [];
                    var dateChart = [];
                    var triChart = [];
                    var dividendChart = [];

                    for (var i = 1; i < allTextLines.length; i++) {
                        var data = allTextLines[i].split(',');
                        if (data.length == headers.length) {

                            var tarr = [];
                            for (var j = 0; j < headers.length; j++) {
                                tarr.push(headers[j] + ":" + data[j]);
                            }
                            //alert(tarr);
                            var date_t = tarr[1].split(':');
                            var price_t = tarr[0].split(':');
                            var tri = tarr[3].split(':');

                            dateChart.push(date_t[1]);
                            //alert(date_t[1]);
                            adj_priceChart.push(price_t[1]);
                            //alert(price_t[1]);
                            triChart.push(tri[1]);
                            //alert(tri[1]);
                           
                        }
                    }
                  

                
            
            var output = '<h2><a>' + 'Apple Inc' + '</a></h2><br>';
            output += '<h4>' + 'NasdaqGS' + ': ' + 'AAPL' + '</h4>';


            $('#show').html(output);

            

            window.step3LineChart = new Chart(document.getElementById("adj_close_price_chart").getContext("2d"), {
                "type": "line",
                "data": {
                    "labels": dateChart,
                    "datasets": [{
                        "label": "Price",
                        "data": adj_priceChart,
                        "fill": false,
                        "lineTension": 0.000001,
                        "pointRadius": 0,
                        "pointHoverRadius": 5,
                        "pointHoverBackgroundColor": "#000",
                        "pointHoverBorderColor": "#fff",
                        "borderColor": ["#f2aa74"],
                        "borderWidth": 2,
                        "backgroundColor": ["#f2aa74"]

                    }],
                },
                "options": {
                    "responsive": true,
                }
            });


            window.step3LineChart = new Chart(document.getElementById("trichart").getContext("2d"), {
                "type": "line",
                "data": {
                    "labels": dateChart,
                    "datasets": [{
                        "label": "Price",
                        "data": triChart,
                        "fill": false,
                        "lineTension": 0.000001,
                        "pointRadius": 0,
                        "pointHoverRadius": 5,
                        "pointHoverBackgroundColor": "#000",
                        "pointHoverBorderColor": "#fff",
                        "borderColor": ["#49e5a4"],
                        "borderWidth": 2,
                        "backgroundColor": ["#49e5a4"]

                    }],
                },
                "options": {
                    "responsive": true,
                }
            });
            //alert(adj_price);


            window.step3LineChart = new Chart(document.getElementById("pri_adjpri_tri").getContext("2d"), {
                "type": "line",
                "data": {
                    "labels": dateChart,
                    "datasets": [

                        {
                            "label": "split Adjusted Price",
                            "data": adj_priceChart,
                            "fill": false,
                            "lineTension": 0.000001,
                            "pointRadius": 0,
                            "pointHoverRadius": 5,
                            "pointHoverBackgroundColor": "#000",
                            "pointHoverBorderColor": "#fff",
                            "borderColor": ["#f2aa74"],
                            "borderWidth": 2,
                            "backgroundColor": ["#f2aa74"]
                        },

                        {
                            "label": "TRI",
                            "data": triChart,
                            "fill": false,
                            "lineTension": 0.000001,
                            "pointRadius": 0,
                            "pointHoverRadius": 5,
                            "pointHoverBackgroundColor": "#000",
                            "pointHoverBorderColor": "#fff",
                            "borderColor": ["#49e5a4"],
                            "borderWidth": 2,
                            "backgroundColor": ["#49e5a4"]
                        }

                    ],
                },
                "options": {
                    "responsive": true,
                }
            });

            };
        </script>

        <script>
        </script>


    </body>

    </html>