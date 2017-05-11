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
    <h1>修改科目信息</h1>
    <div style="margin:0 auto; width:180px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="upkmdo.php" method="post" >
     <input type="hidden" name="oldid" value="<{$km.id}>"/>
     科目编号：<input type="text" name="id" value="<{$km.id}>">
     科目名称：<input type="text" name="kmname" value="<{$km.kmname}>">
     <input type="submit" name="sub" value="修改">
     <input type="reset" name="res" value="重置">

</body>
</html>