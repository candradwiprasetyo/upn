<?php
session_start();
if(empty($_SESSION['namauser']) and empty($_SESSION['kode']))
{
	echo "<p>Anda tidak berhak mengakses halaman ini.</p>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Adminsitrator :: Sistem Pendaftaran Pelatihan</title>
<link href="../images/logo.png" rel="shortcut icon">
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

});

$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#leftPan ul li a').click(function() {
		var url = $(this).attr('href');
		$('#ambil').load(url);
		return false;
	});
});
</script>

</head>
<div id="loading" style="display:none"><img src="../images/loading.gif" /><br />Data ne sik Loading rek...!!! Enteni disek.</div>
<body>
<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="index.php"><img src="../images/logo.gif" title="SPDC Surabaya" alt="SPDC Surabaya" border="0" width="90" height="90" /></a> </div>
		<ul>
			<li><a href="home.php">Beranda</a></li>
			<li><a href="daftar-jur.php">Daftar Jurusan</a></li>
			<li><a href="logout.php">Keluar / Log Out</a></li>
		</ul><br>
	<div style="padding:10px;">Selamat Datang, <b><?php echo $_SESSION['namauser']; ?></b><br />Anda login sebagai Petugas : <strong><?php echo $_SESSION['username']; ?></strong></div>
  </div>
  
  <div id="rightPan">
  	<h1>Sistem Online Pendaftaran Pelatihan<br />Surfsoft Indonesia Professional Development Centre (SPDC) - Surabaya<br><p> </p> </h1>
	<div id="ambil">
	<h2>Selamat Datang di Sistem Online Pendaftaran Pelatihan Mahasiswa UPN Veteran Jawa TImur Bekerjasama dengan SPDC Surabaya</h2>
	<div class="cleaner_h20"></div>
  </div>
</div>
<div class="cleaner_h60"></div>
<div class="cleaner_h50"></div>
<div id="footermainPan">
  <div id="footerPan">
  Beranda | Pendaftaran Siswa Baru | Calon Siswa Terdaftar | Calon Siswa Diterima | Tentang Kami | Grafik Pendaftaran | Hubungi Kami
  <br />
  Copyright @ Surfsoft Indonesia - 2013<br>Jalan Raya Gunung Anyar Jaya No.14-16 Surabaya<br>
  Email : info@spdc.surfsoft.co.id / Website : <a href="http://spdc.surfsoft.co.id" target="_blank">http://spdc.surfsoft.co.id</a>
  </div>
</body>
</html>
<?php
}
?>