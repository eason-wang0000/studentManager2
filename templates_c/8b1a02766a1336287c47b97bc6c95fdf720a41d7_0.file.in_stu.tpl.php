<?php /* Smarty version 3.1.27, created on 2016-11-24 14:14:48
         compiled from "C:\wamp\www\StudentManage\templates\in_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:262065836f5d8eb0f77_40797429%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1a02766a1336287c47b97bc6c95fdf720a41d7' => 
    array (
      0 => 'C:\\wamp\\www\\StudentManage\\templates\\in_stu.tpl',
      1 => 1479996181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262065836f5d8eb0f77_40797429',
  'variables' => 
  array (
    '' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f5d8ef5512_54434314',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f5d8ef5512_54434314')) {
function content_5836f5d8ef5512_54434314 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '262065836f5d8eb0f77_40797429';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
<style type="text/css">
	body{
		background-image: url("images/background.jpg");
		background-repeat:no-repeat;
   		background-size:100% ;
	}
</style>
</head>
<body>
<h1 align="center">添加学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px;padding:20px;">
<form action="in_stu.php" method="post" align="center">
   <!-- <input type="hidden" name="newdxh" value="<?php echo $_smarty_tpl->tpl_vars['']->value['xh'];?>
"/> 把学号放在隐藏区域，万一修改了学号还可以知道原来的学号是什么-->
	学号:<input type="text"  name="xh" /><br/><br/>
    姓名:<input type="text" name="xm" /><br/><br/>
    性别:<input type="radio" value="0" name="sex"/>男&nbsp;
        <input type="radio" value="1" name="sex"/>女 <br/>
    班级:<input type="text" name="bj"/><br/><br/>
    <input type="submit" name="sub" value="添加"/>
    <input type="reset" name="Reset" value="重置"/>
    <a href="stuinf.php">返回</a>
</form>
</div>
</body>
</html>
<?php }
}
?>