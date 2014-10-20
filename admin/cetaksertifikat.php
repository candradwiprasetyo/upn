<style>
body{
	font-family:"Monotype Corsiva";
}
.back_sertifikat{
	background:url(../images/ser.jpg) no-repeat;
	width:1024px;
}
</style>

		
		

<?php 
include "../koneksi.php";
$idj = $_GET['idj'];
$sql = @mysql_query("select * from tbl_pendaftaran where id_jadwal='$idj' ORDER BY nama ASC");
$q = mysql_query("select * from tbl_pendaftaran a, tbl_jadwal b, tbl_jurusan c, tbl_mk d  
where b.id_jur=c.id_jur and b.id_mk=d.id_mk and a.id_jadwal=b.id_jadwal and a.id_jadwal='$idj' order by b.hari asc");
$rww = @mysql_fetch_array($q);
?>
<body>
<div class="back_sertifikat">
<table width='100%' border=0 style="padding:50px; padding-top:100px;">
<tr><td rowspan=3 align=center><img src='../images/logo.png' width='75' height='75'></td><td><strong>SPDC Surabaya</strong></td>
<td align=right><strong>UPN "Veteran" Jawa Timur</strong></td><td rowspan=3 align=center><img src='../images/logo.gif' width='75' height='75'></td></tr>
<tr><td>Lembaga Pendidikan Profesi, Pelatihan, dan Sertifikasi</td><td align=right>Sertifikasi Komputer 2014</td></tr>
<tr><td>Jalan Gunung Anyar Jaya No. 14-16 Surabaya</td><td align=right>Jalan Raya Rungkut Madya Gunung Anyar Surabaya</td></tr>

</table>

<table width='50%' border=0 align=center >
<tr align='center'>
  <td ><span style="font-size:46px"><b>SERTIFIKAT</b></span></td></tr>
 
<tr align='center'>
  <td ><strong>Diberikan Kepada :</strong></td>
</tr>
<tr align='center'>
  <td >&nbsp;</td>
</tr>
<tr align='center'>
  <td ><span style="font-size:32px"><b><?php
  $q_siswa = mysql_query("select * from tbl_pendaftaran where id_siswa = '".$_GET['id_siswa']."'");
  $r_siswa = mysql_fetch_array($q_siswa);
  echo $r_siswa['nama'];
  ?></b></span></td>
</tr>
<tr align='center'>
  <td >&nbsp;</td>
</tr>
<tr align='center'>
  <td >Sebagai Peserta</td>
</tr>
<tr align='center'>
  <td >Pelatihan
Surfsoft Indonesia Professional Development Centre (SPDC) - Surabaya</td>
</tr>
<tr align='center'>
  <td >&nbsp;</td>
</tr>
<tr align='center'>
  <td >Diselenggarakan Oleh :</td>
</tr>
<tr align='center'>
  <td >UPN "Veteran" Jawa Timur</td>
</tr>
<tr align='center'>
  <td >&nbsp;</td>
</tr>
</table>
<table width="80%" border="0" cellspacing="0" cellpadding="0" style="margin:30px; margin-left:100px;">
  <tr>
    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">Ketua</td>
      </tr>
      <tr>
        <td align="center">Lembaga Pendidikan Profesi, Pelatihan, dan Sertifikasi</td>
      </tr>
      <tr>
        <td height="50" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top">(Tulus Driyo Utomo)</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
    <td align="right" valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">Rektor</td>
      </tr>
      <tr>
        <td align="center">UPN "Veteran" Jawa Timur</td>
      </tr>
      <tr>
        <td height="50" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">(Adri Driyo Utomo)</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
</div>
</body>