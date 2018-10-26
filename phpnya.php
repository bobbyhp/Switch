<?php
$a=$_POST['BULAN'];
$B=$_POST['TAHUN'];

switch($bulan){
case1:
case3:
case5:
case7:
case8:
case10:
case12:
	$hari =31;
	break;
	
	case4:
	case6:
	case9:
	case11:
		$hari = 30;
		break;
		
	case2:
	if(($tahun%4) == 0) {
	$hari = 29;}
	else {
	$hari = 28;
	}
}

echo("<h2>Jumlah hari pada bulan $bulan tahun $tahun = $hari hari</h2>";
?>