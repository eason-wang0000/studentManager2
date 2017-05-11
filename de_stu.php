<?php 
	header("content-type:text/html;charset=ntf-8");
	if (isset($_GET['xh'])) {
		include_once('conn.php');
		include_once('init.inc.php');
		$xh = $_GET['xh'];
		$result=mysql_query("DELETE FROM `tb_stuinf` WHERE xh='$xh'");
		if ($result) {
			echo '<script>alert("删除成功");location.href="stuinf.php";</script>';
		}else{
			echo '<script>alert("删除失败");history.go(-1);</script>';
		}
	}
 ?>