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
<title>Administrator :: Sistem Pendaftaran Pelatihan</title>
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

 function search_form(url){
		var formx = document.form_search;
		i_search = formx.i_search.value;
		if(i_search == ""){
			window.location.href = url;
		}else{
			window.location.href = url + "&search=" + i_search;
		}
			return false;
	}

$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#leftPan ul li a').click(function() {
		var url = $(this).attr('href');
		if(url == "index.php?page=grafik-pendaftaran"){
			window.location.href = url;
		}else{
			$('#ambil').load(url);
			return false;
		}
	});
	
	$('#footerPan a').click(function() {
		var url = $(this).attr('href');
		if(url == "index.php?page=grafik-pendaftaran"){
			window.location.href = url;
		}else{
			$('#ambil').load(url);
			return false;
		}
	});	
	
});
</script>
<style>
.logout_button{
	border-radius:3px; padding:5px; color: #fff; background:#C42B97; margin-top:10px;
	font-weight:bold;
	text-decoration:none;
}
.prev_button{
	border-radius:3px; padding:5px; color: #fff; background:#C42B97;
	font-weight:bold;
	text-decoration:none;
}
.logout_button:hover{
	background:#7D1560;
}
.footer_text{
color:#fff;
text-decoration:none;
}
.footer_text:hover{
text-decoration:underline;
}
</style>
</head>
<div id="loading" style="display:none"><img src="../images/loading.gif" /><br />Data ne sik Loading rek...!!! Enteni disek.</div>
<body>
<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="index.php"><img src="../images/logo.gif" title="SPDC Surabaya" alt="SPDC Surabaya" border="0" width="90" height="90" /></a> </div>
		<ul>
			<!--<li><a href="home.php">Beranda</a></li>-->
			<li><a href="daftar-siswa.php">Daftar Calon Siswa</a></li>
			<li><a href="daftar-user.php">Daftar User / Pengguna</a></li>
			<li><a href="daftar-jur.php">Daftar Jurusan</a></li>
			<li><a href="nilai.php">Nilai</a></li>
            <li><a href="index.php?page=grafik-pendaftaran">Grafik Pendaftaran</a></li>
			<li><a href="tambah-user.php">Tambah Pengguna</a></li>
			<!--<li><a href="export-excell.php">Export Laporan ke Excell</a></li>-->
			<li><a href="hubungi.php">Hubungi Kami</a></li>
			<!--<li><a href="grafik-pendaftaran.php">Grafik Pendaftaran</a></li>-->
			
            
		</ul><br>
		<div style="width:100%; height:30px; "></div>
	<div style="padding:10px;">Selamat Datang, <b><?php echo $_SESSION['namauser']; ?></b><br />Anda login sebagai : <strong><?php echo $_SESSION['username']; ?></strong>
	<br><br><a href="logout.php" style="text-decoration:none;"><span class="logout_button">LOGOUT</span></a>
	</div>
  </div>
  
  <div id="rightPan">
  	<h1>Sistem Online Pendaftaran Pelatihan<br />Surfsoft Indonesia Professional Development Centre (SPDC) - Surabaya<br><p> </p> </h1>
	<div id="ambil">
	
     <?php
      function MyInclude($file) {
        if(file_exists($file)) {
           require_once($file);
        } else {
            throw(new Exception('Halaman tidak ditemukan'));
        }
    }
          
		  
						   $page = (isset($_GET['page'])) ? $_GET['page'] : "";
						  if($page){
							  try{
						  	MyInclude($page.".php");
										  		}
									catch(Exception $e){
										echo "<div class=\"judul\">".$e->getMessage()."</div>";
										
										}
						  } else {
						  	require_once("welcome.php");
						  }
						?>
    
	<div class="cleaner_h20"></div>
  </div>
</div>
<div class="cleaner_h60"></div>
<div class="cleaner_h50"></div>
<div id="footermainPan">
  <div id="footerPan">
  <!--<a href="home.php" class="footer_text">Beranda</a> | -->
  <a href="daftar-siswa.php" class="footer_text">Daftar Calon Siswa</a> | 
  <a href="daftar-user.php" class="footer_text">Daftar User / Pengguna</a> |
  <a href="daftar-jur.php" class="footer_text">Daftar Jurusan</a> |
  <a href="nilai.php" class="footer_text">Nilai</a> |
  <a href="index.php?page=grafik-pendaftaran" class="footer_text">Grafik Pendaftaran</a> |
  <a href="tambah-user.php" class="footer_text">Tambah Pengguna</a> |
  <!--<a href="export-excell.php" class="footer_text">Export Laporan ke Excell</a> |-->
 <a href="hubungi.php" class="footer_text"> Hubungi Kami</a>
  <br />
  Copyright @ Surfsoft Indonesia - 2013<br>Jalan Raya Gunung Anyar Jaya No.14-16 Surabaya<br>
  Email : info@spdc.surfsoft.co.id / Website : <a href="http://spdc.surfsoft.co.id" target="_blank">http://spdc.surfsoft.co.id</a>
  </div>
</body>
</html>
<?php
}
?>