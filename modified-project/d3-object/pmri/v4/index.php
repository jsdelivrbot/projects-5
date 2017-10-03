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

<style type="text/css">
            #res{
                position: absolute;
              /*padding: 50px 0 0 20px;*/
              
            }

            #country-list{float:left;list-style:none;padding:0;width:100%;position: absolute;}
            #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
            #country-list li:hover{background:#ece3d2;cursor: pointer;}
        </style>

</head>

<?php
    $url = "https://api.intrinio.com/indices";
    
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

<body>

<!--Smooth Scroll-->
<div class="smooth-overflow"> 
  <!--Navigation-->
  
  
  <!--/Navigation--> 
  
  <!--MainWrapper-->
    
    <div class="content-wrapper"> 
      <!--Content Wrapper--><!--Horisontal Dropdown-->
      
      
      <!--Breadcrumb-->
      <div class="breadcrumb clearfix">
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Data</li>
        </ul>
      </div>
      <!--/Breadcrumb--> 
      
      <!--Jumbotron-->
      <div class="row">
          <div class="col-md-12">
                  <!-- tabs normal-->
                  <ul class="nav nav-tabs mytab">
                    <li class="active"><a href="#one-normal" data-toggle="tab"><h4>Step 1<br><small>Original Portfolio</small></h4></a></li>
                    <li><a href="#two-normal" data-toggle="tab"><h4>Step 2<br><small>New Proposed Holdings</small></h4></a></li>
                    <li><a href="#three-normal" data-toggle="tab"><h4>Step 3<br><small>Vary weights, See Results, Optimize</small></h4></a></li>
                    <li><a href="#four-normal" data-toggle="tab"><h4>Step 4<br><small>Print Proposal</small></h4></a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="one-normal">
                    	<div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                            	<div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="binary" value="option1" checked>
                                    Binary Comparison to index yes or no black or white better or worse 
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="subtle" value="option2">
                                    Subtle comparison to competitors or peer group or industry by quintile five shades of blue navy = best = top quintile = best profitability or lowest debt etc 
                                  </label>
                                </div>
                                
                            </div>
                            <!-- <div class="binary-view view-content"> -->
                            	<div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                    	<input type="text" id="search" class="form-control" placeholder="Please Enter The Company Name.." autocomplete="off">
                                        <input type="hidden" id="compTicker">
                                        <div  style="z-index: 1000; width: 100%;" id="res"></div>
                                    </div>

                                    
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                    	<button class="btn btn-info" id="showData" onclick="ShowDitails()" >Show Data</button>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:15px; margin-bottom:15px;">
                                    <table style="text-align:center;" class="table table-bordered table-striped table-hover" id="compData">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Company Name</th>
                                                <th style="text-align:center;">Market Cap</th>
                                                <th style="text-align:center;">Gics</th>
                                                <th style="text-align:center;">Sub Industry</th>
                                                <th style="text-align:center;">Profitability</th>
                                                <th style="text-align:center;">Finical Strength</th>
                                                <th style="text-align:center;">Growth</th>
                                                <th style="text-align:center;">Valuation</th>
                                                <th style="text-align:center;">Performance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                                <td></td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                            </tr> -->
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="subtle-view view-content">
                            	<div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                    	<input type="text" name="" class="form-control" placeholder="Please Enter The Company Name..">
                                    </div>
                                    
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                    	<button class="btn btn-info">Show Data</button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:15px; margin-bottom:15px;">
                                    <table style="text-align:center;" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Company Name</th>
                                                <th style="text-align:center;">Market Cap</th>
                                                <th style="text-align:center;">Gics</th>
                                                <th style="text-align:center;">Sub Industry</th>
                                                <th style="text-align:center;">Profitability</th>
                                                <th style="text-align:center;">Finical Strength</th>
                                                <th style="text-align:center;">Growth</th>
                                                <th style="text-align:center;">Valuation</th>
                                                <th style="text-align:center;">Performance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                            </tr>
                                            <tr>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                            </tr>
                                            <tr>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                                <td>XYZ</td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane" id="two-normal">
                    	<div class="row">
                    		<div class="col-sm-6 col-md-6 col-lg-6">
                            	<h3>Original Portfolio</h3>
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
                                <h3>New Portfolio</h3>
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
                            </div>
                    	</div>
                        <div class="row">
                        	<div class="col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                                <img src="images/pie-chart.JPG" style="" alt="">
                                <h4>Original Portfolio</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                                <img src="images/pie-chart.JPG" style="" alt="">
                                <h4>Proposal</h4>
                                <button class="btn btn-info mytab pull-right"><h4>Next<br><small style="color:#fff;">Step 3 New Proposed Holdings</small></h4></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="three-normal">
                    	<div class="row">
                        	<div class="col-sm-7 col-md-7 col-lg-7">
                            	<h3>Vary Weight</h3>
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
                                <table class="table text-center table-bordered">
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
                        <div class="row">
                    		<div class="col-sm-12 col-md-12 col-lg-12">
                        		<img src="images/linegraph.png" style="width:100%;" alt="">
                                <img src="images/downfall.png" style="width:100%;" alt="">
                                <button class="btn btn-info mytab pull-right"><h4>Next<br><small style="color:#fff;">Step 4 See/print report</small></h4></button>
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
            $(document).ready(function(){
            //alert("hello");
            var comp = JSON.parse(<?php echo JSON_encode($result,true); ?>);
            var  data = comp.data.filter(function(d) {
                return d.index_name;
                // d.symbol = +d.symbol;
                // return d;
            });
            $('#search').keyup(function(){
                var count = 0;
                var searchField = $(this).val();
                  if(searchField === '')  {
                    $("#res").hide();
                    return;
                  }
                  
                        var regex = new RegExp(searchField, "i");
                        var output = '<ul id="country-list">';
                        var count = 1;
                     

                    $.each(data, function(key, val){
                    if ((val.index_name.search(regex) != -1)) {
                      //output += '<li onClick="selectCountry("apple")">'+val.name+'</li>';
                      var str = "'" + val.index_name + "'";
                      var ticker = "'" + val.symbol+"'";
                      output += '<li onClick="selectCountry('+str+','+ticker+')"> '+val.index_name+' </li>';

                    }
                    });
                    output += '</ul>';
                   
                    $("#res").show();
                    $('#res').html(output);
                    
                    //document.getElementById("search").value = ;
                    });
              });
            </script>

            <script type="text/javascript">
               function selectCountry(val,val2) {
                $("#search").val("");
                $("#search").val(val);
                $('#compTicker').val(val2);
                $("#res").hide();
            }
            </script>
            <script type="text/javascript">
                function ShowDitails()
                {
                    var compName = $('#search').val();
                    //alert(compName);
                    var myStr = compName;
                    myStr.length; 
                    $.trim(myStr).length; 
                    var l = myStr.replace(/ /g,'').length;
                    var test = "";
                    if(l > 20){
                        test = compName.substr( 0, 20)+ "...";
                    }
                    else {
                        test = compName;
                    }
                    
                    //var test = compName.substring()
                    if($('#binary').prop("checked")){
                        //count++;
                        var out = '<tr><td>'+ test +'</td><td>'+ '$100007655 '+'</td><td>'+'Industrials'+ '</td><td>'+'Demo'+'</td><td style="background-color: #000; width:120px;">'+'<td style="background-color: #fff; width:120px;">'+'</td><td style="background-color: #000; width:120px;">'+''+'</td><td style="background-color: #fff; width:120px;">'+''+'</td><td>'+'<span class="table-sparkline-lines" id="sparkline1" ></span></td></tr>';
                        if(compName != "")
                        $(out).appendTo("#compData tbody");
                        $('#search').val("");
                        //alert($('#compTicker').val());
                        $("#sparkline1").sparkline([5,6,7,9,9,5,3,4,5,4,6,7], {
                            type: 'line',
                            width: '200px',
                            height: '40px',
                            fillColor: '#999999'});
                    }
                    // <img src="images/navy.jpg" style="border: 1px solid #000; height:25px;width:100px;"/> 140537009
                    // <img src="images/lightNavy.jpg" style="border: 1px solid #000; height:25px;width:100px;"/>
                    // <img src="images/lightNavy2.jpg" style="border: 1px solid #000; height:25px;width:100px;"/>
                    // <img src="images/superLight.jpg" style="border: 1px solid #000; height:25px;width:100px;"/>
                    else{
                        var out = '<tr><td>'+ test +'</td><td>'+ '$100007655 '+'</td><td>'+'Industrials'+ '</td><td>'+'Demo'+'</td><td style="background-color: #0f2747; width:120px;">'+'<td style="background-color: #143a6d; width:120px;">'+'</td><td style="background-color: #3b69a5; width:120px;">'+''+'</td><td style="background-color: #819fc6; width:120px;">'+''+'</td><td>'+'<span class="table-sparkline-lines" id="sparkline" ></span></td></tr>';
                        if(compName != "")
                        $(out).appendTo("#compData tbody");
                        $('#search').val("");
                        //alert($('#compTicker').val());
                        $("#sparkline").sparkline([5,6,7,9,9,5,3,4,5,4,6,7], {
                            type: 'line',
                            width: '200px',
                            height: '40px',
                            fillColor: '#999999'});
                    }
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
      var icons = new Skycons({"color": "#fff"}),
          list  = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

      for(i = list.length; i--; )
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