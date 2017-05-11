<?php
header("content-type:text/html;charset=utf-8");
	if (isset($_GET['div'])) {

		include_once('init.inc.php');
		$smarty->display('in_stu.tpl');

	}else if (isset($_POST['sub'])) {
		$newxh=$_POST['xh'];
		$newxm=$_POST['xm'];
		$newbj=$_POST['bj'];
		$sex=$_POST['sex'];
		include_once('conn.php');
		$sql="INSERT INTO `tb_stuinf`(`xh`, `xm`, `sex`, `bj`) VALUES ('$newxh','$newxm',$sex,'$newbj')";		
	    
		$r=mysql_query($sql);
		
		if ($r) {
		echo '<script>alert("添加成功");location.href="stuinf.php";</script>';

		}else{

		echo '<script>alert("添加失败，可能存在同名的学号");history.go(-1);</script>';
	}
	}else{

		echo '<script>alert("添加失败，????");history.go(-1);</script>';
}

