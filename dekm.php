<?php 
	header("content-type:text/html;charset=ntf-8");
	if (isset($_GET['id'])) {
		include_once('conn.php');
		include_once('init.inc.php');
		$id = $_GET['id'];
		$result=mysql_query("DELETE FROM `tb_subject` WHERE id='$id'");
		if ($result) {
			echo '<script>alert("删除成功");location.href="main_km.php";</script>';
		}else{
			echo '<script>alert("删除失败");history.go(-1);</script>';
		}
	}