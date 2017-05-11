<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
  body{
    background-image: url("images/background.jpg");
    background-repeat:no-repeat;
      background-size:100% ;
  }
</style>
</head>

<body>
<form action="in_gra3.php" method="post">
<input type="hidden" value="<{$km}>" name="km"/><!--科目-->
<input type="hidden" value="<{$bj}>" name="bj"/><!--班级-->

<h1 align="center"><{$bj}>班成绩表录入</h1>
<table border="1" width="400" style="border-collapse:collapse" align="center">
<tr><td>学号</td><td>姓名</td><td>科目</td><td>成绩</td></tr>
<{section name=lp loop=$stu}>
  <tr >
  <td ><{$stu[lp].xh}></td>
  <input type="hidden" value="<{$stu[lp].xh}>" name="xh[]"/><!--学号-->
  <td ><{$stu[lp].xm}></td>
  <td ><{$km}></td>
  <td ><input type="text" name="cj[]" value="<{$stu[lp].cj}>"/></td>
  </tr>
	
<{/section}>
  <tr><td colspan="4"><input type="submit" value="确定" name="sub" /></td></tr>
  <tr><td colspan="4"><a href="index.php">返回</a></td></tr>
</table>


</form>

</body>
</html>
