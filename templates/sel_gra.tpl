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
    <h1 align="center">成绩信息</h1>
    <form align="center" method="post" action="stusel_gra.php">
    请输入要查询的学号：<input type="text" name="oncexh">
    <input type="submit" name="sub" value="查询"><br/>
 <table border="1" style="border-collapse:collapse" align="center">
  <tr>
      <td>学号</td><td>姓名</td><td>科目</td><td>成绩</td>
  </tr>
   <{foreach from=$sel_gra item=v}>
<input type="hidden" name="xh[]" value="<{$v.xh}>">
<input type="hidden" name="km[]" value="<{$v.km}>">
  <tr>
      <td><{$v.xh}></td><td><{$v.xm}></td><td><{$v.km}></td><td><input type="text" name='cj[]' value="<{$v.cj}>"></td>
     <!-- <td><a href="upstu_gra.php?xh=<{$v.xh}>&cj=<{$v.cj}>">修改</a>&nbsp;<a href="selstu_gra.php?xh=<{$v.xh}>">删除</a></td> -->
     
  </tr>
   <{/foreach}>
  </table>
  <input type="submit" name="up" value="修改">
  <a href="index.php">返回</a>
  </form>
</body>
</html>