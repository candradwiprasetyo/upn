<?php
include('../koneksi.php');

function get_isset($data){
	$result = (isset($data)) ? $data : 0;
	return $result;
}

$idj = (isset($_GET['idj'])) ? $_GET['idj'] : null;
$id_siswa = (isset($_GET['id_siswa'])) ? $_GET['id_siswa'] : null;

mysql_query("update tbl_pendaftaran set id_jadwal = '$idj' where id_siswa= '$id_siswa'");
?>
<script>
alert("Simpan berhasil");
window.location = "index.php?page=edit_jurusan_siswa";
</script>
<?php
//header('Location: index.php?page=edit_jurusan_siswa');
			
?>