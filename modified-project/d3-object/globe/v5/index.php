<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Earth globe</title>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://d3js.org/topojson.v1.min.js"></script>
<script src="http://d3js.org/queue.v1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body{
	font-family: 'Noto Sans', sans-serif;}
.main{
	width:600px;
	margin:10px auto;}
.water {
  fill: #263C59;
}

.land {
  fill: #A98B6F;
  stroke: #FFF;
  stroke-width: 0.7px;
}

.land:hover {
  fill:#33CC33;
  stroke-width: 1px;
}
svg path.land:nth-child(12n-6){
	 fill: #B9CED8;}
svg path.land:nth-child(12n-10){
	 fill: #7D9FB5;}
svg path.land:nth-child(12n-7){
	 fill: #A5C169;}
svg path.land:nth-child(12n-9){
	 fill: #63A3A1;}
svg path.land:nth-child(12n-8){
	 fill: #747474;}
svg path.land:nth-child(12n-5){
	 fill: #529998;}
svg path.land:last-child{
	 fill: #A0AAB6;}
.focused {
  fill: #33CC33;
  stroke:#6FF;
  stroke-width: 1.5px;
}

select {
  position: absolute;
  top: 20px;
  left: 580px;
  border: solid #ccc 1px;
  padding: 3px;
  box-shadow: inset 1px 1px 2px #ddd8dc;
}

.countryTooltip {
  position: absolute;
  display: none;
  pointer-events: none;
  background: #fff;
  padding: 5px;
  text-align: left;
  border: solid #ccc 1px;
  color: #666;
  font-size: 14px;
  font-family: sans-serif;
}
select{
	display:none;}

.cont{
	display:none;}
#menu{
	text-align:center;
	padding-bottom:10px;}
#menu form{
	text-align:center;}
#menu .btn{
	float:none;
	margin-left:10px;}
</style>
<body>
ohk
<?php if ( is_user_logged_in() ) {
echo "logged in";
} else {
echo "logout";
}
?>  
    <div class="main">
    	<div id="menu">
        	
        </div>
    	<div id="main">
        	
        </div>
    </div>
    


  <script>
  
  	var body = d3.select("#menu")

	
	
	

  var width = 600,
  height = 500,
  sens = 0.25,
  focused;

  //Setting projection

  var projection = d3.geo.orthographic()
  .scale(245)
  .rotate([0, 0])
  .translate([width / 2, height / 2])
  .clipAngle(90);

  var path = d3.geo.path()
  .projection(projection);
	//alert(path);
  //SVG container

  var svg = d3.select("#main").append("svg")
  .attr("width", width)
  .attr("height", height);

  //Adding water

  svg.append("path")
  .datum({type: "Sphere"})
  .attr("class", "water")
  .attr("d", path);

  var countryTooltip = d3.select("body").append("div").attr("class", "countryTooltip"),
  countryList = d3.select("body").append("select").attr("name", "countries");


  queue()
  .defer(d3.json, "data.json")
  .defer(d3.tsv, "data.tsv")
  .await(ready);

  //Main function

  function ready(error, world, countryData) {
	//alert(countryData);
    var countryById = {},
    countries = topojson.feature(world, world.objects.countries).features;

    //Adding countries to select

    countryData.forEach(function(d) {
      countryById[d.id] = d.name;
	  countryById[d.id1] = d.id;
      option = countryList.append("option");
      option.text(d.name);
      option.property("value", d.id);
    });
	//alert(countryById[d.id1]);
    //Drawing countries on the globe
    var world = svg.selectAll("path.land")
    .data(countries)
    .enter().append("path")
    .attr("class", "land")
    .attr("d", path)
	//.attr("id", countries[d.id])

    //Drag event

    .call(d3.behavior.drag()
      .origin(function() { var r = projection.rotate(); return {x: r[0] / sens, y: -r[1] / sens}; })
      .on("drag", function() {
        var rotate = projection.rotate();
        projection.rotate([d3.event.x * sens, -d3.event.y * sens, rotate[2]]);
        svg.selectAll("path.land").attr("d", path);
        svg.selectAll(".focused").classed("focused", focused = false);
      }))

    //Mouse events

    .on("mouseover", function(d) {
      countryTooltip.text(countryById[d.id])
      .style("left", (d3.event.pageX + 7) + "px")
      .style("top", (d3.event.pageY - 15) + "px")
      .style("display", "block")
      .style("opacity", 1);
    })
    .on("mouseout", function(d) {
      countryTooltip.style("opacity", 0)
      .style("display", "none");
    })
    .on("mousemove", function(d) {
      countryTooltip.style("left", (d3.event.pageX + 7) + "px")
      .style("top", (d3.event.pageY - 15) + "px");
    });

    //Country focus on option select
	var form = body.append('form');
	var label = form.append('label')
		.attr('class','btn btn-primary btn-sm')
				.html('1Q14');;
	label.append('input')
		.attr('class','cont')
		.attr('type', 'radio')
		.attr('value', '124')
		.attr('name', 'toggle')
		.on('click', function () {
			//Do something
			var rotate = projection.rotate(),
			  focusedCountry = country(countries, this),
			  p = d3.geo.centroid(focusedCountry);
		
			  svg.selectAll(".focused").classed("focused", focused = false);
		
			//Globe rotating
		
			(function transition() {
			  d3.transition()
			  .duration(2500)
			  .tween("rotate", function() {
				var r = d3.interpolate(projection.rotate(), [-p[0], -p[1]]);
				return function(t) {
				  projection.rotate(r(t));
				  svg.selectAll("path").attr("d", path)
				  .classed("focused", function(d, i) { return d.id == focusedCountry.id ? focused = d : false; });
				};
			  })
			  })();

		});
	//form.append('label')
	var label1 = form.append('label')
		.attr('class','btn btn-primary btn-sm')
				.html('3q15');	
		
	label1.append('input')
		.attr('class','cont')
		.attr('type', 'radio')
		.attr('value', '8')
		.attr('name', 'toggle')
		.on('click', function () {
			//Do something
			var rotate = projection.rotate(),
			  focusedCountry = country(countries, this),
			  p = d3.geo.centroid(focusedCountry);
		
			  svg.selectAll(".focused").classed("focused", focused = false);
		
			//Globe rotating
		
			(function transition() {
			  d3.transition()
			  .duration(2500)
			  .tween("rotate", function() {
				var r = d3.interpolate(projection.rotate(), [-p[0], -p[1]]);
				return function(t) {
				  projection.rotate(r(t));
				  svg.selectAll("path").attr("d", path)
				  .classed("focused", function(d, i) { return d.id == focusedCountry.id ? focused = d : false; });
				};
			  })
			  })();

		});
	
	var label2 = form.append('label')
	.attr('class','btn btn-primary btn-sm')
				.html('2q16');	
		
    label2.append('input')
		.attr('class','cont')
		.attr('type', 'radio')
		.attr('value', '4')
		.attr('name', 'toggle')
		.on('click', function () {
			//Do something
			var rotate = projection.rotate(),
			  focusedCountry = country(countries, this),
			  p = d3.geo.centroid(focusedCountry);
		
			  svg.selectAll(".focused").classed("focused", focused = false);
		
			//Globe rotating
		
			(function transition() {
			  d3.transition()
			  .duration(2500)
			  .tween("rotate", function() {
				var r = d3.interpolate(projection.rotate(), [-p[0], -p[1]]);
				return function(t) {
				  projection.rotate(r(t));
				  svg.selectAll("path").attr("d", path)
				  .classed("focused", function(d, i) { return d.id == focusedCountry.id ? focused = d : false; });
				};
			  })
			  })();

		});
	
	
	
	

    function country(cnt, sel) { 
      for(var i = 0, l = cnt.length; i < l; i++) {
        if(cnt[i].id == sel.value) {return cnt[i];}
      }
    };

  };
  </script>
</body>
</html>