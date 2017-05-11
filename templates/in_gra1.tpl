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
<form action="in_gra2.php" method="post" align="center">
<h1><strong>成绩录入</strong></h1>
请选择要录入成绩的班级：
<select name="bj" >
<{section name=lp loop=$bj}>
  <option value="<{$bj[lp].bj}>"><{$bj[lp].bj}></option>	
<{/section}>
</select>
<br/>
请选择要录入成绩的科目:
<select name="km">
<{foreach $kmname as $v}>
	<option value="<{$v[0]}>"><{$v[0]}></option>
	<{/foreach}>

</select>
<input type="submit" value="确定" name="sub" />
<a href="index.php">返回</a>
</form>

</body>
</html>
