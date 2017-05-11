<?php
    include("conn.php");
	include("init.inc.php");
	if(isset($_REQUEST['bj'])){
	$bj = $_REQUEST['bj'];
	$km = $_REQUEST['km'];	
	$sql = "select xh from tb_stuinf where bj='$bj'";
    $r = mysql_query($sql);	
	$xh = array();
	while($row = mysql_fetch_array($r)){
		$xh[]=$row['xh'];
		
	}

	foreach($xh as $v){  //对于班级为$bj的每个学生
		$sql = "select * from tb_grade where xh='$v' and km='$km'"; //看看每个学生是否有科目为$km的成绩
		$r = mysql_query($sql);
		if (!($row = mysql_fetch_array($r))){    //如果还没有成绩，那么就插入一条成绩记录，成绩为空null
			$sql="insert into tb_grade (xh,km)values('$v','$km')";
			mysql_query($sql);
		}
	}
	
	$sql = "select * from tb_stuinf a,tb_grade b  where a.xh = b.xh and a.bj='$bj' and b.km='$km'";
	$r = mysql_query($sql);	
	$stu = array();
	while($row = mysql_fetch_array($r)){
		$stu[] = $row;
	}
	
	$smarty->assign("stu",$stu);	
	$smarty->assign("km",$km);
	$smarty->assign("bj",$bj);

	$smarty->display("in_gra2.tpl");
	}else{
		echo '<script>alert("请先选择要录入成绩的班级和科目");location.href="in_gra1.php";</script>';
	}
?>