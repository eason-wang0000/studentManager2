<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录处理</title>
</head>
<body>
<?php
	
	if(isset($_POST['sub'])){
		include('conn.php');
		$name = $_POST['name'];		
		$password = $_POST['password'];	
		$yz=$_POST['yanzheng'];	
		$sql = "select * from tb_account";		
		$r = mysql_query($sql);
		if($row = mysql_fetch_assoc($r)){	
		    session_start();
			$_SESSION['name']=$row['user'];	
			$string=$_SESSION['yz'];
			if($name==$row['user']&&$password==$row['pwd']&&$yz==$string){
				echo '<script>alert("登录成功");location.href="index.php";</script>';
			}else{
			echo '<script>alert("用户名或密码错误");location.href="login.html";</script>';	
		}
		}
	}else{
		echo '<script>alert("用户名或密码错误");location.href="login.html";</script>';
	}
?>
</body>
</html>