<?php include "koneksi.php"; ?>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>NPM</td><td>Nama Mahasiswa</td><td>Jenis Pelatihan</td></tr>
<?php 

$idjj = $_POST['id_jur'];

$qq = "select * from tbl_jadwal a, tbl_jurusan b, tbl_mk c, tbl_pendaftaran d where a.id_jadwal=d.id_jadwal 
and a.id_jur=b.id_jur and a.id_mk=c.id_mk
and a.id_jur='$idjj' order by d.npm asc";
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
<?php die(); ?>