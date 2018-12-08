
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <!-- <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation"> -->
    <!-- <meta name="author" content="DazeinCreative"> -->
    <!-- <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio MRI</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/indexCss.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" ></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/MrRio/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/niklasvh/html2canvas@0.5.0-alpha2/dist/html2canvas.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
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
<?php
    $tick = $_GET['ticker'];
    //echo '<script>alert('.$tick.');</script>';
    $url = "https://api.intrinio.com/companies?identifier=".$tick;

    $urlPri = "https://api.intrinio.com/prices?identifier=".$tick;
    
    //$urlHisData = "https://api.intrinio.com/historical_data?identifier=".$tick."&item=totalrevenue";

    //$urlQuote = "https://api.intrinio.com/data_point?identifier=".$tick."&item=price_date,close_price,percent_change,open_price,high_price,low_price";

    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded",
    'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $prices = file_get_contents($urlPri, false, $context);
    //$historicalData = file_get_contents($urlHisData, false, $context);

    //$quoteData = file_get_contents($urlQuote, false, $context);

    $p =  JSON_decode($prices,true);

    $date = array();
    $value = array();
    
    foreach ($p['data'] as $data)
    {
        $date[] = $data['date'];
        $value[] = $data['adj_close'];
        
    }
    

    $total_pages = $p['total_pages'];
    if($total_pages > 10){
        $total_pages = 10;
    }
    for($i = 2; $i <= $total_pages; $i++ ){
        $urlPri = "https://api.intrinio.com/prices?identifier=".$tick."&page_number=".$i;

        $prices = file_get_contents($urlPri, false, $context);
        $p =  JSON_decode($prices,true);

        //$open_price = array();
        foreach ($p['data'] as $data)
        {
            //$open_price[] = $data['open'];
            //$close_price[] = $data['close'];
            $value[] = $data['adj_close'];
            $date[] = $data['date'];
        }

    }
?>

    <script type="text/javascript">
        var counter = 1;
        var lines = [];
        var ticker = [];

        var dup_date = [];
        var dup_value = [];
        var date = [];
        var value = [];


        var prev_high_price = 0;
        var recovary_day = 0;
        var temp_biggest_drop_start;
        var biggest_drop_start;
        var biggest_drop_end;
        var recovary_day_counter = 0;
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
                                <div class="row" style="background: #f8f8f8; margin: 15px 15px 0px 15px;">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h3> Stock Price</h3>
                                    </div>
                                </div>
                                <div class="row" style="background: #f8f8f8; margin: 0px 15px 15px 15px; ">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-lg-3">
                                            </div>
                                            <div class="col-sm-7 col-md-7 col-lg-7">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <!-- <div class="form-group" style="display: inline;"> -->
                                                        <div class="col-sm-1 col-md-1 col-lg-1" style="padding: 0;margin: 0px;">
                                                            <label style="font-size: 18px;">Range: </label>
                                                        </div>
                                                        <!-- Start Date: -->
                                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                                            <input class="form-control" type="date" id="sdat" name="sday">
                                                        </div>
                                                        <!-- End Date: -->
                                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                                            <input class="form-control" type="date" id="edat" name="eday">
                                                        </div>

                                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                                            <button class="btn btn-info" onclick="show()"> View</button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-md-2 col-lg-2">
                                                </div>
                                            </div>
                                        </div>
                                         
                                         <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                            <!-- <h2 style="padding-left: 10px;">Adj. Price Chart</h2> -->
                                            <div class="col-sm-12 col-md-12 col-lg-12" >
                                                <canvas id="rev_line" style=" max-height: 500px; margin: 0 auto;"></canvas>
                                            </div>
                                        </div>
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
        // $(document).ready(function() {
            var comp = JSON.parse(<?php echo JSON_encode($result,true); ?>);
            //var compPrice = JSON.parse(<?php //echo JSON_encode($prices,true); ?>);
            var revvalue = <?php echo JSON_encode($value,true); ?>;
            var revdate = <?php echo JSON_encode($date,true); ?>;
            //var compQouteData = JSON.parse(<?php //echo JSON_encode($quoteData,true); ?>);
            //alert(revdate);
            var j = 0;
            for(var i = revdate.length - 1; i >= 0; i--)
            {
                date[j] = revdate[i];
                //alert(revdate[i]);
                dup_date[j] = date[j];
                value[j] = revvalue[i];
                dup_value[j] = value[j];
                //alert(date[j]);
                //alert(value[j]);
                j++;
            }


            
              
            $('#sdat').val(date[0]);
            $('#edat').val(date[date.length-1]);
            
            //alert(dup_date);
            //alert(dup_value);
            

            var output = '<h2><a href="https://' + comp.company_url + '">' + comp.name + '</a></h2><br>';
            output += '<h4>' + comp.stock_exchange + ': ' + comp.ticker + '</h4>';
            //output += '<h4>Last Price: <label style="color: red;">$' + compPrice.data[0].close + '</label></h4>';


            $('#show').html(output);

            var config = {
                    type: "line",
                    data: {
                        labels: dup_date,
                        datasets: [{
                            label: "Price",
                            data: dup_value,
                            fill: false,
                            lineTension: 0.000001,
                            pointRadius: 0,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "#000",
                            pointHoverBorderColor: "#fff",
                            borderColor: ["#0084CE"],
                            borderWidth: 3,
                            backgroundColor: ["#0084CE"]

                        }],
                    },
                    options: {
                        responsive: true,
                    }
                };
        window.onload = function(){
            window.LineChart = new Chart(document.getElementById("rev_line").getContext("2d"), config );
        };

            for(var k = 0; k < dup_date.length; k++)
            {

                if(prev_high_price <= dup_value[k])
                {   
                    //alert("prev : "+prev_high_price);
                    prev_high_price = dup_value[k];
                    ///alert("new prev: "+prev_high_price);
                    //temp_biggest_drop_start = dup_date[k];
                    if(recovary_day <= recovary_day_counter){
                        //("recv: "+recovary_day);
                        recovary_day = recovary_day_counter;
                        //alert("recv c : "+recovary_day);
                        biggest_drop_start = dup_date[k- recovary_day-1];
                        //alert("bd s: "+biggest_drop_start);
                        biggest_drop_end = dup_date[k-1];
                        //alert("bd e: "+biggest_drop_start);
                        //temp_biggest_drop_start = date[k];

                    }
                    recovary_day_counter = 1;

                }
                else{
                    recovary_day_counter++;
                    //alert("prev : "+prev_high_price);
                }
            }

            alert("bd: "+recovary_day+" bd s: "+ biggest_drop_start+" bd e: "+biggest_drop_end);


            function show() {

                
                var startDate = document.getElementById("sdat").value;
                var endDate = document.getElementById("edat").value;
                //alert(startDate);
                //alert(endDate);
                if (startDate == "" && endDate == "") {
                    dup_value = [];
                    dup_date = [];
                    dup_date = date;
                    dup_value = value;
                    //alert(dup_date);
                    //alert(dup_value);
                }
                else if (startDate != "" && endDate == "") {
                    dup_value = [];
                    dup_date = [];
                    var indexSD;

                    for(var k = 0; k < date.length; k++)
                    {
                        if(date[k] > startDate){
                            indexSD = k;
                            //alert(k);
                            break;
                        }
                    }

                    var j = 0;

                    for(var i = indexSD ; i < date.length; i++)
                    {
                        dup_date[j] = date[i];
                        dup_value[j] = value[i];
                        j++;
                    }
                    //alert(dup_date);
                    //alert(dup_value);
                }
                else if (startDate == "" && endDate != "") {
                    dup_value = [];
                    dup_date = [];
                    var indexED;


                    for(var k = 0; k < date.length; k++)
                    {
                        if(date[k] > endDate){
                            indexED = k-1;
                            //alert(k);
                            break;
                        }
                        else{
                            indexED = l;
                        }
                    }
                   
                    for(var i = 0 ; i <= indexED; i++)
                    {
                        dup_date[i] = date[i];
                        dup_value[i] = value[i];
                        
                    }
                    //alert(dup_date);
                    //alert(dup_value);
                }
                else {
                    //alert(dup_date);
                    dup_value = [];
                    dup_date = [];
                    var indexSD;
                    for(var k = 0; k < date.length; k++)
                    {
                        if(date[k] > startDate){
                            indexSD = k;
                            alert(k);
                            break;
                        }
                    }
                    var indexED;
                    for(var l = indexSD; l < date.length; l++)
                    {
                        if(date[l] > endDate){
                            indexED = l-1;
                            //alert(l-1);
                            break;
                        }
                        else{
                            indexED = l;
                        }
                    }
                    //alert(indexED);
                    //alert(value[indexED]);
                    var j = 0;
                    for(var i = indexSD ; i <= indexED; i++)
                    {
                        dup_date[j] = date[i];
                        //alert(dup_date[j]);
                        dup_value[j] = value[i];
                        j++;
                    }
                    // alert(dup_date);
                    // alert(dup_value);
                    //alert(dup_value[dup_value.length-1]);
                    
                }

                    prev_high_price = 0;
                    recovary_day = 0;
                    recovary_day_counter = 0;

                    for(var k = 0; k < dup_date.length; k++)
                    {
                        if(prev_high_price <= dup_value[k])
                        {   
                            //alert("prev : "+prev_high_price);
                            prev_high_price = dup_value[k];
                            //alert("new prev: "+prev_high_price);
                            
                            if(recovary_day <= recovary_day_counter){
                                
                                recovary_day = recovary_day_counter;
                                
                                biggest_drop_start = dup_date[k- recovary_day-1];
                            
                                biggest_drop_end = dup_date[k-1];
                                

                            }
                            recovary_day_counter = 1;

                        }
                        else{
                            recovary_day_counter++;
                            //alert("prev : "+prev_high_price);
                        }
                    }

                    alert("bd: "+recovary_day+" bd s: "+ biggest_drop_start+" bd e: "+biggest_drop_end);
                
                var newDataset = {
                            label: "Price",
                            data: dup_value,
                            fill: false,
                            lineTension: 0.000001,
                            pointRadius: 0,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "#000",
                            pointHoverBorderColor: "#fff",
                            borderColor: ["#0084CE"],
                            borderWidth: 3,
                            backgroundColor: ["#0084CE"]

                        };

                config.data.labels = dup_date;
                // alert(dup_date);
                // alert(dup_value);
                config.data.datasets.splice(0, 1);
                //config.data.datasets.data = dup_value;
                
                
                config.data.datasets.push(newDataset);
                window.LineChart.update();
                
            }
        </script>
       

    </body>

    </html>