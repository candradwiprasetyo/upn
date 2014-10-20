
<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
	
	
	<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>

	
<script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
	$('#example').dataTable();
} );


	</script>

<?php include "koneksi.php"; 
$idjj = $_POST['id_jur'];
$page_query = mysql_query("SELECT COUNT(*) tot FROM tbl_jadwal a, tbl_jurusan b, tbl_mk c, tbl_pendaftaran d where a.id_jadwal=d.id_jadwal 
and a.id_jur=b.id_jur and a.id_mk=c.id_mk
and a.id_jur='$idjj'");
$ry = mysql_fetch_array($page_query);?>
Total Pendaftar : <b><?php echo $ry['tot'];?> </b> Mahasiswa
<table id="example" class="display" cellspacing="0" width="100%" style="border:1px solid #ddd;">
<thead style="background:#fff">
<tr><td>No.</td><td>NPM</td><td>Nama Mahasiswa</td><td>Jenis Pelatihan</td></tr>
</thead>
<?php 

/*$per_page = 15;
$page_query = mysql_query("SELECT COUNT(*) FROM tbl_jadwal a, tbl_jurusan b, tbl_mk c, tbl_pendaftaran d where a.id_jadwal=d.id_jadwal 
and a.id_jur=b.id_jur and a.id_mk=c.id_mk
and a.id_jur='$idjj'");
$pages = ceil(mysql_result($page_query, 0) / $per_page);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_page;*/
//end paging

$qq = "select * from tbl_jadwal a, tbl_jurusan b, tbl_mk c, tbl_pendaftaran d where a.id_jadwal=d.id_jadwal 
and a.id_jur=b.id_jur and a.id_mk=c.id_mk and a.id_jur='$idjj' order by d.npm asc";
//and a.id_jur='$idjj' order by d.npm asc LIMIT $start, $per_page";
$q = mysql_query($qq);

$n = 1;
while($r = mysql_fetch_array($q))
{
	if($idjj==1){ $warna="#B3D577"; } elseif($idjj=='2') {$warna="#D87676";}
	echo '<tr bgcolor="'.$warna.'"><td>'.$n.'</td><td>'.$r["npm"].'</td><td>'.$r["nama"].'</td><td>'.$r["nm_mk"].'</td></tr>';
	$n++;
}
?>
</table>
<?php 
/*if($pages >= 1 && $page <= $pages){
    for($x=1; $x<=$pages; $x++){
        echo ($x == $page) ? '<b>Halaman <a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
    }
}*/
die(); ?>