var svg = d3.select("#bristolgate"),
    margin1 = {top: 0, right: 35, bottom: 30, left: 50},
    width1 = +svg.attr("width") - margin1.left - margin1.right,
    height1 = +svg.attr("height") - margin1.top - margin1.bottom,
   g1 = svg.append("g").attr("transform", "translate(" + margin1.left + "," + margin1.top+ ")");

var parseTime1 = d3.timeParse("%d-%b-%y");

var x1 = d3.scaleTime()
    .rangeRound([0, width1]);


var y1 = d3.scaleLinear()
    .rangeRound([height1, 0]);

var line1 = d3.line()
    .x(function(d) { return x1(d.date); })
    .y(function(d) { return y1(d.close); });

var tooltip1 = d3.select("body").select("#Summary").append("div").attr("class", "toolTip");

d3.tsv("bristolgate.tsv", function(d) {
  d.date = parseTime1(d.date);
  d.close = +d.close;
  d.down = +d.down;
  d.downSize = +d.downSize;
  d.redMark = +d.redMark;
  d.val = +d.val;
  d.recovery = +d.recovery;

  return d;
}, function(error, data) {
  if (error) throw error;

  x1.domain(d3.extent(data, function(d) { return d.date; }));
  y1.domain(d3.extent(data, function(d) { return d.close; }));

 g1.append("g")
      .attr("transform", "translate(0," + height1 + ")")
      .call(d3.axisBottom(x1))
    .select(".domain")
      //.remove();

 g1.append("g")
      .call(d3.axisLeft(y1))
    .append("text")
      .attr("fill", "#000")
      .attr("transform", "rotate(-90)")
      .attr("y", 12)
      .attr("dy", "0.71em")
      .attr("text-anchor", "end");
      // .text("Closing Price ($)");

 g1.append("path")
      .datum(data)
      .attr("fill", "none")
      .attr("stroke", "#0F2747")
      .attr("stroke-linejoin", "round")
      .attr("stroke-linecap", "round")
      .attr("stroke-width", 1.5)
      .attr("d", line1);

 g1.selectAll(".bar")
  .data(data)
  .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.date); })
      .attr("y", 0)
      .attr("width", function(d) { return d.down; })
      .attr("height", height1)
      .attr("fill", "rgba(238, 238, 238, 0.3)")
      .on("mousemove", function(d){
                  tooltip1
                    .style("left", d3.event.pageX - 50 + "px")
                    .style("top", d3.event.pageY - 70 + "px")
                    .style("display", "inline-block")
                    .html("Drawdown size: "+(d.downSize) + "%<br>Time To Recover: " + (d.recovery) +" days");
              })
              .on("mouseout", function(d){ tooltip1.style("display", "none");});



  g1.selectAll(".bars")
  .data(data)
  .enter().append("rect")
      .attr("class", "bars")
      .attr("x", function(d) { return x1(d.date); })
      .attr("y", function(d) { return -y1(2395.96 - d.close)+260; })
      .attr("width", function(d) { return d.redMark; })
      .attr("height", height1)
      .attr("fill", "rgba(255, 0, 0, 0.2)")

      .on("mousemove", function(d){
                  tooltip1
                    .style("left", d3.event.pageX - 80 + "px")
                    .style("top", d3.event.pageY - 90 + "px")
                    .style("display", "inline-block")
                    .html("Drawdown size: "+(d.downSize) + "%<br>Time To Recover: " + (d.recovery) +" days");
              })
              .on("mouseout", function(d){ tooltip1.style("display", "none");});

  g1.selectAll(".bars2")
  .data(data)
  .enter().append("rect")
      .attr("class", "bars")
      .attr("x", function(d) { return x1(d.date); })
      .attr("y", -5)
      .attr("width", function(d) { return d.redMark; })
      .attr("height", function(d) {return y1(d.val);})
      .attr("fill", "rgb(238, 238, 238)")

      //.attr("transform", "rotate(180)")
      .on("mousemove", function(d){
                  tooltip1
                    .style("left", d3.event.pageX - 80 + "px")
                    .style("top", d3.event.pageY - 90 + "px")
                    .style("display", "inline-block")
                    .html("Drawdown size: "+(d.downSize) + "%<br>Time To Recover: " + (d.recovery) +" days");
              })
              .on("mouseout", function(d){ tooltip1.style("display", "none");});
  
});