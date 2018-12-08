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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/MrRio/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/niklasvh/html2canvas@0.5.0-alpha2/dist/html2canvas.min.js"></script>
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
<?php
    $tick = $_GET['ticker'];
    //echo '<script>alert('.$tick.');</script>';
    $url = "https://api.intrinio.com/companies?identifier=".$tick;

    $urlPri = "https://api.intrinio.com/prices?identifier=".$tick;
    
    $urlHisData = "https://api.intrinio.com/historical_data?identifier=".$tick."&item=totalrevenue";

    $urlQuote = "https://api.intrinio.com/data_point?identifier=".$tick."&item=price_date,close_price,percent_change,open_price,high_price,low_price";

    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded",
    'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $prices = file_get_contents($urlPri, false, $context);
    $historicalData = file_get_contents($urlHisData, false, $context);

    $quoteData = file_get_contents($urlQuote, false, $context);
    //var_dump($result);die;
    //echo '<p>'.$result.'</p>';

?>

    <script type="text/javascript">
        var counter = 1;
        var lines = [];
        var ticker = [];
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
                                        <h3> Total revenue</h3>
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
                                         <p id="demo"></p>
                                    <svg width="1200" height="400"></svg>

                                    <!-- <span class="table-sparkline-lines" id="sparkLineComp" ></span> -->
                                    <canvas class="test" id="sparkLineComp" style="max-width: 1000px; max-height: 100px; margin: 0 auto;"></canvas>
                                    <!-- </form> -->

                                   
                                    <!-- </form> -->
                                    <!-- </center> -->
                                    </div>
                                </div>

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h2>Quote</h2>
                                        <table style="text-align:center;" class="overview-table overview-table-top-margin" id="quote">
                                        
                                        <tbody>
                                            
                                            
                                        </tbody>
                                        
                                    </table>

                                    </div>
                                </div>

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h2>Prices</h2>
                                        <table style="text-align:center;" class="table table-bordered table-striped table-hover" id="priceData">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Date</th>
                                                <th style="text-align:center;">Open</th>
                                                <th style="text-align:center;">High</th>
                                                <th style="text-align:center;">Low</th>
                                                <th style="text-align:center;">Close</th>
                                                <th style="text-align:center;">Volume</th>
                                                <th style="text-align:center;">Split Ratio</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                        </tbody>
                                        
                                    </table>

                                    </div>
                                </div>

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h2>Securities</h2>
                                        <table style="text-align:center;" class="table table-bordered table-striped table-hover" id="securitiesData">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Name</th>
                                                <th style="text-align:center;">Ticker</th>
                                                <th style="text-align:center;">Figi ticker</th>
                                                <th style="text-align:center;">Stock exchange</th>
                                                <th style="text-align:center;">Symbol</th>
                                                <th style="text-align:center;">Last CRSP adjustment </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                        </tbody>
                                        
                                    </table>

                                    </div>
                                </div>

                                <div class="row" style="background: #f8f8f8; margin: 15px 15px">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h2>Company Info</h2>
                                        <table style="text-align:center;"  class="overview-table overview-table-top-margin" id="companyInfoData">
                                        <!-- <thead>
                                            <tr>
                                                <th style="text-align:center;">CE</th>
                                                <th style="text-align:center;">Ticker</th>
                                                <th style="text-align:center;">Figi ticker</th>
                                                <th style="text-align:center;">Stock exchange</th>
                                                <th style="text-align:center;">Symbol</th>
                                                <th style="text-align:center;">Last CRSP adjustment </th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            
                                            
                                        </tbody>
                                        
                                    </table>

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
            var compPrice = JSON.parse(<?php echo JSON_encode($prices,true); ?>);
            var compHistoricalData = JSON.parse(<?php echo JSON_encode($historicalData,true); ?>);
            var compQouteData = JSON.parse(<?php echo JSON_encode($quoteData,true); ?>);


            $(document).ready(function() {
              var arrayOfValue = [];
                $('#sdat').val("");
                $('#edat').val("");
                show();
                alert(arrayOfValue);
                window.myDoughnut = new Chart(document.getElementById("sparkLineComp").getContext("2d"), {
                    type: 'line',
                    data: arrayOfValue,
                    options: options
                });

            });

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
            output += '<h4>Last Price: <label style="color: red;">$' + compPrice.data[0].close + '</label></h4>';


            $('#show').html(output);

            var priceTableRow = "";
            var tabSize = compPrice.data.length;
            for(var i = 0; i < 15;i++){
              priceTableRow += '<tr><td> '+compPrice.data[i].date+' </td><td> '+compPrice.data[i].open+'</td><td>'+compPrice.data[i].high+' </td><td> '+compPrice.data[i].low+' </td><td>'+compPrice.data[i].close+' </td><td>'+compPrice.data[i].volume+' </td><td> '+compPrice.data[i].split_ratio+'</td></tr>';
            }

            $(priceTableRow).appendTo("#priceData tbody");


            var securitiesTableRow = "";
            var tabSize = comp.securities.length;
            for(var i = 0; i < 15;i++){
              securitiesTableRow += '<tr><td> '+comp.securities[i].security_name+' </td><td> '+comp.securities[i].ticker+'</td><td>'+comp.securities[i].figi_ticker+' </td><td> '+comp.securities[i].stock_exchange+' </td><td>'+comp.securities[i].exch_symbol+' </td><td>'+comp.securities[i].last_crsp_adj_date+'</td></tr>';
            }

            $(securitiesTableRow).appendTo("#securitiesData tbody");



            var compInfo = "";
          
              compInfo += '<tr style="text-align:left;"><td><h3>CEO: </h3></td><td style="padding-left:30px;"> <h3>'+comp.ceo+' </h3></td><td></td><td style="padding-left:30px;"><h3>SIC: </h3></td><td style="padding-left:30px;"><h3>'+comp.sic+' </h3></td></tr>';
              compInfo += '<tr style="text-align:left;"><td><h3>URL: </h3></td><td style="padding-left:30px;"><h3> <a href="https://'+comp.company_url+'">'+comp.company_url+' </a></h3></td><td ></td><td style="padding-left:30px;"><h3>Sector: </h3></td><td style="padding-left:30px;"><h3>'+comp.sector+'</h3> </td></tr>';

              compInfo += '<tr style="text-align:left;"><td><h3>HQ: </h3></td><td style="padding-left:30px;"><h3>'+comp.hq_state, comp.hq_country+'</h3></td><td style="padding-left:30px;"></td><td><h3>Industry Category: </h3></td><td style="padding-left:30px;"><h3>'+comp.industry_category+' </h3></td></tr>';

              compInfo += '<tr style="text-align:left;"><td><h3>Address: </h3></td><td style="padding-left:30px;"><h4>'+comp.business_address+'</h4></td><td></td><td style="padding-left:30px;"><h3>Industry Group: </h3></td><td style="padding-left:30px;"><h3>'+comp.industry_group+' </h3></td></tr>';

              compInfo += '<tr style="text-align:left;"> <td colspan="5" ><h4>'+comp.short_description+'</h4></td></tr>';

            $(compInfo).appendTo("#companyInfoData tbody");



            var quote = "";
          
              quote += '<tr style="text-align:left;"><td><h3>Last trade: </h3></td><td style="padding-left:30px;"> <h3>'+compQouteData.data[0].value+' </h3></td><td></td><td style="padding-left:30px;"><h3>Open: </h3></td><td style="padding-left:30px;"><h3>'+compQouteData.data[3].value+' </h3></td></tr>';
              quote += '<tr style="text-align:left;"><td><h3>Percent change: </h3></td><td style="padding-left:30px;"><h3>'+compQouteData.data[2].value+'</h3></td><td ></td><td style="padding-left:30px;"><h3>High: </h3></td><td style="padding-left:30px;"><h3>'+compQouteData.data[4].value+'</h3> </td></tr>';

              quote += '<tr style="text-align:left;"><td><h3>Close: </h3></td><td style="padding-left:30px;"><h3>'+compQouteData.data[1].value+'</h3></td><td style="padding-left:30px;"></td><td  style="padding-left:30px;"><h3>Low: </h3></td><td style="padding-left:30px;"><h3>'+compQouteData.data[5].value+' </h3></td></tr>';

              // quote += '<tr style="text-align:left;"><td><h3>Address: </h3></td><td style="padding-left:30px;"><h4>'+comp.business_address+'</h4></td><td></td><td style="padding-left:30px;"><h3>Industry Group: </h3></td><td style="padding-left:30px;"><h3>'+comp.industry_group+' </h3></td></tr>';

              // quote += '<tr style="text-align:left;"> <td colspan="5" ><h4>'+comp.short_description+'</h4></td></tr>';

            $(quote).appendTo("#quote tbody");
        </script>

        <script>
            

            function show() {

                // var url = window.location.href;
                // var file_url = new URL(url);
                // var file = file_url.searchParams.get("ticker");
                var compHD = JSON.parse(<?php echo JSON_encode($historicalData,true); ?>);
                var startDate = document.getElementById("sdat").value;
                var endDate = document.getElementById("edat").value;
                if (startDate == "" || endDate == "") {
                    endDate = compHD.data[0].date;
                    //$('#sdat').val(endDate);
                    var sz = compHD.data.length;
                    startDate = compHD.data[sz-1].date;
                   //$('#edat').val(startDate);
                   console.log(startDate+","+endDate);
                }
                var data2;
                var compHD = JSON.parse(<?php echo JSON_encode($historicalData,true); ?>);

                data2 = compHD.data.filter(function(d) {
                    if (d.date >= startDate && d.date <= endDate) {

                        return d.value;

                    }
                });

                
                arrayOfValue = data2.map(function(val) {
                    return val.value/10000;
                  }).join(',');

                var parseTime1 = d3.timeParse("%d-%b-%y");

                d3.selectAll("g > *").remove();
                var svg = d3.select("svg"),
                    margin = {
                        top: 20,
                        right: 15,
                        bottom: 150,
                        left: 50
                    },
                    width = +svg.attr("width") - margin.left - margin.right,
                    height = +svg.attr("height") - margin.top - margin.bottom;

                var tooltip = d3.select("body").append("div").attr("class", "toolTip");

                var x = d3.scaleBand().rangeRound([0, width]).padding(0.1),
                    y = d3.scaleLinear().rangeRound([height, 0]);

                var colours = d3.scaleOrdinal()
                    .range(["#7CB5EC", "#7CB5EC"]);

                var g = svg.append("g")
                    .attr("transform", "translate(" + (margin.left + 50) + "," + margin.top + ")");

                // d3.json("data.json", function(error, data) {
                //     if (error) throw error;

                x.domain(data2.map(function(d) {
                    return d.date;
                }));
                y.domain([0, d3.max(data2, function(d) {
                    return d.value;
                })]);

                g.append("g")
                    .attr("class", "axis axis--x")
                    .attr("transform", "translate(0," + height + ")")
                    .call(d3.axisBottom(x))
                    .selectAll("text")
                    .attr("y", 0)
                    .attr("x", 9)
                    .attr("dy", ".35em")
                    .attr("transform", "rotate(90)")
                    .style("text-anchor", "start");

                g.append("g")
                    .attr("class", "axis axis--y")
                    .call(d3.axisLeft(y).ticks(5).tickFormat(function(d) {
                        return parseInt(d / 1000) + "K";
                    }).tickSizeInner([-width]))
                    .append("text")
                    .attr("y", 6)
                    .attr("dy", "0.71em")
                    .attr("text-anchor", "end")
                    .attr("fill", "#5D6971")
                    .text("Price - ($)");

                g.selectAll(".bar")
                    .data(data2)
                    .enter().append("rect")
                    .attr("x", function(d) {
                        return x((d.date));
                    })
                    .attr("y", function(d) {
                        return y(d.value);
                    })
                    .attr("width", x.bandwidth() - 10)
                    .attr("height", function(d) {
                        return height - y(d.value);
                    })
                    .attr("fill", function(d) {
                        return colours((d.date));
                    })
                    .on("mousemove", function(d) {
                        tooltip
                            .style("left", d3.event.pageX - 50 + "px")
                            .style("top", d3.event.pageY - 70 + "px")
                            .style("display", "inline-block")
                            .html((d.date) + "<br>" + "$" + (d.value));
                    })
                    .on("mouseout", function(d) {
                        tooltip.style("display", "none");
                    });
                //});
                //  var arr = [1,2,3,4,5,6,54,89,23,88];
                // // alert(arr);
                // alert(arrayOfValue);


                // $('#sparkLineComp').sparkline(arr, {
                //             type: 'line',
                //             width: '1200px',
                //             height: '100px',
                //             fillColor: '#999999'
                //           });
                window.myDoughnut.update();
                
            }
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