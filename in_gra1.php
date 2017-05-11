<?php
    include("conn.php");
	include("init.inc.php");
	$sql = "select distinct(bj) from tb_stuinf";
    $r = mysql_query($sql);
	$bj = array();
	
	while($row = mysql_fetch_array($r)){
		$bj[]=$row;
	}	
	$sqll="select `kmname` from tb_subject";
	$r1 = mysql_query($sqll);
	$kmname=array();
	while ($row=mysql_fetch_row($r1)) {
		$kmname[]=$row;
	}
	
	$smarty->assign("bj",$bj);	
	$smarty->assign('kmname',$kmname);
	$smarty->display("in_gra1.tpl");
?>