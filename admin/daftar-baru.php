<?php
include('../koneksi.php');?>
<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#frm").validate({
		debug: false,
		submitHandler: function(form) {
		// do other stuff for a valid form
			$.post('daftar-baru2.php', $("#frm").serialize(), function(data) {
			$('#hasil').html(data);
				document.frm.npm.value="";
				document.frm.idpilih.value="";
			});
		}
	});
});
</script>

<?php if(isset($_POST['cari'])){
 
$idjj = $_POST['id_jur'];
echo "masuk-$idjj";
$qq = "select * from tbl_jadwal a, tbl_jurusan b, tbl_mk c, tbl_pendaftaran d where a.id_jadwal=d.id_jadwal 
and a.id_jur=b.id_jur and a.id_mk=c.id_mk
and a.id_jur='$idjj' order by d.npm asc"; 
}
?>

<div id="rightPan">
<h2>List Nama Pendaftar Pelatihan</h2>

<fieldset>
<legend>Masukkan NPM Untuk Mendaftar</legend>
<form method="post" action="" name="frm" id="frm">
NPM : <input name="idpilih" type="hidden" value="1" /><input name="npm" type="number" required /> &nbsp; <input type="Submit" name="cari" value="Pilih" class="" /> </form>
<br />
</fieldset>
<div class="cleaner_h5"></div>
<div id='hasil'></div>
</div>
<a href="index.php?page=edit_jurusan_siswa" style="text-decoration:none;"><span class="prev_button">Edit Jurusan Siswa</span></a>	
	