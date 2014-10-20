<?php
include('koneksi.php');?>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#frm").validate({
		debug: false,
		submitHandler: function(form) {
		// do other stuff for a valid form
			$.post('calon-terdaftar.php', $("#frm").serialize(), function(data) {
			$('#hasil').html(data);
				document.frm.id_jur.value="";
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
<legend>Data Nama Pendaftar Pelatihan</legend>
<form method="post" action="" name="frm" id="frm">
	Pilih Jurusan : <select name="id_jur"  >
   		 <option value="<?php if($idd){echo $rt['KD_BELI'];} else{echo "-";} ?>">
   		 <?php echo "Silahkan Pilih"; ?>
      	</option>
   		 <?php 
			$query=mysql_query("SELECT * from tbl_jurusan order by nm_jur asc");
			while($row=mysql_fetch_array($query)){
			echo "<option value='".$row['id_jur']."'>";
			echo "".$row['nm_jur']." ";
			echo "</option>";
			}
			?>
 </select> &nbsp; <input type="Submit" name="cari" value="Pilih" class="" /> </form>
<br />
<div class="cleaner_h5"></div>
<div id='hasil'></div>
</fieldset>
</div>
	