<!doctype html>

<html class="no-js" lang="">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Portfolio MRI</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Place favicon.ico in the root directory -->



        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="css/main.css">

		<link rel="stylesheet" href="css/bootstrap.min.css">

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link rel="stylesheet" href="style.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

        <style type="text/css">
            #res{
                position: absolute;
              /*padding: 50px 0 0 20px;*/
              
            }

            #country-list{float:left;list-style:none;padding:0;width:250px;position: absolute;}
            #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
            #country-list li:hover{background:#ece3d2;cursor: pointer;}
        </style>

    </head>



    <body>

        <script>
                        var app = angular.module("myShoppingList", []); 
                        app.controller("myCtrl", function($scope) {
                            $scope.comp = [];
                            $scope.inv = [];

                            $scope.addItem = function () {
                                $scope.comp.push($scope.company);
                                $scope.inv.push($scope.investment);
                            }

                            $scope.removeItem = function (x) {
                                $scope.comp.splice(x, 1);
                                //$scope.inv..splice(x, 1);
                            }     
                        });
                        </script>

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



        <!--Header Start-->

         <?php
            $url = "https://api.intrinio.com/companies";
            
            $options = array(
            'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded",
            'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
            )
            );
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            //echo (json_encode($result));

            ?>

		<div class="header_part">

			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-12">

						<div class="form-group">

                            <ul class="nav nav-pills nav-justified thumbnail setup-panel" style="margin-bottom:0;">

                                <li class="active"><a href="#step-1">

                                    <h4 class="list-group-item-heading">Step 1</h4>

                                    <p class="list-group-item-text">Original Portfolio</p>

                                </a></li>

                                <li class="disabled"><a href="#step-2">

                                    <h4 class="list-group-item-heading">Step 2</h4>

                                    <p class="list-group-item-text">New Proposed Holdings</p>

                                </a></li>

                                <li class="disabled"><a href="#step-3">

                                    <h4 class="list-group-item-heading">Step 3</h4>

                                    <p class="list-group-item-text">Vary weights, See Results, Optimize</p>

                                </a></li>

                                

                                <li class="disabled"><a href="#step-4">

                                    <h4 class="list-group-item-heading">Step 4</h4>

                                    <p class="list-group-item-text">Print Proposal</p>

                                </a></li>

                                

                            </ul>

                        </div>

                        

					</div>

				</div>

			</div>

		</div>

		<!--Header end-->

        

        <!--Main Start-->
<div ng-app="myShoppingList" ng-controller="myCtrl">
		<div class="main_part">

			<div class="container">

                	

                    <div class="content-wrapper">

                    

                    <!--STep -1-->

                    <div class="setup-content text-center" id="step-1">

                    	<div class="col-sm-6 col-md-6 col-lg-6">
                            <form>
                            	<div class="form-group row">

                                	<div class="col-sm-6 col-md-6 col-lg-6">

                                    <input ng-model="company" type="text" class="form-control" id="search" placeholder="Holdings" autocomplete="off">
                                    <div id="res"></div>

                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">

                                    <input ng-model="investment" type="text" name="" class="form-control" placeholder="Investment">

                                    </div>

                                    <div class="col-sm-2 col-md-2 col-lg-2">

                                    <button ng-click="addItem()" class="btn btn-info">Add</button>

                                    </div>

                                </div>
                            </form>


                            <img src="images/pie-chart.JPG" style="width:100%; max-width:300px;" alt="">

                        </div>


                        <div class="col-sm-6 col-md-6 col-lg-6">

                        	<table class="table table-bordered table-striped table-hover">

                            	<thead>

                                	<tr>

                                        <th style="text-align:center;">Holdings</th>

                                        <th style="text-align:center;">Value</th>

                                        <th style="text-align:center;">in %</th>

                                        <th style="text-align:center;">Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                	<tr ng-repeat="x in comp" >

                                    	<td >{{x}}</td>

                                        <td>$</td>

                                        <td>20%</td>

                                        <td ng-click="removeItem($index)"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                    </tr>

                                    <!-- <tr>

                                    	<td>MSCI World</td>

                                        <td>$5689</td>

                                        <td>20%</td>

                                        <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                    </tr>
 -->
                                    <!-- <tr>

                                    	<td>Apple</td>

                                        <td>$5689</td>

                                        <td>20%</td>

                                        <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                    </tr> -->

                                    <!-- <tr>

                                    	<td>Facebook</td>

                                        <td>$5689</td>

                                        <td>20%</td>

                                        <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                    </tr> -->

                                    <!-- <tr>

                                    	<td>Google</td>

                                        <td>$5689</td>

                                        <td>20%</td>

                                        <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                    </tr> -->

                                </tbody>

                                <thead >

                                	<tr>

                                        <th style="text-align:center;">Total</th>

                                        <th style="text-align:center;">$28445</th>

                                        <th style="text-align:center;">100%</th>

                                        <th style="text-align:center;"></th>

                                    </tr>

                                </thead>

                            </table>

                        </div>



                        



                         <div class="col-sm-12 col-md-12 col-lg-12">           

                        <button id="activate-step-2" class="btn btn-success btn-md pull-right mybtn"><p>NEXT <br>Step 2 Make changes</p></button>

                        </div>

                    </div>
                </div>
                    <!--/STep -1-->

                    

                    <!--STep -2-->

                    <div class="setup-content text-center" id="step-2">

                    	<div class="main">

                        	<div class="col-sm-6 col-md-6 col-lg-6">

                            	<h2>Original Portfolio</h2>

                                <table class="table table-bordered table-striped table-hover">

                                    <thead>

                                        <tr>

                                            <th style="text-align:center;">Holdings</th>

                                            <th style="text-align:center;">Value</th>

                                            <th style="text-align:center;">in %</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>S&P 500</td>

                                            <td>$5689</td>

                                            <td>20%</td>

                                        </tr>

                                        <tr>

                                            <td>MSCI World</td>

                                            <td>$5689</td>

                                            <td>20%</td>

                                        </tr>

                                        <tr>

                                            <td>Apple</td>

                                            <td>$5689</td>

                                            <td>20%</td>

                                        </tr>

                                        <tr>

                                            <td>Facebook</td>

                                            <td>$5689</td>

                                            <td>20%</td>

                                        </tr>

                                        <tr>

                                            <td>Google</td>

                                            <td>$5689</td>

                                            <td>20%</td>

                                        </tr>

                                    </tbody>

                                    <thead >

                                        <tr>

                                            <th style="text-align:center;">Total</th>

                                            <th style="text-align:center;">$28445</th>

                                            <th style="text-align:center;">100%</th>

                                        </tr>

                                    </thead>

                                </table>

                                

                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">

                            <h2>New Portfolio</h2>

                        	<div class="form-group row">

                            	<div class="col-sm-6 col-md-6 col-lg-6">

                                <input type="text" name="" class="form-control" placeholder="Holdings">

                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">

                                <input type="text" name="" class="form-control" placeholder="Investment">

                                </div>

                                <div class="col-sm-2 col-md-2 col-lg-2">

                                <button class="btn btn-info">Add</button>

                                </div>

                            </div>

                            <table class="table table-bordered">

                                    <thead>

                                        <tr>

                                            <th style="text-align:center;">Holdings</th>

                                            <th style="text-align:center;">Value</th>

                                            <th style="text-align:center;">in %</th>

                                            <th style="text-align:center;">Action</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>S&P 500</td>

                                            <td><input type="text" name="" class="form-control" value="$5689"></td>

                                            <td>20%</td>

                                            <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                        </tr>

                                        <tr>

                                            <td>MSCI World</td>

                                            <td><input type="text" name="" class="form-control" value="$5689"></td>

                                            <td>20%</td>

                                            <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                        </tr>

                                        <tr>

                                            <td>Apple</td>

                                            <td><input type="text" name="" class="form-control" value="$5689"></td>

                                            <td>20%</td>

                                            <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                        </tr>

                                        <tr>

                                            <td>Facebook</td>

                                            <td><input type="text" name="" class="form-control" value="$5689"></td>

                                            <td>20%</td>

                                            <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                        </tr>

                                        <tr>

                                            <td>Google</td>

                                            <td><input type="text" name="" class="form-control" value="$5689"></td>

                                            <td>20%</td>

                                            <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                        </tr>

                                    </tbody>

                                    <thead >

                                        <tr>

                                            <th style="text-align:center;">Total</th>

                                            <th style="text-align:center;">$28445</th>

                                            <th style="text-align:center;">100%</th>

                                            <th style="text-align:center;"></th>

                                        </tr>

                                    </thead>

                                </table>

                        </div>

                            

                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <img src="images/pie-chart.JPG" style="width:100%; max-width:358px; margin-top:13px;" alt="">

                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            

                            <img src="images/proposal.JPG" style="width:100%; max-width:300px;" alt="">

                        </div>

                    	<button id="activate-step-3" class="btn btn-primary btn-md md mybtn pull-right"><p>NEXT <br>Step 3 Vary weights</p></button>

                        </div>

                    </div>

                    <!--/STep -2-->

                    

                    <!--STep -3-->

                    <div class="setup-content" id="step-3">

                    	<div class="main">

                        	<div class="col-sm-7 col-md-7 col-lg-7">

                            	<h2>Vary Weight</h2>

                            	<div class="form-group row">

                                    <div class="col-sm-6 col-md-6 col-lg-6">

                                    <input type="text" name="" class="form-control" placeholder="Holdings">

                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">

                                    <input type="text" name="" class="form-control" placeholder="Investment">

                                    </div>

                                    <div class="col-sm-2 col-md-2 col-lg-2">

                                    <button class="btn btn-info">Add</button>

                                    </div>

                                </div>

                                <table class="table table-bordered">

                                        <thead>

                                            <tr>

                                                <th style="text-align:center;">Holdings</th>

                                                <th style="text-align:center;">Value</th>

                                                <th style="text-align:center;">in %</th>

                                                <th style="text-align:center;">Action</th>

                                            </tr>

    

                                        </thead>

                                        <tbody>

                                            <tr>

                                                <td>S&P 500</td>

                                                <td><input type="range" name="" step="10" value="30"></td>

                                                <td>20%</td>

                                                <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                            </tr>

                                            <tr>

                                                <td>MSCI World</td>

                                                <td><input type="range" name="" step="10" value="40"></td>

                                                <td>20%</td>

                                                <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                            </tr>

                                            <tr>

                                                <td>Apple</td>

                                                <td><input type="range" name="" step="10" value="30"></td>

                                                <td>20%</td>

                                                <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                            </tr>

                                            <tr>

                                                <td>Facebook</td>

                                                <td><input type="range" name="" step="10" value="30"></td>

                                                <td>20%</td>

                                                <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                            </tr>

                                            <tr>

                                                <td>Google</td>

                                                <td><input type="range" name="" step="10" value="30"></td>

                                                <td>20%</td>

                                                <td><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td>

                                            </tr>

                                        </tbody>

                                        <thead >

                                            <tr>

                                                <th style="text-align:center;">Total</th>

                                                <th style="text-align:center;">$28445</th>

                                                <th style="text-align:center;">100%</th>

                                                <th style="text-align:center;"></th>

                                            </tr>

                                        </thead>

                                    </table>

                            </div>

                            <div class="col-sm-5 col-md-5 col-lg-5">

                                <img src="images/compare.PNG" style="width:100%;" alt="">

                            </div>

                            

                        </div>

                    	<div class="col-sm-12 col-md-12 col-lg-12">

                        	<img src="images/linegraph.png" style="width:100%;" alt="">

                                <img src="images/downfall.png" style="width:100%;" alt="">

                            <button id="activate-step-4" class="btn btn-primary mybtn btn-md pull-right"><p>NEXT <br>Step 4 See/print report</p></button>

                    	</div>

                    </div>

                    <!--/STep -3-->

                    

                    <!--STep -4-->

                    <div class="setup-content" id="step-4">

                        <div class="col-xs-12">

                            <div class="col-md-12 well text-center">

                                <h1 class="text-center"> STEP 4</h1>

                                

                <form></form>

                                

                            </div>

                        </div>

                    </div>

                    <!--/STep -4-->

                    

                    </div>

                	

					

			</div>

		</div>

		<!--Main end-->

        

		

		



        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>

		<script src="js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

       <!--  <script>

            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=

            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;

            e=o.createElement(i);r=o.getElementsByTagName(i)[0];

            e.src='https://www.google-analytics.com/analytics.js';

            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));

            ga('create','UA-XXXXX-X','auto');ga('send','pageview');

        </script> -->



        <script type="text/javascript">
            $(document).ready(function(){
        
            var comp = JSON.parse(<?php echo JSON_encode($result,true); ?>);
            var  data = comp.data.filter(function(d) {
                return d.name;
            });
            $('#search').keyup(function(){
                        var searchField = $(this).val();
                  if(searchField === '')  {
                    
                    return;
                  }
                  
                        var regex = new RegExp(searchField, "i");
                        var output = '<ul id="country-list">';
                        var count = 1;
                     

                    $.each(data, function(key, val){
                    if ((val.name.search(regex) != -1)) {
                      //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
                      var str = "'" + val.name + "'";
                      output += '<li onClick="selectCountry('+str+')"> '+val.name+' </li>';

                    }
                    });
                    output += '</ul>';
                   
                    $("#res").show();
                    $('#res').html(output);
                    //document.getElementById("search").value = ;
                    });



              });

            
            
                 

            // $("#link").click(function(){
            //     //your JS here
            //     $('#search').html($('#link').value);
            // });
            </script>

            <script type="text/javascript">
               function selectCountry(val) {
                $("#search").val("");
                $("#search").val(val);
                var a = $('#search');
                a.trigger('#search');
                a.change('#search');
                $("#res").hide();
            }
            </script>


            

            
    </body>

</html>

