<?php
include('../koneksi.php');

function get_isset($data){
	$result = (isset($data)) ? $data : 0;
	return $result;
}

$idj = (isset($_GET['idj'])) ? $_GET['idj'] : null;
			
			
$q_count_nilai = mysql_query("select count(*) as jumlah_nilai from tbl_nilai where id_jadwal = '$idj'");
$r_count_nilai = mysql_fetch_object($q_count_nilai);

if($r_count_nilai->jumlah_nilai > 0 ){
	
	
	// edit
	mysql_query("delete from tbl_nilai where id_jadwal = '$idj'");
	$query = mysql_query("select * from tbl_pendaftaran where id_jadwal='$idj' ORDER BY nama ASC");
	$no = 1;
	while($row = mysql_fetch_array($query)){
			$nilai1 = get_isset($_POST["i_nilai1_".$no]);
			$nilai2 = get_isset($_POST["i_nilai2_".$no]);
			$nilai3 = get_isset($_POST["i_nilai3_".$no]);
			$uts = get_isset($_POST["i_uts_".$no]);
			$uas = get_isset($_POST["i_uas_".$no]);
			$total = $nilai1 + $nilai2 + $nilai3 + $uas + $uts;
			$rata_rata = $total / 5;
			
			mysql_query("insert into tbl_nilai values('','$idj','".$row['id_siswa']."','$nilai1', '$nilai2', '$nilai3', '$uts', '$uas', '$total', '$rata_rata')");
			
		$no++;
		}
	
}else{
	// input

	$query = mysql_query("select * from tbl_pendaftaran where id_jadwal='$idj' ORDER BY nama ASC");
	$no = 1;
	while($row = mysql_fetch_array($query)){
			$nilai1 = get_isset($_POST["i_nilai1_".$no]);
			$nilai2 = get_isset($_POST["i_nilai2_".$no]);
			$nilai3 = get_isset($_POST["i_nilai3_".$no]);
			$uts = get_isset($_POST["i_uts_".$no]);
			$uas = get_isset($_POST["i_uas_".$no]);
			$total = $nilai1 + $nilai2 + $nilai3 + $uas + $uts;
			$rata_rata = $total / 5;
			
			mysql_query("insert into tbl_nilai values('','$idj','".$row['id_siswa']."','$nilai1', '$nilai2', '$nilai3', '$uts', '$uas', '$total', '$rata_rata')");
			
		$no++;
		}
	
	
	
	
}
			
?>