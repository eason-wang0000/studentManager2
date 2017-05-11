<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
if(isset($_POST['sub'])){
	$xh=$_POST['oncexh'];
	$sql="select * from tb_grade where xh='$xh'";
	$r=mysql_query($sql);
	while($row=mysql_fetch_assoc($r)){
		$stusel_gra[]=$row;
	}
	include_once('init.inc.php');
	$smarty->assign("stusel_gra",$stusel_gra);
	$smarty->display('stusel_gra.tpl');

}else if (isset($_POST['up'])) {
	$xhary=$_POST['xh'];
	$km = $_POST['km'];
	$newcj=$_POST['cj'];	
	  $i = 0;
	  foreach($xhary as $xh){
		  $cj = $newcj[$i];
			$kml = $km[$i];		 
			  $sql = "update tb_grade set cj=$cj where xh='$xh' and km='$kml'";
			  mysql_query($sql) or die('录入失败');
		  $i++;
	  }
	  echo "<script>alert('修改成功');location.href='sel_gra.php';</script>";
    	
   }else if (isset($_POST['res'])) {
	  echo "<script>location.href='sel_gra.php';</script>";
   }

