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
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style type="text/css">
        #res, #resNew {
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
            border:1px solid #ddd;
            margin: 0 auto;
            font-family: 'MyFont', serif;
            margin-top: 37px;;
            /*padding: 10px;*/
        }

        .wrapper h2 {
            text-align: left;
            border-bottom: 1px solid #ddd;
            padding: 0 20px;
            padding-bottom: 10px;
            margin-top: 10px;
        }

        /*.menu {
            width: 1000px;
            text-align: left;
            margin: 20px auto 0;
        }
        .menu ul {
            margin: 0;
            padding: 0;
        }
         .menu ul li {
            float: left;
            list-style: none;
            border: 1px solid #ddd;
            border-bottom: none;
        }

        .menu ul li a {
            float: left;
            
            background-color: #ccc;
            text-decoration: none;
            padding: 10px;
            color: #000;
        }

          .menu ul li a:hover{
            background-color: #ddd;
            color: #000;
          }

           .menu ul li a.active{
            background-color: #fff;
            color: #000;
          }
*/
        /*.menu a {
            background: #09C;
            text-decoration: none;
            padding: 5px 15px;
            background-color: #B4CCD9;
            color: #000;
        }*/



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

        /*#divbody{
            border-left:1px solid #ddd;
            border-right:1px solid #ddd;
            border-bottom:1px solid #ddd;
            margin-top: 35px;
            margin-left: 15px;
            margin-right: 15px;

        }*/


     /*   ul li :hover {
            background-color: #ddd;
        }*/
        /* Create an active/current tablink class */

        /*ul li .active {
            background-color: #fff;
        }*/
        /* Style the tab content */

        .tabcontent {
            display: none;
            padding: 6px 12px;
           /* -webkit-animation: fadeEffect 1s;
            animation: fadeEffect 1s;*/
        }
        /* Fade in tabs */

       /* @-webkit-keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }*/

        .bglg{
    width:15px;
    margin-right:5px;
    height:15px;
    border-radius:50%;
    background:#0D2747;
    float:left;
    }

    .smplg{
    width:15px;
    height:15px;
    margin-right:5px;
    border-radius:50%;
    /*margin-left:20px;*/
    background:#6D94AD;
    float:left;}
       
    </style>
</head>

<?php
    $url = "https://api.intrinio.com/companies";
    // $url2 = "https://api.intrinio.com/companies?identifier=AA/username/base64_encode(bf74019dff7d62dbb876afe4429ff5e8)/password/ffaf7422618b158727f6ca24c6ee8f54/format/json";
    // //var_dump($url2);die;
    // $data = file_get_contents($url2);
    // var_dump($data);die;
    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded",
    'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //var_dump($result);die;
    //$var = json_decode($result, true); 

    //echo "<p>".$result."</p>";
    //echo "<p>".$var['data[0].name']."</p>";

    ?>

    <body>
        <script type="text/javascript">
            var investAmount = 0;
            var numberOfComp = 0;
            var invArr = [];
            var comp = [];
            var totalAmount = 0;
            var newNumberOfComp = 0;
            var newComp = [];
            var newInvArr = [];
            var color = ['#0f2747','#143a6d','#3b69a5', '#819fc6', '#D2E1F6'];
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
                                                <input type="text" id="search" class="form-control" placeholder="Add holding" autocomplete="off">
                                                <div id="res" style="width: 100%; z-index: 1000;"></div>
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
                                                <div id="placeholder5" class="flotchart-placeholder"></div>
                                            </div>
                                        </div>
                                        <h4 style="text-align:center; display: none;" id="OriginalHeader">Original Portfolio</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <table  class="table table-bordered table-striped table-hover" id="compData">
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
                                                <input type="text" id="searchNew" name="" class="form-control" placeholder="Add holding" autocomplete="off">
                                                <div id="resNew" style="width: 100%; z-index: 1000;"></div>
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
                                        <div id="pieChatOriginal"></div>
                                        <h4>Original Portfolio</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                                        <div id="pieChatNew"></div>
                                        <h4>New Portfolio</h4>
                                        <button class="btn btn-info mytab pull-right" id="activate-step-3"><h4>Next<br><small style="color:#fff;">Step 3 New Proposed Holdings</small></h4></button>
                                    </div>
                                </div>
                            </div>
                            <div class="setup-content tab-pane" id="three-normal">
                            <div class="row">
                            	<div class="col-sm-6 col-md-6 col-lg-6">
                            		<h3>Vary Weight</h3>
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
                                                    <th style="text-align:center;">Action</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">Total</th>
                                                    <th style="text-align:center;"></th>
                                                    <th style="text-align:center;">100%</th>
                                                    <th style="text-align:center;"></th>
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
                                <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                	<div class="form-group row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <input type="text" name="" class="form-control" placeholder="Add holding">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <input type="text" name="" class="form-control" placeholder="Investment">
                                            </div>
                                            <div class="col-sm-2 col-md-2 col-lg-2">
                                                <button class="btn btn-info">Add</button>
                                            </div>
                                        </div>
                                	</div>
                                </div>
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
								                <h2 style="color: #6F95AD; text-align: center;">MS draw down days</h2><center>
								                <p style="text-align: center; /*margin-left: 380px; */ width: 270px; line-height: 15px;"><span class="bglg"></span> <span>Bristol Gate US Equity Cl A U$</span></p><p style="text-align: center; /*margin-left: 380px;*/ width: 175px; line-height: 15px;">  <span class="smplg"></span> <span>S&P 500 TR USD</span></p>
								                
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
                    var comp = JSON.parse(<?php  echo JSON_encode($result,true); ?>);
                    var data = comp.data.filter(function(d) {
                        return d.name;
                        // d.symbol = +d.symbol;
                        // return d;
                    });
         //            $.ajax({
				     //    type: "GET",
				     //    url: "comp.csv",
				     //    dataType: "text",
				     //    success: function(data) {processData(data);}
				     // });


                    $('#search').keyup(function() {
                        var count = 0;
                        var searchField = $(this).val();
                        if (searchField === '') {
                            $("#res").hide();
                            return;
                        }

                        var regex = new RegExp(searchField, "i");
                        var output = '<ul id="country-list">';
                        var count = 1;


                        $.each(data, function(key, val) {
                            if ((val.name.search(regex) != -1)) {
                                //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
                                var str = "'" + val.name + "'";
                                //var ticker = "'" + val.symbol+"'";
                                output += '<li onClick="selectCountry(' + str + ')"> ' + val.name + ' </li>';

                            }
                        });
                        output += '</ul>';

                        $("#res").show();
                        $('#res').html(output);

                        //document.getElementById("search").value = ;
                    });



                    $('#searchNew').keyup(function() {
                        var count = 0;
                        var searchField = $(this).val();
                        if (searchField === '') {
                            $("#resNew").hide();
                            return;
                        }

                        var regex = new RegExp(searchField, "i");
                        var output = '<ul id="country-list">';
                        var count = 1;


                        $.each(data, function(key, val) {
                            if ((val.name.search(regex) != -1)) {
                                //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
                                var str = "'" + val.name + "'";
                                //var ticker = "'" + val.symbol+"'";
                                output += '<li onClick="selectNewComp(' + str + ')"> ' + val.name + ' </li>';

                            }
                        });
                        output += '</ul>';

                        $("#resNew ").show();
                        $('#resNew').html(output);

                        //document.getElementById("search").value = ;
                    });



                });
            </script>

            <script type="text/javascript">
                function selectCountry(val) {
                    $("#search").val("");
                    $("#search").val(val);
                    // $('#compTicker').val(val2);
                    $("#res").hide();
                }
            </script>

            <script type="text/javascript">
                function selectNewComp(val) {
                    $("#searchNew").val("");
                    $("#searchNew").val(val);
                    // $('#compTicker').val(val2);
                    $("#resNew").hide();
                }
            </script>

            <script type="text/javascript">
                function ShowDitails() {
                    var compName = $('#search').val();
                    investAmount = $('#investment').val();
                    comp[numberOfComp] = compName;
                    invArr[numberOfComp] = parseInt(investAmount);
                    totalAmount = parseInt(totalAmount) + parseInt(investAmount);
                    newComp[newNumberOfComp] = compName;
                    newInvArr[newNumberOfComp] = parseInt(investAmount);
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
                        out += '<tr id="' + i + '"><td>' + test + '</td><td>' + invArr[i] + '</td><td>' +  Math.round((100 * invArr[i]) / totalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"   onclick="deleteRow(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                    }
                    if (compName != "") {
                        $(out).appendTo("#compData tbody");

                   

                        var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                     
                        $('#compData tfoot tr:last').remove();
                        $(out1).appendTo("#compData tfoot");
                    }
                    $('#search').val("");
                    $('#investment').val("");

                    $("#placeholder5").html("");
                    $("#placeholder5").sparkline(invArr, {
                        type: 'pie',
                        
                        height: '200px'
                        
                    });
                    $('#OriginalHeader').css("display","revert");
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

                        outStep2Original += '<tr><td>' + test + '</td><td>' + invArr[i] + '</td><td>' +  Math.round((100 * invArr[i]) / totalAmount) + '%' + '</td></tr>';
                    }

                    $(outStep2Original).appendTo('#tableStep2Original tbody');
                    $('#tableStep2Original tfoot tr:last').remove();
                    var outStep2OriginalFooter = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td></tr>';
                    $(outStep2OriginalFooter).appendTo("#tableStep2Original tfoot");

                    // pieChatOriginal
                    $("#pieChatOriginal").html("");
                    $("#pieChatOriginal").sparkline(invArr, {
                        type: 'pie',
                        //width: '100%',
                        height: '200px'
                        //tooltipFormat: ['name'], 
                        //tooltipFormatFieldlistKey: $.range_map(comp);
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
                        outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid('+i+')" >  </td><td class="percentages">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button   class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';

                        outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" name="" step="10" value="30"></td><td class="percentagesStep3">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>';

                        advViewTable += '<tr ><td style="padding: 17px; background-color: '+color[Math.floor(Math.random() * 5)]+'"></td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td></tr>';
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
                    $("#pieChatNew").html("");
                    $("#pieChatNew").sparkline(newInvArr, {
                        type: 'pie',
                        //width: '100%',
                        height: '200px'
                        //tooltipFormat: ['name'], 
                        //tooltipFormatFieldlistKey: $.range_map(comp);
                    });


                    //var step2TableData = 

                }

                function getid(id)
                {
                	//alert(obj.id+" "+obj.value);
                	//var id = obj.id;
                	//var value = obj.value;
                	//setUpdatedValueNewProf(id);
                	
                	//alert(value);
                	//deleteRowNewProf(id);
                	var inputId = "#val"+id;
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
						    $(this).html( Math.round((100 * newInvArr[index]) / newTotalAmount) + '%');
						    index += 1;

						});
						//percentagesStep3

						$('.percentagesStep3').each(function(i, obj) {
                			var newTotalAmount = 0;
		                    for (var i = 0; i < newNumberOfComp; i++) {
		                        newTotalAmount += parseInt(newInvArr[i]);
		                    }
		                    //$('#newTotalAmountId').html(newTotalAmount);
		                    //alert(i);
						    $(this).html( Math.round((100 * newInvArr[index]) / newTotalAmount) + '%');
						    index += 1;

						});

						$('#searchNew').val("");
	                    $('#investmentNew').val("");
	                    $("#pieChatNew").html("");
	                    $("#pieChatNew").sparkline(newInvArr, {
	                        type: 'pie',
	                        //width: '100%',
	                        height: '200px'
	                        //tooltipFormat: ['name'], 
	                        //tooltipFormatFieldlistKey: $.range_map(comp);
	                    });
                		//alert($(this).val());
                		//var value = $(this).val();
                		
                		//updateNewPortfolio();
                		//$(inputId).selectionStart = $(inputId).selectionEnd = $(inputId).val().length;
                 	});

                }
                // function setUpdatedValueNewProf(id)
                // {
                	
                // }

                function deleteRow(val) {
                    //var id = "#"+val;
                    //$('id').remove();
                    if (val > -1) {
                        if(invArr[val] == newInvArr[val] && comp[val] == newComp[val]){
                            newInvArr.splice(val,1);
                            newComp.splice(val,1);
                            newNumberOfComp -=1;
                        }
                        invArr.splice(val, 1);
                        comp.splice(val, 1);
                        numberOfComp -= 1;
                        //newNumberOfComp = numberOfComp;
                         
                    }

                    addDataStep1Delete();
                }

                function addDataStep1Delete()
                {
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
                        out += '<tr id="' + i + '"><td>' + test + '</td><td>' + invArr[i] + '</td><td>' +  Math.round((100 * invArr[i]) / totalAmount) + '%' + '</td><td><button class="btn btn-xs btn-danger" style="text-align: center;" onclick="deleteRow(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                    }
                    //if (compName != "") {
                        $(out).appendTo("#compData tbody");

                   

                        var out1 = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td><td style="background-color: #858689; color: #fff;"></td></tr>';
                     
                        $('#compData tfoot tr:last').remove();
                        $(out1).appendTo("#compData tfoot");
                    //}
                    $('#search').val("");
                    $('#investment').val("");

                    $("#placeholder5").sparkline(invArr, {
                        type: 'pie',
                        
                        height: '200px'
                        
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
                        outStep2Original += '<tr><td>' + test + '</td><td>' + invArr[i] + '</td><td>' +  Math.round((100 * invArr[i]) / totalAmount) + '%' + '</td></tr>';
                    }

                    $(outStep2Original).appendTo('#tableStep2Original tbody');
                    $('#tableStep2Original tfoot tr:last').remove();
                    var outStep2OriginalFooter = '<tr><td style="background-color: #858689; color: #fff;">TOTAL</td><td style="background-color: #858689; color: #fff;" >' + totalAmount + '</td><td style="background-color: #858689; color: #fff;">100%</td></tr>';
                    $(outStep2OriginalFooter).appendTo("#tableStep2Original tfoot");

                    // pieChatOriginal

                    $("#pieChatOriginal").html("");
                    $("#pieChatOriginal").sparkline(invArr, {
                        type: 'pie',
                        //width: '100%',
                        height: '200px'
                        //tooltipFormat: ['name'], 
                        //tooltipFormatFieldlistKey: $.range_map(comp);
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
                        outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid('+i+')" /> </td><td class="percentages">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td><button  style="text-align: center;" class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                        outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" name="" step="10" value="30"></td><td class="percentagesStep3">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>';

                        advViewTable += '<tr ><td style="margin: 0; padding: 17px; background-color: '+color[Math.floor(Math.random() * 5)]+'"></td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td></tr>';
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
                    $("#pieChatNew").html("");
                    $("#pieChatNew").sparkline(newInvArr, {
                        type: 'pie',
                        //width: '100%',
                        height: '200px'
                        //tooltipFormat: ['name'], 
                        //tooltipFormatFieldlistKey: $.range_map(comp);
                    });
                }
            </script>

            <script type="text/javascript">
                function addNewProtfilio(){
                    var compName = $('#searchNew').val();
                    investAmount = $('#investmentNew').val();
                    
                    
                    
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

                        tableRowId = "'"+i+"'";
                        outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="]: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid('+i+')" /></td><td class="percentages">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                        outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" name="" step="10" value="30"></td><td class="percentagesStep3">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>';
                        
                        advViewTable += '<tr ><td style="margin: 0; padding: 17px; background-color: '+color[Math.floor(Math.random() * 5)]+'"></td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td></tr>';
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
                    $('#searchNew').val("");
                    $('#investmentNew').val("");
                    $("#pieChatNew").html("");
                    $("#pieChatNew").sparkline(newInvArr, {
                        type: 'pie',
                        //width: '100%',
                        height: '200px'
                        //tooltipFormat: ['name'], 
                        //tooltipFormatFieldlistKey: $.range_map(comp);
                    });

                }

                function deleteRowNewProf(val){
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

                            tableRowId = "'"+i+"'";
                            outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid('+i+')" /></td><td class="percentages">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                            outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" name="" step="10" value="30"></td><td class="percentagesStep3">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>';

                            advViewTable += '<tr ><td style="margin: 0; padding: 17px; background-color: '+color[Math.floor(Math.random() * 5)]+'"></td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td></tr>';
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
                        // $('#searchNew').val("");
                        // $('#investmentNew').val("");
                        $("#pieChatNew").html("");
                        $("#pieChatNew").sparkline(newInvArr, {
                            type: 'pie',
                            //width: '100%',
                            height: '200px'
                            //tooltipFormat: ['name'], 
                            //tooltipFormatFieldlistKey: $.range_map(comp);
                        });
                    }

                }


                function updateNewPortfolio()
                {
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

                            tableRowId = "'"+i+"'";
                            outNew += '<tr id="' + i + '"><td>' + test + '</td><td style="width: 170px;"><input type="text" id="val' + i + '" class="form-control value"  value="' + newInvArr[i] + '" onmouseover="getid('+i+')" /></td><td class="percentages">' + Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger" onclick="deleteRowNewProf(' + tableRowId + ')"><i class="fa fa-remove"></i></button></td>' + '</td></tr>';
                            outputStep3 += '<tr id="' + i + '"><td>' + test + '</td><td><input type="range" name="" step="10" value="30"></td><td class="percentagesStep3">' +  Math.round((100 * newInvArr[i]) / newTotalAmount) + '%' + '</td><td style="text-align: center;"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>';
                            advViewTable += '<tr ><td style="margin: 0; padding: 17px; background-color: '+color[Math.floor(Math.random() * 5)]+'"></td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td><td style="background-color: '+color[Math.floor(Math.random() * 5)]+'"></td></tr>';
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
                        // $('#searchNew').val("");
                        // $('#investmentNew').val("");
                        $("#pieChatNew").html("");
                        $("#pieChatNew").sparkline(newInvArr, {
                            type: 'pie',
                            //width: '100%',
                            height: '200px'
                            //tooltipFormat: ['name'], 
                            //tooltipFormatFieldlistKey: $.range_map(comp);
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