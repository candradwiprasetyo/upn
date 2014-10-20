<?php
include('koneksi.php');
$pass=md5($_POST['password']);
$user=$_POST['username'];
//$login=sprintf("SELECT * FROM tbl_user WHERE username='$user' AND pass='$pass'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
$login="SELECT * FROM tbl_user WHERE username='$user' AND pass='$pass'";
//echo $login;exit;
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
$sta = $r['sta'];
//echo $ketemu; exit;
if ($ketemu > 0){
  session_start();
  if($sta=='1'){ //admin
  $_SESSION['namauser'] = $r['nama'];
  $_SESSION['kode'] = $r['id_user'];
  $_SESSION['username'] = $r['username'];
  $_SESSION['sta'] = $sta;
  echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>"; }
  if($sta=='2'){ //petugas
  $_SESSION['namauser'] = $r['nama'];
  $_SESSION['kode'] = $r['id_user'];
  $_SESSION['username'] = $r['username'];
  $_SESSION['sta'] = $sta;
  echo "<meta http-equiv='refresh' content='0; url=petugas/index.php'>"; }
}
else{
?>
<script>alert("Uppzzz... username atau password ente salah gan...!!!");</script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>