<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
<style type="text/css">
	body{
		background-image: url("images/background.jpg");
		background-repeat:no-repeat;
   		background-size:100% ;
	}
</style>
</head>
<body>
<h1 align="center">添加学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px;padding:20px;">
<form action="in_stu.php" method="post" align="center">
   <!-- <input type="hidden" name="newdxh" value="<{$.xh}>"/> 把学号放在隐藏区域，万一修改了学号还可以知道原来的学号是什么-->
	学号:<input type="text"  name="xh" /><br/><br/>
    姓名:<input type="text" name="xm" /><br/><br/>
    性别:<input type="radio" value="0" name="sex"/>男&nbsp;
        <input type="radio" value="1" name="sex"/>女 <br/>
    班级:<input type="text" name="bj"/><br/><br/>
    <input type="submit" name="sub" value="添加"/>
    <input type="reset" name="Reset" value="重置"/>
    <a href="stuinf.php">返回</a>
</form>
</div>
</body>
</html>
