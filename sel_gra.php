<?php
include_once('conn.php');
$sql = "select * from tb_stuinf a,tb_grade b where a.xh=b.xh";
$r= mysql_query($sql);
while($row = mysql_fetch_assoc($r)){
	$sel_gra[] = $row;
}
include_once('init.inc.php');
$smarty->assign('sel_gra',$sel_gra);
$smarty->display('sel_gra.tpl');