<?php /* Smarty version 3.1.27, created on 2016-11-24 13:54:51
         compiled from "E:\wamp\www\2016\WTF\templates\in_gra1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:323085836f12be10ac1_83962207%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07775a81d732038232eaa13f471d1225c7461335' => 
    array (
      0 => 'E:\\wamp\\www\\2016\\WTF\\templates\\in_gra1.tpl',
      1 => 1479995690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323085836f12be10ac1_83962207',
  'variables' => 
  array (
    'bj' => 0,
    'kmname' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836f12be70596_20433147',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836f12be70596_20433147')) {
function content_5836f12be70596_20433147 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '323085836f12be10ac1_83962207';
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
<form action="in_gra2.php" method="post" align="center">
<h1><strong>成绩录入</strong></h1>
请选择要录入成绩的班级：
<select name="bj" >
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['name'] = 'lp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bj']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <option value="<?php echo $_smarty_tpl->tpl_vars['bj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lp']['index']]['bj'];?>
"><?php echo $_smarty_tpl->tpl_vars['bj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lp']['index']]['bj'];?>
</option>	
<?php endfor; endif; ?>
</select>
<br/>
请选择要录入成绩的科目:
<select name="km">
<?php
$_from = $_smarty_tpl->tpl_vars['kmname']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

</select>
<input type="submit" value="确定" name="sub" />
<a href="index.php">返回</a>
</form>

</body>
</html>
<?php }
}
?>