<?php /* Smarty version 3.1.27, created on 2016-11-24 14:00:57
         compiled from "E:\wamp\www\2016\WTF\templates\cxstu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:87255836f2990127c4_05467394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e5330d203211abfd0123ac02e2b7b877ce194b3' => 
    array (
      0 => 'E:\\wamp\\www\\2016\\WTF\\templates\\cxstu.tpl',
      1 => 1479996054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87255836f2990127c4_05467394',
  'variables' => 
  array (
    'cxstu' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f29907f566_57884645',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f29907f566_57884645')) {
function content_5836f29907f566_57884645 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87255836f2990127c4_05467394';
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
    <form align="center">
    <h1><strong>学生信息</strong></h1>
    	<table border="1" align="center">
    		<tr><td>学号</td><td>姓名</td><td>性别</td><td>班级</td></tr>
    		<?php
$_from = $_smarty_tpl->tpl_vars['cxstu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
    		<tr>
    			
    			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
</td><td><?php if (($_smarty_tpl->tpl_vars['v']->value['sex'] == 0)) {?>男<?php } else { ?>女<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['bj'];?>
</td>
    			
    		</tr>
    		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    	</table>
    	<a href="stuinf.php">返回</a>
    </form>
</body>
</html><?php }
}
?>