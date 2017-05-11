<?php
session_start();
header("content-type:html/text;charset=utf-8");
include_once('conn.php');
if (isset($_POST['sub'])) {
	$user=$_SESSION['name'];
	$pwd = $_POST['pwd'];
	$newpwd = $_POST['newpwd'];
	$newpwd1=$_POST['newpwd1'];
	if($newpwd==$newpwd1){
		$sql="update tb_account set `pwd`='$newpwd' where `user`='$user'";
		$r = mysql_query($sql);
		if($r){
			echo '<script>alert("您已成功修改");window.location.href="login.html"</script>';
		}else{
			echo '<script>alert("修改失败,可能你的旧密码错误");window.location.href="upmm.php"</script>';
		}
	}else{
		echo '<script>alert("密码不一致");window.location.href="upmm.php"</script>';
	}
}else if (isset($_POST['fh'])) {
	echo '<script>window.location.href="index.php"</script>';
}
?>