<?php
include_once('conn.php');
if (isset($_POST['sub'])) {
	$newkm=$_POST['newkm'];
	$sql="insert into tb_subject (kmname) values ('$newkm')";
	
	if($newkm!=""&&strlen(trim($newkm))>0){
		$r = mysql_query($sql);
		echo '<script>alert("添加成功");location.href="main_km.php";</script>';
	}else{
		echo '<script>alert("添加失败");location.href="main_km.php";</script>';
	}
	
}else{
		'<script>alert("科目名称不能为空");location.href="main_km.php";</script>';
	}
?>