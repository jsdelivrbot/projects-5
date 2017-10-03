<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
    <meta name="author" content="DazeinCreative">
    <!-- <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio MRI</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" ></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script> -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery-ui.js"></script>

    <style type="text/css">
        /*.ui-helper-hidden-accessible {
        display: none;
    }*/

        .ui-autocomplete {
            z-index: 1000 !important;
        }
        /*canvas {
            -webkit-transform: rotateX(150deg); 
            transform: rotateX(150deg);
            transition: 2s;
        }*/
        /*#res,
        #resNew, #resStep3 {
            position: relative;
            
        }*/

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

        .dropList {
            background-color: #179ECA;
        }

        .ui-autocomplete li {
            padding: 10px;
            background: #f0f0f0;
            border-bottom: #bbb9b9 1px solid;
        }

        .ui-autocomplete li:hover {
            background: #ece3d2;
            cursor: pointer;
        }

        .ui-corner-all,
        .ui-autocomplete li a,
        .ui-autocomplete li a:hover,
        .ui-autocomplete li:hover a {
            text-decoration: none;
            border: none;
            background: none;
        }
        /*1st switch*/

        .switch6 {
            max-width: 17em;
            margin: 0 auto;
        }

        .switch6-light>span,
        .switch-toggle>span {
            color: #000000;
        }

        .switch6-light span span,
        .switch6-light label,
        .switch-toggle span span,
        .switch-toggle label {
            color: #2b2b2b;
        }

        .switch-toggle a,
        .switch6-light span span {
            display: none;
        }

        .switch6-light {
            display: block;
            height: 35px;
            cursor: pointer;
            margin-bottom: 0;
            position: relative;
            overflow: visible;
            padding: 0px;
            margin-left: 0px;
        }

        .switch6-light * {
            box-sizing: border-box;
        }

        .switch6-light a {
            display: block;
            transition: all 0.3s ease-out 0s;
        }

        .switch6-light label,
        .switch6-light>span {
            line-height: 35px;
            vertical-align: middle;
        }

        .switch6-light label {
            font-weight: 700;
            margin-bottom: px;
            max-width: 100%;
        }

        .switch6-light input:focus~a,
        .switch6-light input:focus+label {
            outline: 1px dotted rgb(136, 136, 136);
        }

        .switch6-light input {
            position: absolute;
            opacity: 0;
            z-index: 5;
        }

        .switch6-light input:checked~a {
            right: 0%;
        }

        .switch6-light>span {
            position: absolute;
            left: -100px;
            width: 100%;
            margin: 0px;
            padding-right: 100px;
            text-align: left;
        }

        .switch6-light>span span {
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 5;
            display: block;
            width: 50%;
            margin-left: 100px;
            text-align: center;
        }

        .switch6-light>span span:last-child {
            left: 50%;
        }

        .switch6-light a {
            position: absolute;
            right: 50%;
            top: 0px;
            z-index: 4;
            display: block;
            width: 50%;
            height: 100%;
            padding: 0px;
        }
        /*2nd Switch*/

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        /* Rounded sliders */

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    <style type="text/css">
        @font-face {
            font-family: "MyFont";
            src: url('fonts/PTF55F.ttf') format("truetype");
        }

        @font-face {
            font-family: "graph";
            src: url('fonts/NotoSans-Italic.ttf') format("truetype");
        }




        .wrapper {
            width: 100%;
            /*height:600px;*/
            border: 1px solid #ddd;
            margin: 0 auto;
            font-family: 'MyFont', serif;
            margin-top: 37px;
            ;
            /*padding: 10px;*/
        }

        .wrapper h2 {
            text-align: left;
            border-bottom: 1px solid #ddd;
            padding: 0 20px;
            padding-bottom: 10px;
            margin-top: 10px;
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


        .tabcontent {
            display: none;
            padding: 6px 12px;
        }


        .bglg {
            width: 15px;
            margin-right: 5px;
            height: 15px;
            border-radius: 50%;
            background: #0D2747;
            float: left;
        }

        .smplg {
            width: 15px;
            height: 15px;
            margin-right: 5px;
            border-radius: 50%;
            /*margin-left:20px;*/
            background: #6D94AD;
            float: left;
        }
	.step-4table td{
		font-size:18px;}
	.step-4table th{
		font-weight:normal !important;
		font-size:15px !important;}
    </style>
    
</head>

<?php
    // $url = "https://api.intrinio.com/companies";
   
    // $options = array(
    // 'http' => array(
    // 'header' => "Content-type: application/x-www-form-urlencoded",
    // 'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    // )
    // );
    // $context = stream_context_create($options);
    // $result = file_get_contents($url, false, $context);
    //var_dump($result);die;
    //$var = json_decode($result, true); 

    //echo "<p>".$result."</p>";
    //echo "<p>".$var['data[0].name']."</p>";


 // $url2 = "https://api.intrinio.com/companies?identifier=AA/username/base64_encode(bf74019dff7d62dbb876afe4429ff5e8)/password/ffaf7422618b158727f6ca24c6ee8f54/format/json";
    // //var_dump($url2);die;
    // $data = file_get_contents($url2);
    // var_dump($data);die;
    ?>

    <body>
        <script type="text/javascript">
            var lines = [];
            var ticker = [];
            var investAmount = 0;
            var numberOfComp = 0;
            var invArr = [];
            var comp = [];
            var totalAmount = 0;
            var newNumberOfComp = 0;
            var newComp = [];
            var newInvArr = [];
            var colorOriginal = ['#0f2747', '#143a6d', '#3b69a5', '#819fc6', '#D2E1F6'];
            var color = ['#fff', '#fff', '#fff', '#fff', '#fff', '#000', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'];
        var colorNew = ['#000', '#000', '#000', '#000', '#000', '#fff', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000'];

            var flage = 0;

            var col3 = ["","Return on Equity","Return on Invested Capital","Gross Margin","After Tax Operating Margin","Gross Margin x After Tax Op Margin","Operating Margin","Net Profit Margin","ROIC vs WACC","Gross Margin x Asset Turnover","Sales Growth","EBIT Growth","EPS Growth","Div Per Share Growth","Cash Flow Per Share Growth","Book value Per Share Growth","Assets / Equity"," Total Debt to Capital","Debt to EBITDA","Asset Turnover Ratio","Times Interest Earned","Current Ratio","R&D Relative to Peers","CapEx Rel to Peers","Expected Dividend Growth","Rel Premium Pd to Cancel Shares","Price to Book Value","Enterprise Value to Sales","Enterprise Value to EBITDA","Price to Trailing Earnings","Discounted Cash Flow",""];

            var heading = ["","PROFITABILITY","","","","","","","","","GROWTH","","","","","","DISCIPLINE","","","","","","CONFIDENCE","","","","VALUATION","","","","","Overall grade"];

            var yearPars = ["","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg %","3yr avg x","3yr avg x","3yr avg x","3yr avg x","3yr avg x","3yr avg x","3yr avd %","3yr avg %","1yr %","3yr avg %","3yr avg x","3yr avg x","3yr avg x","3yr avg x","1yr avg x",""];
            var col2 = ["","Competitiveness","","","","","","","Durable Advantage","Quality ","","Change","","","","","","","Financial Strength"," ","","Efficiency","Leverage","Liquidity","","Capital Allocation","","Dividend Policy","","","Expectations","","","","",""];
        </script>

        <!--Smooth Scroll-->
        <div class="" style="width:100%; float:left; background:#fff;">
            <!--Navigation-->


            <!--/Navigation-->

            <!--MainWrapper-->

            <div class="content-wrapper">
                <!--Content Wrapper-->
                <!--Horisontal Dropdown-->


                <!--Breadcrumb-->
                <div class="breadcrumb clearfix">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li><a href="index.php">Dashboard</a></li>
                        <li class="active" id="record">Step1</li>
                    </ul>
                </div>
                <!--/Breadcrumb-->

                <!--Jumbotron-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- tabs normal-->
                        <ul class="nav nav-tabs mytab setup-panel">
                            <li class="active">
                                <a href="#one-normal">
                                    <h4>Step 1<br><small>Original Portfolio</small></h4>
                                </a>
                            </li>
                            <li class="disabled">
                                <a href="#two-normal">
                                    <h4>Step 2<br><small>New Proposed Holdings</small></h4>
                                </a>
                            </li>
                            <li class="disabled">
                                <a href="#three-normal">
                                    <h4>Step 3<br><small>Vary weights, See Results, Optimize</small></h4>
                                </a>
                            </li>
                            <li class="disabled">
                                <a href="#four-normal">
                                    <h4>Step 4<br><small>Print Proposal</small></h4>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active setup-content" id="one-normal">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <input type="text" id="tags" class="form-control" placeholder="Add holding" autocomplete="off">
                                                <!-- <input type="hidden" id="hiddenTicker"> -->
                                                <!-- <div id="res" style="width: 100%; z-index: 1000;" class="test"></div> -->
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <input type="text" id="investment" class="form-control" placeholder="Investment" autocomplete="off">
                                            </div>
                                            <div class="col-sm-2 col-md-2 col-lg-2">
                                                <button class="btn btn-info" onclick="ShowDitails()">Add</button>
                                            </div>
                                        </div>
                                        <div class="inner-spacer">
                                            <div class="flotchart-container" style="width: 100%; text-align: center;">
                                                <div id="placeholder5" class="flotchart-placeholder">
                                                    <canvas class="test" id="myChart" style="max-width: 350px; max-height: 350px; margin: 0 auto;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 style="text-align:center; display: none;" id="OriginalHeader">Original Portfolio</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <table class="table table-bordered table-striped table-hover" id="compData">
                                            <thead>
                                                <tr>

                                                    <th style="text-align:center;">Holdings</th>
                                                    <th style="text-align:center;">Value</th>
                                                    <th style="text-align:center;">in %</th>
                                                    <th style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>


                                            </tfoot>

                                        </table>
                                        <button class="btn btn-info mytab pull-right" id="activate-step-2"><h4>Next<br><small style="color:#fff;">Step 2 New Proposed Holdings</small></h4></button>
                                    </div>
                                </div>
                            </div>
                            <div class="setup-content tab-pane" id="two-normal">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <h3>Original Portfolio</h3>
                                        <table class="table table-bordered table-striped table-hover" id="tableStep2Original">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">Holdings</th>
                                                    <th style="text-align:center;">Value</th>
                                                    <th style="text-align:center;">in %</th>
                                                    <!-- <th style="text-align:center;">Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <h3>New Portfolio</h3>
                                        <table class="table table-bordered" id="tableStep2New">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">Holdings</th>
                                                    <th style="text-align:center;">Value</th>
                                                    <th style="text-align:center;">in %</th>
                                                    <th style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>

                                            </tfoot>

                                        </table>
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <input type="text" id="tagsNew" name="" class="form-control" placeholder="Add holding" autocomplete="off">
                                                <!-- <input type="hidden" id="hiddenTickerStep2">
                                                <div id="resNew" style="width: 100%; z-index: 1000;"></div> -->
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <input type="text" id="investmentNew" class="form-control" placeholder="Investment" autocomplete="off">
                                            </div>
                                            <div class="col-sm-2 col-md-2 col-lg-2">
                                                <button class="btn btn-info" id="addNew" onclick="addNewProtfilio()">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                                        <div id="pieChatOriginal">
                                            <canvas id="myChartStep2Original" style="max-width: 350px; max-height: 350px; margin: 0 auto;"></canvas>
                                        </div>
                                        <h4>Original Portfolio</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                                        <div id="pieChatNew">
                                            <canvas id="myChartStep2New" style="max-width: 350px; max-height: 350px; margin: 0 auto;"></canvas>
                                        </div>
                                        <h4>New Portfolio</h4>
                                        <button class="btn btn-info mytab pull-right" id="activate-step-3"><h4>Next<br><small style="color:#fff;">Step 3 New Proposed Holdings</small></h4></button>
                                    </div>
                                </div>
                            </div>
                            <div class="setup-content tab-pane" id="three-normal">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <h3 style="float:left;">Vary Weight</h3>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <h3 style="text-align: center;">Total return %</h3>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">

                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">


                                        <table class="table text-center table-bordered" id="tableStep3">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">Holdings</th>
                                                    <th style="text-align:center;">Value</th>
                                                    <th style="text-align:center;">in %</th>
                                                    <!-- <th style="text-align:center;">Action</th> -->
                                                </tr>

                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <thead>
                                                <tr>
                                                    
                                                    <th style="text-align:center;">Adjust to optimize visually</th>
                                                    <th style="text-align:left;">Total</th>
                                                    <th style="text-align:left;">100%</th>
                                                    <!-- <th style="text-align:center;"></th> -->
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        
                                        <img src="images/linegraph.png" style="width:100%; height: 100%;" alt="">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!-- <h4><b>a. Adjust allocation to optimize visually</b></h4> -->
                                        <h4><b>Choose data visualization approach: </b></h4>
                                    </div>
                                    
                                </div>
                                <br>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!-- <div class="row">
                                            <div class="col-sm-9 col-md-9 col-lg-9"> -->
                                                <table class="table text-center table-bordered" id="tableStep3AdvanceView" style="border: none;">
                                                    <thead>
                                                        <tr style="padding-top: 5px;">
                                                            <th rowspan="2" style="border-bottom-style: none; border:none; background: none; color: #555555;" colspan="4" ><div style="float:left; width:100%;">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                                <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: right;">
                                                                    <span style=" "><h4  style="margin: 0; padding: 0"><b>Basic </b></h4>Compare each value to banchmark</span>
                                                                </div>
                                                                <div class="col-sm-2 col-md-2 col-lg-2" style="text-align: center; padding: 0;">
                                                                    <label class="switch" onclick="selectView()">
                                                                      <input type="checkbox" id="basicAdvance" unchecked>
                                                                      <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: left;">
                                                                    <span style=""><h4  style="margin: 0; padding: 0"><b> Advanced</b></h4>Rank each value within peer group</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></th>
                                                            <td style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;padding-top: 15px;" colspan="8"><h3>Original Portfolio</h3></td>
                                                            <th style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;padding-top: 15px;"></th>
                                                            <td style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;padding-top: 15px;" colspan="8"><h3>Proposed Portfolio</h3></td>

                                                            
                                                        </tr>
                                                        <tr>
                                                            <!-- <th style="border-bottom-style: none; border:none; background: none; color: none;" colspan="4" >bal bla bla</th> -->
                                                            <th style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;" id="changeOnclick" colspan="17"></th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" style="text-align:left;border-right: 1px solid #ddd;"></th>
                                                            
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 10px 0; ">2009</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2010</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2011</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2012</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2015</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2016</th>
                                                            <th style="background: #fff; border: none;"></th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 10px 0; ">2009</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2010</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2011</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2012</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2015</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2016</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody style="text-align: right;">

                                                    </tbody>

                                                </table>
                                            </div>
                                           
                                </div>

                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-12">

                                        <img src="images/downfall.png" style="width:100%;" alt="">
                                        <div id="Summary" class="tabcontent" style="display:block; ">
                                            <div class="wrapper">
                                                <center>
                                                    <br>
                                                    <p style="text-align: center; /*margin-left: 380px; */ width: 200px; line-height: 15px;"><span class="bglg"></span> <span>Bristol Gate US Equity Cl A U$</span></p>
                                                    <p style="text-align: center; /*margin-left: 380px;*/ width: 120px; line-height: 15px;"> <span class="smplg"></span> <span>S&P 500 TR USD</span></p>

                                                    <svg class="ms1" width="1020" height="400" style="font-family: 'graph', serif;">
                                                </svg>

                                                </center>

                                            </div>
                                            <br>
                                            <button class="btn btn-info mytab pull-right" id="activate-step-4"><h4>Next<br><small style="color:#fff;">Step 4 See/print report</small></h4></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="setup-content tab-pane" id="four-normal">
                            	<div class="form-group row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 halfwidth">
                                                <input type="text" class="form-control" placeholder="Proposal To.." >
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 halfwidth">
                                                <input type="text" class="form-control" placeholder="Prepared By..">
                                            </div>
                                            <div class="col-sm-2 col-md-2 col-lg-2">
                                                <button id="print-btn" class="btn btn-info pull-right print-link print" >Genetate Pdf</button>
                                            </div>
                                        </div>
                                    
                            	<div id="DivIdToPrint">
                                <div class="row" >
                                	<div class="col-sm-12 col-md-12 col-lg-12">
                                    
										<h2 style="text-align:center; font-weight:normal; margin-bottom:20px;">Areas of improvement</h2>

                                        <table class="table text-center table-bordered step-4table">
                                            <thead style="background:#666;">
                                                <tr>
                                                    <th width="150" style="text-align:center;" colspan="2">% IMPROVEMENT</th>
                                                    <th class="text-left">QUALITY MEASURE</th>
                                                    <th width="80" style="text-align:center;">ORIGINAL PORTFOLIO</th>
                                                    <th width="80" style="text-align:center;">PROPOSED PORTFOLIO</th> 
                                                </tr>

                                            </thead>
                                            <tbody>
												<tr>
												  <td class="active">18%</td>
												  <td class="active">Fewer</td>
												  <td class="text-left active" style="padding:4px 0 0;">Drawdown days
                                                  	<div style="border-bottom:3px solid #9cbb59; width:100%; margin-top:5px;"></div>
                                                  </td>
												  <td>113</td>
												  <td>88</td>
												</tr>
												<tr>
												  <td class="active">16%</td>
												  <td class="active">Better</td>
												  <td class="text-left active" style="padding:4px 0 0;">Persistence (across all 300 variables)
                                                  	<div style="border-bottom:3px solid #9cbb59; width:90%; margin-top:5px;"></div>
                                                  </td>
												  <td>61%</td>
												  <td>72%</td>
												</tr>
												<tr>
												  <td class="active">13%</td>
												  <td class="active">Lower</td>
												  <td class="text-left active" style="padding:4px 0 0;">Debt/Equity
                                                  	<div style="border-bottom:3px solid #9cbb59; width:75%; margin-top:5px;"></div>
                                                  </td>
												  <td>41%</td>
												  <td>37%</td>
												</tr>
												<tr>
												  <td class="active">11%</td>
												  <td class="active">Higher</td>
												  <td class="text-left active" style="padding:4px 0 0;">Sales Growth
                                                  	<div style="border-bottom:3px solid #9cbb59; width:70%; margin-top:5px;"></div>
                                                  </td>
												  <td>11.4%</td>
												  <td>12.3%</td>
												</tr>
												<tr>
												  <td class="active">9%</td>
												  <td class="active">Lower</td>
												  <td class="text-left active" style="padding:4px 0 0;">P/E (trailing 12 mos)
                                                  	<div style="border-bottom:3px solid #9cbb59; width:65%; margin-top:5px;"></div>
                                                  </td>
												  <td>21.2x</td>
												  <td>19.3x</td>
												</tr>
												<tr>
												  <td class="active">8%</td>
												  <td class="active">Lower</td>
												  <td class="text-left active" style="padding:4px 0 0;">Price/Book Value
                                                  	<div style="border-bottom:3px solid #9cbb59; width:60%; margin-top:5px;"></div>
                                                  </td>
												  <td>3.9x</td>
												  <td>3.6x</td>
												</tr>
												<tr>
												  <td class="active">6%</td>
												  <td class="active">Higher</td>
												  <td class="text-left active" style="padding:4px 0 0;">Return on Equity
                                                 	<div style="border-bottom:3px solid #9cbb59; width:55%; margin-top:5px;"></div> 
                                                  </td>
												  <td>9.1%</td>
												  <td>10.7%</td>
												</tr>
												<tr>
												  <td class="active">4%</td>
												  <td class="active">Higher</td>
												  <td class="text-left active" style="padding:4px 0 0;">Dividend Growth
                                                  	<div style="border-bottom:3px solid #9cbb59; width:45%; margin-top:5px;"></div>
                                                  </td>
												  <td>12.3%</td>
												  <td>12.1%</td>
												</tr>
												<tr>
												  <td class="active">3%</td>
												  <td class="active">Higher</td>
												  <td class="text-left active" style="padding:4px 0 0;">Return on Invested Capital
                                                  	<div style="border-bottom:3px solid #9cbb59; width:35%; margin-top:5px;"></div>
                                                  </td>
												  <td>8.3%</td>
												  <td>8.7%</td>
												</tr>
												<tr>
												  <td class="active">2%</td>
												  <td class="active">Lower</td>
												  <td class="text-left active" style="padding:4px 0 0;">Debt to EBITDA
                                                  	<div style="border-bottom:3px solid #9cbb59; width:20%; margin-top:5px;"></div>
                                                  </td>
												  <td>2.2x</td>
												  <td>2.2x</td>
												</tr>
												<tr>
												  <td class="active">2%</td>
												  <td class="active">Higher</td>
												  <td class="text-left active" style="padding:4px 0 0;">Net Profit Margin
                                                  	<div style="border-bottom:3px solid #9cbb59; width:20%; margin-top:5px;"></div>
                                                  </td>
												  <td>11.7%</td>
												  <td>11.8%</td>
												</tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>  
                                <div class="row pagebreak canvas-break">
                                    <div class="col-sm-6 col-md-6 col-lg-6 halfwidth">
                                  		<div >
                                        	<canvas class="test" id="step4DnutOriginal" style="max-width: 350px; max-height: 350px; margin: 0 auto;"></canvas>
                                        </div>
                                        <h4 style="text-align:center;">Original Portfolio</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 halfwidth">
                                     	<div >
                                        	<canvas class="test" id="step4DnutNew" style="max-width: 350px; max-height: 350px; margin: 0 auto;"></canvas>
                                        </div>
                                        <h4 style="text-align:center;">New Portfolio</h4>
                                    </div>

                                </div> 
								<hr>
                                <div class="row pagebreak table-brk">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                    	<h2 id="aptitle" style="text-align:left; margin-top: 20px; font-weight:normal; margin-bottom:20px;">
Choose data visualization approach:</h2>
                                        <!-- <div class="row">
                                            <div class="col-sm-9 col-md-9 col-lg-9"> -->
                                                <table class="table text-center table-bordered" id="tableStep3AdvanceView" style="border: none;">
                                                    <thead>
                                                        <tr style="padding-top: 5px;">
                                                            <th rowspan="2" style="border-bottom-style: none; border:none; background: none; color: #555555;" colspan="4" ><div id="sw-view" style="float:left; width:100%;">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                                <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: right;">
                                                                    <span style=" "><h4  style="margin: 0; padding: 0"><b>Basic </b></h4>Compare each value to banchmark</span>
                                                                </div>
                                                                <div class="col-sm-2 col-md-2 col-lg-2" style="text-align: center; padding: 0;">
                                                                    <label class="switch" onclick="selectView()">
                                                                      <input type="checkbox" id="basicAdvance" unchecked>
                                                                      <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: left;">
                                                                    <span style=""><h4  style="margin: 0; padding: 0"><b> Advanced</b></h4>Rank each value within peer group</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></th>
                                                            <td style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;padding-top: 15px;" colspan="8"><h3>Original Portfolio</h3></td>
                                                            <th style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;padding-top: 15px;"></th>
                                                            <td style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;padding-top: 15px;" colspan="8"><h3>Proposed Portfolio</h3></td>

                                                            
                                                        </tr>
                                                        <tr>
                                                            <!-- <th style="border-bottom-style: none; border:none; background: none; color: none;" colspan="4" >bal bla bla</th> -->
                                                            <th style="border-bottom-style: none; text-align: center; background-color: rgba(221,221,221,0.5); color: #555555; border: none;" id="changeOnclick" colspan="17"></th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" style="text-align:left;border-right: 1px solid #ddd;"></th>
                                                            
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 10px 0; ">2009</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2010</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2011</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2012</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2015</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2016</th>
                                                            <th style="background: #fff; border: none;"></th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 10px 0; ">2009</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2010</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2011</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2012</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2015</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0; ">2016</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody style="text-align: right;">

                                                    </tbody>

                                                </table>
                                            </div>
                                           
                                </div>  
                                <div class="row">
                                    <h2 style="text-align:center; font-weight:normal; margin-bottom:20px; margin-top:50px;">Total return %</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <img class="chart-p-height" src="images/return-gross.JPG" style="width:100%; height: 100%;" alt="">
                                    </div>

                                </div>  
                                <div class="row per-brk">
                                    <h2 style="text-align:center; font-weight:normal; margin-top:50px; margin-bottom:20px;">Performance Difference</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <img src="images/downfall.png" style="width:100%; height:auto;" alt="">
                                    </div>

                                </div>
                                <div class="row">
                                    <h2 style="text-align:center; font-weight:normal; margin-top:50px; margin-bottom:20px;">Draw down days</h2>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="wrapper">
                                                <center>
                                                    <br>
                                                    <p style="text-align: center; /*margin-left: 380px; */ width: 200px; line-height: 15px;"><span class="bglg"></span> <span>Bristol Gate US Equity Cl A U$</span></p>
                                                    <p style="text-align: center; /*margin-left: 380px;*/ width: 120px; line-height: 15px;"> <span class="smplg"></span> <span>S&P 500 TR USD</span></p>

                                                    <svg class="ms" width="1020" height="400" style="font-family: 'graph', serif;">
                                                </svg>

                                                </center>

                                            </div>
                                    </div>

                                </div>  
                                </div>                         
                            </div>
                            <!-- /tabs -->

                        </div>
                    </div>
                    <!-- / Content Wrapper -->
                    <!--/MainWrapper-->
                </div>
                <!--/Smooth Scroll-->

                <!-- scroll top -->
                <div class="scroll-top-wrapper hidden-xs"> <i class="fa fa-angle-up"></i> </div>
                <!-- /scroll top -->

                <!--Modals-->
                <script src="js/main.js"></script>
                <script src="https://d3js.org/d3.v4.min.js"></script>
                <script type="text/javascript" src="msddd.js"></script>
                <script type="text/javascript" src="msdddStep4.js"></script>
                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                <script src="js/jquery.sparkline.min.js"></script>
				<script type="text/javascript">  
                $("#print-btn").click(function(){
                    $(".breadcrumb, .mytab, #print-btn, #aptitle, #sw-view").hide();
                    window.print();
                });
            </script>
    <script type="text/javascript">
    $("#btn").click(function(){
		$(".").hide();
		window.print();
	});
	//if ($("#tableStep3AdvanceView td").css('background-color')=="#000"){
		//$("#tableStep3AdvanceView").addClass("intro");
	//}
	$("#tableStep3AdvanceView tr:has(td)").each(function () {
     if($(this).css("background-color") == " #000")
     {
		 $(this).addClass("intro");
     }
});
	
    </script>
    

                <script type="text/javascript">
                $(document).ready(function() {
                    //alert("hello");
                    // var comp = JSON.parse(<?php  //echo JSON_encode($result,true); ?>);
                    // var data = comp.data.filter(function(d) {
                    //     return d.name;
                    //     // d.symbol = +d.symbol;
                    //     // return d;
                    // });
                    $.ajax({
                        type: "GET",
                        url: "comp.csv",
                        dataType: "text",
                        success: function(data) {
                            processData(data);
                        }
                    });



                    if ($('#basicAdvance').is(":checked")) {


                        flag = 0;
                        $('#changeOnclick').html("");
                        $('#changeOnclick').html("<p><b>Darker is better</b></p>");
                        $('#changeOnclick').css("text-align", "center");

                        $('#changeOnclick1').html("");
                        $('#changeOnclick1').html("<p><b>Darker is better</b></p>");
                        $('#changeOnclick1').css("text-align", "center");
                    } else {

                        flag = 1;
                        $('#changeOnclick').html("");

                        $('#changeOnclick').html("<p><b>BLACK = Black = Better than benchmark</b></p>");
                        $('#changeOnclick').css("text-align", "center");

                        $('#changeOnclick1').html("");

                        $('#changeOnclick1').html("<p><b>Black = Better than benchmark</b></p>");
                        $('#changeOnclick1').css("text-align", "center");
                    }



                    function processData(allText) {
                        var allTextLines = allText.split(/\r\n|\n/);
                        var headers = allTextLines[0].split(',');


                        for (var i = 1; i < allTextLines.length; i++) {
                            var data = allTextLines[i].split(',');
                            if (data.length == headers.length) {

                                var tarr = [];
                                for (var j = 0; j < headers.length; j++) {
                                    tarr.push(headers[j] + ":" + data[j]);
                                }
                                var test = tarr[1].split(':');
                                lines.push(test[1]);
                            }
                        }
                        //alert(lines);
                        $("#tags").autocomplete({

                            source: lines,


                        });

                        $("#tagsNew").autocomplete({

                            source: lines
                        });

                    };

                    window.myDoughnut = new Chart(document.getElementById("myChart").getContext("2d"), {
                        "type": "doughnut",
                        "data": {
                            "labels": comp,
                            "datasets": [{
                                //"label": "My First Dataset",
                                "data": invArr,
                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa", "#11006c"]
                            }]
                        }
                    });

                    window.myOriginalDoughnut = new Chart(document.getElementById("myChartStep2Original").getContext("2d"), {
                        "type": "doughnut",
                        "data": {
                            "labels": comp,
                            "datasets": [{
                                //"label": "My First Dataset",
                                "data": invArr,
                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa", "#11006c"]
                            }]
                        }
                    });

                    window.myNewDoughnut = new Chart(document.getElementById("myChartStep2New").getContext("2d"), {
                        "type": "doughnut",
                        "data": {
                            "labels": newComp,
                            "datasets": [{
                                //"label": "My First Dataset",
                                "data": newInvArr,
                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa", "#11006c"]
                            }]
                        }
                    });



                    window.step4MyOriginalDoughnut = new Chart(document.getElementById("step4DnutOriginal").getContext("2d"), {
                        "type": "doughnut",
                        "data": {
                            "labels": comp,
                            "datasets": [{
                                //"label": "My First Dataset",
                                "data": invArr,
                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa", "#11006c"]
                            }]
                        }
                    });

                    window.step4MyNewDoughnut = new Chart(document.getElementById("step4DnutNew").getContext("2d"), {
                        "type": "doughnut",
                        "data": {
                            "labels": newComp,
                            "datasets": [{
                                //"label": "My First Dataset",
                                "data": newInvArr,
                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa", "#11006c"]
                            }]
                        }
                    });
                    //});
                });
            </script>

            <script type="text/javascript">
                //basic and Advanced view

                function selectView() {
                    if ($('#basicAdvance').is(":checked")) {


                        flag = 0;
                        $('#changeOnclick').html("");
                        $('#changeOnclick').html("<p><b>Darker is better</b></p>");
                        $('#changeOnclick').css("text-align", "center");

                        $('#changeOnclick1').html("");
                        $('#changeOnclick1').html("<p><b>Darker is better</b></p>");
                        $('#changeOnclick1').css("text-align", "center");
                        updateStep3OriginalTable();
                    } else {

                        flag = 1;
                        $('#changeOnclick').html("");

                        $('#changeOnclick').html("<p><b>Black = Better than benchmark</b></p>");
                        $('#changeOnclick').css("text-align", "center");

                        $('#changeOnclick1').html("");

                        $('#changeOnclick1').html("<p><b>Black = Better than benchmark</b></p>");
                        $('#changeOnclick1').css("text-align", "center");
                        updateStep3OriginalTable();
                    }

                }
            </script>

            <script type="text/javascript">
                function ShowDitails() {
                    var compName = $('#tags').val();
                    investAmount = $('#investment').val();
                    var tempTicker = $('#hiddenTicker').val();
                    comp[numberOfComp] = compName;
                    invArr[numberOfComp] = parseInt(investAmount);
                    totalAmount = parseInt(totalAmount) + parseInt(investAmount);
                    newComp[newNumberOfComp] = compName;
                    newInvArr[newNumberOfComp] = parseInt(investAmount);
                    ticker[newNumberOfComp] = tempTicker;
                    //alert(ticker);
                    numberOfComp += 1;
                    newNumberOfComp += 1;

                    if (compName != "") {
                        updateStep1AndStep2OriginalTable();
                    }

                    window.myOriginalDoughnut.update();
                    window.step4MyOriginalDoughnut.update();
                    //tableStep2New
                    updateNewPortfolio();


                    updateStep3OriginalTable();


                    window.myNewDoughnut.update();
                    window.step4MyNewDoughnut.update();
                }

                function getid(id) {

                    var inputId = "#val" + id;
                    console.log(inputId);
                    //$()
                    $(inputId).keyup(function() {

                        newInvArr[id] = parseInt($(this).val());
                        var index = 0;
                        $('.percentages').each(function(i, obj) {
                            var newTotalAmount = 0;
                            for (var i = 0; i < newNumberOfComp; i++) {
                                newTotalAmount += parseInt(newInvArr[i]);
                            }
                            $('#newTotalAmountId').html(newTotalAmount);
                            //alert(i);
                            $(this).html(Math.round((100 * newInvArr[index]) / newTotalAmount) + '%');
                            index += 1;

                        });
                        //percentagesStep3
                        var index = 0;
                        $('.percentagesStep3').each(function(i, obj) {
                            var newTotalAmount = 0;
                            for (var i = 0; i < newNumberOfComp; i++) {
                                newTotalAmount += parseInt(newInvArr[i]);
                            }

                            $(this).html(Math.round((100 * newInvArr[index]) / newTotalAmount) + '%');
                            var r = "#range" + index;
                            $(r).val(Math.round((100 * newInvArr[index]) / newTotalAmount));
                            index += 1;



                        });

                        $('#tagsNew').val("");
                        $('#investmentNew').val("");

                        window.myNewDoughnut.update();
                        window.step4MyNewDoughnut.update();
                    });

                }

                function deleteRow(val) {

                    if (val > -1) {
                        var deleted = 0
                        for (var j = 0; j < newInvArr.length; j++) {
                            if (invArr[val] == newInvArr[j] && comp[val] == newComp[j] && deleted == 0) {
                                newInvArr.splice(j, 1);
                                newComp.splice(j, 1);
                                ticker.splice(j, 1);
                                newNumberOfComp -= 1;
                                deleted = 1;
                            }
                        }
                        invArr.splice(val, 1);
                        comp.splice(val, 1);
                        numberOfComp -= 1;
                        //newNumberOfComp = numberOfComp;

                    }

                    addDataStep1Delete();
                }

                function addDataStep1Delete() {
                    updateStep1AndStep2OriginalTable();


                    window.myOriginalDoughnut.update();
                    window.step4MyOriginalDoughnut.update();

                    //tableStep2New
                    updateNewPortfolio();

                    updateStep3OriginalTable();



                    window.myNewDoughnut.update();
                    window.step4MyNewDoughnut.update();
                }
            </script>

            <script type="text/javascript">
                function updateStep1AndStep2OriginalTable() {
                    $('#compData > tbody > tr > td').parent('tr').empty();
                    var out = "";
                    var tableRowId = "";
                    for (var i = 0; i < numberOfComp; i++) {

                        var myStr = comp[i];
                        myStr.length;
                        $.trim(myStr).length;
                        var l = myStr.replace(/ /g, '').length;
                        var test = "";
                        if (l > 70) {
                            test = comp[i].substr(0, 70) + "...";
                        } else {
                            test = comp[i];
                        }

                        tableRowId = "'" + i + "'";
                        out += '<tr id="' + i + '"><td>' + test + '</td><td>' + invArr[i] + '</td><td>' + Math.round((100 * invArr[i]) / totalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"   onclick="deleteRow(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                    }
                    //if (compName != "") {
                    $(out).appendTo("#compData tbody");



                    var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';

                    $('#compData tfoot tr:last').remove();
                    $(out1).appendTo("#compData tfoot");
                    //}
                    $('#tags').val("");
                    $('#investment').val("");

                    window.myDoughnut.update();
                    window.step4MyOriginalDoughnut.update();

                    $('#OriginalHeader').css("display", "revert");

                    $('#tableStep2Original > tbody > tr > td').parent('tr').empty();

                    var outStep2Original = "";
                    for (var i = 0; i < numberOfComp; i++) {
                        var myStr = comp[i];
                        myStr.length;
                        $.trim(myStr).length;
                        var l = myStr.replace(/ /g, '').length;
                        var test = "";
                        if (l > 70) {
                            test = comp[i].substr(0, 70) + "...";
                        } else {
                            test = comp[i];
                        }

                        outStep2Original += '<tr><td>' + test + '</td><td>' + invArr[i] + '</td><td>' + Math.round((100 * invArr[i]) / totalAmount) + '%' + '</td></tr>';
                    }

                    $(outStep2Original).appendTo('#tableStep2Original tbody');
                    $('#tableStep2Original tfoot tr:last').remove();
                    var outStep2OriginalFooter = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td></tr>';
                    $(outStep2OriginalFooter).appendTo("#tableStep2Original tfoot");
                }

                function addNewProtfilio() {
                    var compName = $('#tagsNew').val();
                    investAmount = $('#investmentNew').val();

                    var tempTicker = $('hiddenTickerStep2').val();

                    ticker[newNumberOfComp] = tempTicker;
                    //alert(ticker);

                    newComp[newNumberOfComp] = compName;



                    newInvArr[newNumberOfComp] = parseInt(investAmount);


                    newNumberOfComp += 1;
                    updateNewPortfolio();
                    updateStep3OriginalTable();


                    // pieChatOriginal
                    $('#tagsNew').val("");
                    $('#investmentNew').val("");

                    window.myNewDoughnut.update();
                    window.step4MyNewDoughnut.update();
                }

                function deleteRowNewProf(val) {
                    if (val > -1) {
                        newInvArr.splice(val, 1);
                        newComp.splice(val, 1);
                        newNumberOfComp -= 1;

                        updateNewPortfolio();
                        updateStep3OriginalTable();

                        window.myNewDoughnut.update();
                        window.step4MyNewDoughnut.update();
                    }
                }

                function updateNewPortfolio() {
                    var newTotalAmount = 0;
                    for (var i = 0; i < newNumberOfComp; i++) {
                        newTotalAmount += parseInt(newInvArr[i]);
                    }

                    //tableStep2New
                    var tableRowId = "";
                    var outNew = "";
                    var outputStep3 = "";
                    var advViewTable = "";
                    for (var i = 0; i < newNumberOfComp; i++) {
                        var myStr = newComp[i];
                        myStr.length;
                        $.trim(myStr).length;
                        var l = myStr.replace(/ /g, '').length;
                        var test = "";
                        if (l > 70) {
                            test = newComp[i].substr(0, 70) + "...";
                        } else {
                            test = newComp[i];
                        }

                        tableRowId = "'" + i + "'";
                        outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid(' + i + ')" /></td><td class="percentages">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                        outputStep3 += '<tr id="' + i + '"><td style="text-align: left;">' + test + '</td><td><input type="range" id ="range' + i + '" name="" step="10" value="' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '"></td><td class="percentagesStep3" style="text-align: left;">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td></tr>';

                    }

                    $('#tableStep2New > tbody > tr > td').parent('tr').empty();
                    $(outNew).appendTo('#tableStep2New tbody');

                    var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td id="newTotalAmountId" style="background-color: #858689; color: #fff;" >' + newTotalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                    $('#tableStep2New tfoot tr:last').remove();
                    $(out1).appendTo("#tableStep2New tfoot");


                    $('#tableStep3 > tbody > tr > td').parent('tr').empty();
                    $(outputStep3).appendTo('#tableStep3 tbody');

                    updateStep3OriginalTable();

                    window.myNewDoughnut.update();
                    window.step4MyNewDoughnut.update();
                }

                function updateStep3OriginalTable() {
                    var advViewTable = "";
                    var headIndex = 0;
                    var rowSpan = [9, 6, 6, 4, 5];
                    for (var j = 1; j < col3.length - 1; j++) {
                        if (flag != 1 && heading[j] != "") {
                            advViewTable += '<tr ><td class="rowHeading" rowspan="' + rowSpan[headIndex] + '" style="width: 135px; text-align: left; background: #858689; color: #fff;"><button class="btn btn-xs btn-danger"   onclick="delete()" style="color: #fff; background: #858689;">V</button>' + heading[j] + '</td><td style="text-align: center; width: 30px;"><button class="btn btn-xs btn-danger"   onclick="delete()" style="color: #D24D33; background: #fff;">X</button></td><td style="width: 245px;">' + col3[j] + '</td><td style="width: 80px;">' + yearPars[j] + '</td><td class="black-cell" style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell"  style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td></td><td class="black-cell"  style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';

                            headIndex += 1;
                        } else if (flag != 0 && heading[j] != "") {
                            advViewTable += '<tr ><td class="rowHeading" rowspan="' + rowSpan[headIndex] + '" style="width: 135px; text-align: left; background: #858689; color: #fff;"><button class="btn btn-xs btn-danger"   onclick="delete()" style="color: #fff; background: #858689;">V</button>' + heading[j] + '</td><td style="text-align: center; width: 30px;"><button class="btn btn-xs btn-danger"   onclick="delete()" style="color: #D24D33; background: #fff;">X</button></td><td style="width: 245px;">' + col3[j] + '</td><td style="width: 80px;">' + yearPars[j] + '</td><td class="black-cell" style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell"  style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td></td><td class="black-cell"  style="padding: 17px; background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td></tr>';

                            headIndex += 1;
                        } else if (flag != 1 && heading[j] == "") {
                            advViewTable += '<tr ><td style="text-align: center; width: 30px;"><button class="btn btn-xs btn-danger"   onclick="delete()" style="color: #D24D33; background: #fff;">X</button></td><td style="width: 245px;">' + col3[j] + '</td><td style="width: 80px;">' + yearPars[j] + '</td><td class="black-cell" style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell"  style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td></td><td class="black-cell"  style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';

                        } else if (flag != 0 && heading[j] == "") {
                            advViewTable += '<tr ><td style="text-align: center; width: 30px;"><button class="btn btn-xs btn-danger"   onclick="delete()" style="color: #D24D33; background: #fff;">X</button></td><td style="width: 245px;">' + col3[j] + '</td><td style="width: 80px;">' + yearPars[j] + '</td><td class="black-cell" style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell"  style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td></td><td class="black-cell"  style="padding: 17px; background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td></tr>';
                        }
                    }
                    if (flag != 1) {
                        advViewTable += '<tr ><td colspan="4" style="text-align: left;"><b>Overall grade</b></td><td class="black-cell" style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell"  style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td></td><td class="black-cell"  style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
                    } else {
                        advViewTable += '<tr ><td colspan="4" style="text-align: left;"><b>Overall grade</b></td><td class="black-cell" style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell"  style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td ><td></td><td class="black-cell"  style="padding: 17px; background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td><td class="black-cell" style="background-color: ' + colorNew[Math.floor(Math.random() * 5)] + '"></td></td></tr>';
                    }
                    $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();
                    $(advViewTable).appendTo('#tableStep3AdvanceView tbody');
					
					$('.black-cell').each(function(i,obj){
						if($(this).css('background-color')== '#000')
							$(this).addClass('ok');
					});
                }
            </script>


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
                <!-- <script type="text/javascript" src="js/vendors/raphael/raphael-min.js"></script> 
<script type="text/javascript" src="js/vendors/morris/morris.min.js"></script>  -->

                <!--FlotChart-->
                <!-- <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.axislabels.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot-tooltip.js"></script>  -->

                <!--Chart.js-->
                <!-- <script type="text/javascript" src="js/vendors/chartjs/chart.min.js"></script>  -->

                <!--Calendar-->
                <script type="text/javascript" src="js/vendors/fullcalendar/fullcalendar.min.js"></script>
                <script type="text/javascript" src="js/vendors/fullcalendar/gcal.js"></script>
                <!--FlotChart-->
                <!-- <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.stack.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.categories.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.time.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.axislabels.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot-tooltip.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.pie.min.js"></script>  -->
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
               <!--  <script>
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
                </script> -->

                <!--Main App-->
                <script type="text/javascript" src="js/scripts.js"></script>


                <!--/Scripts-->

    </body>

    </html>