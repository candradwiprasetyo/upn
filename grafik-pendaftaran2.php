
<div id="hasil"></div>
<!--
<img src="images/coming-soon.gif">-->
<?php //echo $_SERVER['SERVER_NAME'] ; '. $_SERVER['SERVER_NAME'] .
//include_once 'ofc-library/open_flash_chart_object.php';
//open_flash_chart_object( 600, 300, 'http://'.$_SERVER['SERVER_NAME'].'/chart.php' );
?>

<script type="text/javascript" src="js/chart-jquery.js"></script>
<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: 'GRAFIK TAHUN <?php $yt =  date("Y"); $yt = $yt - 1; echo $yt; ?>'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                },
                labels: {
                    formatter: function() {
                        return this.value +''
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Siswa',
                marker: {
                    symbol: 'circle'
                },
				
                data: [
				<?php
				$year = date("Y");
				$year = $year - 1;
				$data = "";
				for($i = 1; $i <= 12; $i++){
					include 'koneksi.php';
					$query = mysql_query("SELECT count(*) as jumlah FROM tbl_pendaftaran WHERE YEAR(tgldaftar) = $year AND MONTH(tgldaftar) = $i");
					$row = mysql_fetch_object($query);
					
						
					echo $row->jumlah.",";
				}
				?>
				]
    
            }]
        });
    });
    

		</script>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>
<br /><br /><br /><br /><br />

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<div style="clear:both;"></div>
<br />
<a href="index.php?page=grafik-pendaftaran" style="text-decoration:none;"><span class="prev_button">Tahun Berikutnya</span></a>