<?php
if (isset($_POST['id'])) {
	include_once("conn.php");
	include_once("init.inc.php");
	$id = $_POST['id'];
	$oldid=$_POST['oldid'];
	$kmname = $_POST['kmname'];
	$sql = "update tb_subject set id='$id',kmname='$kmname' where id='$oldid'";
	if($r=mysql_query($sql)){
		echo '<script>alert("修改成功");location.href="main_km.php";</script>';
	}else{
		echo '<script>alert("修改失败");history.go(-1);</script>';
	}
}else{
		echo '<script>alert("请先选择要修改的记录");location.href="main_km.php";</script>';
	}
?>