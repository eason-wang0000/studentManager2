<?php
include_once("conn.php");
$sql="select * from tb_subject";
$r=mysql_query($sql);
while($row=mysql_fetch_assoc($r)){
	$main_km[] = $row;
}
include_once("init.inc.php");
$smarty->assign("main_km",$main_km);
$smarty->display("main_km.tpl");