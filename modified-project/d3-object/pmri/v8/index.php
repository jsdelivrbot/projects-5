<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
    <meta name="author" content="DazeinCreative">
    <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio MRI</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>

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
/*1st switch*/

.switch6 {  max-width: 17em;  margin: 0 auto; }
.switch6-light > span, .switch-toggle > span {  color: #000000 ; }
.switch6-light span span, .switch6-light label, .switch-toggle span span, .switch-toggle label {  color: #2b2b2b ; }

.switch-toggle a, 
.switch6-light span span { display: none; }

.switch6-light { display: block; height: 35px; cursor:pointer; margin-bottom:0; position: relative; overflow: visible; padding: 0px; margin-left:0px; }
.switch6-light * { box-sizing: border-box; }
.switch6-light a { display: block; transition: all 0.3s ease-out 0s; }

.switch6-light label, 
.switch6-light > span { line-height: 35px; vertical-align: middle;}

.switch6-light label {font-weight: 700; margin-bottom: px; max-width: 100%;}

.switch6-light input:focus ~ a, .switch6-light input:focus + label { outline: 1px dotted rgb(136, 136, 136); }
.switch6-light input { position: absolute; opacity: 0; z-index: 5; }
.switch6-light input:checked ~ a { right: 0%; }
.switch6-light > span { position: absolute; left: -100px; width: 100%; margin: 0px; padding-right: 100px; text-align: left; }
.switch6-light > span span { position: absolute; top: 0px; left: 0px; z-index: 5; display: block; width: 50%; margin-left: 100px; text-align: center; }
.switch6-light > span span:last-child { left: 50%; }
.switch6-light a { position: absolute; right: 50%; top: 0px; z-index: 4; display: block; width: 50%; height: 100%; padding: 0px; }

/*2nd Switch*/

       .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

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

input:checked + .slider {
  background-color: #2196F3 ;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3 ;
}

input:checked + .slider:before {
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
            width: 95%;
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
            var color = ['#0f2747', '#143a6d', '#3b69a5', '#819fc6', '#D2E1F6'];
            var colorOriginal = ['#000', '#fff', '#000', '#fff', '#fff'];

            var flage = 0;
        </script>

        <!--Smooth Scroll-->
        <div class="smooth-overflow">
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
                                                <button class="btn btn-info" onclick="ShowDitails()" id="clear">Add</button>
                                            </div>
                                        </div>
                                        <div class="inner-spacer">
                                            <div class="flotchart-container" style="width: 100%; text-align: center;">
                                                <div id="placeholder5" class="flotchart-placeholder" >
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
                                            <!-- <thead >
                                        <tr>
                                            <th style="text-align:center;" >Total</th>
                                            <th style="text-align:center;" id="totalAmountOfInvest"></th>
                                            <th style="text-align:center;" id="totalPersOfInvest"></th>
                                            <th style="text-align:center;"></th>
                                        </tr>
                                    </thead> -->
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
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="switch6" style="border:1px solid #999999 ; margin-bottom:8px; border-radius:5px; margin-top:5px;">
                                            <label class="switch6-light" onclick="selectView()">
                                                    <input type="checkbox" id="basicAdvance" unchecked>
                                                    <span>
                                                        <span>Basic</span>
                                                        <span>Advanced</span>
                                                    </span>
                                                    <a class="btn btn-info"></a>
                                            </label>
                                        </div>
                                        <!-- <div id="checkView"></div> -->
                                        <div style="float:left; width:180px;">
                                            <span style="float:left; line-height:33px; margin-right:8px;">Basic --</span>
                                            <label class="switch" onclick="selectView()">
                                              <input type="checkbox" id="basicAdvance" unchecked>
                                              <span class="slider round"></span>
                                            </label>
                                           <span style="float:right; line-height:33px;">-- Advance</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <h3>Original Portfolio</h3>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <h3>Proposed Portfolio</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <th style="text-align:center;">Total</th>
                                                    <th style="text-align:center;"></th>
                                                    <th style="text-align:center;">100%</th>
                                                    <!-- <th style="text-align:center;"></th> -->
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <table class="table text-center table-bordered" id="tableStep3AdvanceView">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 10px 0;">2009</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2010</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2011</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2012</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2015</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2016</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                    <!-- <thead>
                                                <tr>
                                                    <th style="text-align:center;">Total</th>
                                                    <th style="text-align:center;"></th>
                                                    <th style="text-align:center;">100%</th>
                                                    <th style="text-align:center;"></th>
                                                </tr>
                                            </thead> -->
                                                </table>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <table class="table text-center table-bordered" id="tableStep3AdvanceViewNew">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 10px 0;">2009</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2010</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2011</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2012</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2013</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2015</th>
                                                            <th style="text-align:center; font-size: 10px; margin: 0; padding: 0;">2016</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                    <!-- <thead>
                                                <tr>
                                                    <th style="text-align:center;">Total</th>
                                                    <th style="text-align:center;"></th>
                                                    <th style="text-align:center;">100%</th>
                                                    <th style="text-align:center;"></th>
                                                </tr>
                                            </thead> -->
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <input type="text" name="" class="form-control" placeholder="Add holding" autocomplete="off" id="searchNewStep3">
                                                <div id="resStep3" style="z-index: 1000;"></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <input type="text" name="" class="form-control" placeholder="Investment" id="InvestmentNewStep3">
                                            </div>
                                            <div class="col-sm-2 col-md-2 col-lg-2">
                                                <button class="btn btn-info">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <img src="images/linegraph.png" style="width:100%;" alt="">
                                        <img src="images/downfall.png" style="width:100%;" alt="">
                                        <div id="Summary" class="tabcontent" style="display:block; ">
                                            <div class="wrapper">

                                                <!--  <div style="padding: 20px;">
								                <h3 style="margin:0"> Bristol Gate has 18% fewer drawdown days </h3>
								                <h5 style="margin:0">(during 10 largest drawdowns since inception)</h5>
								                <h3 style="margin:5px 0;">Total # of Drawdown Days: </h3>

								                <div style="padding-left: 200px;">
								                    <b><p style="margin:0">S&P 500 TR: 830 </p></b>
								                    <b><p style="margin:0">Bristol Gate: 677</p></b>
								                </div>
								          
								            </div> -->
                                                <!-- <hr style="color: #ddd;"> -->
                                                <h2 style="color: #6F95AD; text-align: center;">MS draw down days</h2>
                                                <center>
                                                    <p style="text-align: center; /*margin-left: 380px; */ width: 270px; line-height: 15px;"><span class="bglg"></span> <span>Bristol Gate US Equity Cl A U$</span></p>
                                                    <p style="text-align: center; /*margin-left: 380px;*/ width: 175px; line-height: 15px;"> <span class="smplg"></span> <span>S&P 500 TR USD</span></p>

                                                    <svg id="ms" width="1000" height="400" style="font-family: 'graph', serif;">
								                </svg>
                                                    <!-- <hr style="color: #ddd;">
								                <h2 style="color: #0F2747;">Bristol Gate US Equity Strategy gross</h2>
								                <svg id="bristolgate" width="1000" height="400" style="font-family: 'graph', serif;">
								        
								                </svg> -->
                                                </center>

                                            </div>
                                            <br>
                                            <button class="btn btn-info mytab pull-right" id="activate-step-3"><h4>Next<br><small style="color:#fff;">Step 4 See/print report</small></h4></button>
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
                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                <script src="js/jquery.sparkline.min.js"></script>

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
                           success: function(data) {processData(data);}
                        });



                        // $('#tags').keyup(function(e) {
                        //     var count = 0;
                        //     var searchField = $(this).val();
                        //     if (searchField === '') {
                        //         $("#res").hide();
                        //         return;
                        //     }

                        //     var regex = new RegExp(searchField, "i");
                        //     var output = '<ul id="country-list">';
                        //     var count = 1;

                        //     //var i = 0;
                        //     $.each(lines, function(key, val) {
                        //     	var test = val[1].split(':');
                        //     	var tickeTest = val[0].split(':');
                        //         if ((test[1].search(regex) != -1)) {
                        //             //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
                        //             var str = "'" + test[1] + "'";
                        //             var tickerArg = "'" +tickeTest[1]+"'";

                        //             output += '<li class="dropList" onClick="selectCountry(' + str + ','+tickerArg+')"> ' + test[1] + ' </li>';

                        //         }
                        //         //i += 1;
                        //     });
                        //     output += '</ul>';

                        //     $("#res").show();
                        //     $('#res').html(output);

                        //     var code = e.keyCode || e.which;
                        //     // if ((code != 32) && (code != 40) && (code != 38) && (code != 13)) //Deactivate on space
                        //     // {
                        //     //     //Do something
                        //     //     $("#res").hide();
                        //     // }
                        //     if (code === 40) { //Down arrow
                        //          //alert($("li").length);
                        //         if($("#res li").index() == $("li").length-1) 
                        //             return;
                        //         else
                        //         {
                        //             //alert($("#res li").val());
                        //             e.preventDefault(); // prevent moving the cursor
                        //             $('#res li:not(:last-child).dropList').removeClass('dropList').next().addClass('dropList');
                        //         }
                        //     }
                        //     else if (code === 38) { //Up arrow
                        //         if($("li.dropList").index()==0) 
                        //             return;
                        //     }
                        //     //document.getElementById("search").value = ;
                        // });



        //                 $('#tagsNew').keyup(function() {
        //                     var count = 0;
        //                     var searchField = $(this).val();
        //                     if (searchField === '') {
        //                         $("#resNew").hide();
        //                         return;
        //                     }

        //                     var regex = new RegExp(searchField, "i");
        //                     var output = '<ul id="country-list">';
        //                     var count = 1;

        //                     //var i = 0;
        //                     $.each(lines, function(key, val) {
        //                     	var test = val[1].split(':');
        //                     	var tickeTest = val[0].split(':');
								// //alert(test[1]);
        //                         if ((test[1].search(regex) != -1)) {
        //                             //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
        //                             var str = "'" + test[1] + "'";
        //                             var tickerArg = "'" +tickeTest[1]+"'";
        //                             //var ticker = "'" + val.symbol+"'";
        //                             output += '<li onClick="selectNewComp(' + str + ','+tickerArg+')"> ' + test[1] + ' </li>';

        //                         }
        //                         //i += 1;
        //                     });
        //                     output += '</ul>';

        //                     $("#resNew ").show();
        //                     $('#resNew').html(output);

        //                     //document.getElementById("search").value = ;
        //                 });


                        //Step 3 

        //                 $('#tagsNewStep3').keyup(function() {
        //                     var count = 0;
        //                     var searchField = $(this).val();
        //                     if (searchField === '') {
        //                         $("#resStep3").hide();
        //                         return;
        //                     }

        //                     var regex = new RegExp(searchField, "i");
        //                     var output = '<ul id="country-list">';
        //                     var count = 1;

        //                     //var i = 0;
        //                     $.each(lines, function(key, val) {
        //                     	var test = val[1].split(':');
								// //alert(test[1]);
        //                         if ((test[1].search(regex) != -1)) {
        //                             //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
        //                             var str = "'" + test[1] + "'";
        //                             //var ticker = "'" + val.symbol+"'";
        //                             output += '<li onClick="selectNewCompStep3(' + str + ')"> ' + test[1] + ' </li>';

        //                         }
        //                         //i += 1;
        //                     });
        //                     output += '</ul>';

        //                     $("#resStep3 ").show();
        //                     $('#resStep3').html(output);

        //                     //document.getElementById("search").value = ;
        //                 });

                        if($('#basicAdvance').is(":checked")){

	                		// $('#checkView').html("");
	                		// $('#checkView').html('Advanced');
	                		flag = 0;
	                	}
	                	else {
	                		//alert('advance');
	                		// $('#checkView').html("");
	                		
	                		// $('#checkView').html('basic');
	                		flag = 1;
	                	}



                        function processData(allText) {
                        var allTextLines = allText.split(/\r\n|\n/);
                        var headers = allTextLines[0].split(',');
                        

                        for (var i=1; i<allTextLines.length; i++) {
                            var data = allTextLines[i].split(',');
                            if (data.length == headers.length) {

                                var tarr = [];
                                for (var j=0; j<headers.length; j++) {
                                    tarr.push(headers[j]+":"+data[j]);
                                }
                                var test = tarr[1].split(':');
                                lines.push(test[1]);
                            }
                        }
                        //alert(lines);
                        $( "#tags" ).autocomplete({

                            source: lines
                        });

                        $( "#tagsNew" ).autocomplete({

                            source: lines
                        });
                        
                    }

                    });

                    
                </script>

                <script type="text/javascript">

                //basic and Advanced view

                function selectView(){
                	if($('#basicAdvance').is(":checked")){
                		// $('#checkView').html("");
                		// $('#checkView').html('Advanced');
                		flag = 0;
                		updateStep3OriginalTable();
                		updateStep3OriginalTableNew();
                	}
                	else {
                		//alert('advance');
                		// $('#checkView').html("");
                		// $('#checkView').html('basic');
                		flag = 1;
                		updateStep3OriginalTable();
                		updateStep3OriginalTableNew();
                	}


                }


                ////......................
                    // function selectCountry(val, val2) {
                    //     $("#tags").val("");
                    //     $("#tags").val(val);

                    //     $("#hiddenTicker").val("");
                    //     $("#hiddenTicker").val(val2);
                    //     // $('#compTicker').val(val2);
                    //     $("#res").hide();
                    // }

                    // function selectNewCompStep3(val) {
                    //     $("#tagsNewStep3").val("");
                    //     $("#tagsNewStep3").val(val);
                    //     // $('#compTicker').val(val2);
                    //     $("#resStep3").hide();
                    // }
                </script>

                <script type="text/javascript">
                    // function selectNewComp(val, val2) {
                    //     $("#tagsNew").val("");
                    //     $("#tagsNew").val(val);

                    //     $("#hiddenTickerStep2").val("");
                    //     $("#hiddenTickerStep2").val(val2);
                    //     //alert(val2);
                    //     // $('#compTicker').val(val2);
                    //     $("#resNew").hide();
                    // }
                </script>

                <script type="text/javascript">
                    // var canvas = document.getElementById('myChart');
                    // var context = canvas.getContext('2d');
                    // document.getElementById('clear').addEventListener('click', function() {
                    //    // alert(canvas.width);
                    //     context.clearRect(0, 0, canvas.width, canvas.height);
                    //   }, false);


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
                        var myStr = compName;
                        myStr.length;
                        $.trim(myStr).length;
                        var l = myStr.replace(/ /g, '').length;
                        var test = "";
                        if (l > 70) {
                            test = compName.substr(0, 70) + "...";
                        } else {
                            test = compName;
                        }

                        //var test = compName.substring()




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
                        if (compName != "") {
                            $(out).appendTo("#compData tbody");



                            var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';

                            $('#compData tfoot tr:last').remove();
                            $(out1).appendTo("#compData tfoot");
                        }
                        $('#tags').val("");
                        $('#investment').val("");




// $("#placeholder5").sparkline(invArr, {
                        //     type: 'pie',

                        //     height: '200px'

                        // });
                       // delete chart;
                       // var chart = "";
                       // var cnv = document.getElementById("myChart");
                       //  document.removeChild(cnv);

                       //  var canv = document.createElement('canvas');
                       //  canv.id = 'myChart';
                       //  document.getElementById("placeholder5").appendChild(canv);
                        

                        new Chart(document.getElementById("myChart"), {
                            "type": "doughnut",
                            "data": {
                                "labels": comp,
                                "datasets": [{
                                    //"label": "My First Dataset",
                                    "data": invArr,
                                    "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                }]
                            }
                        });

                        $('#OriginalHeader').css("display", "revert");
                        //$('#OriginalHeader').css("text-align","center" );
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

                        // pieChatOriginal
                        // $("#pieChatOriginal").html("");
                        // $("#pieChatOriginal").sparkline(invArr, {
                        //     type: 'pie',
                        //     //width: '100%',
                        //     height: '200px'
                        //     //tooltipFormat: ['name'], 
                        //     //tooltipFormatFieldlistKey: $.range_map(comp);
                        // });

                        $("#myChartStep2Original").html("");
                        
                        new Chart(document.getElementById("myChartStep2Original"), {
                            "type": "doughnut",
                            "data": {
                                "labels": comp,
                                "datasets": [{
                                    //"label": "My First Dataset",
                                    "data": invArr,
                                    "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                }]
                            }
                        });

                        //tableStep2New
                        var outNew = "";
                        var outputStep3 = "";
                        var advViewTable = "";
                        var newTotalAmount = 0;
                        for (var i = 0; i < newNumberOfComp; i++) {
                            newTotalAmount += parseInt(newInvArr[i]);
                        }
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
                            outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid(' + i + ')" >  </td><td class="percentages">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button   class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';

                            outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" id ="range'+i+'" name="" step="10" value="'+Math.round((100 * newInvArr[i]) / newTotalAmount)+'"></td><td class="percentagesStep3">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td></tr>';



                            if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                        }

                        $('#tableStep2New > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3 > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();
                        //tableStep3AdvanceViewNew
                        $('#tableStep3AdvanceViewNew > tbody > tr > td').parent('tr').empty();
                        $(advViewTable).appendTo('#tableStep3AdvanceViewNew tbody');

                        $(outNew).appendTo('#tableStep2New tbody');
                        $(outputStep3).appendTo('#tableStep3 tbody');
                        $(advViewTable).appendTo('#tableStep3AdvanceView tbody');

                        out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td id="newTotalAmountId" style="background-color: #858689; color: #fff;" >' + newTotalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                        $('#tableStep2New tfoot tr:last').remove();
                        $(out1).appendTo("#tableStep2New tfoot");
                        // $('#tableStep3 tfoot tr:last').remove();
                        // $(out1).appendTo("#tableStep3 tfoot");

                        // pieChatOriginal
                        // $("#pieChatNew").html("");
                        // $("#pieChatNew").sparkline(newInvArr, {
                        //     type: 'pie',
                        //     //width: '100%',
                        //     height: '200px'
                          
                        // });

                        $("#myChartStep2New").html("");
                        
                        new Chart(document.getElementById("myChartStep2New"), {
                            "type": "doughnut",
                            "data": {
                                "labels": newComp,
                                "datasets": [{
                                    //"label": "My First Dataset",
                                    "data": newInvArr,
                                    "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                }]
                            }
                        });


                        //var step2TableData = 

                    }

                    function getid(id) {
                        //alert(obj.id+" "+obj.value);
                        //var id = obj.id;
                        //var value = obj.value;
                        //setUpdatedValueNewProf(id);

                        //alert(value);
                        //deleteRowNewProf(id);
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
                                //$('#newTotalAmountId').html(newTotalAmount);
                                //alert(i);
                                $(this).html(Math.round((100 * newInvArr[index]) / newTotalAmount) + '%');
                                var r = "#range"+index;
                                $(r).val(Math.round((100 * newInvArr[index]) / newTotalAmount));
                                index += 1;



                            });

                            $('#tagsNew').val("");
                            $('#investmentNew').val("");
                            // $("#pieChatNew").html("");
                            // $("#pieChatNew").sparkline(newInvArr, {
                            //     type: 'pie',
                            //     //width: '100%',
                            //     height: '200px'
                            //     //tooltipFormat: ['name'], 
                            //     //tooltipFormatFieldlistKey: $.range_map(comp);
                            // });
                            $("#myChartStep2New").html("");
                        
                            new Chart(document.getElementById("myChartStep2New"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": newComp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": newInvArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });
                
                        });

                    }
                    // function setUpdatedValueNewProf(id)
                    // {

                    // }

                    function deleteRow(val) {
                        //var id = "#"+val;
                        //$('id').remove();
                        if (val > -1) {
                            if (invArr[val] == newInvArr[val] && comp[val] == newComp[val]) {
                                newInvArr.splice(val, 1);
                                newComp.splice(val, 1);
                                ticker.splice(val, 1);
                                newNumberOfComp -= 1;
                            }
                            invArr.splice(val, 1);
                            comp.splice(val, 1);
                            numberOfComp -= 1;
                            //newNumberOfComp = numberOfComp;

                        }

                        addDataStep1Delete();
                    }

                    function addDataStep1Delete() {
                        $('#compData > tbody > tr > td').parent('tr').empty();
                        var out = "";

                        totalAmount = 0;
                        for (var i = 0; i < numberOfComp; i++) {
                            totalAmount += parseInt(invArr[i]);
                        }

                        var tableRowId;
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

                        $("#myChart").html("");
                        
                            new Chart(document.getElementById("myChart"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": comp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": invArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });

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

                        // pieChatOriginal

                        // $("#pieChatOriginal").html("");
                        // $("#pieChatOriginal").sparkline(invArr, {
                        //     type: 'pie',
                        //     //width: '100%',
                        //     height: '200px'
                        //     //tooltipFormat: ['name'], 
                        //     //tooltipFormatFieldlistKey: $.range_map(comp);
                        // });

                        $("#myChartStep2Original").html("");
                        
                            new Chart(document.getElementById("myChartStep2Original"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": comp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": invArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });

                        //tableStep2New
                        var outNew = "";
                        var outputStep3 = "";
                        var advViewTable = "";
                        var newTotalAmount = 0;
                        for (var i = 0; i < newNumberOfComp; i++) {
                            newTotalAmount += parseInt(newInvArr[i]);
                        }
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

                            

                            outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid(' + i + ')" /> </td><td class="percentages">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button   class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                            outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" id ="range'+i+'" name="" step="10" value="'+Math.round((100 * newInvArr[i]) / newTotalAmount)+'"></td><td class="percentagesStep3">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td></tr>';

                            if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                        }

                        $('#tableStep2New > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3 > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();

                        $('#tableStep3AdvanceViewNew > tbody > tr > td').parent('tr').empty();
                        $(advViewTable).appendTo('#tableStep3AdvanceViewNew tbody');

                        $(outNew).appendTo('#tableStep2New tbody');
                        $(outputStep3).appendTo('#tableStep3 tbody');
                        $(advViewTable).appendTo('#tableStep3AdvanceView tbody');

                        out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td id="newTotalAmountId" style="background-color: #858689; color: #fff;" >' + newTotalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                        $('#tableStep2New tfoot tr:last').remove();
                        $(out1).appendTo("#tableStep2New tfoot");

                        // $('#tableStep3 tfoot tr:last').remove();
                        //     $(out1).appendTo("#tableStep3 tfoot");

                        // pieChatOriginal
                        // $("#pieChatNew").html("");
                        // $("#pieChatNew").sparkline(newInvArr, {
                        //     type: 'pie',
                        //     //width: '100%',
                        //     height: '200px'
                        //     //tooltipFormat: ['name'], 
                        //     //tooltipFormatFieldlistKey: $.range_map(comp);
                        // });

                        $("#myChartStep2New").html("");
                        
                            new Chart(document.getElementById("myChartStep2New"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": newComp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": newInvArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });
                    }
                </script>

                <script type="text/javascript">
                    function addNewProtfilio() {
                        var compName = $('#tagsNew').val();
                        investAmount = $('#investmentNew').val();

                        var tempTicker = $('hiddenTickerStep2').val();

                        ticker[newNumberOfComp] = tempTicker;
                        //alert(ticker);

                        newComp[newNumberOfComp] = compName;



                        newInvArr[newNumberOfComp] = parseInt(investAmount);


                        newNumberOfComp += 1;
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
                            outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="]: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid(' + i + ')" /></td><td class="percentages">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                            outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" id ="range'+i+'" name="" step="10" value="'+Math.round((100 * newInvArr[i]) / newTotalAmount)+'"></td><td class="percentagesStep3">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td></tr>';

                            if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                        }

                        $('#tableStep2New > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3 > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();

                        $('#tableStep3AdvanceViewNew > tbody > tr > td').parent('tr').empty();
                        $(advViewTable).appendTo('#tableStep3AdvanceViewNew tbody');

                        $(outNew).appendTo('#tableStep2New tbody');
                        $(outputStep3).appendTo('#tableStep3 tbody');
                        $(advViewTable).appendTo('#tableStep3AdvanceView tbody');

                        var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td id="newTotalAmountId" style="background-color: #858689; color: #fff;" >' + newTotalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                        $('#tableStep2New tfoot tr:last').remove();
                        $(out1).appendTo("#tableStep2New tfoot");

                        // $('#tableStep3 tfoot tr:last').remove();
                        //     $(out1).appendTo("#tableStep3 tfoot");

                        // pieChatOriginal
                        $('#tagsNew').val("");
                        $('#investmentNew').val("");
                        // $("#pieChatNew").html("");
                        // $("#pieChatNew").sparkline(newInvArr, {
                        //     type: 'pie',
                        //     //width: '100%',
                        //     height: '200px'
                        //     //tooltipFormat: ['name'], 
                        //     //tooltipFormatFieldlistKey: $.range_map(comp);
                        // });
                        $("#myChartStep2New").html("");
                        
                            new Chart(document.getElementById("myChartStep2New"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": newComp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": newInvArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });

                    }

                    function deleteRowNewProf(val) {
                        if (val > -1) {
                            newInvArr.splice(val, 1);
                            newComp.splice(val, 1);
                            newNumberOfComp -= 1;


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
                                outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" id ="range'+i+'" name="" step="10" value="'+Math.round((100 * newInvArr[i]) / newTotalAmount)+'"></td><td class="percentagesStep3">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td></tr>';

                                if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                            }

                            $('#tableStep2New > tbody > tr > td').parent('tr').empty();
                            $('#tableStep3 > tbody > tr > td').parent('tr').empty();
                            $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();

                            $('#tableStep3AdvanceViewNew > tbody > tr > td').parent('tr').empty();
                            $(advViewTable).appendTo('#tableStep3AdvanceViewNew tbody');

                            $(outNew).appendTo('#tableStep2New tbody');
                            $(outputStep3).appendTo('#tableStep3 tbody');
                            $(advViewTable).appendTo('#tableStep3AdvanceView tbody');

                            var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td id="newTotalAmountId" style="background-color: #858689; color: #fff;" >' + newTotalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                            $('#tableStep2New tfoot tr:last').remove();
                            $(out1).appendTo("#tableStep2New tfoot");


                            // $('#tableStep3 tfoot tr:last').remove();
                            // $(out1).appendTo("#tableStep3 tfoot");

                            // pieChatOriginal
                            // $('#tagsNew').val("");
                            // $('#investmentNew').val("");
                            // $("#pieChatNew").html("");
                            // $("#pieChatNew").sparkline(newInvArr, {
                            //     type: 'pie',
                            //     //width: '100%',
                            //     height: '200px'
                            //     //tooltipFormat: ['name'], 
                            //     //tooltipFormatFieldlistKey: $.range_map(comp);
                            // });
                            $("#myChartStep2New").html("");
                        
                            new Chart(document.getElementById("myChartStep2New"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": newComp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": newInvArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });
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
                            outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" id ="range'+i+'" name="" step="10" value="'+Math.round((100 * newInvArr[i]) / newTotalAmount)+'"></td><td class="percentagesStep3">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td></tr>';
                            if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                        }

                        $('#tableStep2New > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3 > tbody > tr > td').parent('tr').empty();
                        $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();

                        $('#tableStep3AdvanceViewNew > tbody > tr > td').parent('tr').empty();
                        $(advViewTable).appendTo('#tableStep3AdvanceViewNew tbody');

                        $(outNew).appendTo('#tableStep2New tbody');
                        $(outputStep3).appendTo('#tableStep3 tbody');
                        $(advViewTable).appendTo('#tableStep3AdvanceView tbody');

                        var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td id="newTotalAmountId" style="background-color: #858689; color: #fff;" >' + newTotalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                        $('#tableStep2New tfoot tr:last').remove();
                        $(out1).appendTo("#tableStep2New tfoot");

                        //  $('#tableStep3 tfoot tr:last').remove();
                        // $(out1).appendTo("#tableStep3 tfoot");

                        // pieChatOriginal
                        // $('#tagsNew').val("");
                        // $('#investmentNew').val("");
                        // $("#pieChatNew").html("");
                        // $("#pieChatNew").sparkline(newInvArr, {
                        //     type: 'pie',
                        //     //width: '100%',
                        //     height: '200px'
                        //     //tooltipFormat: ['name'], 
                        //     //tooltipFormatFieldlistKey: $.range_map(comp);
                        // });
                        $("#myChartStep2New").html("");
                        
                            new Chart(document.getElementById("myChartStep2New"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": newComp,
                                    "datasets": [{
                                        //"label": "My First Dataset",
                                        "data": newInvArr,
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)", "#634a73", "#008000", "#65013d", "#b1dae5", "#6c1100", "#e6e6fa","#11006c"]
                                    }]
                                }
                            });
                    }


                    function updateStep3OriginalTable(){

                    	var advViewTable = "";
                        for (var i = 0; i < newNumberOfComp; i++) {
                            
                            if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                        }

                        
                        $('#tableStep3AdvanceView > tbody > tr > td').parent('tr').empty();
                        $(advViewTable).appendTo('#tableStep3AdvanceView tbody');

                        
                       
                        

                    }

                    function updateStep3OriginalTableNew()
                    {
                    	var advViewTable = "";
                        for (var i = 0; i < newNumberOfComp; i++) {
                            
                            if(flag != 1){
	                            advViewTable += '<tr ><td style="padding: 17px; background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + color[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
	                        else{
	                        	advViewTable += '<tr ><td style="padding: 17px; background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td><td style="background-color: ' + colorOriginal[Math.floor(Math.random() * 5)] + '"></td></tr>';
	                        }
                        }

                        $('#tableStep3AdvanceViewNew > tbody > tr > td').parent('tr').empty();
                        $(advViewTable).appendTo('#tableStep3AdvanceViewNew tbody');


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


                <!--/Scripts-->

    </body>

    </html>