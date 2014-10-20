<?php

function create_report($title) {
				$format =			header("Pragma: public");
									header("Expires: 0");
									header("Cache-Control : must-revalidate, post-check=0, pre-check=0");
									header("Content-type: application/force-download");
								    header("Content-type: application/octet-stream");
									header("Content-type: application/download");
								    header("Content-Disposition: attachment; filename=$title.xls");
								    header("Content-transfer-encoding: binary");
									
return $format;
}


$title = 'Report_nilai';
$format = create_report($title);

include 'report_nilai_excel.php';
?>