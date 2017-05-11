<?php /* Smarty version 3.1.27, created on 2016-11-24 14:14:55
         compiled from "C:\wamp\www\StudentManage\templates\up_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:271995836f5dfe88398_13899606%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c547669346596e98843da196a535dd45514c9c8' => 
    array (
      0 => 'C:\\wamp\\www\\StudentManage\\templates\\up_stu.tpl',
      1 => 1479996222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271995836f5dfe88398_13899606',
  'variables' => 
  array (
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f5dfee2af7_74114921',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f5dfee2af7_74114921')) {
function content_5836f5dfee2af7_74114921 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '271995836f5dfe88398_13899606';
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
<h1 align="center">修改学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="up_studo.php" method="post" >
     <input type="hidden" name="oldxh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><!--把学号放在隐藏区域，万一修改了学号还可以知道原来的学号是什么-->
	学号:<input type="text"  name="xh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><br/>
    姓名:<input type="text" name="xm" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xm'];?>
"/><br/>
    性别:<input type="radio" value="0" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 0) {?>checked="checked"<?php }?>/>男&nbsp;
        <input type="radio" value="1" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 1) {?>checked="checked"<?php }?>/>女 <br/>
    班级:<input type="text" name="bj" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['bj'];?>
"/><br/>
    <input type="submit" name="sub" value="确定"/><input type="reset" name="res" value="重置">
    <a href="stuinf.php">返回</a>
</form>
</div>
</body>
</html><?php }
}
?>