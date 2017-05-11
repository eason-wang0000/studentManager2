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
	<!--[if IE]><link rel="stylesheet" href="templates/css/ie.css" media="all" /><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="templates/css/lt-ie-9.css" media="all" /><![endif]-->
</head>
<body>
<div class="testing">
<header class="main">
	<h1 style="font-size:30px;"><strong>学生成绩管理系统</strong></h1>
	<input type="text" value="search" />
</header>

<section class="user">
<span class="yh" style="color:white; font-size:24px;">
	<?php
include_once('conn.php');
  session_start();
  if(isset($_SESSION['name'])){
	echo '欢迎光临，'.$_SESSION['name'];	
	
  }else{
	  echo "<script>alert('请先登录');location='login.html';</script>";
  }
?>
</span>
	<div class="buttons">
		<span class="button blue"><a href="upmm.php">修改密码</a></span>
		<span class="button blue"><a href="exit.php">退出登录</a></span>
	</div>
</section>
</div>
<nav>
	<ul>
		<li><a href="stuinf.php"><span class="icon">&#128711;</span>信息管理</a></li>
		<li>
			<a href="main_km.php"><span class="icon">&#128196;</span>科目管理</a>
			
		</li>
		<li>
			<a href="sel_gra.php"><span class="icon">&#127748;</span>成绩查看</a>
			
		</li>
		<li>
			<a href="in_gra1.php"><span class="icon">&#59160;</span>成绩录入</a>
			
		</li>
		<li><a href="5.html"><span class="icon">&#128202;</span>意见反馈</a></li>
		<li><a href="6.html"><span class="icon">&#128101;</span>纪律处分信息</a></li>
		<li>
			<a href="7.html"><span class="icon">&#9881;</span>帮助</a>
		</li>
	</ul>
</nav>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="templates/js/jquery.wysiwyg.js"></script>
<script src="templates/js/custom.js"></script>
<script src="templates/js/cycle.js"></script>
<script src="templates/js/jquery.checkbox.min.js"></script>
<script src="templates/js/flot.js"></script>
<script src="templates/js/flot.resize.js"></script>
<script src="templates/js/flot-time.js"></script>
<script src="templates/js/flot-pie.js"></script>
<script src="templates/js/flot-graphs.js"></script>
<script src="templates/js/cycle.js"></script>
<script src="templates/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
// Feature slider for graphs
$('.cycle').cycle({
	fx: "scrollHorz",
	timeout: 0,
    slideResize: 0,
    prev:    '.left-btn', 
    next:    '.right-btn'
});
</script>
</body>
</html>