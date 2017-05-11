<?php
   include("conn.php");
   if(isset($_POST['sub'])){
	  $xhary = $_POST['xh'];  //学号
	  $cjary = $_POST['cj'];   //用户输入的成绩
	  $km = $_POST['km'];   //科目
	  $bj = $_POST['bj'];   //科目
	  
	  $i = 0;
	  foreach($xhary as $xh){
		  $cj = $cjary[$i];
		
		  if(trim($cj)!=''){
			  $sql = "update tb_grade set cj='$cj' where xh='$xh' and km='$km'";
			  mysql_query($sql) or die('录入失败');
		  }else{
			  $sql = "update tb_grade set cj=null where xh='$xh' and km='$km'";
			  mysql_query($sql) or die('录入失败');
		  }
		  $i++;
	  }
	 
	  echo "<script>alert('录入成功');location.href='in_gra2.php?bj=$bj&km=$km';</script>";
    	
   }else{
	   echo "<script>alert('请先选择相应的班级和科目');location.href='in_gra1.php';</script>";
   }
   
  
?>