var svg = d3.select("#ms"),
    margin = {top: 0, right: 35, bottom: 30, left: 50},
    width = +svg.attr("width") - margin.left - margin.right,
    height = +svg.attr("height") - margin.top - margin.bottom,
    g = svg.append("g").attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var parseTime = d3.timeParse("%d-%b-%y");

var x = d3.scaleTime()
    .rangeRound([0, width]);

var y = d3.scaleLinear()
    .rangeRound([height, 0]);

var YaxisScale = d3.scaleLinear()
                         .domain([-30, 5])
                         .range([height, 0], 0.3);

var prevHighSnp = 100;
var prevHighBg = 100;
var flag = 0;
var line = d3.line()
    .x(function(d) { return x(d.date); })
    .y(function(d) {
      if(prevHighSnp < d.snp){
        //if(flag == 0){
          prevHighSnp = d.snp;
        //}
          return y(315);
      }
      else if(prevHighSnp >= d.snp){
        //flag = 1;
        return y( 315 + (d.snp - prevHighSnp) * 6);
      }
    });


    
	var line2 = d3.line()
    .x(function(d) { return x(d.date); })
    .y(function(d) {
      //BG
      if(prevHighBg < d.bg){
        //if(flag == 0){
          prevHighBg = d.bg;
        //}
          return y(315);
      }
      else if(prevHighBg >= d.bg){
        //flag = 1;
        return y( 315 + (d.bg - prevHighBg) * 6);
      }  
    });

var tooltip = d3.select("body")
                .select("#Summary").append("div").attr("class", "toolTip");



d3.tsv("snp.tsv", function(d) {
  d.date = parseTime(d.date);
  d.snp = +d.snp;
  d.bg = +d.bg;
  return d;
}, function(error, data) {
  if (error) throw error;
var prevHigh = 100;
  x.domain(d3.extent(data, function(d) { return d.date; }));
  y.domain(d3.extent(data, function(d) { return d.bg;}));

  g.append("g")
      .attr("transform", "translate(0," + height + ")")
      .call(d3.axisBottom(x))
     .select(".domain");
      //.remove();

  // g.append("g")
  //     .call(d3.axisLeft(y))
  //   .append("text")
  //     .attr("fill", "#000")
  //     .attr("transform", "rotate(-90)")
  //     .attr("y", 6)
  //     .attr("dy", "0.71em")
  //     .attr("text-anchor", "end");
      // .text("Closing Price ($)");


//Create the Axis
// var yAxis = d3.axis()
//                   ;


//Create an SVG group Element for the Axis elements and call the xAxis function
g.append("g")
  .call(d3.axisLeft(YaxisScale))

  g.append("path")
      .datum(data)
      .attr("fill", "none")
      .attr("stroke", "#6F95AD")
      .attr("stroke-linejoin", "round")
      .attr("stroke-linecap", "round")
      .attr("stroke-width", 1.5)
      .attr("d", line);

  g.append("path")
      .datum(data)
      .attr("fill", "none")
      .attr("stroke", "#0F2747")
      .attr("stroke-linejoin", "round")
      .attr("stroke-linecap", "round")
      .attr("stroke-width", 1.5)
      .attr("d", line2);
  // g.selectAll(".bar")
  // .data(data)
  // .enter().append("rect")
  //     .attr("class", "bar")
  //     .attr("x", function(d) { return x(d.date); })
  //     .attr("y", 0)
  //     .attr("width", function(d) { return d.down; })
  //     .attr("height", height)
  //     .attr("fill", "rgba(238, 238, 238, 0.3)")
  //     .on("mousemove", function(d){
  //                 tooltip
  //                   .style("left", d3.event.pageX - 80 + "px")
  //                   .style("top", d3.event.pageY - 90 + "px")
  //                   .style("display", "inline-block")
  //                   .html("Drawdown size: "+(d.downSize) + "%<br>Time To Recover: " + (d.recovery)+" days");
  //             })
  //             .on("mouseout", function(d){ tooltip.style("display", "none");});

  // g.selectAll(".bars")
  // .data(data)
  // .enter().append("rect")
  //     .attr("class", "bars")
  //     .attr("x", function(d) { return x(d.date); })
  //     .attr("y", function(d) {return -y(4595.73 - d.close)+202})
  //     .attr("width", function(d) { return d.redMark; })
  //     .attr("height", height)
  //     .attr("fill", "rgba(255, 0, 0, 0.2)")

  //     //.attr("transform", "rotate(180)")
  //     .on("mousemove", function(d){
  //                 tooltip
  //                   .style("left", d3.event.pageX - 80 + "px")
  //                   .style("top", d3.event.pageY - 90 + "px")
  //                   .style("display", "inline-block")
  //                   .html("Drawdown size: "+(d.downSize) + "%<br>Time To Recover: " + (d.recovery) +" days");
  //             })
  //             .on("mouseout", function(d){ tooltip.style("display", "none");});

  // g.selectAll(".bars2")
  // .data(data)
  // .enter().append("rect")
  //     .attr("class", "bars")
  //     .attr("x", function(d) { return x(d.date); })
  //     .attr("y", 0)
  //     .attr("width", function(d) { return d.redMark; })
  //     .attr("height", function(d) {return y(d.val);})
  //     .attr("fill", "rgb(238, 238, 238)")

  //     //.attr("transform", "rotate(180)")
  //     .on("mousemove", function(d){
  //                 tooltip
  //                   .style("left", d3.event.pageX - 80 + "px")
  //                   .style("top", d3.event.pageY - 90 + "px")
  //                   .style("display", "inline-block")
  //                   .html("Drawdown size: "+(d.downSize) + "%<br>Time To Recover: " +(d.recovery) +" days");
  //             })
  //             .on("mouseout", function(d){ tooltip.style("display", "none");});
});