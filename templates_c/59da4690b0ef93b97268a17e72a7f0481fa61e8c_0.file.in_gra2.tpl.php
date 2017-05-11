<?php /* Smarty version 3.1.27, created on 2016-11-24 14:20:00
         compiled from "C:\wamp\www\StudentManage\templates\in_gra2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43645836f710670c09_89142644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59da4690b0ef93b97268a17e72a7f0481fa61e8c' => 
    array (
      0 => 'C:\\wamp\\www\\StudentManage\\templates\\in_gra2.tpl',
      1 => 1479995600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43645836f710670c09_89142644',
  'variables' => 
  array (
    'km' => 0,
    'bj' => 0,
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f7106c9630_23428858',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f7106c9630_23428858')) {
function content_5836f7106c9630_23428858 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43645836f710670c09_89142644';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
  body{
    background-image: url("images/background.jpg");
    background-repeat:no-repeat;
      background-size:100% ;
  }
</style>
</head>

<body>
<form action="in_gra3.php" method="post">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['km']->value;?>
" name="km"/><!--科目-->
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['bj']->value;?>
" name="bj"/><!--班级-->

<h1 align="center"><?php echo $_smarty_tpl->tpl_vars['bj']->value;?>
班成绩表录入</h1>
<table border="1" width="400" style="border-collapse:collapse" align="center">
<tr><td>学号</td><td>姓名</td><td>科目</td><td>成绩</td></tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['name'] = 'lp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['total']);
?>
  <tr >
  <td ><?php echo $_smarty_tpl->tpl_vars['stu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lp']['index']]['xh'];?>
</td>
  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lp']['index']]['xh'];?>
" name="xh[]"/><!--学号-->
  <td ><?php echo $_smarty_tpl->tpl_vars['stu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lp']['index']]['xm'];?>
</td>
  <td ><?php echo $_smarty_tpl->tpl_vars['km']->value;?>
</td>
  <td ><input type="text" name="cj[]" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lp']['index']]['cj'];?>
"/></td>
  </tr>
	
<?php endfor; endif; ?>
  <tr><td colspan="4"><input type="submit" value="确定" name="sub" /></td></tr>
  <tr><td colspan="4"><a href="index.php">返回</a></td></tr>
</table>


</form>

</body>
</html>
<?php }
}
?>