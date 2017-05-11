<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Retina Dashboard</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="templates/css/style.css" media="all" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" media="all" /><![endif]-->
</head>
<body>
<div class="testing">
<header class="main">
	<h1 style="font-size:30px;"><strong>学生成绩管理系统</strong></h1>
	<input type="text" value="search" />
</header>
<section class="user">
	<div class="buttons">
	</div>
</section>
</div>


<h1><span class="button blue"><a href="index.php">返回</a></span><span style="font-size:30px;margin-left:400px"><strong>科目信息</strong></span></h1><br/><br/>
    <form action="inkm.php" method="post" style="margin-left: 300px;">
    
    	<table style="text-align: center" border="1">
    	<span style="font-size:24px;">
			请输入要添加的科目名称：<input type="tex" name="newkm" style="width: 200px"><input type="submit" name="sub" value="添加" style="width: 200px">

    		<tr style="font-size:40px;"><td>科目编号</td><td>科目名称</td><td>操作</td></tr>
    		<{foreach from=$main_km item=v}>

    		<tr style="font-size:40px;">
    		<td><{$v.id}></td>
    		<td><{$v.kmname}></td>
    		<td><a href="upkm.php?id=<{$v.id}>">修改</a>&nbsp;<a href="dekm.php?id=<{$v.id}>">删除</a></td>
    		<hr style="margin-right: 380px" />
    		</tr>
    		<{/foreach}>
    		</span>
    	</table>
    </form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="templates/js/jquery.wysiwyg.js"></script>
<script src="templates/js/custom.js"></script>
<script src="templates/js/cycle.js"></script>
<script src="templates/js/jquery.checkbox.min.js"></script>
<script src="templates/js/flot.js"></script>
<script src="templates/js/flot.resize.js"></script>
<script src="templates/js/flot-graphs.js"></script>
<script src="templates/js/flot-time.js"></script>
<script src="templates/js/cycle.js"></script>
<script src="templates/js/jquery.tablesorter.min.js"></script>
</body>
</html>