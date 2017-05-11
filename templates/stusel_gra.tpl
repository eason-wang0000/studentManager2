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
<form action="stusel_gra.php" method="post" align="center">
<h1 align="center"><strong>学生成绩信息</strong></h1>
    <table border="1" style="border-collapse:collapse" align="center">  
    
  <tr>
      <td>学号</td><td>科目</td><td>成绩</td>
  </tr>
   <{foreach from=$stusel_gra item=v}>
   <input type="hidden" name="xh[]" value="<{$v.xh}>">
<input type="hidden" name="km[]" value="<{$v.km}>">
  <tr>
      <td><{$v.xh}></td><td><{$v.km}></td><td><input type="text" name="cj[]" value="<{$v.cj}>"/></td>    
  </tr>
   <{/foreach}>

  </table>
     <input type="submit" name="up" value="修改">&nbsp;<input type="submit" name="res" value="返回">
  </form>
</body>
</html>