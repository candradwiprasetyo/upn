

<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					
				
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('proses-nilai.php?idj=<?= $_GET['idj']?>', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);
							
					
						});
					}
				});
			});
			</script>
		
		

<?php 
include "../koneksi.php";
$idj = $_GET['idj'];
$sql = @mysql_query("select * from tbl_pendaftaran where id_jadwal='$idj' ORDER BY nama ASC");
$q = mysql_query("select * from tbl_pendaftaran a, tbl_jadwal b, tbl_jurusan c, tbl_mk d  
where b.id_jur=c.id_jur and b.id_mk=d.id_mk and a.id_jadwal=b.id_jadwal and a.id_jadwal='$idj' order by b.hari asc");
$rww = @mysql_fetch_array($q);
?>
<body onload=print()>
<table width='100%' border=0>
<tr><td rowspan=3 align=center><img src='../images/logo.png' width='75' height='75'></td><td>SPDC Surabaya</td>
<td align=right>UPN "Veteran" Jawa Timur</td><td rowspan=3 align=center><img src='../images/logo.gif' width='75' height='75'></td></tr>
<tr><td>Lembaga Pendidikan Profesi, Pelatihan, dan Sertifikasi</td><td align=right>Sertifikasi Komputer 2014</td></tr>
<tr><td>Jalan Gunung Anyar Jaya No. 14-16 Surabaya</td><td align=right>Jalan Raya Rungkut Madya Gunung Anyar Surabaya</td></tr>

</table>

<table width='50%' border=0 align=center>
<tr align='center'>
  <td colspan='3'><b>DAFTAR NILAI  <?php echo $rww['nm_jur']; ?></b></td></tr>
<tr><td align='right'>Materi Kursus</td><td>:</td><td><?php echo $rww['nm_mk']; ?></td></tr>
<tr><td align='right'>Jurusan</td><td>:</td><td><?php echo $rww['nm_jur']; ?></td></tr>
<tr><td align='right'>Tempat</td><td>:</td><td><?php echo $rww['ruang']; ?></td></tr>
<tr><td align='right'>Hari</td><td>:</td><td><?php echo $rww['hari']; ?></td></tr>
<tr><td align='right'>Jam</td><td>:</td><td><?php echo $rww['jam']; ?></td></tr>
</table>
<br>
<form method="post" action="" name="frm" id="frm">
<table width='100%' border=1 cellpadding="4" cellspacing="0" bordercolor="#eee" bgcolor="#fff">
<tr align='center'><td width=5% rowspan=2>NO</td><td width=9% rowspan=2>NPM</td><td width=26% rowspan=2>NAMA</td>
<td colspan=8%>NILAI</td></tr>
  <td align='center' width=8%>Tugas I</td>
  <td width=8% align='center'>Tugas II</td>
  <td width=8% align='center'>Tugas III</td>
  <td width=8% align='center'>UTS</td>
  <td width=9% align='center'>UAS</td>
   <td width=9% align='center'>TOTAL</td>
    <td width=9% align='center'>RATA-RATA</td>
     <td width=9% align='center'> Sertifikat</td>
<?php 
$i = 0;
while($rw=@mysql_fetch_array($sql)){ $i++;
	$nilai1 = "&nbsp;";
	$nilai2 = "&nbsp;";
	$nilai3 = "&nbsp;";
	$uts = "&nbsp;";
	$uas = "&nbsp;";
	$total = "&nbsp;";
	$rata_rata = "&nbsp;";
$q_count_nilai = mysql_query("select count(*) as jumlah_nilai from tbl_nilai where id_jadwal = '".$rw['id_jadwal']."' and id_siswa = '".$rw['id_siswa']."'");
$r_count_nilai = mysql_fetch_object($q_count_nilai);
if($r_count_nilai->jumlah_nilai > 0){
	$q_nilai = mysql_query("select * from tbl_nilai where id_jadwal = '".$rw['id_jadwal']."' and id_siswa = '".$rw['id_siswa']."'");
	$r_nilai = mysql_fetch_object($q_nilai);
	$nilai1 = $r_nilai->nilai1;
	$nilai2 = $r_nilai->nilai2;
	$nilai3 = $r_nilai->nilai3;
	$uts = $r_nilai->uts;
	$uas = $r_nilai->uas;
	$total = $r_nilai->total;
	$rata_rata = $r_nilai->rata_rata;
}
?>
<tr>
<td><?php echo $i;?></td><td><?php echo $rw['npm'];?></td><td><?php echo strtoupper($rw['nama']);?></td>
<td width=8% align="center"><?= $nilai1?></td>
<td width=8% align="center"><?= $nilai2?></td>
<td width=8% align="center"><?= $nilai3?></td>
<td width=8% align="center"><?= $uts?></td>
<td width=9% align="center"><?= $uas?></td>
<td align="center"><?= $total?></td>
<td align="center" bgcolor="#0099FF" style="color:#fff; font-weight:bold;"><?= $rata_rata?></td>
<td width=9% align="center"><a href="cetaksertifikat.php?id_siswa=<?php echo $rw['id_siswa']; ?>&idj=<?php echo $idj?>"  title="Cetak Sertifikat" target=_blank>
	<img src=../images/printer.gif></a></td>
</tr>
<?php } ?>
</table>
<br>
<a href="export_nilai_excel.php?idj=<?= $idj?>" style="text-decoration:none;"><span style="padding:5px; background-color:#C42B97; color:#fff; text-decoration:none;">Export Excel</span></a>
<br>
</form><br>
<br>
</body>