
</div>

<!-- END CONTAINER -->
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>    
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-morris-chart/js/morris.min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-flot/jquery.flot.selection.min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-flot/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-flot/jquery.flot.orderBars.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/menu/js/charts.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo base_url();?>assets/menu/js/core.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/chat.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/highcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/modules/exporting.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/js/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/menu/plugins/highchart/highchart-more.js"></script>
<!-- END CORE TEMPLATE JS -->

</body>


	<script>
	$(function () {

    $(document).ready(function () {
	
	// Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

	
	// build the bar dampak
		 $('#container-bar-dampak').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rangkuman Tiket dikelompokan dengan Dampak'
        },
        subtitle: {
            text: 'Helpdesk PLN Distribusi Jawa Barat Banten'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Tiket'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Kritis',
            data: [<?php
				$bulan = array();
				$a = 0;
				foreach($tiket_dampak as $row){
					$count = $a;
					$bulan[$a] = $row->bulan;
					$kritis[$a] = $row->Kritis;
					$standar[$a] = $row->Standar;
					$none[$a] = $row->none;
					$a++;
				}

				$b = 0;
				// echo $bulan[$b];
				for($i=1;$i<=12;$i++){
					if($i != $bulan[$b]){
						echo "0";
					}else{
						echo $kritis[$b];
						if($b < $count){
							$b++;
						}
					}
					if($i < 12){
						echo ",";
					}
				}
			?>]

        }, {
            name: 'Standar',
            data: [<?php
				$bulan = array();
				$a = 0;
				foreach($tiket_dampak as $row){
					$count = $a;
					$bulan[$a] = $row->bulan;
					$kritis[$a] = $row->Kritis;
					$standar[$a] = $row->Standar;
					$none[$a] = $row->none;
					$a++;
				}

				$b = 0;
				for($i=1;$i<=12;$i++){
					if($i != $bulan[$b]){
						echo "0";
					}else{
						echo $standar[$b];
						if($b < $count){
							$b++;
						}
					}
					if($i < 12){
						echo ",";
					}
				}
			?>]

        }, {
            name: 'None',
            data: [<?php
				$bulan = array();
				$a = 0;
				foreach($tiket_dampak as $row){
					$count = $a;
					$bulan[$a] = $row->bulan;
					$kritis[$a] = $row->Kritis;
					$standar[$a] = $row->Standar;
					$none[$a] = $row->none;
					$a++;
				}

				$b = 0;
				for($i=1;$i<=12;$i++){
					if($i != $bulan[$b]){
						echo "0";
					}else{
						echo $none[$b];
						if($b < $count){
							$b++;
						}
					}
					if($i < 12){
						echo ",";
					}
				}
			?>]

        }]
    });
	
        // Build the chart kategori
        $('#container-chart-kategori').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Jumlah Tiket tiap Kategori pada Bulan ini'
            },
			subtitle: {
				text: 'Jumlah Tiket Bulan ini : <?php echo $bulan_ini;?>'
			},
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: "Jumlah",
                colorByPoint: true,
				
                data: [
				<?php foreach($tiket_kategori as $row) {
						
				?>
						{
							name: "<?php echo $row->nama_kategori; ?>",
							y: <?php echo $row->jumlah; ?>
						},
				<?php
					}
				?>	
                 ]
            }]
        });
		
	// Build the chart status     
        $('#container-chart-status').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Jumlah Tiket tiap Level Prioritas pada Bulan ini'
            },
			subtitle: {
				text: 'Jumlah Tiket Bulan ini : <?php echo $bulan_ini;?>'
			},
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b></b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: "Jumlah",
                colorByPoint: true,
                data: [<?php foreach($tiket_prioritas as $row) {
						
				?>
						{
							name: "<?php echo $row->nama_level; ?>",
							y: <?php echo $row->jumlah; ?>
						},
				<?php
					}
				?>	]
            }]
        });
	
		
    });
});

// speedometer rata2durasi pekerjaan
$(function () {

    $('#rata2durasi').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: 'Rata-rata durasi menyelesaikan tugas pada Bulan ini'
        },
		subtitle: {
			text: 'Jumlah Tiket Bulan ini : <?php echo $bulan_ini;?>'
		},

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },
		
		//menghitung jumlah rata2
		<?php
				foreach($rata2durasi as $row){
					$durasi = $row->rata2; 
										
						$second = 1;
						$minute = 60*$second;
						$hour   = 60*$minute;
						$day    = 24*$hour;

						$ans["day"]    = floor($durasi/$day);
						$ans["hour"]   = floor(($durasi%$day)/$hour);
						$ans["minute"] = floor((($durasi%$day)%$hour)/$minute);
						$ans["second"] = floor(((($durasi%$day)%$hour)%$minute)/$second);
						if($ans["day"] != 0){
							$rata2 = $ans["day"];
							$durasi = 1;
						}if($ans["day"] == 0 && $ans["hour"] != 0){
							$rata2 = $ans["hour"];
							$durasi = 2;
						}if($ans["day"] == 0 && $ans["hour"] == 0 && $ans["minute"] != 0){
							$rata2 = $ans["minute"];
							$durasi = 3;
						}if($ans["day"] == 0 && $ans["hour"] == 0 && $ans["minute"] == 0 && $ans["second"] != 0){
							$rata2 = $ans["second"];
							$durasi = 4;
						}
						
					// echo $rata2;
				}
		?>
			
        // the value axis
        yAxis: {
            // min: 0,
            // max: 200,
			
			<?php if($durasi == 1){
				echo "min: 0,";
				echo "max: 7,";
			}?>
			<?php if($durasi == 2){
				echo "min: 0,";
				echo "max: 24,";
			}?>
			<?php if($durasi == 3){
				echo "min: 0,";
				echo "max: 60,";
			}?>
			<?php if($durasi == 4){
				echo "min: 0,";
				echo "max: 60,";
			}?>
			
            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
				 <?php if($durasi == 1){
					echo "text : 'HARI'";
				}?>
				<?php if($durasi == 2){
					echo "text : 'JAM'";
				}?>
				<?php if($durasi == 3){
					echo "text : 'MENIT'";
				}?>
				<?php if($durasi == 4){
					echo "text : 'DETIK'";
				}?>
            },
            plotBands: [
			<?php if($durasi == 1){?>
			{
                from: 0,
                to: 1,
                color: '#55BF3B' // green
            }, {
                from: 1,
                to: 3,
                color: '#DDDF0D' // yellow
            }, {
                from: 3,
                to: 7,
                color: '#DF5353' // red
            }<?php }?>
			<?php if($durasi == 2){?>
			{
                from: 0,
                to: 6,
                color: '#55BF3B' // green
            }, {
                from: 6,
                to: 8,
                color: '#DDDF0D' // yellow
            }, {
                from: 8,
                to: 24,
                color: '#DF5353' // red
            }<?php }?>
			<?php if($durasi == 3){?>
			{
                from: 0,
                to: 60,
                color: '#55BF3B' // green
            }<?php }?>
			<?php if($durasi == 2){?>
			{
                from: 0,
                to: 60,
                color: '#55BF3B' // green
            }<?php }?>
			]
        },
		
        series: [{
            name: 'Rata-rata',
            data: [<?php echo $rata2;?>],
            tooltip: {
                valueSuffix: 
				 <?php if($durasi == 1){
					echo "' HARI'";
				}?>
				<?php if($durasi == 2){
					echo "' JAM'";
				}?>
				<?php if($durasi == 3){
					echo "' MENIT'";
				}?>
				<?php if($durasi == 4){
					echo "' DETIK'";
				}?>
            }
        }]

    },
    // Add some life
    function (chart) {
        if (!chart.renderer.forExport) {
            setInterval(function () {
                var point = chart.series[0].points[0],
                    newVal,
                    inc = 0;

                newVal = point.y + inc;
                if (newVal < 0 || newVal > 200) {
                    newVal = point.y - inc;
                }

                point.update(newVal);

            }, 3000);
        }
    });
});

	</script>

</html>
