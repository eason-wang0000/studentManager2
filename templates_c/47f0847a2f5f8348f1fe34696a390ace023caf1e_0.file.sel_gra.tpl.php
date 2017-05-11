<?php /* Smarty version 3.1.27, created on 2016-11-27 16:14:23
         compiled from "E:\wamp\www\2016\StudentManage\templates\sel_gra.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27537583b065fb77f59_16953955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f0847a2f5f8348f1fe34696a390ace023caf1e' => 
    array (
      0 => 'E:\\wamp\\www\\2016\\StudentManage\\templates\\sel_gra.tpl',
      1 => 1479995551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27537583b065fb77f59_16953955',
  'variables' => 
  array (
    'sel_gra' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583b065fcf78d5_23564004',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583b065fcf78d5_23564004')) {
function content_583b065fcf78d5_23564004 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27537583b065fb77f59_16953955';
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
    <h1 align="center">成绩信息</h1>
    <form align="center" method="post" action="stusel_gra.php">
    请输入要查询的学号：<input type="text" name="oncexh">
    <input type="submit" name="sub" value="查询"><br/>
 <table border="1" style="border-collapse:collapse" align="center">
  <tr>
      <td>学号</td><td>姓名</td><td>科目</td><td>成绩</td>
  </tr>
   <?php
$_from = $_smarty_tpl->tpl_vars['sel_gra']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<input type="hidden" name="xh[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">
<input type="hidden" name="km[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
">
  <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
</td><td><input type="text" name='cj[]' value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
"></td>
     <!-- <td><a href="upstu_gra.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
&cj=<?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
">修改</a>&nbsp;<a href="selstu_gra.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">删除</a></td> -->
     
  </tr>
   <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
  </table>
  <input type="submit" name="up" value="修改">
  <a href="index.php">返回</a>
  </form>
</body>
</html><?php }
}
?>