<?php include "koneksi.php"; ?>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
 
return false;
return true;
}
//-->
</SCRIPT>

<link href="thickbox.css" rel="stylesheet" type="text/css" />
<script src="js/thickbox.js" type="text/javascript"></script>
<?php
$npm = $_POST['npm']; $idpilihkoe = $_POST['idpilih'];
if($idpilihkoe==1){ ?>
<fieldset style="width:100%">
<legend>Daftar Jadwal Pelatihan - <i>Silahkan Pilih Salah Satu dan Sesuai Dengan Jurusan</i></legend>
NPM Anda : <?=$npm;?>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr align="center"><td>No.</td><td>Jurusan</td><td>Jenis Pelatihan</td><td>Hari - Jam</td><td>Tempat</td><td>Kuota</td><td>Aksi</td></tr>
<?php
include('koneksi.php');
$npmkoe = str_split($npm);
//echo "$npmkoe[2]-$npmkoe[3]";
$cek = "select * from tbl_pendaftaran where npm='$npm'"; $coo = mysql_query($cek);
$nums = mysql_num_rows($coo);
if($nums>=1){
echo "<br>Maaf Anda Sudah Pernah Melakukan Pendaftaran di Sistem ini, Terima Kasih ....";
return true;	
}else
$cod = "$npmkoe[2]$npmkoe[3]";
//echo $cod; exit;
if(($cod=='24')||($cod=='25')){ //PERTANIAN
$q = mysql_query("select * from tbl_mk a, tbl_jurusan b, tbl_jadwal c where a.id_mk=c.id_mk and b.id_jur=c.id_jur and b.kodenpm='2'");}
elseif(($cod=='51')||($cod=='52')||($cod=='53')||($cod=='54')){ //FTSP
$q = mysql_query("select * from tbl_mk a, tbl_jurusan b, tbl_jadwal c where a.id_mk=c.id_mk and b.id_jur=c.id_jur and b.kodenpm='5'");}
elseif(($cod=='71')||($cod=='72')){ //HUKUM
$q = mysql_query("select * from tbl_mk a, tbl_jurusan b, tbl_jadwal c where a.id_mk=c.id_mk and b.id_jur=c.id_jur and b.kodenpm='71'");}
else // NOT ALL
$q = mysql_query("select * from tbl_mk a, tbl_jurusan b, tbl_jadwal c where a.id_mk=c.id_mk and b.id_jur=c.id_jur and b.kodenpm='$npmkoe[2]$npmkoe[3]'");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tr class="content"><td>'.$n.'</td><td>'.$r["nm_jur"].'</td><td>'.$r["nm_mk"].'</td><td>'.$r["hari"].' / '.$r["jam"].' wib</td><td>'.$r["ruang"].'</td>
	<td>'.$r["kuota"].'</td><td>';
	if($r['kuota']=='0'){echo "Penuh";}else
	echo '<a href="daftar-baru2.php?idx='.$r['id_jadwal'].'&npm='.$npm.'" class="thickbox" title="Pilih Data - '.$r["nm_mk"].'">
	<div id="box-link">Pilih</div></a></td> 
	</tr>';
	$n++;
}
?>
</table>
</fieldset>
<?php }  $idpilih = $_GET['idx']; $npm = $_GET['npm']; 
//echo "00-$idpilih";
if($idpilih > 0){ 
//echo "00koe-$idpilih";
$ssql = mysql_query("select * from tbl_mk a, tbl_jurusan b, tbl_jadwal c where a.id_mk=c.id_mk and b.id_jur=c.id_jur and c.id_jadwal='$idpilih'");
$rr = mysql_fetch_array($ssql);	
	?>
<script type="text/javascript">
			$(function(){
            $('#tanggal_lahir').datepicker({dateFormat: 'd MM yy'});
			});
		</script>
<form name="frm" method="post" id="frm" action="kirimpendaftaran.php">
<fieldset>
<legend>Silahkan Isi Form Pendaftaran di Bawah Ini</legend>
<table>
<tr><td>NPM</td><td>: <input type="text" name="npm" size="11" maxlength="10" onkeypress="return isNumberKey(event)" value="<?=$npm?>"></td></tr>
<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="50"></td></tr>
<tr><td>Alamat</td><td>: <input type="text" name="alamat" size="50"></td></tr>
<tr><td>Tempat Lahir</td><td>: <input type="text" name="tempat_lahir" size="30"></td></tr>
<tr><td>Tanggal Lahir</td><td>: 
<select name="tgl"><?php
for($i=1;$i<32;$i++){ ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
</select> - 
<select name="bln"><?php
for($i=1;$i<13;$i++){ ?>
	<option value="<?php echo $i; ?>"><?php if($i==1){echo "Januari";} 
		if($i==2){echo "Februari";}  if($i==4){echo "April";}  if($i==6){echo "Juni";}  if($i==8){echo "Agustus";}  if($i==10){echo "Oktober";} 
		if($i==3){echo "Maret";}  if($i==5){echo "Mei";}  if($i==7){echo "Juli";}  if($i==9){echo "September";}  if($i==11){echo "November";}  if($i==12){echo "Desember";} ?></option><?php } ?>
</select> - 
<select name="thn"><?php
for($i=1970;$i<2008;$i++){ ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
</select>
</td></tr>
<tr><td>No Telp / HP</td><td>: <input type="text" name="telp" size="30"></td></tr>
<tr><td>Email</td><td>: <input type="text" name="email" size="50"></td></tr>
<tr><td>Jurusan</td><td>: <?php echo $rr['nm_jur']; ?>
	<input type="hidden" name="jur" size="30" value="<?php echo $rr['nm_jur']; ?>">
</td></tr>
<tr><td>Jadwal</td><td>: <?php echo $rr['hari']; ?> - <?php echo $rr['jam']; ?> wib
	<input type="hidden" name="hari" size="30" value="<?php echo $rr['hari']; ?>">
	<input type="hidden" name="jam" size="30" value="<?php echo $rr['jam']; ?>">
	<input type="hidden" name="idj" size="30" value="<?php echo $rr['id_jadwal']; ?>">
</td></tr>
<tr><td>Ruang</td><td>: <?php echo $rr['ruang']; ?>
	<input type="hidden" name="ruang" size="30" value="<?php echo $rr['ruang']; ?>">
</td></tr>
<tr><td></td><td><input type="submit" value="Kirim Pendaftaran" class="button" name="simpand"/></td></tr>
</table>
<div id="hasil" style=" background-color:#FF0000; color:#FFFFFF; text-align:center;"></div>
</fieldset>
</form>
<?php } ?>	

