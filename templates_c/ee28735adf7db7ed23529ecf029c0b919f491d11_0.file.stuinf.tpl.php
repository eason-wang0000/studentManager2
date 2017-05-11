<?php /* Smarty version 3.1.27, created on 2016-11-24 13:52:55
         compiled from "E:\wamp\www\2016\WTF\templates\stuinf.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:208725836f0b7834b43_82296384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee28735adf7db7ed23529ecf029c0b919f491d11' => 
    array (
      0 => 'E:\\wamp\\www\\2016\\WTF\\templates\\stuinf.tpl',
      1 => 1479995572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208725836f0b7834b43_82296384',
  'variables' => 
  array (
    'inf' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f0b78c7aa6_53179166',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f0b78c7aa6_53179166')) {
function content_5836f0b78c7aa6_53179166 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '208725836f0b7834b43_82296384';
?>
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

	 <?php echo '<script'; ?>
 type="text/javascript">
           function goback(){
            location.href=history.go(-1);
           }
       <?php echo '</script'; ?>
>
        

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
	<?php
$_from = $_smarty_tpl->tpl_vars['inf']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
</td>
		<td>
			<?php if (($_smarty_tpl->tpl_vars['v']->value['sex'] == 0)) {?>男<?php } else { ?>女<?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['bj'];?>
</td>
		<td><a href="up_stu.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">修改</a>&nbsp;<a href="de_stu.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">删除</a></td>

	</tr>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</table>	


</body>
</html><?php }
}
?>