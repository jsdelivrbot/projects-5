<!DOCTYPE html>
<html>
<head>
	<title>fg</title>
	<script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
	<center>
		<div id="show"></div>
	</center>


	
	<?php
	$url = "https://api.intrinio.com/companies";
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
	<script type="text/javascript">
		var sl = 1;
        var tabulate = function(data, columns) {
            var table = d3.select('#show').append('table')
                .attr("cellspacing", 0)
                .attr("cellpadding", 5)
                .attr("border", 1)
                .style("text-align", "center");
            var thead = table.append('thead');
            var tbody = table.append('tbody');

            thead.append("th").text('SL No.');

            var rows = tbody.selectAll('tr')
                .data(data.data)
                .enter()
                .append('tr');


            var cells = rows.selectAll("tr")
                //use a class so you don't re-select the existing <td> elements
                .data(function(d) {
                    return [d];
                })
                .enter()
                .append("td")

                .text(function(d) {
                    return sl++
                });


            //thead.append('th')
            thead.selectAll('tr')
                .data(columns)
                .enter()
                .append('th')
                .text(function(d) {
                    return d;
                });


            rows.selectAll('tr')
                .data(function(row) {

                    return columns.map(function(column) {

                        return {

                            column: column,

                            value1: row.name,

                            value2: row.ticker
                        }
                    })
                })
                .enter()
                .append('td')
                .append('a')
                .html(function(d) {
                    return "<a href=\"details.php?ticker="+d.value2+"&compName="+d.value1+"\">" +  d.value1  +"</a>";;
                });




            return table;
        }


        // d3.json("comp.json", function(data) {
        //     var columns = ['Company Name'];
        //     tabulate(data, columns);
        // });
		var comp =  JSON.parse(<?php echo JSON_encode($result,true); ?>);
		 var columns = ['Company Name'];
		 tabulate(comp, columns);

		//d3.select("#show").text(comp.data[0].name);
	</script>

</body>
</html>