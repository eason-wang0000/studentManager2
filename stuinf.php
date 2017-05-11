<?php
	header("Content-type:text/html;charset=utf-8");
	include_once('conn.php');
	$sql = "select * from tb_stuinf";
	$r=mysql_query($sql);
	while($row=mysql_fetch_assoc($r)){
		$inf[] = $row;
	}
	
	include_once('init.inc.php');
	$smarty->assign('inf',$inf);
	
	$smarty->display('stuinf.tpl');
?>
