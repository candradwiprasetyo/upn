<?php
include('koneksi.php');
						$nama = $_POST['nama'];
						$email = $_POST['email'];
						$pesan = $_POST['pesan'] ;
mysql_query("insert into tbl_hubungi
	(nama,email,pesan)
	values
	('$nama','$email','$pesan')
");
$header = "From: info@spdc.surfsoft.co.id";
$subjek	= "Konfirmasi Bukutamu $nama - SPDC Surabaya";
$psn 	= "Terima Kasih Telah Mengunjungi Web Kami
Kami Tunggu Kabar Baik dari Anda

JALAN RAYA GUNUNG ANYAR JAYA NO. 14 - 16 SURABAYA 60294
Jika pesan ini tidak di butuhkan, Anda boleh menghapusnya.
==============================================================
Terima Kasih
Hormat Kami,
SPDC (Surfsoft Proffesional Development Centre) Surabaya
JALAN RAYA GUNUNG ANYAR JAYA NO. 14 - 16 SURABAYA 60294
Telp. 031 - 8720 902
Homepage : info@spdc.surfsoft.co.id / http://spdc.surfsoft.net";
if(mail($email,$subjek,$psn,$header))
{
?><script>
alert("Terima Kasih Mengunjungi, Konfirmasi Dikirim Lewat Email <?PHP echo $email ?>");
</script>
<?php
}
else
{
echo "Pesan Gagal di Kirim";
}
echo "<div style='background-color:red; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim</div>";
?>