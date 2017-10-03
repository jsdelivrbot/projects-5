<!DOCTYPE html>
<html>
<head>
	<title>Intrinio API</title>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
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
</head>
<body>
<center>
<!-- <form action=""> -->
	
	<br>
<a href="index.php"><b>back to Home</b></a>
<br><br>
<br>
  Start Date:
  <input type="date" id="sdat" name="sday">
  End Date:
  <input type="date" id="edat" name="eday">
  <input type="submit" onclick="show()">

  <p id="demo"></p>
  <svg width="1000" height="500"></svg>
<!-- </form> -->
</center>
	

	<?php
	$tick = $_GET['ticker'];
	$url = "https://api.intrinio.com/historical_data?identifier=".$tick."&item=totalrevenue";
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

	<script>

		function show() {

			// var url = window.location.href;
			// var file_url = new URL(url);
			// var file = file_url.searchParams.get("ticker");

		    var startDate = document.getElementById("sdat").value;
		    var endDate = document.getElementById("edat").value ;

		    var data2;
		    var comp = JSON.parse(<?php echo JSON_encode($result,true); ?>);
		    //alert(comp.data[0].date);
		    //d3.json(comp.data, function(data) {
	           	data2 = comp.data.filter(function(d) {
	           			if(d.date >= startDate && d.date <= endDate)
                        return d.value;
                    });
        	// });
        	d3.selectAll("g > *").remove();
        	var svg = d3.select("svg"),
			    margin = {top: 20, right: 20, bottom: 150, left: 50},
			    width = +svg.attr("width") - margin.left - margin.right,
			    height = +svg.attr("height") - margin.top - margin.bottom;
			  
			var tooltip = d3.select("body").append("div").attr("class", "toolTip");

			var x = d3.scaleBand().rangeRound([0, width]).padding(0.1),
			    y = d3.scaleLinear().rangeRound([height, 0]);
			  
			var colours = d3.scaleOrdinal()
			    .range(["#6F257F", "#CA0D59"]);

			var g = svg.append("g")
			    .attr("transform", "translate(" + (margin.left+50) + "," + margin.top + ")");

			// d3.json("data.json", function(error, data) {
			//     if (error) throw error;

			    x.domain(data2.map(function(d) { return d.date; }));
			    y.domain([0, d3.max(data2, function(d) { return d.value; })]);

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
			      	.call(d3.axisLeft(y).ticks(5).tickFormat(function(d) { return parseInt(d / 1000) + "K"; }).tickSizeInner([-width]))
			      .append("text")
			        .attr("y", 6)
			        .attr("dy", "0.71em")
			        .attr("text-anchor", "end")
			        .attr("fill", "#5D6971")
			        .text("Price - ($)");

			    g.selectAll(".bar")
			      	.data(data2)
			      .enter().append("rect")
			        .attr("x", function(d) { return x(d.date); })
			        .attr("y", function(d) { return y(d.value); })
			        .attr("width", x.bandwidth()-10)
			        .attr("height", function(d) { return height - y(d.value); })
			        .attr("fill", function(d) { return colours(d.date); })
			        .on("mousemove", function(d){
			            tooltip
			              .style("left", d3.event.pageX - 50 + "px")
			              .style("top", d3.event.pageY - 70 + "px")
			              .style("display", "inline-block")
			              .html((d.date) + "<br>" + "$" + (d.value));
			        })
			    		.on("mouseout", function(d){ tooltip.style("display", "none");});
			    //});
		}
		</script>
</body>
</html>