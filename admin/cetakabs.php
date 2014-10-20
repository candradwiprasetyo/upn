<?php 
include "../koneksi.php";
$idj = $_GET['idj'];
$sql = @mysql_query("select * from tbl_pendaftaran where id_jadwal='$idj' ORDER BY npm ASC");
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
<tr align='center'><td colspan='3'><b>ABSENSI PELATIHAN <?php echo $rww['nm_jur']; ?></b></td></tr>
<tr><td align='right'>Materi Kursus</td><td>:</td><td><?php echo $rww['nm_mk']; ?></td></tr>
<tr><td align='right'>Jurusan</td><td>:</td><td><?php echo $rww['nm_jur']; ?></td></tr>
<tr><td align='right'>Tempat</td><td>:</td><td><?php echo $rww['ruang']; ?></td></tr>
<tr><td align='right'>Hari</td><td>:</td><td><?php echo $rww['hari']; ?></td></tr>
<tr><td align='right'>Jam</td><td>:</td><td><?php echo $rww['jam']; ?></td></tr>
</table>
<br>
<table width='100%' border=1>
<tr align='center'><td width=2% rowspan=2>No</td><td width=7% rowspan=2>NPM</td><td width=25% rowspan=2>NAMA</td><td colspan=45%>Kehadiran ke-</td></tr>
<td align='center' width=3%>I</td><td width=3% align='center'>II</td><td width=3% align='center'>III</td><td width=3% align='center'>IV</td><td width=3% align='center'>V</td><td width=3% align='center'>VI</td><td width=3% align='center'>VII</td><td width=3% align='center'>VIII</td><td width=3% align='center'>IX</td><td width=3% align='center'>X</td>
<?php $i = 0;
while($rw=@mysql_fetch_array($sql)){ $i++;
?>
<tr>
<td><?php echo $i;?></td><td><?php echo $rw['npm'];?></td><td><?php echo strtoupper($rw['nama']);?></td>
<td width=3%>&nbsp;</td><td width=3%>&nbsp;</td><td width=3%>&nbsp;</td><td width=3%>&nbsp;</td><td width=3%>&nbsp;</td><td width=3%>&nbsp;</td>
<td width=3%>&nbsp;</td><td width=3%>&nbsp;</td><td width=3%>&nbsp;</td><td width=3%>&nbsp;</td>
</tr>
<?php } ?>
</table>
</body>