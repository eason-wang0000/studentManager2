<?php
if (isset($_GET['id'])) {
	include_once("conn.php");
	include_once("init.inc.php");
	$id=$_GET['id'];
	$sql = "select * from tb_subject where id='$id'";
	$r= mysql_query($sql);
	if ($row=mysql_fetch_array($r)) {
		$smarty->assign('km',$row);
		$smarty->display('upkm.tpl');
	}
}else{
	echo '<script>alert("请先选择要修改的科目");location.href="main_km.php";</script>';
}