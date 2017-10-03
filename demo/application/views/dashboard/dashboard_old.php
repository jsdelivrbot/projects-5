      <!--Breadcrumb-->
      <div class="breadcrumb clearfix">
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Data</li>
        </ul>
      </div>
      <!--/Breadcrumb-->
      <!-- Widget Row Start grid -->
      <div class="row" id="powerwidgets">
        <div class="col-md-12 bootstrap-grid">
          <!-- New widget -->
          <div class="powerwidget powerwidget-as-portlet-cold-grey" id="livestats" data-widget-editbutton="false">
            <header>
              <h2>How i'm doing | Key Areas <small></small></h2>
            </header>
            <div class="inner-spacer">
              <div class="flotchart-container bg-cold-grey">
                <div class="inner-stuff">
                  <div class="desc pull-left hidden-xs">
                    <h4 class="margin-0px margin-bottom-10px"><span class="text-blue">Corrent</span> <i class="fa fa-dot-circle-o"></i> <span class="text-green">top</span> goals</h4>
                    <span class="label bg-marine">top goals</span></div>
                  <div class="btn-group btn-group-sm pull-right">
                    <button class="btn btn-default active" id="start-stop-flot">Pause</button>
                    <button class="btn btn-default" id="accelerate-flot">Update Rate: 1</button>
                  </div>
                </div>
                <div id="placeholder7" class="flotchart-placeholder margin-negative-top-20px"></div>
              </div>
              <div class="row margin-negative-top-10px"> 
                <!--Row-->
                <ul class="tiny-stats margin-negative-top-20px">
                  <li class="col-md-3 col-sm-3 col-xs-6">
                    <div id="g1"></div>
                    <div class="btn-group btn-group-sm">
                      <div class="btn btn-default">Edit</div>
                      <div class="btn btn-info">More</div>
                    </div>
                  </li>
                  <li class="col-md-3 col-sm-3 col-xs-6">
                    <div id="g2"></div>
                    <div class="btn-group btn-group-sm">
                      <div class="btn btn-info">Edit</div>
                      <div class="btn btn-default">More</div>
                    </div>
                  </li>
                  <li class="col-md-3 col-sm-3 col-xs-6">
                    <div id="g3"></div>
                    <div class="btn-group btn-group-sm">
                      <div class="btn btn-info">Edit</div>
                      <div class="btn btn-default">More</div>
                    </div>
                  </li>
                  <li class="col-md-3 col-sm-3 col-xs-6">
                    <div id="g4"></div>
                    <div class="btn-group btn-group-sm">
                      <div class="btn btn-info">Edit</div>
                      <div class="btn btn-default">More</div>
                    </div>
                  </li>
                </ul>
              </div>
              <!--/Row-->
            </div>
          </div>
          <!-- End Widget -->
          <!-- New widget-->
          <div class="powerwidget powerwidget-as-portlet-white" id="calendar-widget-index" data-widget-editbutton="false">
            <header>
              <h2>Calendar<small>Events</small></h2>
            </header>
            <div class="inner-spacer">
              <div class="row">
                <div class="col-md-8">
                  <div id='calendar2'></div>
                </div>
                <div class="col-md-4">
                  <!--Calendar-->
                  <div class="calendar-day-block">
                    <div class="day-block">
                      <p class="week-day">Wednesday</p>
                      <p class="day">18</p>
                      <p class="month-year">Feb 2015</p>
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-plus-circle"></i> Add Event</button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-gift"></i> Birthdays</button>
                      </div>
                    </div>
                    <form action="" id="data-pickers" class="orb-form bg-blue">
                      <fieldset>
                        <section>
                          <div id="inline"></div>
                        </section>
                      </fieldset>
                    </form>
                  </div>
                  <!--/calendar-day-block-->
                  <div class="weather-block bg-blue">
                    <div class="weather-current-city">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6"><span class="current-city">Toronto, Ontario <span class="badge bg-blue"><i class="fa fa-clock-o"></i> GMT+1</span></span><span class="current-temp">2&deg;C</span><span class="current-day">Wednesday, 18 Feb</span></div>
                        <div class="col-md-6 col-sm-6 col-xs-6"><span class="current-day-icon">
                          <canvas id="clear-day" width="120" height="120"></canvas>
                          </span></div>
                      </div>
                    </div>
                    <div class="row">
                      <ul class="days">
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Tue</strong>
                          <canvas id="snow" width="50" height="50"></canvas>
                          <span>19&deg;</span></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Fri</strong>
                          <canvas id="rain" width="50" height="50"></canvas>
                          <span>17&deg;</span></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Sat</strong>
                          <canvas id="sleet" width="50" height="50"></canvas>
                          <span>23&deg;</span></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Sun</strong>
                          <canvas id="fog" width="50" height="50"></canvas>
                          <span>21&deg;</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Widget -->
        </div>
      <!-- /Widgets Row End Grid--> 
    </div>
    <!-- / Content Wrapper --> 
  </div>
  <!--/MainWrapper--> 
</div>
<!--/Smooth Scroll-->
<!-- scroll top -->
<div class="scroll-top-wrapper hidden-xs"> <i class="fa fa-angle-up"></i> </div>
<!-- /scroll top -->
<!--Modals--> 

<!--Power Widgets Modal-->
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
<!--JQuery--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430029666/jquery.min_ih9ipt.js"></script>  
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430030395/jquery-ui.min_lxhh6p.js"></script> 
<!--Fullscreen--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430030729/screenfull.min_sciir2.js"></script> 
<!--Gmap-->
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430030871/jquery.gmap.min_cjslof.js"></script>
<!--NanoScroller--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031081/jquery.nanoscroller.min_qdfuwj.js"></script> 
<!--Sparkline--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031315/jquery.sparkline.min_bof9ee.js"></script> 
<!--Horizontal Dropdown--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031354/cbpHorizontalSlideOutMenu_shxlve.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031400/powerwidgets.min_xpye64.js"></script> 

<!--Morris Chart--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031435/raphael-min_jw7vzr.js"></script> 

<!--Just Gauge--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031466/justgage.1.0.1.min_tybh9n.js"></script> 

<!--Just Gauge JS will used only here, because it is experimental--> 
<script>
      var g1, g2, g3;
      
      window.onload = function(){
        var g1 = new JustGage({
          id: "g1", 
          value: 80, 
          min: 0,
          max: 100,
		  title: "Walking More",
		  levelColors: ["#5bc0de"],
		  titleFontColor:'#fff',
		  gaugeColor:'#33383d',
		  valueFontColor:"#f0f0ed",
		  showInnerShadow: false  
        });
        
        var g2 = new JustGage({
          id: "g2", 
          value: 0, 
          min: 0,
          max: 100,
		  gaugeColor:'#33383d',
		  title: "Salad for lunch",
		  levelColors: ["#5bc0de"],
		  titleFontColor:'#fff',
		  valueFontColor:"#f0f0ed",
 		  showInnerShadow: false  
        });
        
        var g3 = new JustGage({
          id: "g3", 
          value: 75, 
          min: 0,
          max: 100,
		  title: "Learning to relax",
		  titleFontColor:'#fff',
		  gaugeColor:'#33383d',
		  levelColors: ["#5bc0de"],
		  valueFontColor:"#f0f0ed",
 		  showInnerShadow: false
        });
		
		var g4 = new JustGage({
          id: "g4", 
          value: 90, 
          min: 0,
          max: 100,
		  gaugeColor:'#33383d',
		  titleFontColor:'#fff',
		  levelColors: ["#5bc0de"],
		   valueFontColor:"#f0f0ed",
		  title:"Rewards",
		  showInnerShadow: false
        });
        

      
        setInterval(function() {
          g1.refresh(getRandomInt(350, 980));
          g2.refresh(getRandomInt(0, 49));          
          g3.refresh(getRandomInt(50, 100));
		            g4.refresh(getRandomInt(350, 980));
        }, 2500);
      };
    </script> 


<!--FlotChart--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031517/jquery.flot.min_isotlv.js"></script>
<!--Calendar--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031549/fullcalendar.min_xyun8z.js"></script>	
<!--Bootstrap--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031578/bootstrap.min_gtfqhe.js"></script>
<!--Vector Map--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031617/jquery.vmap.min_kzaxch.js"></script> 
<!--ToDo--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031644/todos_ioka0h.js"></script>
<!--SkyCons--> 
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430031672/skycons_iiaisx.js"></script> 
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
<script type="text/javascript" src="http://res.cloudinary.com/csemahadi/raw/upload/v1430027857/scripts_pm1i26.js"></script>
<!--/Scripts-->
</body>
</html>