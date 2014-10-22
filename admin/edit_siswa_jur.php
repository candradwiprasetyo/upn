

<script type="text/javascript">
	$(document).ready(function() {
		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "hapuspetugas.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
		 
	
		 
		 $(function() {
		$('#i_next a').click(function() {
			var url = $(this).attr('href');
			$('#ambil').load(url);
			return false;
		});
	
		$('#i_sort a').click(function() {
			var url = $(this).attr('href');
			$('#ambil').load(url);
			return false;
		});
		
		
	});
	})
	</script>
<link href="../thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>
<h2>Pilih Jurusan</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Daftar Kuota Pendaftaran perJurusan</legend>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><form id="form_search" name="form_search" method="post" action="" onsubmit="return search_form('index.php?page=edit_siswa_jur&id_siswa=<?= $_GET['id_siswa']?>')">
      Mata Kuliah<input type="text" name="i_search" id="i_search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; }?>" />
    </form></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#eee" bordercolordark="#FFFFFF">
  
   <?php
if(isset($_GET['col1']) && $_GET['col1']==1){ $col1 = "col1=2"; $col = "&col1=2";  }
else { $col1 = "col1=1"; $col = "&col1=1"; }

if(isset($_GET['col2']) && $_GET['col2']==1){ $col2 = "col2=2"; $col = "&col2=2"; }
else { $col2 = "col2=1"; $col = "&col2=1"; }

if(isset($_GET['col3']) && $_GET['col3']==1){ $col3 = "col3=2"; $col = "&col3=2"; }
else { $col3 = "col3=1"; $col = "&col3=1";}

if(isset($_GET['col4']) && $_GET['col4']==1){ $col4 = "col4=2"; $col = "&col4=2"; }
else { $col4 = "col4=1"; $col = "&col4=1";}

if(isset($_GET['col5']) && $_GET['col5']==1){ $col5 = "col5=2"; $col = "&col5=2"; }
else { $col5 = "col5=1"; $col = "&col5=1";}


if(isset($_GET['col1']) && $_GET['col1']==1){ 
$col = "&col1=1";  }
else if(isset($_GET['col1']) && $_GET['col1']==2){ 
$col = "&col1=2"; 
}else if(isset($_GET['col2']) && $_GET['col2']==1){ 
$col = "&col2=1";
}else if(isset($_GET['col2']) && $_GET['col2']==2){ 
$col = "&col2=2"; 
}else if(isset($_GET['col3']) && $_GET['col3']==1){
$col = "&col3=1"; }
else if(isset($_GET['col3']) && $_GET['col3']==2){ 
$col = "&col3=2";}
else if(isset($_GET['col4']) && $_GET['col4']==1){  
$col = "&col4=1"; }
else if(isset($_GET['col4']) && $_GET['col4']==2){   
 $col = "&col4=2"; }
 else if(isset($_GET['col5']) && $_GET['col5']==1){  
$col = "&col5=1"; }
else if(isset($_GET['col5']) && $_GET['col5']==2){   
 $col = "&col5=2"; }

$where = "";
$search = "";
if(isset($_GET['search'])){
	$where = " and nm_mk like '%".$_GET['search']."%' ";
	$search = "&search=".$_GET['search'];
}


if(isset($_GET['pageno'])){ $pageno_new = "pageno=".$_GET['pageno']; }else{ $pageno_new = ""; }
?>
  <thead class="tr_title">
<tr ><td >No.</td><td id="i_sort"><a href="edit_siswa_jur.php?<?php echo $col1.$pageno_new.$search?>">Nama Jurusan</a></td>
<td id="i_sort"><a href="edit_siswa_jur.php?<?php echo $col2.$pageno_new.$search?>">Matakuliah</a></td>
<td id="i_sort"><a href="edit_siswa_jur.php?<?php echo $col3.$pageno_new.$search?>">Hari / Jam</a></td>
<td id="i_sort"><a href="edit_siswa_jur.php?<?php echo $col4.$pageno_new.$search?>">Ruang</a></td>
<td id="i_sort"><a href="edit_siswa_jur.php?<?php echo $col5.$pageno_new.$search?>">Kuota</a></td>
<td id="i_sort"><a href="edit_siswa_jur.php?<?php echo $col5.$pageno_new.$search?>">Pilih</a></td>

</tr>
</thead>
<?php

include'../koneksi.php';
if (isset($_GET['pageno'])) {
   $pageno = $_GET['pageno'];
} else {
   $pageno = 1;
}
$orderby = " ";
if(isset($_GET['col1']) && $_GET['col1']==1){ $orderby = " order by nm_jur asc "; }
else if(isset($_GET['col1']) && $_GET['col1']==2){ $orderby = " order by nm_jur desc "; }

if(isset($_GET['col2']) && $_GET['col2']==1){ $orderby = " order by nm_mk asc "; }
else if(isset($_GET['col2']) && $_GET['col2']==2){ $orderby = " order by nm_mk desc "; }

if(isset($_GET['col3']) && $_GET['col3']==1){ $orderby = " order by jam asc, hari asc "; }
else if(isset($_GET['col3']) && $_GET['col3']==2){ $orderby = " order by jam desc, hari desc "; }

if(isset($_GET['col4']) && $_GET['col4']==1){ $orderby = " order by ruang asc "; }
else if(isset($_GET['col4']) && $_GET['col4']==2){ $orderby = " order by ruang desc "; }

if(isset($_GET['col5']) && $_GET['col5']==1){ $orderby = " order by kuota asc "; }
else if(isset($_GET['col5']) && $_GET['col5']==2){ $orderby = " order by kuota desc "; }

$q_jur = mysql_query("select b.id_jur as jurusan from tbl_pendaftaran a
join tbl_jadwal b on b.id_jadwal = a.id_jadwal
where id_siswa = '".$_GET['id_siswa']."'");
$r_jur = mysql_fetch_object($q_jur);

$query = "select count(*) from tbl_jadwal b, tbl_jurusan c, tbl_mk d 
where b.id_jur=c.id_jur and b.id_mk=d.id_mk
and b.id_jur = '".$r_jur->jurusan."' $where  $orderby";
$result = mysql_query($query);
$query_data = mysql_fetch_row($result);
$numrows = $query_data[0];

$rows_per_page = 10;
$lastpage      = ceil($numrows/$rows_per_page);

$pageno = (int)$pageno;
if ($pageno > $lastpage) {
   $pageno = $lastpage;
} 
if ($pageno < 1) {
   $pageno = 1;
} 

$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;
$query = "select * from tbl_jadwal b, tbl_jurusan c, tbl_mk d 
where b.id_jur=c.id_jur and b.id_mk=d.id_mk and b.id_jur = '".$r_jur->jurusan."' $where $orderby $limit";
$result = mysql_query($query);
$n = ($pageno - 1) * $rows_per_page;
$n = $n+1;

while($r = mysql_fetch_array($result))
{ //<div id="box-link">
if($n % 2){ $warna="#fff"; } else {$warna="#eee";}
	echo '<tr  bgcolor="'.$warna.'"><td>'.$n.'</td>
	<td>'.$r["nm_jur"].'</td>
	<td>'.$r["nm_mk"].'</td>
	<td>'.$r["hari"].' <br> '.$r["jam"].'</td>
	<td>'.$r["ruang"].'</td>
	<td>'.$r["kuota"].'</td>
	<td align=center>
	<a href="proses_edit_siswa.php?id_siswa='.$_GET['id_siswa'].'&idj='.$r['id_jadwal'].'" title="Input Nilai Siswa" style="text-decoration:none;"><div id="box-link"><span style="padding:5px; background-color:#C42B97; color:#fff; text-decoration:none;">Pilih</span></div></a>';
	/*	<a href="cetakabs.php?idj='.$r['id_jadwal'].'"  title="Cetak Absensi - '.$r["nm_mk"].'" target=_blank>
	<img src=../images/printer.gif></a></td> 
	*/
	echo '
	</tr>';
	$n++;
}
?>
</table>
<?php
if ($pageno == 1) {
   echo "<div class=\"page\"> FIRST PREV </div>";
} else {
   echo "<div class=\"page\" id =\"i_next\"> <a href='edit_siswa_jur.php?id_siswa=$_GET[id_siswa]&pageno=1$col$search'>FIRST</a></div> ";
   $prevpage = $pageno-1;
   echo "<div class=\"page\" id =\"i_next\"> <a href='edit_siswa_jur.php?id_siswa=$_GET[id_siswa]&pageno=$prevpage$col$search'>PREV</a></div> ";
} // if

echo "<div class=\"page\"> ( Page $pageno of $lastpage )</div> ";

if ($pageno == $lastpage) {
   echo "<div class=\"page\"> NEXT LAST</div> ";
} else {
   $nextpage = $pageno+1;
   echo "<div class=\"page\" id =\"i_next\"> <a href='edit_siswa_jur.php?id_siswa=$_GET[id_siswa]&pageno=$nextpage$col$search'>NEXT</a></div> ";
   echo "<div class=\"page\" id =\"i_next\"=> <a href='edit_siswa_jur.php?id_siswa=$_GET[id_siswa]&pageno=$lastpage$col$search'>LAST</a></div> ";
} 

?>
</fieldset>
	