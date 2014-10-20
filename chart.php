<?php

// generate some random data:

include('koneksi.php');
$q = mysql_query("select count(nun) as npm,nama from tbl_pendaftaran group by id_jadwal");
while($r=mysql_fetch_array($q))
{
  $data[] = $r['npm'];
  $nilai[] = $r['nama'];
}

// use the chart class to build the chart:
include_once( 'ofc-library/open-flash-chart.php' );
$g = new graph();

// Spoon sales, March 2007
$g->title( 'Grafik Pendaftaran Pelatihan '. date("Y"), '{font-size: 20px;}' );

$g->set_data( $data );
$g->line_hollow( 2, 5, '0x80a033', 'Nama Mhs', 10 );

// label each point with its value
$g->set_x_labels( $nilai);

// set the Y max
$g->set_y_max( 100 );
// label every 20 (0,20,40,60)
$g->y_label_steps( 10 );

// display the data
echo $g->render();
?>