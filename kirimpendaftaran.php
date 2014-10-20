<?php
include('koneksi.php');
if(isset($_POST['simpand'])){
$nama 	= $_POST['nama'];
$alamat = $_POST['alamat'];
$npm 	= $_POST['npm'];
$tempat	= $_POST['tempat_lahir'];
$telp	= $_POST['telp'];	
$email	= $_POST['email'];
$tgl 	= $_POST['tgl']; $bln 	= $_POST['bln']; $thn 	= $_POST['thn'];
$tgls 	= "$thn-$bln-$tgl";
$idjj	= $_POST['idj'];
$todaytgl = date("Y-m-d");
$todayjam = date("G-i-s");
$today = "$todaytgl $todayjam";

if(($npm=='')||($npm=='empty')||($npm==' ')){echo "NPM Tidak Boleh Kosong<br>"; 
echo "Loading &nbsp; <img src='images/loading.gif' width='25' height='10'>";
echo "<head><meta http-equiv=\"Refresh\" content=\"2; URL=.\"></head>";exit;} 
elseif(($nama=='')||($nama=='empty')){echo "NAMA Tidak Boleh Kosong"; 
echo "Loading &nbsp; <img src='images/loading.gif' width='25' height='10'>";
echo "<head><meta http-equiv=\"Refresh\" content=\"2; URL=.\"></head>";exit;} 
elseif(($email=='')||($email=='empty')){echo "EMAIL Tidak Boleh Kosong"; 
echo "Loading &nbsp; <img src='images/loading.gif' width='25' height='10'>";
echo "<head><meta http-equiv=\"Refresh\" content=\"2; URL=.\"></head>";exit;} 

$cekkuota = mysql_query("select * from tbl_jadwal where id_jadwal='$idjj'");
$okkuota = mysql_fetch_array($cekkuota); $kuo = $okkuota['kuota']; 
$cekk = mysql_query("select * from tbl_pendaftaran where npm='$npm'");
$okk = mysql_fetch_array($cekk);
$nums = mysql_num_rows($cekk);

if($kuo=='0'){
	echo "Maaf Kuota Kelas / Sesi ini Telah Habis";
echo "Loading &nbsp; <img src='images/loading.gif' width='25' height='10'>";
echo "<head><meta http-equiv=\"Refresh\" content=\"2; URL=.\"></head>";exit;
}
else
if($nums > 0){echo "Maaf NPM Anda Sudah Terdaftar";
echo "Loading &nbsp; <img src='images/loading.gif' width='25' height='10'>";
echo "<head><meta http-equiv=\"Refresh\" content=\"2; URL=.\"></head>";exit;
}
else{
$nkuo = 0;
$nkuo = $kuo - 1;
$input = mysql_query("insert into tbl_pendaftaran (npm,nama,alamat,tmp_lahir,tgl_lahir,telp,email,id_jadwal,tgldaftar) 
values ('$npm','$nama','$alamat','$tempat','$tgls','$telp','$email','$idjj','$today')");
$edt = mysql_query("update tbl_jadwal set kuota='$nkuo' where id_jadwal='$idjj'");
//echo "insert into from tbl_pendaftaran values ('','$npm','$nama','$alamat','$tempat','$tgls','$telp','$email','$idjj','$today')"; exit;
	}	
}
echo "Data Berhasil Disimpan<br>";
echo "Loading &nbsp; <img src='images/loading.gif' width='25' height='10'>";
echo "<head><meta http-equiv=\"Refresh\" content=\"2; URL=.\"></head>";exit;

?>