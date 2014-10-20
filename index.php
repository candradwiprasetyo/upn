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
		if(url == "index.php?page=grafik-pendaftaran"){
			window.location.href ="index.php?page=grafik-pendaftaran";
		}else{
			$('#ambil').load(url);
			return false;
		}
	});
	
	$('#footerPan a').click(function() {
		var url = $(this).attr('href');
		if(url == "index.php?page=grafik-pendaftaran"){
			window.location.href ="index.php?page=grafik-pendaftaran";
		}else{
			$('#ambil').load(url);
			return false;
		}
	});
});
</script>
<style>
.prev_button{
	border-radius:3px; padding:5px; color: #fff; background:#C42B97;
	font-weight:bold;
	text-decoration:none;
}
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
            <li><a href="nilai.php">Nilai</a></li>
			<li><a href="index.php?page=grafik-pendaftaran">Grafik Pendaftaran</a></li>
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
						  	require_once("home.php");
						  }
						?>
    
    
    </div>
  </div>
</div>
<div class="cleaner_h60"></div>
<div class="cleaner_h50"></div>
<div id="footermainPan">
  <div id="footerPan">
  <a href="home.php" class="footer_text">Beranda</a> | 
<a href="daftar-baru.php?idpilih=1" class="footer_text">Pendaftaran Baru</a> |
<a href="calon-diterima.php" class="footer_text">List Peserta</a> |
<a href="nilai.php" class="footer_text">Nilai</a> |

<a href="index.php?page=grafik-pendaftaran" class="footer_text">Grafik Pendaftaran</a> |
<a href="hubungi-kami.php" class="footer_text">Hubungi Kami</a>
  <br />
  Copyright @ Surfsoft Indonesia - 2013<br>Jalan Raya Gunung Anyar Jaya No.14-16 Surabaya | 031-8720902<br>
  Email : info@spdc.surfsoft.co.id / Website : <a href="http://spdc.surfsoft.co.id" target="_blank">http://spdc.surfsoft.co.id</a>
  </div>
</div>
</body>
</html>