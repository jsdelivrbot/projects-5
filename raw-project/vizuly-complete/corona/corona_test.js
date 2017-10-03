/*
 Copyright (c) 2016, BrightPoint Consulting, Inc.

 This source code is covered under the following license: http://vizuly.io/license/

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
 THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

// @version 1.1.44

var viz;            // vizuly ui object
var data;           // data object
var viz_container;  // html element that holds the viz (d3 selection)
var viz_title;      // title element (d3 selection)
var viz_heading;    // Title elements
var theme;          // Theme variable to be used by our viz.

//**************************************************************************************************************
//
//  This is a test/example file that shows you one way you could use a vizuly object.
//  We have tried to make these examples easy enough to follow, while still using some more advanced
//  techniques.  Vizuly does not rely on any libraries other than D3.  These examples do use jQuery and
//  materialize.css to simplify the examples and provide a decent UI framework.
//
//**************************************************************************************************************


function loadData() {

    // Load our data via d3
    d3.csv("data/corona_page_views.csv", function (csv) {

        // PREPARE OUR DATA
        //
        // This example uses sample Google Analytics data to show page views of the www.brightpointinc.com website
        // over a 24 hour period.
        //
        // Use d3 nest operation to group unique page views.
        var pages = d3.nest()
            .key(function (d) {
                return d.page
            })
            .entries(csv);

        var allSeries = [];

        // For each unique page make a data series.
        pages.forEach(function (page) {
            var series = [];
            var i = 0;
            page.values.forEach(function (row) {
                row.hour = Number(row.hour);
                row.views = Number(row.views);
                //Fill in missing hours
                if (i < row.hour) {
                    for (var j = i; j < row.hour; j++) {
                        // console.log("adding hour " + j + " for " + row.page);
                        series.push({"page": row.page, "views": 0, "hour": String(j)});
                        i++;
                    }
                }
                i++;
                row.key = page.key;
                //Convert back to string for ordinal position - Vizuly will automatically assign a ordinal scale to strings
                row.hour = String(row.hour);
                series.push(row);
            })

            //Fill in any trailing zero hour values
            if (series.length < 24) {
                for (var i = series.length - 1; i < 23; i++) {
                    series.push({"key": page.key, "views": 0, "hour": String(i)});
                }
            }
            allSeries.push(series);
        });

        data = allSeries;

        // Call our initialize routine
        initialize();

    });

}

// Vizuly follows an almost identical function chaining syntax as that of D3.  If you know D3, vizuly will feel familiar to you,
// and if you are new to D3, programming vizuly will be a good introduction.
//
// In this routine we create our viz, set various properties, create a title and
// update the display.
//
function initialize() {

    //Here we set our <code>viz</code> variable by instantiating the <code>vizuly.viz.corona</code> function.
    //All vizuly components require a parent DOM element at initialization so they know where to inject their display elements.
    viz = vizuly.viz.corona(document.getElementById("viz_container"));

    //Using the function chain syntax we can now set various properties of the bar chart.
    //
    //Both the <code>x</code> and <code>y</code> properties are used to map the data values
    //to the corresponding x and y axis within the chart.
    viz.data(data)
        .margin({top: "15%", left: "0%", right: "0%", bottom: "10%"})
        .outerRadius(350)
        .y(function (d, i) {
            return d.views;                     //Value to use for the radius (y)
        })
        .x(function (d, i) {
            return d.hour;                      //Value to use fo the angle (x)
        })
        .interpolate("cardinal-closed")         //Vertex type for line and area paths
        .on("validate", onValidate)             //Called when all public properties have been set
        .on("mouseover", onMouseOver)           //Called on each datatip mouseover
        .on("mouseout", onMouseOut)             //Called on each datatip mouseout
        .on("measure", onMeasure);              //Called each time viz measures itself prior to update


    //** Themes and skins **  play a big role in vizuly, and are designed to make it easy to make subtle or drastic changes
    //to the look and feel of any component.   Here we choose a theme and skin to use for our bar chart.
    // *See this <a href=''>guide</a> for understanding the details of themes and skins.*
    theme = vizuly.theme.radial_linearea(viz)
        .skin(vizuly.skin.LINEAREA_OCEAN);


    //The <code>viz.selection()</code> property refers to the parent
    //container that was used at the object construction.  With this <code>selection</code> property we can use D3
    //add, remove, or manipulate elements within the component.  In this case we add a title label and heading to our chart.
    viz_title = viz.selection().select("svg").append("text").attr("class", "title")
        .attr("y", 35).attr("text-anchor", "middle")
        .text("WWW.BRIGHTPOINTINC.COM - PAGE VIEWS BY HOUR");
    viz_heading = viz.selection().select("svg").append("text").attr("class", "heading")
        .attr("y", 55).attr("text-anchor", "middle")
        .text("Google Analytics - Dec 01, 2015");


    // Set the viz size based on the container
    changeSize(d3.select("#currentDisplay").attr("item_value"));



    /*
    // This code is for the purposes of the demo and simply cycles through the various skins
    // The user can stop this by clicking anywhere on the page.
    var reel = vizuly.showreel(theme, ['Sunset', 'Neon', 'Ocean'], 2000).start();
    d3.select("body").on("mousedown.reel", function () {
        //Stop show reel
        reel.stop();
        //Remove event listener
        d3.select("body").on("mousedown.reel", null);
    })
    */
}

// Set appropriate axis labels after viz validates and automatically creates any public properties.
function onValidate() {
    viz.xAxis().tickFormat(function (d) {
        return (convertTime(d))
    });
    viz.yAxis().tickFormat(function (d) {
        return d + " views";
    });
    viz.xAxis().ticks(8)
    viz.yAxis().ticks(6)
}

// Each time viz measures itself we want to reset some UI elements;
function onMeasure() {
    viz_title.attr("x", viz.width() / 2)
        .style("font-size", function () {
            return viz.height() / 60
        })
        .style("fill", function () {
            return theme.skin().labelColor;
        });

    viz_heading.attr("x", viz.width() / 2)
        .style("font-size", function () {
            return viz.height() / 65;
        })
        .style("fill", function () {
            return theme.skin().labelColor;
        })
        .style("fill-opacity", .7);
}

// Show UI elements to user based on our specific data.
function onMouseOver(d, i) {

    var fontSize = Math.round(viz.outerRadius() / 20);

    // Get the SVG defs tag
    var defs = viz.selection().selectAll("defs");
    // Get the svg plot
    var plot = viz.selection().selectAll(".vz-plot");

    // Remove any elements left from last datatip in case mouseout didn't get them.
    defs.selectAll(".vz-tip-path").remove();
    plot.selectAll(".my-tip").remove();

    // Add the arc we need to show the page views
    defs.append("path")
        .attr("class", "vz-tip-path")
        .attr("id", function (d, i) {
            return viz.id() + "_tip_path_arc_1";
        })
        .attr("d", function () {
            return vizuly.svg.text.arcPath(viz.radiusScale()(d.y + d.y0) * 1.05, viz.thetaScale()(viz.x()(d)));
        });

    // Show the hour
    plot.append("text")
        .attr("class", "my-tip")
        .style("font-size", (fontSize * .95) + "px")
        .style("text-transform", "uppercase")
        .style("font-family", "Open Sans")
        .style("fill-opacity", .75)
        .style("fill", function () {
            return theme.skin().labelColor
        })
        .append("textPath")
        .attr("startOffset", "50%")
        .style("overflow", "visible")
        .attr("xlink:href", function (d, i) {
            return "#" + viz.id() + "_tip_path_arc_1";
        })
        .text(function () {
            return viz.xAxis().tickFormat()(viz.x()(d));
        });

    // Show the page views
    plot.append("text")
        .attr("class", "my-tip")
        .attr("y", -fontSize * 1.5)
        .style("font-size", fontSize + "px")
        .style("fill", function () {
            return theme.skin().labelColor
        })
        .text(function () {
            return viz.yAxis().tickFormat()(viz.y()(d))
        });

    //Show the page
    plot.append("text")
        .attr("class", "my-tip")
        .style("font-size", fontSize + "px")
        .style("fill-opacity", .75)
        .style("fill", function () {
            return theme.skin().labelColor
        })
        .text(function () {
            return d.key;
        });
}

// Remove any elements we have created on mouse over
function onMouseOut(d, i) {
    viz.selection().selectAll(".vz-tip-path").remove();
    viz.selection().selectAll(".my-tip").remove();
}

//Formats the time labels for yAxis
function convertTime(h) {
    if (h == 0) return ("12 am");
    if (h == 12) return ("12 pm");
    return (h < 12) ? h + " am" : (h - 12) + " pm";
}


//
// Functions used by the test container to set various properties of the viz
//
function changeSkin(val) {
    if (!val) return;
    theme.skin(val);
    viz_title.style("fill", theme.skin().labelColor)
    viz_heading.style("fill", theme.skin().labelColor)
    theme.apply();
}

function changeLayout(val) {
    viz.layout(val).update();
}

function changeShape(val) {
    viz.interpolate(val).update();
}

function changeSize(val) {
    var s = String(val).split(",");
    viz_container.transition().style('width', s[0] + 'px').style('height', s[1] + 'px');
    var r = Math.min(Number(s[0]) / 2, Number(s[1]) / 2) * .75;
    viz.width(s[0]).height(s[1]).outerRadius(r).innerRadius(r * .4).update();
}











