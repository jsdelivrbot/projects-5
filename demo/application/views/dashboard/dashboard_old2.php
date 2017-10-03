 <style>
     .rotate {
     -moz-transform: rotate(90.0deg);  /* FF3.5+ */
       -o-transform: rotate(90.0deg);  /* Opera 10.5 */
  -webkit-transform: rotate(90.0deg);  /* Saf3.1+, Chrome */
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
        width: 60%;
        margin-top:3%;
}

body{
	 background:#202020;
	 font:bold 12px Arial, Helvetica, sans-serif;
	 margin:0;
	 padding:0;
	 min-width:960px;
	 color:#bbbbbb; 
}

a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 4em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

h2 {
    font-weight:700;
    color:#bbb;
    font-size:20px;
}

h2, p {
	margin-bottom:10px;
}

.container {width: 960px; margin: 0 auto; overflow: hidden; height:910px;}

.tooltip {
	display:none;
	position:absolute;
	border:1px solid #333;
	background-color:#161616;
	border-radius:5px;
	padding:10px;
	color:#fff;
	font-size:12px Arial;
}


 </style>
      <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
        <div class="cbp-hsinner">
          <ul class="cbp-hsmenu">
            <li> <a href="#"><span class="icon-bar"></span></a>
              <ul class="cbp-hssubmenu">
                <li><a href="#">
                  <div class="sparkle-dropdown"><span class="inlinebar">10,8,8,7,8,9,7,8,10,9,7,5</span>
                    <p class="sparkle-name">project income</p>
                    <p class="sparkle-amount">$23989 <i class="fa fa-chevron-circle-up"></i></p>
                  </div>
                  </a></li>
                <li><a href="#">
                  <div class="sparkle-dropdown"><span class="linechart">5,6,7,9,9,5,3,2,9,4,6,7</span>
                    <p class="sparkle-name">site traffic</p>
                    <p class="sparkle-amount">122541 <i class="fa fa-chevron-circle-down"></i></p>
                  </div>
                  </a></li>
                <li><a href="#">
                  <div class="sparkle-dropdown"><span class="simpleline">9,6,7,9,3,5,7,2,1,8,6,7</span>
                    <p class="sparkle-name">Processes</p>
                    <p class="sparkle-amount">890 <i class="fa fa-plus-circle"></i></p>
                  </div>
                  </a></li>
                <li><a href="#">
                  <div class="sparkle-dropdown"><span class="inlinebar">10,8,8,7,8,9,7,8,10,9,7,5</span>
                    <p class="sparkle-name">orders</p>
                    <p class="sparkle-amount">$23989 <i class="fa fa-chevron-circle-up"></i></p>
                  </div>
                  </a></li>
                <li><a href="#">
                  <div class="sparkle-dropdown"><span class="piechart">1,2,3</span>
                    <p class="sparkle-name">active/new</p>
                    <p class="sparkle-amount">500/200 <i class="fa fa-chevron-circle-up"></i></p>
                  </div>
                  </a></li>
                <li><a href="#">
                  <div class="sparkle-dropdown"><span class="stackedbar">3:6,2:8,8:4,5:8,3:6,9:4,8:1,5:7,4:8,9:5,3:5</span>
                    <p class="sparkle-name">fault/success</p>
                    <p class="sparkle-amount">$23989 <i class="fa fa-chevron-circle-up"></i></p>
                  </div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <div class="breadcrumb clearfix">
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Data</li>
        </ul>
      </div> 
       <div class="powerwidget powerwidget-as-portlet-white" id="serverstatuz-indexpage" style="width: 98%;margin-left: 1%;">
        <header style="margin-bottom: 20px;">
          		<h2>Step 1: Choose your variables </h2>
        	</header>
            <div class="row">            	
            <ul class="tiny-stats">
              <li class="col-md-2 col-sm-4 col-xs-6" style="width: 20%;">
                <div class="statistic clearfix">
                	<h5>Look back</h5>
                        <div class="knob-container">
                      		<input class="knob3 masterTooltip" title="Use historic dividend growth rate over how many prior years?" data-width="120" data-min="1" data-max="10" data-fgColor="#f4cc13"  data-thickness=".4" data-displayPrevious="true" value="1">
                        </div>
                  	<h5>Years</h5>                      
                </div>
              </li>
              <li class="col-md-2 col-sm-4 col-xs-6" style="width: 20%;">
                <div class="statistic clearfix">
                	<h5>Rebalance every</h5>
                        <div class="knob-container">
                      		<input class="knob3 masterTooltip" title="How often to rebalance the strategy?" data-width="120" data-min="3" data-max="36" data-fgColor="#5bc0de" data-thickness=".4" data-displayPrevious="true" value="3">
                        </div>
                  	<h5>Months</h5>
                </div>
              </li>
              <li class="col-md-2 col-sm-4 col-xs-6" style="width: 20%;">
                <div class="statistic clearfix">
                	<h5>Focus above</h5>
                        <div class="knob-container">
                      		<input class="knob3 masterTooltip" title="Minimum market cap" data-width="120" data-min="1" data-max="10" data-fgColor="#969fa1" data-thickness=".4" data-displayPrevious="true" value="1">
                        </div>
                  	<h5>USD$ billions</h5>
                </div>
              </li>
              <li class="col-md-2 col-sm-4 col-xs-6" style="width: 20%;">
                <div class="statistic clearfix">
                	<h5>Exclude weakest</h5>
                        <div class="knob-container">
                      		<input class="knob3 masterTooltip" title="Exclude companies in how many lower deciles of financial strength? (by Morningstar rating)  0 = exclude none, 1 = exclude weakest 10%" data-width="120" data-min="0" data-max="10" data-fgColor="#d24d33" data-thickness=".4" data-displayPrevious="true" value="0">
                        </div>
                  	<h5>Decile(s)</h5>
                </div>
              </li>
              <li class="col-md-2 col-sm-4 col-xs-6" style="width: 20%;">
                <div class="statistic clearfix">
                	<h5>Display</h5>
                        <div class="knob-container ck">
                      		<input class="knob3 masterTooltip k" title="Performance" data-width="120" data-min="1" data-max="25" data-fgColor="#f87aa0" data-thickness=".4" data-displayPrevious="true" value="1">
                        </div>
                  	<h5>Years</h5>
                </div>
              </li>
            </ul>
         </div>
      	 <!--div class="powerwidget yellow" id="ionrangeslider" data-widget-editbutton="false">
          <div class="inner-spacer">
            <div class="row">
              <div class="col-md-12" style="width: 80%;margin-left: 10%;">
                <input type="text" id="ionrange_7" />
              </div>
            </div>
          </div>
        </div-->	         
         <div style="text-align: center; margin-bottom:10px; margin-top: 10px;">
         	<a class="btn btn-info build" id="build">Build Chart</a>
      	 </div>
      </div> 
      <div class="row" id="powerwidgets">
        <div class="col-md-12 bootstrap-grid" id="ajax_ionrange_7"> 
        	<div class="loading">
          <div class="powerwidget powerwidget-as-portlet-white" id="serverstatuz-indexpage2" style="width: 98%;margin-left: 1%;">
            <header>
              <h2>Step 2: See performance & risk</h2>
            </header>
            <div>
              <div class="powerwidget-editbox">
                <div>
                  <label>Title:</label>
                  <input class="form-control" type="text" />
                </div>
                <div>
                  <label>Styles:</label>
                  <span data-widget-setstyle="pink" class="pink-btn"></span> <span data-widget-setstyle="blue" class="blue-btn"></span> <span data-widget-setstyle="dark-blue" class="dark-blue-btn"></span> <span data-widget-setstyle="green" class="green-btn"></span> <span data-widget-setstyle="green-alt" class="green-alt-btn"></span> <span data-widget-setstyle="green-acid" class="green-acid-btn"></span> <span data-widget-setstyle="yellow" class="yellow-btn"></span> <span data-widget-setstyle="purple" class="purple-btn"></span> <span data-widget-setstyle="cold-grey" class="cold-grey-btn"></span> <span data-widget-setstyle="dark-cold-grey" class="dark-cold-grey-btn"></span> <span data-widget-setstyle="orange" class="orange-btn"></span> <span data-widget-setstyle="red" class="red-btn"></span> <span data-widget-setstyle="dark-red" class="dark-red-btn"></span> <span data-widget-setstyle="black" class="black-btn"></span> </div>
              </div>
              <div class="inner-spacer">
                <div class="row"> 
                  <div class="col-md-12">
                    <div class="flotchart-container  margin-negative-top-10px">
                      <div id="placeholder9" class="flotchart-placeholder"></div>
                    </div>
                    <div class="row margin-bottom-10px">
                      <ul class="countries-demo" id="choices">
                        <li class="col-md-2 col-sm-4">
                          <h3>1stQ <span class="label bg-marine"><i class="fa fa-caret-up"></i> 22%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="uk">
                              <input name="uk" checked id="uk" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>BristolGate <span class="label bg-red"><i class="fa fa-caret-down"></i> 5%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="japan">
                              <input name="japan" checked id="japan" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>MSCI <span class="label bg-marine"><i class="fa fa-caret-up"></i> 16%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="usa">
                              <input name="usa" checked id="usa" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>S&P <span class="label bg-marine"><i class="fa fa-caret-up"></i> 7%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="russia">
                              <input name="russia" checked id="russia" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>3rdQ <span class="label bg-marine"><i class="fa fa-caret-up"></i> 1%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="china">
                              <input name="china" checked id="china" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>4thQ <span class="label bg-red"><i class="fa fa-caret-down"></i> 13%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="others">
                              <input name="others" checked id="others" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
         </div>
         <div class="col-md-12 bootstrap-grid" style="width: 100%;">
         <div class="col-md-6 bootstrap-grid" >
           <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-white" id="chatez-index" data-widget-editbutton="false">
             <header>
               <h2>Downside risk: biggest drop (during period displayed)</h2>
             </header>
             <div class="inner-spacer nopadding">
				 <div class="flotchart-container">
                	 <div id="placeholder2" class="flotchart-placeholder placeholder2"></div>
				 </div>
             </div>
           </div>
         </div>
	     <div class="col-md-6 bootstrap-grid">
	     	<div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-white" id="widget5" data-widget-editbutton="false">
	            <header>
	              <h2>Downside risk: time to recover</h2>
	            </header>
	            <div class="inner-spacer nopadding">
	              	<div class="flotchart-container">
	                  <table class="table table-bordered table-condensed" style="margin-top: -5px;">			                  	
	                  	<thead>
							<tr>
								<th class="text-center"> Downside risk </th>
								<th class="text-center"> time to recove </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1stQ</td>
								<td class="text-center">14 mos</td>								
							</tr>
							<tr>
								<td class="text-center">BristolGate</td>
								<td class="text-center">12 mos</td>								
							</tr>
							<tr>
								<td class="text-center">MSCI</td>
								<td class="text-center">18 mos</td>								
							</tr>
							<tr>
								<td class="text-center">2ndQ</td>
								<td class="text-center">19 mos</td>								
							</tr>
							<tr>
								<td class="text-center">S&P</td>
								<td class="text-center">18 mos</td>								
							</tr>
							<tr>
								<td class="text-center">4thQ</td>
								<td class="text-center">28 mos</td>								
							</tr>
							<tr>
								<td class="text-center">3rdQ</td>
								<td class="text-center">24 mos</td>								
							</tr>
						</tbody>
	                  </table>
	                </div>
	            </div>
	          </div>         
	        </div>
         </div>
         
    	</div>
    	
    	
       <div class="powerwidget powerwidget-as-portlet-white" id="serverstatuz-indexpage" style="width: 98%;margin-left: 1%;">
        <header style="margin-bottom: 20px;">
          		<h2>Step 3: Top 10 Companies by Growth in TTM Dividends per Share – 1 Year </h2>
        	</header>
            <div class="inner-spacer">
              <div class="row"> 
                <div class="col-md-12">					
					<div class="col-md-6">
		                  <div class="table-responsive">
		                    <table class="table table-striped table-hover margin-0px airtable">
		                      <thead>
		                        <tr>
		                          <th colspan="2">Company</th>
		                          <th >Sector</th>
		                          <th >Sources Of Cash</th>
		                          <th >Payout Trend</th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                        <tr>
		                          <td><span class="num">1</span></td>
		                          <td><h5>Iron Mountain, Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">99.5%</span></td>
		                          <td><h5>Financials</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">1,3,2,5,3</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,2,4,6,7</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">2</span></td>
		                          <td><h5>Valero Energy Corporation</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">47.5%</span></td>
		                          <td><h5>Energy</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">3,3,2,1,5</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">9,3,3,2,4,5,6,2,8,4,9,0</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">3</span></td>
		                          <td><h5>Boeing Company</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">29.3%</span></td>
		                          <td><h5>Industrials</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">1,3,2,3,1</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,8,4,6,7</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">4</span></td>
		                          <td><h5>Time Warner Cable Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">29.3%</span></td>
		                          <td><h5>Consumer Discretionary</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">4,3,2,2,5</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,9,2,4,6,7</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">5</span></td>
		                          <td><h5>Microsoft Corporation</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">27.8%</span></td>
		                          <td><h5>Information Technology</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">3,3,2,5,7</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,2,4,6,7</span></td>
		                        </tr>
		                      </tbody>
		                      <tfoot>
		                        <tr>
		                          <th colspan="2">Company</th>
		                          <th >Sector</th>
		                          <th >Sources Of Cash</th>
		                          <th >Payout Trend</th>
		                        </tr>
		                      </tfoot>
		                    </table>
		                  </div>						
					</div>
					<div class="col-md-6">
		                  <div class="table-responsive">
		                    <table class="table table-striped table-hover margin-0px airtable">
		                      <thead>
		                        <tr>
		                          <th colspan="2">Company</th>
		                          <th >Sector</th>
		                          <th >Sources Of Cash</th>
		                          <th >Payout Trend</th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                        <tr>
		                          <td><span class="num">6</span></td>
		                          <td><h5>Principal Financial Group, Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">26.8%</span></td>
		                          <td><h5>Financials</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">1,3,2,5,3</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,2,4,6,7</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">7</span></td>
		                          <td><h5>ONEOK, Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">25.6%</span></td>
		                          <td><h5>Energy</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">3,3,2,1,5</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">9,3,3,2,4,5,6,2,8,4,9,0</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">8</span></td>
		                          <td><h5>Cummins Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">24.9%</span></td>
		                          <td><h5>Industrials</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">1,3,2,3,1</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,8,4,6,7</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">9</span></td>
		                          <td><h5>Williams Companies, Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">24.4%</span></td>
		                          <td><h5>Energy</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">4,3,2,2,5</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,9,2,4,6,7</span></td>
		                        </tr>
		                        <tr>
		                          <td ><span class="num">10</span></td>
		                          <td><h5>Best Buy Co., Inc.</h5>
		                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">23.5%</span></td>
		                          <td><h5>Consumer Discretionary</h5></td>
		                          <td class="text-center"><span class="table-sparkline-pie2">3,3,2,5,7</span></td>
		                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,2,4,6,7</span></td>
		                        </tr>
		                      </tbody>
		                      <tfoot>
		                        <tr>
		                          <th colspan="2">Company</th>
		                          <th >Sector</th>
		                          <th >Sources Of Cash</th>
		                          <th >Payout Trend</th>
		                        </tr>
		                      </tfoot>
		                    </table>
		                  </div>						
					</div>
                </div>
              </div>
            </div>
      </div>     	
    	
       <!--div class="powerwidget powerwidget-as-portlet-white" id="serverstatuz-indexpage" style="width: 98%;margin-left: 1%;">
        <header style="margin-bottom: 20px;">
          		<h2>Step 4- Register for free to use this tool</h2>
        	</header>
            
      </div-->   
        <div class="col-md-12 bootstrap-grid " style="background-color: #ffffff; margin-left: 1%;margin-right: 1%;width: 98%; margin-top: 1%;"> 
            <header style="margin-bottom: 2%;">
               <h2 style="margin-left:10px; font-size: 1.2em; color: black;">Step 4- Register for free to use this tool</h2>
            </header>
          <div class="col-md-3 col-sm-6 bootstrap-grid"> 
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-cold-grey" id="widget1" data-widget-editbutton="false">
              <header> </header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon animated bounceIn text-pink"><i class="fa fa-heart"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>5</strong><small>Friends</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>232</strong><small>Posts</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>2</strong><small>Requests</small></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 bootstrap-grid"> 
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-blue" id="widget2" data-widget-editbutton="false">
              <header> </header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon"><i class="fa entypo-facebook-circled"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>19</strong><small>Friends</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>232</strong><small>Posts</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>507</strong><small>Requests</small></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 bootstrap-grid"> 
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-green-alt" id="widget3" data-widget-editbutton="false">
              <header> </header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon"><i class="fa fa-money"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-6 col-sm-6 col-xs-6"><strong>$2791</strong><small>Income</small></li>
                  <li class="col-md-6 col-sm-6 col-xs-6"><strong>$2322</strong><small>Outcome</small></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 bootstrap-grid"> 
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-purple" id="widget4" data-widget-editbutton="false">
              <header> </header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon"><i class="fa fa-google-plus"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>199</strong><small>Friends</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>211</strong><small>Posts</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>588</strong><small>Requests</small></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
</div>
<div class="scroll-top-wrapper hidden-xs"> <i class="fa fa-angle-up"></i> </div>
<div class="modal" id="delete-widget">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">
        <p>Are you sure to delete this widget?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="trigger-deletewidget-reset">Cancel</button>
        <button type="button" class="btn btn-primary" id="trigger-deletewidget">Delete</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Sign Out Dialog Modal-->
<div class="modal" id="signout">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Sign Out?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesigo">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Lock Screen Dialog Modal-->
<div class="modal" id="lockscreen">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Lock Screen?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesilock">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Scripts--> 
<!--GMaps--> 
<!--script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 

<!--JQuery--> 
<script type="text/javascript" src="<?= base_url('js/vendors/jquery/jquery.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/jquery/jquery-ui.min.js');?>"></script> 

<!--GMap--> 
<script type="text/javascript" src="<?= base_url('js/vendors/gmap/jquery.gmap.js');?>"></script> 

<!--EasyPieChart--> 
<script type="text/javascript" src="<?= base_url('js/vendors/easing/jquery.easing.1.3.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/easypie/jquery.easypiechart.min.js');?>"></script> 

<!--Fullscreen--> 
<script type="text/javascript" src="<?= base_url('js/vendors/fullscreen/screenfull.min.js');?>"></script> 
<!--Forms--> 
<script type="text/javascript" src="<?= base_url('js/vendors/forms/jquery.form.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/forms/jquery.validate.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/forms/jquery.maskedinput.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/jquery-steps/jquery.steps.min.js');?>"></script> 
<!--NanoScroller--> 
<script type="text/javascript" src="<?= base_url('js/vendors/nanoscroller/jquery.nanoscroller.min.js');?>"></script> 

<!--Sparkline--> 
<script type="text/javascript" src="<?= base_url('js/vendors/sparkline/jquery.sparkline.min.js');?>"></script> 

<!--Horizontal Dropdown--> 
<script type="text/javascript" src="<?= base_url('js/vendors/horisontal/cbpHorizontalSlideOutMenu.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/classie/classie.js');?>"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="<?= base_url('js/vendors/powerwidgets/powerwidgets.min.js');?>"></script> 

<!--Morris Chart--> 
<script type="text/javascript" src="<?= base_url('js/vendors/raphael/raphael-min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/morris/morris.min.js');?>"></script> 

<!--FlotChart--> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.stack.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.categories.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.time.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.resize.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.axislabels.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot-tooltip.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/flotchart/jquery.flot.pie.min.js');?>"></script> 

<!--Chart.js--> 
<script type="text/javascript" src="<?= base_url('js/vendors/chartjs/chart.min.js');?>"></script> 

<!--Calendar--> 
<script type="text/javascript" src="<?= base_url('js/vendors/fullcalendar/fullcalendar.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/fullcalendar/gcal.js');?>"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="<?= base_url('js/vendors/bootstrap/bootstrap.min.js');?>"></script> 

<!--Vector Map--> 
<script type="text/javascript" src="<?= base_url('js/vendors/vector-map/jquery.vmap.min.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/vector-map/jquery.vmap.sampledata.js');?>"></script> 
<script type="text/javascript" src="<?= base_url('js/vendors/vector-map/jquery.vmap.world.js');?>"></script> 

<!--iOnRangeSlider--> 
<script type="text/javascript" src="<?= base_url('js/vendors/ionrangeslider/ion.rangeSlider.min.js');?>"></script> 

<!--Knob--> 
<script type="text/javascript" src="<?= base_url('js/vendors/knob/jquery.knob.js');?>"></script> 
<!--ToDo--> 
<script type="text/javascript" src="<?= base_url('js/vendors/todos/todos.js');?>"></script> 

<!--SkyCons--> 
<script type="text/javascript" src="<?= base_url('js/vendors/skycons/skycons.js');?>"></script> 
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
<script type="text/javascript" src="<?= base_url('js/scripts.js');?>"></script> 

<!--/Scripts-->
<script type="text/javascript">
$(document).ready(function() {
        // Tooltip only Text
        $('.masterTooltip').hover(function(){
                // Hover over code
                var title = $(this).attr('title');
                $(this).data('tipText', title).removeAttr('title');
                $('<p class="tooltip"></p>')
                .text(title)
                 alert();
                .appendTo('body')
                .fadeIn('slow');
        }, function() {
                // Hover out code
                $(this).attr('title', $(this).data('tipText'));
                $('.tooltip').remove();
        }).mousemove(function(e) {
                var mousex = e.pageX + 20; //Get X coordinates
                var mousey = e.pageY + 10; //Get Y coordinates
                $('.tooltip')
                .css({ top: mousey, left: mousex })
        });
});
</script>

<script>
	$(document).ready(function(){
		$('.ck').on('click', function(){
            var newvalue = $('.k').val();
            $('.build').val(newvalue);
        });
        
        $('body').on('click','.build',function(e){
        	 var build = $('.build').val();
    	 	 var url = "<?= site_url('welcome/ajax_ionrange');?>";
			 $.ajax({
				type : "post",
				data : { 'build' : build,},
				async : false,
				dataType : "html",
				url : url,
				success : function(result){

					$('#ajax_ionrange_7').html(result);
				},
			});
        });
	});
</script>


</body>
</html>