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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
    <script>
        webshims.setOptions('forms-ext', {
            types: 'date'
        });
        webshims.polyfill('forms forms-ext');
        $.webshims.formcfg = {
            en: {
                dFormat: '-',
                dateSigns: '-',
                patterns: {
                    d: "yy-mm-dd"
                }
            }
        };
    </script>
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
<!-- <?php
    // $tick = $_GET['ticker'];
    // //echo '<script>alert('.$tick.');</script>';
    // $url = "https://api.intrinio.com/companies?identifier=".$tick;

    // $urlPri = "https://api.intrinio.com/prices?identifier=".$tick;
    // //$urlPri = "https://api.intrinio.com/prices?identifier=".$tick."&start_date=2014-06-01&end_date=2014-08-10";
    
    // $urlHisData = "https://api.intrinio.com/historical_data?identifier=".$tick."&item=totalrevenue";

    // $urlQuote = "https://api.intrinio.com/data_point?identifier=".$tick."&item=price_date,close_price,percent_change,open_price,high_price,low_price";

    // $options = array(
    // 'http' => array(
    // 'header' => "Content-type: application/x-www-form-urlencoded",
    // 'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    // )
    // );
    // $context = stream_context_create($options);
    // $result = file_get_contents($url, false, $context);
    // $prices = file_get_contents($urlPri, false, $context);
    // $historicalData = file_get_contents($urlHisData, false, $context);

    // $quoteData = file_get_contents($urlQuote, false, $context);
    // //var_dump($result);die;
    // //echo '<p>'.$result.'</p>';

?> -->


<?php
    $tick = $_GET['ticker'];
    //echo '<script>alert('.$tick.');</script>';
    $url = "https://api.intrinio.com/companies?identifier=".$tick;

    $urlPri = "https://api.intrinio.com/prices?identifier=".$tick;

    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded",
    'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $prices = file_get_contents($urlPri, false, $context);
   // $historicalData = file_get_contents($urlHisData, false, $context);

    //$quoteData = file_get_contents($urlQuote, false, $context);

    $p =  JSON_decode($prices,true);

    $open_price = array();
    $close_price = array();
    $adj_price = array();
    $price_date = array();
    $dividend = array();
    foreach ($p['data'] as $data)
    {
        $open_price[] = $data['open'];
        $close_price[] = $data['close'];
        $adj_price[] = $data['adj_close'];
        $price_date[] = $data['date'];
        $dividend[] = $data['ex_dividend'];
    }

    $total_pages = $p['total_pages'];
    if($total_pages > 14){
        $total_pages = 14;
    }
    for($i = 2; $i <= $total_pages; $i++ ){
        $urlPri = "https://api.intrinio.com/prices?identifier=".$tick."&page_number=".$i;

        $prices = file_get_contents($urlPri, false, $context);
        $p =  JSON_decode($prices,true);

        //$open_price = array();
        foreach ($p['data'] as $data)
        {
            $open_price[] = $data['open'];
            $close_price[] = $data['close'];
            $adj_price[] = $data['adj_close'];
            $price_date[] = $data['date'];
            $dividend[] = $data['ex_dividend'];
        }

    }
    
?>

    <script type="text/javascript">
        // var counter = 1;
        // var lines = [];
        // var ticker = [];
    </script>

    <body>


        <!--Smooth Scroll-->
        <div class="smooth-overflow">


            <div class="content-wrapper">

                <div class="breadcrumb clearfix">
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
                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div id="show"></div>
                                    </div>
                                </div>

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <h2 style="padding-left: 10px;">Price Chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                        <canvas id="dynamicsparkline" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div>


                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <h2 style="padding-left: 10px;">Adj. Price Chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                        <canvas id="adj_close_price_chart" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div>

                                <!-- <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                        <canvas id="dynamicsparkline" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div> -->

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                <h2 style="padding-left: 10px;">TRI chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                        <canvas id="trichart" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                    </div>
                                </div>


                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                <h2 style="padding-left: 10px;">Price, Adj. Price & TRI chart</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
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
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        <script type="text/javascript">

            var comp = JSON.parse(<?php echo JSON_encode($result,true); ?>);
            //var compPrice = JSON.parse(<?php  //echo JSON_encode($prices,true); ?>);
            //var compHistoricalData = JSON.parse(<?php  //echo JSON_encode($historicalData,true); ?>);
            //var compQouteData = JSON.parse(<?php // echo JSON_encode($quoteData,true); ?>);

            //alert(compPrice.data[0].close);
            

            // data2 = comp.data.filter(function(d) {
            //         if(d.date >= startDate && d.date <= endDate)
            //         return d.value;
            //     });
            // var show = JSON.stringify(comp);
            // show = show.split(",");
            // var string = "";
            // for(var i = 0; i < show.length; i++){
            //     string += '<p>'+show[i]+'</p>';
            // }
            // $('#show').html(string);
            var output = '<h2><a href="https://' + comp.company_url + '">' + comp.name + '</a></h2><br>';
            output += '<h4>' + comp.stock_exchange + ': ' + comp.ticker + '</h4>';
            //output += '<h4>Last Price: <label style="color: red;">$' + compPrice.data[0].close + '</label></h4>';


            $('#show').html(output);

            //var priceTableRow = "";
            var price_open = <?php echo JSON_encode($open_price,true); ?>;
            var price_date = <?php echo JSON_encode($price_date,true); ?>;
            var price_close = <?php echo JSON_encode($close_price,true); ?>;
            var price_adj_close = <?php echo JSON_encode($adj_price,true); ?>;
            var dividend = <?php echo JSON_encode($dividend,true); ?>;
            
            var priceChart = [];
            var adj_priceChart = [];
            var dateChart = [];
            var triChart = [];
            var dividendChart = [];

            var j = 0;
            for(var i = price_date.length - 1; i >= 0; i--)
            {
                priceChart[j] = price_close[i];
                adj_priceChart[j] = price_adj_close[i];
                dateChart[j] = price_date[i];
                dividendChart[j] = dividend[i];
                
                j++;
            }

            triChart[0] = 100;
            var shares_owned = 100/adj_priceChart[0];
            alert(shares_owned);
            for(var k = 1; k < price_date.length -1; k++)
            {
                if(dividendChart[k] > 0)
                {
                    shares_owned = (shares_owned*dividendChart[k]) + shares_owned;
                }

                triChart[k] = adj_priceChart[k] * shares_owned;
            }


            //alert(priceChart);
            //alert(adj_priceChart);
            //alert(dateChart);
            //alert(triChart);

            window.step3LineChart = new Chart(document.getElementById("dynamicsparkline").getContext("2d"), {
                        "type": "line",
                        "data": {
                            "labels": dateChart,
                            "datasets": [{
                                "label": "Price",
                                "data": priceChart,
                                "fill": false,
                                "lineTension": 0.000001,
                                "pointRadius": 0,
                                "pointHoverRadius": 5,
                                "pointHoverBackgroundColor": "#000",
                                "pointHoverBorderColor": "#fff",
                                "borderColor": ["#0084CE"],
                                "borderWidth": 3,
                                "backgroundColor": ["#0084CE"]

                            }],
                        },
                        "options": {
                            "responsive": true,
                        }
                    });

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
                                "borderColor": ["#0084CE"],
                                "borderWidth": 3,
                                "backgroundColor": ["#0084CE"]

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
                                "borderColor": ["#0084CE"],
                                "borderWidth": 3,
                                "backgroundColor": ["#0084CE"]

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
                            "datasets": [{
                                "label": "Price",
                                "data": priceChart,
                                "fill": false,
                                "lineTension": 0.000001,
                                "pointRadius": 0,
                                "pointHoverRadius": 5,
                                "pointHoverBackgroundColor": "#000",
                                "pointHoverBorderColor": "#fff",
                                "borderColor": ["#0084CE"],
                                "borderWidth": 3,
                                "backgroundColor": ["#0084CE"]

                            },
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
                                "borderWidth": 3,
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
                                "borderWidth": 3,
                                "backgroundColor": ["#49e5a4"]
                            }

                            ],
                        },
                        "options": {
                            "responsive": true,
                        }
                    });
           
        

            



           
        </script>

        <script>

        </script>
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script> -->

        <!--Scripts-->
        <!--GMaps-->
        <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  -->

        <!--JQuery-->
        <script type="text/javascript" src="js/vendors/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendors/jquery/jquery-ui.min.js"></script>

        <!--GMap-->
        <script type="text/javascript" src="js/vendors/gmap/jquery.gmap.js"></script>

        <!--EasyPieChart-->
        <script type="text/javascript" src="js/vendors/easing/jquery.easing.1.3.min.js"></script>
        <script type="text/javascript" src="js/vendors/easypie/jquery.easypiechart.min.js"></script>

        <!--Fullscreen-->
        <script type="text/javascript" src="js/vendors/fullscreen/screenfull.min.js"></script>

        <!--NanoScroller-->
        <script type="text/javascript" src="js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script>

        <!--Sparkline-->
        <script type="text/javascript" src="js/vendors/sparkline/jquery.sparkline.min.js"></script>

        <!--Horizontal Dropdown-->
        <script type="text/javascript" src="js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script>
        <script type="text/javascript" src="js/vendors/classie/classie.js"></script>

        <!--PowerWidgets-->
        <script type="text/javascript" src="js/vendors/powerwidgets/powerwidgets.min.js"></script>

        <!--Morris Chart-->
        <script type="text/javascript" src="js/vendors/raphael/raphael-min.js"></script>
        <script type="text/javascript" src="js/vendors/morris/morris.min.js"></script>

        <!--FlotChart-->
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.resize.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.axislabels.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot-tooltip.js"></script>

        <!--Chart.js-->
        <script type="text/javascript" src="js/vendors/chartjs/chart.min.js"></script>

        <!--Calendar-->
        <script type="text/javascript" src="js/vendors/fullcalendar/fullcalendar.min.js"></script>
        <script type="text/javascript" src="js/vendors/fullcalendar/gcal.js"></script>
        <!--FlotChart-->
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.stack.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.categories.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.time.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.resize.min.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.axislabels.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot-tooltip.js"></script>
        <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.pie.min.js"></script>
        <!--Bootstrap-->
        <script type="text/javascript" src="js/vendors/bootstrap/bootstrap.min.js"></script>

        <!--Vector Map-->
        <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.min.js"></script>
        <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.sampledata.js"></script>
        <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.world.js"></script>

        <!--ToDo-->
        <script type="text/javascript" src="js/vendors/todos/todos.js"></script>

        <!--SkyCons-->
        <script type="text/javascript" src="js/vendors/skycons/skycons.js"></script>
        <script>
            var icons = new Skycons({
                    "color": "#fff"
                }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for (i = list.length; i--;)
                icons.set(list[i], list[i]);

            icons.play();
        </script>

        <!--Main App-->
        <script type="text/javascript" src="js/scripts.js"></script>



        <!-- <script type="text/javascript">
$("#binary").click(function(){
  $(".subtle-view").hide();
    $(".binary-view").show(1000);
}); 
$("#subtle").click(function(){
  $(".binary-view").hide();
    $(".subtle-view").show(1000);
}); 
</script> -->

        <!--/Scripts-->

    </body>

    </html>