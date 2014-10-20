		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						nama: "required",
						email: {
							required: true,
							email: true
						},
						pesan: "required"
					},
					messages: {
						nama: "* Kosong",
						email: "* Tidak Valid",
						pesan: "* Kosong",
					},
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('kirimpesan.php', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);
							
						document.frm.nama.value = "";
						document.frm.email.value = "";
						document.frm.pesan.value = "";
						});
					}
				});
			});
			</script>
<h2>Pelatihan SPDC Surabaya - UPN V Jatim</h2>
	<p>
SURFSOFT INDONESIA PROFESSIONAL DEVELEOPMENT CENTRE <br /><br>

Jalan Raya Gunung Anyar Jaya No. 14 - 16 Surabaya, 60294<br /><br />

Telp. 031-8720902 <br><br />

Email. info@spdc.surfsoft.co.id	<br><br />	

	</p>
	<div class="cleaner_h10"></div>
<div id="hasil"></div>
<form name="frm" method="post" id="frm">
<fieldset>
<legend>Silahkan Tinggalkan Pesan, Kritik & Saran Form di Bawah Ini</legend>
<table>
<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="30"></td></tr>
<tr><td>Email</td><td>: <input type="text" name="email" size="30"></td></tr>
<tr><td valign="top">Pesan</td><td valign="top">: <textarea name="pesan" rows="6" cols="40"></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Kirim Pesan" class="button"/></td></tr>
</table>
<div id="hasil" style=" background-color:#FF0000; color:#FFFFFF; text-align:center;"></div>
</fieldset>
</form>