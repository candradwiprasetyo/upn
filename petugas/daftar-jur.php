<script type="text/javascript">
	$(document).ready(function() {
		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "hapuspetugas.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
	})
	</script>
<link href="../thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>
<h2>Daftar Petugas / User Pendaftaran Online</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Daftar Kuota Pendaftaran perJurusan</legend>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Nama Jurusan</td><td>Matakuliah</td><td>Hari / Jam</td><td>Ruang</td><td>Kuota</td><td colspan="2">Cetak</td></tr>
<?php
include('../koneksi.php');
//$q = mysql_query("select * from tbl_pendaftaran a, tbl_jadwal b, tbl_jurusan c, tbl_mk d  where b.id_jur=c.id_jur and b.id_mk=d.id_mk and a.id_jadwal=b.id_jadwal order by b.hari asc");
$q = mysql_query("select * from tbl_jadwal b, tbl_jurusan c, tbl_mk d 
where b.id_jur=c.id_jur and b.id_mk=d.id_mk order by b.hari desc");
$n = 1;
while($r = mysql_fetch_array($q))
{ //<div id="box-link">
	echo '<tr class="content"><td>'.$n.'</td><td>'.$r["nm_jur"].'</td><td>'.$r["nm_mk"].'</td><td>'.$r["hari"].' <br> '.$r["jam"].'</td><td>'.$r["ruang"].'</td>
	<td>'.$r["kuota"].'</td>
	<td align=center><a href="cetakabs.php?idj='.$r['id_jadwal'].'"  title="Cetak Absensi - '.$r["nm_mk"].'" target=_blank>
	<img src=../images/printer.gif></div></a></td> 
	</tr>';
	$n++;
}
?>
</table>
</fieldset>
	