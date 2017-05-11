<?php /* Smarty version 3.1.27, created on 2016-11-24 09:42:28
         compiled from "E:\wamp\www\2016\WTF\templates\main_km.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:202255836b604ee9b58_34171703%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7ac193f4f82ddc23a64aa45d9924456767eb68' => 
    array (
      0 => 'E:\\wamp\\www\\2016\\WTF\\templates\\main_km.tpl',
      1 => 1479920249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202255836b604ee9b58_34171703',
  'variables' => 
  array (
    'main_km' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836b605001201_44888788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836b605001201_44888788')) {
function content_5836b605001201_44888788 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '202255836b604ee9b58_34171703';
?>
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
    		<?php
$_from = $_smarty_tpl->tpl_vars['main_km']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

    		<tr style="font-size:40px;">
    		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
    		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['kmname'];?>
</td>
    		<td><a href="upkm.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>&nbsp;<a href="dekm.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
    		<hr style="margin-right: 380px" />
    		</tr>
    		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    		</span>
    	</table>
    </form>

<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/jquery.wysiwyg.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/cycle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/jquery.checkbox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/flot.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/flot.resize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/flot-graphs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/flot-time.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/cycle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/jquery.tablesorter.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>