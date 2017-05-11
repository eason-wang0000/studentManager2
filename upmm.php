<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	body{
		background-image: url("images/background.jpg");
		background-repeat:no-repeat;
   		background-size:100% ;
	}
</style>
</head>
<body>

<form style="text-align: center" action="upmmdo.php" method="post">
<h1><strong>用户密码管理</strong></h1>
<?php
include_once('conn.php');
  session_start();
  if(isset($_SESSION['name'])){
	echo '您好！'.$_SESSION['name']."<br/>";	

	
  }else{
	  echo "<script>alert('请先登录');location='login.html';</script>";
  }
?>

	<table>
		请输入旧密码：<input type="password" name="pwd"><br/><br/>
		请输入新密码：<input type="password" name="newpwd"><br/><br/>
		请确认新密码：<input type="password" name="newpwd1"><br/><br/>
	</table>
	<input type="submit" name="sub" value="修改">
	<input type="reset" name="res" value="重置">
	<input type="submit" name="fh" value="取消">
</form>
</body>
</html>