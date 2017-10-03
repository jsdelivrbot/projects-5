/*
 Copyright (c) 2016, BrightPoint Consulting, Inc.

 This source code is covered under the following license: http://vizuly.io/commercial-license/

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
 THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

// @version 1.1.44

//
// This is the base component for a vizuly bar chart.
//
vizuly.viz.bar = function (parent) {

    // This is the object that provides pseudo "protected" properties that the vizuly.viz function helps create
    var scope={};

    var properties = {
        "data" : null,                          // Expects array of series data - assumes each series has same length and sames yScale values;
        "layout" :                              // Sets a CLUSTERED OR STACKED layout
            vizuly.viz.layout.CLUSTERED,
        "margin" : {                            // Our margin object
            "top": "10%",                       // Top margin
            "bottom" : "7%",                    // Bottom margin
            "left" : "9%",                      // Left margin
            "right" : "7%"                      // Right margin
        },
        "duration" : 500,                       // This the time in ms used for any component generated transitions
        "width" : 300,                          // Overall width of component
        "height" : 300,                         // Height of component
        "padding" : .1,                         // % space between bars
        "x":null,                               // Function that returns xScale data value
        "y":null,                               // Function that returns yScale data value
        "xScale" : d3.scale.linear(),           // Default xScale (can be overridden after 'validate' event via callback)
        "yScale" : d3.scale.ordinal(),          // Default yScale (can be overridden after 'validate' event via callback)
        "xAxis" : d3.svg.axis(),                // Default xAxis (can be overridden after 'validate' event via callback)
        "yAxis" : d3.svg.axis()                 // Default yAxis (can be overridden after 'validate' event via callback)
    };

    // Create our viz and type it
    var viz=vizuly.component.create(parent,scope,properties);
    viz.type="viz.chart.bar";

    var size;           // Holds the 'size' variable as defined in viz.util.size()
    var barWidth;       // measured bar width
    var groupWidth;     // measured bar group width
    var stack;          // used for the stacked bar layout

    // These are all d3.selection objects we use to insert and update svg elements into
    var svg,g,bottomAxis,leftAxis,plot,barGroup, background, plotBackground, defs;

    initialize();

    // Here we set up all of our svg layout elements using a 'vz-XX' class namespace.  This routine is only called once
    // These are all place holder groups for the invidual data driven display elements.   We use these to do general
    // sizing and margin layout.  The all are referenced as D3 selections.
    function initialize() {

        svg = scope.selection.append("svg").attr("id", scope.id).style("overflow","visible").attr("class","vizuly");
        background = svg.append("rect").attr("class","vz-background");
        defs = vizuly.util.getDefs(viz);
        plotClipPath = defs.append("clipPath").attr("id", scope.id + "_plotClipPath").append("rect");
        yClipPath = defs.append("clipPath").attr("id", scope.id + "_xClipPath").append("rect");
        g = svg.append("g").attr("class","vz-bar-viz");
        bottomAxis = g.append("g").attr("class","vz-bottom-axis");
        leftAxis = g.append("g").attr("class","vz-left-axis").attr("clip-path","url(#" + scope.id + "_yClipPath)").append("g");
        plot = g.append("g").attr("class","vz-plot").attr("clip-path","url(#" + scope.id + "_plotClipPath)");
        plotBackground = plot.append("rect").attr("class","vz-plot-background").style("fill","#0f2747").style("fill-opacity",.01);

        scope.dispatch.initialize();
    }


    // The measure function performs any measurement or layout calcuations prior to making any updates to the SVG elements
    function measure() {

        // Call our validate routine and make sure all component properties have been set
        viz.validate();

        // Get our size based on height, width, and margin
        size = vizuly.util.size(scope.margin, scope.width, scope.height);

        // The width of each group of bars for a given data point and all of series
        groupWidth = (size.height/scope.data[0].length) * (1 - scope.padding);
        // The width of an individual bar for a given data point a single series
        barWidth = (groupWidth/scope.data.length) * (1 - scope.padding);

        // Based on our layout we will need to alter x and y value placements for each bar.
        if (scope.layout == vizuly.viz.layout.STACKED) {
            stack = d3.layout.stack()
                .values(function(d) {
                    return d; })
                .x(function(d) { return scope.y(d); })
                .y(function(d) { return scope.x(d); })
                .out(function(d, x0, x) {d.x0 = x0; })
                .order("reverse");

            //This applies the stack to the inbound data if needed
            stack(scope.data);
        }

        // We set our xScale domain based on whether we have a stacked or clustered layout
        scope.xScale.domain([0, d3.max(scope.data, function (data) {
            return d3.max(data, function (d) { return scope.x(d) + ((scope.layout == vizuly.viz.layout.STACKED) ? d.x0 : 0); })
        })]);


        // Set our domains for the yScale (categories)
        // Assumes ordinal scale if we have a string, otherwise min and max will do;
        if (typeof scope.y(scope.data[0][0]) == "string") {
            scope.yScale.domain(scope.data[0].map(function (d) { return scope.y(d); }));
        }
        else {
            scope.yScale.domain([
                d3.min(scope.data[0],
                function (d) { return scope.y(d); }),
                d3.max(scope.data[0], function (d) { return scope.y(d); })
            ]);
        }

        // Set our ranges for each scale
        vizuly.util.setRange(scope.yScale,0,size.height);
        vizuly.util.setRange(scope.xScale,0,size.width);

        // Set our axis for each scale - although this is something that could be handled in a theme.
        scope.xAxis.scale(scope.xScale).orient("bottom");
        scope.yAxis.scale(scope.yScale).orient("left");

        // Initialize our zoom operations (this is optional)
        initializeZoom();

        // Tell everyone we are done making our measurements
        scope.dispatch.measure();

    }

    // The update function is the primary function that is called when we want to render the visualiation based on
    // all of its set properties.  A developer can change propertys of the components and it will not show on the screen
    // until the update function is called
    function update() {

        // Call measure each time before we update to make sure all our our layout properties are set correctly
        measure();

        // Layout all of our primary SVG d3 elements.
        svg.attr("width", scope.width).attr("height", scope.height);
        background.attr("width", scope.width).attr("height", scope.height);
        plotClipPath.attr("width",size.width).attr("height",size.height);
        yClipPath.attr("width",size.width).attr("height", (scope.height-size.height)).attr("transform","translate(" + (size.left + barWidth * scope.padding) + "," + size.height + ")");
        plot.style("width",size.width).style("height",size.height).attr("transform","translate(" + (size.left + barWidth) + "," + size.top +  ")");
        bottomAxis.attr("transform","translate(" + (size.left + barWidth) + "," + (size.height + size.top) + ")");
        leftAxis.attr("transform","translate(" + (size.left + barWidth - barWidth * scope.padding) + "," + size.top + ")");
        plotBackground.attr("width",size.width).attr("height",size.height);

        // Select, create, and destroy our bar groups as needed
        barGroup = plot.selectAll(".vz-bar-group").data(scope.data[0]);
        barGroup.enter().append("g").attr("class","vz-bar-group");
        barGroup.exit().remove();

        // Create bars in each group - even if there is only one
        barGroup.each(function (datum,index) {
            var bars = d3.select(this).selectAll(".vz-bar").data(scope.data.map(function (data) { return data[index]; }));
            bars.enter().append("rect").attr("class","vizuly vz-bar")
                .attr("y",function (d,i) { return i * (barWidth + (barWidth * scope.padding)); })
                .attr("width",0).attr("x",0)
                .on("mouseover", function (d,i) { scope.dispatch.mouseover(this,d,i) })
                .on("mouseout", function (d,i) { scope.dispatch.mouseout(this,d,i); })
                .on("click", function (d,i) { scope.dispatch.click(this,d,i) })
                .on("touch", function (d,i) { scope.dispatch.touch(this,d,i) });

            bars.exit().remove();

            //Add transitions based on layout type
            if (scope.layout == vizuly.viz.layout.STACKED) {
                bars.transition().duration(scope.duration)
                    .attr("y",0)
                    .attr("height",groupWidth)
                    .attr("width",function (d,i) { return scope.xScale(scope.x(d))})
                    .attr("x",function (d,i) { return scope.xScale(d.x0)});
            }
            else {
                bars.transition().duration(scope.duration)
                    .attr("y",function (d,i) { return i * (barWidth + (barWidth * scope.padding)); })
                    .attr("height",barWidth)
                    .attr("width",function (d,i) { return scope.xScale(scope.x(d))})
                    .attr("x",0);
            }

        });

        // Shift bar group to appropriate y coordinate
        barGroup.attr("transform",function (d,i) { return "translate(0," + scope.yScale(scope.y(d)) + ")"});

        // Update our axis labels
        bottomAxis.call(scope.xAxis);
        leftAxis.call(scope.yAxis);

        // Let everyone know we are doing doing our update
        // Typically themes will attach a callback to this event so they can apply styles to the elements
        scope.dispatch.update();

    }

    // This is our public update call that all vizuly viz's implement
    viz.update = function () {
        update();
        return viz;
    };


    // These are our zoom functions that can be removed if you want by not calling the 'initializeZoom' function
    scope.zoom=null;

    // Create our zoom function
    viz.zoom = function (_) {
        if (!arguments.length) {
            return scope.zoom;
        }
        scope.zoom=_;
        onZoom();
    }

    // We need a clip path so when zoomed the relevant SVG elements don't overflow
    var plotClipPath, yClipPath;

    // Initialize our Zoom
    function initializeZoom() {

        // Create our zoom if we don't have one and set our callback to the zoom event
        if (!scope.zoom) {
            scope.zoom = d3.behavior.zoom()
                .scaleExtent([1, 10])
                .on("zoomstart", function () {
                    plotClipPath.attr("width",size.width);
                    yClipPath.attr("width",size.left).attr("height", size.height)
                        .attr("transform","translate(0," + size.top + ")");
                    scope.dispatch.zoomstart();
                })
                .on("zoom", onZoom);

            plot.call(scope.zoom);
        }

        // initialize our zoom settings and set clip paths
        scope.zoom.scale(1).translate([0,0]);
        plotClipPath.attr("width",size.width).attr("height",size.height);
        yClipPath.attr("width",size.left).attr("height", (size.height))
            .attr("transform","translate(0," + (size.top + barWidth * scope.padding) + ")");

    }


    // This is where all the zoom magic happens.   There are several ways you can implement d3.behavior.zoom (https://github.com/mbostock/d3/wiki/Zoom-Behavior)
    // d3 does a lot of 'magic' behind the scenes with the scales and the axis, so you need to be careful
    function onZoom() {

        // See if we have zoomed out of bounds, if so constrain the panning
        var y=(d3.event) ? d3.event.translate[1] : scope.zoom.translate()[1];
        if (y < -(scope.zoom.scale()*size.height) + size.height) {
            y = -(scope.zoom.scale()*size.height) + size.height;
        }
        else if (y > 0) {
            y = 0;
        }

        // Update the range of our scale based on the zoom so the bars layout correctly.
        vizuly.util.setRange(scope.yScale,0,Math.round(size.height*scope.zoom.scale()));

        //Shift the bar groups as needed and expand the bars within each group
        barGroup.attr("transform",function (d,i) { return "translate(0," + (y + scope.yScale(scope.y(d))) + ")"})
            .selectAll(".vz-bar")
            .attr("y",function (d,i) { return (scope.layout == vizuly.viz.layout.STACKED) ? 0 : i * (barWidth * scope.zoom.scale() + (barWidth * scope.zoom.scale() * scope.padding)); } )
            .attr("height",function (d,i) { return (scope.layout == vizuly.viz.layout.STACKED) ? groupWidth * scope.zoom.scale() : barWidth * scope.zoom.scale()} );

        // Update our axis
        leftAxis.attr("transform", "translate(" + size.left +"," + (size.top + barWidth * scope.padding + y) + ")");
        leftAxis.call(scope.yAxis);

        // Dispatch a event so if the page programmer or theme need to change based on the zoom they can.
        scope.dispatch.zoom();

    }


    // Returns our glorious viz component :)
    return viz;

};