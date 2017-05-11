<?php
include_once("conn.php");
if (isset($_POST['key'])&&$_POST['cx']!="") {
	$key=$_POST['key'];
	$cx=$_POST['cx'];
	
	$sql="select * from tb_stuinf where $key like '%$cx%'";
	$r = mysql_query($sql);
	while($row=mysql_fetch_assoc($r)){
		$cxstu[] = $row;
	}
	include_once("init.inc.php");
	$smarty->assign('cxstu',$cxstu);
	$smarty->display('cxstu.tpl');
}