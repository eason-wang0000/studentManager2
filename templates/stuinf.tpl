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

	 <script type="text/javascript">
           function goback(){
            location.href=history.go(-1);
           }
       </script>
        

    <h1 align="center">学生信息表</h1>
<form method="post" action='cxstu.php' align="center">

			<select name="key">
			<option value="xh">学号</option>
			<option value="xm">姓名</option>
			<option value="bj">班级</option>
</select> 
<input type="text" name="cx">
 <input type='submit' name='sub' value='查询' />
 <a style="font-size: 20px" href="index.php">返回</a>
		</form>

<table border="1" style="border-collapse:collapse" align="center">
  <div style="margin: 0 auto;width: 65px;padding-bottom: 10px"><a href="in_stu.php?div=1">添加学生</a></div>
	<tr>
	<td>学号</td><td>姓名</td><td>性别</td><td>班级</td><td>操作</td>
	</tr>
	<tr>
	<{foreach from=$inf item=v}>
		<td><{$v.xh}></td>
		<td><{$v.xm}></td>
		<td>
			<{if ($v.sex==0)}>男<{else}>女<{/if}>
		</td>
		<td><{$v.bj}></td>
		<td><a href="up_stu.php?xh=<{$v.xh}>">修改</a>&nbsp;<a href="de_stu.php?xh=<{$v.xh}>">删除</a></td>

	</tr>
	<{/foreach}>
	</table>	


</body>
</html>