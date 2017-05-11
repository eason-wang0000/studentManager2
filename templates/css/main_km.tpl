<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
<a href="index.php">返回</a><h1>科目信息</h1>
    <form action="inkm.php" method="post">
    	<table style="text-align: center" border="1">
			请输入要添加的科目名称：<input type="tex" name="newkm"><input type="submit" name="sub" value="添加">

    		<tr><td>科目编号</td><td>科目名称</td><td>操作</td></tr>
    		<{foreach from=$main_km item=v}>
    		<tr>
    		<td><{$v.id}></td>
    		<td><{$v.kmname}></td>
    		<td><a href="upkm.php?id=<{$v.id}>">修改</a>&nbsp;<a href="dekm.php?id=<{$v.id}>">删除</a></td>
    		</tr>
    		<{/foreach}>
    	</table>
    </form>
</body>
</html>