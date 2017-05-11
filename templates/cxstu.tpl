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
    <form align="center">
    <h1><strong>学生信息</strong></h1>
    	<table border="1" align="center">
    		<tr><td>学号</td><td>姓名</td><td>性别</td><td>班级</td></tr>
    		<{foreach from=$cxstu item=v}>
    		<tr>
    			
    			<td><{$v.xh}></td><td><{$v.xm}></td><td><{if ($v.sex==0)}>男<{else}>女<{/if}></td><td><{$v.bj}></td>
    			
    		</tr>
    		<{/foreach}>
    	</table>
    	<a href="stuinf.php">返回</a>
    </form>
</body>
</html>