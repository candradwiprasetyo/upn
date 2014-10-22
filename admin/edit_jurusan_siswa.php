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
			 url : "hapussiswa.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
		 
	
		 
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
	</script>
<link href="../thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>


<h2>Edit  Siswa Yang Telah Terdaftar</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Nama-Nama Calon Siswa Yang Terdaftar</legend>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><form id="form_search" name="form_search" method="post" action="" onsubmit="return search_form('index.php?page=edit_jurusan_siswa')">
      Nama<input type="text" name="i_search" id="i_search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; }?>" />
    </form></td>
  </tr>
</table>
<table  width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#eee" bordercolordark="#FFFFFF">
  <?php
if(isset($_GET['col1']) && $_GET['col1']==1){ $col1 = "col1=2";
$col = "&col1=2";  }
else { $col1 = "col1=1"; 
$col = "&col1=1"; 
}

if(isset($_GET['col2']) && $_GET['col2']==1){ 
	$col2 = "col2=2"; 
	$col = "&col2=2";
	}
else { $col2 = "col2=1"; $col = "&col2=1"; }

if(isset($_GET['col3']) && $_GET['col3']==1){ $col3 = "col3=2"; $col = "&col3=2"; }
else { $col3 = "col3=1"; $col = "&col3=1";}

if(isset($_GET['col4']) && $_GET['col4']==1){ $col4 = "col4=2"; $col = "&col4=2"; }
else { $col4 = "col4=1"; $col = "&col4=1";}


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


$where = "";
$search = "";
if(isset($_GET['search'])){
	$where = " where nama like '%".$_GET['search']."%' ";
	$search = "&search=".$_GET['search'];
}

if(isset($_GET['pageno'])){ $pageno_new = "pageno=".$_GET['pageno']; }else{ $pageno_new = ""; }
?>
  <tr class="tr_title" align=center>
  <th><b>No.</b></td>
  <th id="i_sort"><a href="edit_jurusan_siswa.php?<?php echo $col1.$pageno_new.$search?>">NPM</a></th>
  <th id="i_sort"><a href="edit_jurusan_siswa.php?<?php echo $col2.$pageno_new.$search?>">Nama Mhs</a></th>
  <th id="i_sort"><a href="edit_jurusan_siswa.php?<?php echo $col3.$pageno_new.$search?>">Email</a></th>
  <th id="i_sort"><a href="edit_jurusan_siswa.php?<?php echo $col4.$pageno_new.$search?>">No Telp</a></th>
   <th id="i_sort"><a href="edit_jurusan_siswa.php?<?php echo $col4.$pageno_new.$search?>">Jurusan</a></th>
    <th id="i_sort"><a href="edit_jurusan_siswa.php?<?php echo $col4.$pageno_new.$search?>">Mata Kuliah</a></th>
  <th colspan="2">Aksi</th></tr>
<?php

include'../koneksi.php';
if (isset($_GET['pageno'])) {
   $pageno = $_GET['pageno'];
} else {
   $pageno = 1;
}
$orderby = " ";
if(isset($_GET['col1']) && $_GET['col1']==1){ $orderby = " order by npm asc "; }
else if(isset($_GET['col1']) && $_GET['col1']==2){ $orderby = " order by npm desc "; }

if(isset($_GET['col2']) && $_GET['col2']==1){ $orderby = " order by nama asc "; }
else if(isset($_GET['col2']) && $_GET['col2']==2){ $orderby = " order by nama desc "; }

if(isset($_GET['col3']) && $_GET['col3']==1){ $orderby = " order by email asc "; }
else if(isset($_GET['col3']) && $_GET['col3']==2){ $orderby = " order by email desc "; }

if(isset($_GET['col4']) && $_GET['col4']==1){ $orderby = " order by telp asc "; }
else if(isset($_GET['col4']) && $_GET['col4']==2){ $orderby = " order by telp desc "; }


$query = "SELECT count(*) FROM tbl_pendaftaran  $where $orderby";
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
$query = "SELECT * FROM tbl_pendaftaran   $where $orderby  $limit";
$result = mysql_query($query);
$n = ($pageno - 1) * $rows_per_page;
$n = $n+1;

while($r=mysql_fetch_array($result)){
	
	$query_jdw = mysql_query("select * from tbl_jadwal where id_jadwal = '".$r['id_jadwal']."'");
	$row_jdw = mysql_fetch_array($query_jdw);
	$query_jur = mysql_query("select * from tbl_jurusan where id_jur = '".$row_jdw['id_jur']."'");
	$row_jur = mysql_fetch_array($query_jur);
	$query_mk = mysql_query("select * from tbl_mk where id_mk = '".$row_jdw['id_mk']."'");
	$row_mk = mysql_fetch_array($query_mk);

	//if($r['nun']>70){ $warna="#B3D577"; } else {$warna="#D87676";}
	if($n % 2){ $warna="#fff"; } else {$warna="#eee";}
	echo '<tr bgcolor="'.$warna.'" class="content"><td>'.$n.'</td><td>'.$r["npm"].'</td><td>'.$r["nama"].'</td><td>'.$r["email"].'</td><td>'.$r["telp"].'</td>
	<td>'.$row_jur["nm_jur"].'</td>
	<td>'.$row_mk["nm_mk"].'</td>
	<td><a href="index.php?page=edit_siswa_jur&id_siswa='.$r['id_siswa'].'" title="Edit Data Calon Siswa - '.$r["nama"].' - '.'"><div id="box-link">Edit</div></a></td> 
	
	</tr>';
	
	$n++;
}
?>


</table>
<?php
if ($pageno == 1) {
   echo "<div class=\"page\"> FIRST PREV </div>";
} else {
   echo "<div class=\"page\" id =\"i_next\"> <a href='edit_jurusan_siswa.php?pageno=1$col$search'>FIRST</a></div> ";
   $prevpage = $pageno-1;
   echo "<div class=\"page\" id =\"i_next\"> <a href='edit_jurusan_siswa.php?pageno=$prevpage$col$search'>PREV</a></div> ";
} // if

echo "<div class=\"page\"> ( Page $pageno of $lastpage )</div> ";

if ($pageno == $lastpage) {
   echo "<div class=\"page\"> NEXT LAST</div> ";
} else {
   $nextpage = $pageno+1;
   echo "<div class=\"page\" id =\"i_next\"> <a href='edit_jurusan_siswa.php?pageno=$nextpage$col$search'>NEXT</a></div> ";
   echo "<div class=\"page\" id =\"i_next\"=> <a href='edit_jurusan_siswa.php?pageno=$lastpage$col$search'>LAST</a></div> ";
} 

?>

</fieldset>
	