<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pendaftaran Pelatihan Online -  SPDC Surabaya :: UPN V Jatim</title>



<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
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
	
	$('#footerPan a').click(function() {
		var url = $(this).attr('href');
		$('#ambil').load(url);
		return false;
	});
});
</script>
<style>

.footer_text{
color:#fff;
text-decoration:none;
}
.footer_text:hover{
text-decoration:underline;
}
</style>
<link href="images/logo.png" rel="shortcut icon">
</head>
<div id="loading" style="display:none"><img src="images/loading.gif" /><br />Loading ...</div>
<body>
<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="index.php"><img src="images/logo.gif" title="SPDC Surabaya" alt="SPDC Surabaya" border="0" width="90" height="90" /></a> </div>
		<ul>
			<li><a href="home.php">Beranda</a></li>
			<li><a href="daftar-baru.php?idpilih=1">Pendaftaran Baru</a></li>
			
			<li><a href="calon-diterima.php">List Peserta</a></li>
			<?php //<li><a href="tentang-kami.php">Tentang Kami</a></li> <li><a href="calon-terdaftar.php">Calon Siswa Terdaftar</a></li>?>
			<li><a href="grafik-pendaftaran.php">Grafik Pendaftaran</a></li>
			<li><a href="hubungi-kami.php">Hubungi Kami</a></li>
		</ul>
		<form action="login-admin.php" method="post">
			<h2>Administrator Login</h2>
			<label>Log In:</label>
		<input type="text" id="Yourname" name="username" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';"  />
		<label>Password:</label>
		<input name="password" type="password" id="password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';"  />
		<input name="" type="submit" class="button" value="Login" />
		</form>
  </div>
  
  <div id="rightPan">
  	<h1>Sistem Online Pendaftaran Pelatihan<br />Surfsoft Indonesia Professional Development Centre (SPDC) - Surabaya<br><p> </p> </h1>
	<div id="ambil">
	<h2>Selamat Datang di Sistem Online Pendaftaran Pelatihan Mahasiswa UPN Veteran Jawa TImur Bekerjasama dengan SPDC Surabaya<hr></h2>
	<div class="cleaner_h20"></div><br><br /><br /><br /><br><br>
<article>
<font size="3">Pelatihan Sudah Dilakasanakan Tanggal <b>10 Maret 2014</b>, Apabila Ada Perubahan Jadwal Silahkan Telp ke <b>031-8720902</b> atau Ke PUSKOM UPN V JATIM</font> <br><br>
<img src="images/spdcupn.jpg">
<p align="justify"><font size="3" face="Verdana" color="#000000">
SurfSoft Indonesia Professional Development Centre (SPDC) adalah Lembaga Profesional Development Centre (Pusat Pengembangan Profesional) yang bergerak pada bidang pendidikan Teknologi Informasi, Bahasa, Bisnis dan Manajemen. Dan telah menetapkan visi sebagai cita-cita luhur yang akan dicapai dalam mengemban tugas Pendidikan Nasional yaitu:
<br><b>"Menjadi Lembaga Pendidikan disiplin, bermutu, kreatif dan inovatif dengan lulusan yang mampu bersaing global dan mandiri"</b>
<p align="justify">
<b>Maksimalkan Produktifitas dari Investasi Training Anda.</b> Gaji, Hardware dan Software merupakan unit berbiaya tinggi didalam struktur sistem informasi perusahaan, kontradiksinya produktifitas kerja tidak mengalir otomatis dari investasi tersebut. Hanya pemakai dengan ketrampilan yang baik dalam mengoptimalkan fitur peralatan tersebutlah yang dapat memaksimalkan tingkat pengembalian investasi yang sudah dikeluarkan oleh perusahaan. Computer Training merupakan investasi kecil yang dapat membayar investasi besar yang dikeluarkan perusahaan anda.</p>
<p align="justify"><b>
SPDC SURABAYA Pilihan Tepat!</b>
Dengan pengalaman selama 5 tahun dalam bidang Training, SPDC Surabaya Merupakan Pilihan Tepat bagi kebutuhan computer training baik untuk perusahaan maupun individu yang ingin meningkatkan keterampilannya.
</p>	</article></div>
  </div>
</div>
<div class="cleaner_h60"></div>
<div class="cleaner_h50"></div>
<div id="footermainPan">
  <div id="footerPan">
  <a href="home.php" class="footer_text">Beranda</a> | 
<a href="daftar-baru.php?idpilih=1" class="footer_text">Pendaftaran Baru</a> |
<a href="calon-diterima.php" class="footer_text">List Peserta</a> |
<a href="grafik-pendaftaran.php" class="footer_text">Grafik Pendaftaran</a> |
<a href="hubungi-kami.php" class="footer_text">Hubungi Kami</a>
  <br />
  Copyright @ Surfsoft Indonesia - 2013<br>Jalan Raya Gunung Anyar Jaya No.14-16 Surabaya | 031-8720902<br>
  Email : info@spdc.surfsoft.co.id / Website : <a href="http://spdc.surfsoft.co.id" target="_blank">http://spdc.surfsoft.co.id</a>
  </div>
</div>
</body>
</html>