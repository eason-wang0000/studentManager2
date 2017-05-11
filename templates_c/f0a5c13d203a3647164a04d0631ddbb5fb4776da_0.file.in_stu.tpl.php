<?php /* Smarty version 3.1.27, created on 2016-11-24 14:03:12
         compiled from "E:\wamp\www\2016\WTF\templates\in_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58805836f3201e4e45_11471853%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0a5c13d203a3647164a04d0631ddbb5fb4776da' => 
    array (
      0 => 'E:\\wamp\\www\\2016\\WTF\\templates\\in_stu.tpl',
      1 => 1479996181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58805836f3201e4e45_11471853',
  'variables' => 
  array (
    '' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f32022dd76_66663287',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f32022dd76_66663287')) {
function content_5836f32022dd76_66663287 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '58805836f3201e4e45_11471853';
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