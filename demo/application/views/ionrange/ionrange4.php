<?//php echo 'ok';?>

<div class="powerwidget powerwidget-as-portlet-white" id="serverstatuz-indexpage2">
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
				<span data-widget-setstyle="pink" class="pink-btn"></span><span data-widget-setstyle="blue" class="blue-btn"></span><span data-widget-setstyle="dark-blue" class="dark-blue-btn"></span><span data-widget-setstyle="green" class="green-btn"></span><span data-widget-setstyle="green-alt" class="green-alt-btn"></span><span data-widget-setstyle="green-acid" class="green-acid-btn"></span><span data-widget-setstyle="yellow" class="yellow-btn"></span><span data-widget-setstyle="purple" class="purple-btn"></span><span data-widget-setstyle="cold-grey" class="cold-grey-btn"></span><span data-widget-setstyle="dark-cold-grey" class="dark-cold-grey-btn"></span><span data-widget-setstyle="orange" class="orange-btn"></span><span data-widget-setstyle="red" class="red-btn"></span><span data-widget-setstyle="dark-red" class="dark-red-btn"></span><span data-widget-setstyle="black" class="black-btn"></span>
			</div>
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
										</input> <i></i></label>
								</div>
							</li>
							<li class="col-md-2 col-sm-4">
								<h3>BristolGate <span class="label bg-red"><i class="fa fa-caret-down"></i> 5%</span></h3>
								<div class="orb-form">
									<label class="toggle" for="japan">
										<input name="japan" checked id="japan" type="checkbox">
										Uncheck to hide
										</input> <i></i></label>
								</div>
							</li>
							<li class="col-md-2 col-sm-4">
								<h3>MSCI <span class="label bg-marine"><i class="fa fa-caret-up"></i> 16%</span></h3>
								<div class="orb-form">
									<label class="toggle" for="usa">
										<input name="usa" checked id="usa" type="checkbox">
										Uncheck to hide
										</input> <i></i></label>
								</div>
							</li>
							<li class="col-md-2 col-sm-4">
								<h3>S&P <span class="label bg-marine"><i class="fa fa-caret-up"></i> 7%</span></h3>
								<div class="orb-form">
									<label class="toggle" for="russia">
										<input name="russia" checked id="russia" type="checkbox">
										Uncheck to hide
										</input> <i></i></label>
								</div>
							</li>
							<li class="col-md-2 col-sm-4">
								<h3>3rdQ <span class="label bg-marine"><i class="fa fa-caret-up"></i> 1%</span></h3>
								<div class="orb-form">
									<label class="toggle" for="china">
										<input name="china" checked id="china" type="checkbox">
										Uncheck to hide
										</input> <i></i></label>
								</div>
							</li>
							<li class="col-md-2 col-sm-4">
								<h3>4thQ <span class="label bg-red"><i class="fa fa-caret-down"></i> 13%</span></h3>
								<div class="orb-form">
									<label class="toggle" for="others">
										<input name="others" checked id="others" type="checkbox">
										Uncheck to hide
										</input> <i></i></label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {		
        if ($("#placeholder9").length) {
            $(function () {

                var datasets = {
                    "uk": {
                        label: "1stQ",
                        data: [
							[253,1.19],
							[254,1.31],
							[255,1.31],
							[256,1.32],
							[257,1.38],
							[258,1.42],
							[259,1.46],
							[260,1.47],
							[261,1.41],
							[262,1.44],
							[263,1.46],
							[264,1.47],
							[265,1.49],
							[266,1.45],
							[267,1.46],
							[268,1.48],
							[269,1.56],
							[270,1.57],
							[271,1.63],
							[272,1.67],
							[273,1.70],
							[274,1.68],
							[275,1.76],
							[276,1.70],
							[277,1.77],
							[278,1.81],
							[279,1.85],
							[280,1.89],
							[281,1.78],
							[282,1.90],
							[283,1.89],
							[284,1.88],
							[285,1.93],
							[286,1.96],
							[287,1.92],
							[288,2.01],
							[289,1.98],
							[290,2.04],
							[291,2.11],
							[292,2.13],
							[293,2.09],
							[294,2.19],
							[295,2.19],
							[296,2.16],
							[297,2.18],
							[298,2.16],
							[299,2.22],
							[300,2.10]                           
                        ]
                    },
                    "japan": {
                        label: "BristolGate",
                        data: [
							[253,1.19],
							[254,1.31],
							[255,1.32],
							[256,1.32],
							[257,1.39],
							[258,1.42],
							[259,1.46],
							[260,1.47],
							[261,1.41],
							[262,1.44],
							[263,1.46],
							[264,1.47],
							[265,1.49],
							[266,1.46],
							[267,1.47],
							[268,1.48],
							[269,1.56],
							[270,1.58],
							[271,1.63],
							[272,1.67],
							[273,1.70],
							[274,1.68],
							[275,1.76],
							[276,1.71],
							[277,1.77],
							[278,1.81],
							[279,1.85],
							[280,1.89],
							[281,1.78],
							[282,1.91],
							[283,1.90],
							[284,1.88],
							[285,1.93],
							[286,1.96],
							[287,1.92],
							[288,2.01],
							[289,1.98],
							[290,2.04],
							[291,2.11],
							[292,2.13],
							[293,2.09],
							[294,2.19],
							[295,2.19],
							[296,2.16],
							[297,2.18],
							[298,2.16],
							[299,2.22],
							[300,2.10]
                        ]
                    },
                    "usa": {
                        label: "MSCI",
                        data: [
							[253,1.05],
							[254,1.16],
							[255,1.16],
							[256,1.16],
							[257,1.22],
							[258,1.25],
							[259,1.29],
							[260,1.29],
							[261,1.24],
							[262,1.27],
							[263,1.28],
							[264,1.30],
							[265,1.31],
							[266,1.28],
							[267,1.29],
							[268,1.30],
							[269,1.37],
							[270,1.39],
							[271,1.43],
							[272,1.47],
							[273,1.50],
							[274,1.48],
							[275,1.55],
							[276,1.50],
							[277,1.56],
							[278,1.59],
							[279,1.63],
							[280,1.67],
							[281,1.57],
							[282,1.68],
							[283,1.67],
							[284,1.66],
							[285,1.70],
							[286,1.72],
							[287,1.69],
							[288,1.77],
							[289,1.74],
							[290,1.79],
							[291,1.86],
							[292,1.87],
							[293,1.84],
							[294,1.93],
							[295,1.93],
							[296,1.90],
							[297,1.92],
							[298,1.90],
							[299,1.95],
							[300,1.85]
                        ]
                    },
                    "russia": {
                        label: "S&P",
                        data: [
							[253,1.16],
							[254,1.28],
							[255,1.28],
							[256,1.29],
							[257,1.35],
							[258,1.41],
							[259,1.46],
							[260,1.45],
							[261,1.36],
							[262,1.41],
							[263,1.43],
							[264,1.47],
							[265,1.50],
							[266,1.48],
							[267,1.49],
							[268,1.50],
							[269,1.58],
							[270,1.60],
							[271,1.66],
							[272,1.69],
							[273,1.73],
							[274,1.71],
							[275,1.79],
							[276,1.74],
							[277,1.80],
							[278,1.88],
							[279,1.94],
							[280,1.98],
							[281,1.92],
							[282,2.00],
							[283,2.02],
							[284,2.04],
							[285,2.08],
							[286,2.13],
							[287,2.10],
							[288,2.18],
							[289,2.15],
							[290,2.20],
							[291,2.26],
							[292,2.26],
							[293,2.19],
							[294,2.31],
							[295,2.28],
							[296,2.30],
							[297,2.33],
							[298,2.28],
							[299,2.33],
							[300,2.19]
                        ]
                    },
                    "china": {
                        label: "3rdQ",
                        data: [
							[253,1.04],
							[254,1.15],
							[255,1.15],
							[256,1.16],
							[257,1.22],
							[258,1.27],
							[259,1.31],
							[260,1.30],
							[261,1.22],
							[262,1.27],
							[263,1.29],
							[264,1.32],
							[265,1.35],
							[266,1.33],
							[267,1.34],
							[268,1.35],
							[269,1.42],
							[270,1.44],
							[271,1.49],
							[272,1.52],
							[273,1.56],
							[274,1.54],
							[275,1.61],
							[276,1.57],
							[277,1.62],
							[278,1.69],
							[279,1.74],
							[280,1.79],
							[281,1.72],
							[282,1.80],
							[283,1.82],
							[284,1.83],
							[285,1.88],
							[286,1.91],
							[287,1.89],
							[288,1.96],
							[289,1.94],
							[290,1.98],
							[291,2.04],
							[292,2.03],
							[293,1.97],
							[294,2.08],
							[295,2.05],
							[296,2.07],
							[297,2.10],
							[298,2.06],
							[299,2.10],
							[300,1.97]
                        ]
                    },
                    "others": {
                        label: "4thQ",
                        data: [
							[253,0.98],
							[254,1.09],
							[255,1.09],
							[256,1.09],
							[257,1.15],
							[258,1.21],
							[259,1.21],
							[260,1.17],
							[261,1.19],
							[262,1.21],
							[263,1.22],
							[264,1.23],
							[265,1.20],
							[266,1.21],
							[267,1.23],
							[268,1.29],
							[269,1.30],
							[270,1.35],
							[271,1.38],
							[272,1.41],
							[273,1.39],
							[274,1.46],
							[275,1.41],
							[276,1.47],
							[277,1.50],
							[278,1.53],
							[279,1.57],
							[280,1.48],
							[281,1.58],
							[282,1.57],
							[283,1.56],
							[284,1.60],
							[285,1.62],
							[286,1.59],
							[287,1.66],
							[288,1.64],
							[289,1.69],
							[290,1.75],
							[291,1.76],
							[292,1.73],
							[293,1.82],
							[294,1.81],
							[295,1.79],
							[296,1.80],
							[297,1.79],
							[298,1.83],
							[299,1.74],
							[300,1.75]
                        ]
                    },
                };
                // hard-code color indices to prevent them from shifting as
                // countries are turned on/off

                var zx = 0;
                $.each(datasets, function (key, val) {
                    val.color = zx;
                    ++zx;
                });

                // insert checkboxes 
                var choiceContainer = $("#choices");
                choiceContainer.find("input").click(plotAccordingToChoices);
                function plotAccordingToChoices() {
                    var data = [];
                    choiceContainer.find("input:checked").each(function () {
                        var key = $(this).attr("name");
                        if (key && datasets[key]) {
                            data.push(datasets[key]);
                        }
                    });
                    if (data.length > 0) {
                        $.plot("#placeholder9", data, {
                            series: {
                                lines: {
                                    show: true,
                                    lineWidth: 7,
                                    fill: true,
                                    fillColor: {
                                        colors: [{
                                            opacity: 1
                                        }, {
                                            opacity: 1
                                        }]
                                    }
                                },
                                points: {
                                    show: true,
                                    fillColor: "#595f66",
                                    lineWidth: 3,
                                    radius: 5
                                },
                                shadowSize: 0,
                                stack: true
                            },
                            colors: ["#33383d", "#454b52", "#5bc0de", "#82b964", "#ccd600", "#f4cc13", "#8960a7", "#454b52", "#d24d33", "#f0ad4e"],
                            grid: {
                                hoverable: true,
                                clickable: true,
                                color: '#555',
                                borderWidth: 0
                            },
                            legend: {
                                noColumns: 3,
                                margin: -15,
                                backgroundColor: '#fff',
                                backgroundOpacity: 1,
                            },
                            yaxis: {
                                show: false,
                                min: 0,
                                font: {
                                    color: "#ddd",
                                    size: 11,
                                    family: "Open Sans, sans-serif",
                                }
                            },
                            xaxis: {
                                tickDecimals: 0,
                                font: {
                                    color: "#ddd",
                                    size: 11,
                                    family: "Open Sans, sans-serif",
                                }
                            },
                            tooltip: true,
                            tooltipOpts: {
                                content: "$%y.2",
                                shifts: {
                                    x: -10,
                                    y: 25
                                }
                            }
                        });
                    }
                }
                plotAccordingToChoices();
            });
        }
     });
</script>

