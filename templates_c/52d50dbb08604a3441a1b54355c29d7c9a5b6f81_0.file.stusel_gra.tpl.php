<?php /* Smarty version 3.1.27, created on 2016-11-24 14:20:15
         compiled from "C:\wamp\www\StudentManage\templates\stusel_gra.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:294205836f71f123327_43117201%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d50dbb08604a3441a1b54355c29d7c9a5b6f81' => 
    array (
      0 => 'C:\\wamp\\www\\StudentManage\\templates\\stusel_gra.tpl',
      1 => 1479997136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294205836f71f123327_43117201',
  'variables' => 
  array (
    'stusel_gra' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f71f195d06_63357137',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f71f195d06_63357137')) {
function content_5836f71f195d06_63357137 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '294205836f71f123327_43117201';
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
<form action="stusel_gra.php" method="post" align="center">
<h1 align="center"><strong>学生成绩信息</strong></h1>
    <table border="1" style="border-collapse:collapse" align="center">  
    
  <tr>
      <td>学号</td><td>科目</td><td>成绩</td>
  </tr>
   <?php
$_from = $_smarty_tpl->tpl_vars['stusel_gra']->value;
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
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
</td><td><input type="text" name="cj[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
"/></td>    
  </tr>
   <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

  </table>
     <input type="submit" name="up" value="修改">&nbsp;<input type="submit" name="res" value="返回">
  </form>
</body>
</html><?php }
}
?>