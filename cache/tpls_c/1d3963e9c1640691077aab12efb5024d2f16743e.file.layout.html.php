<?php /* Smarty version Smarty-3.1.7, created on 2016-05-25 23:11:43
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\layout\layout.html" */ ?>
<?php /*%%SmartyHeaderCode:31265745bee661d051-66348201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d3963e9c1640691077aab12efb5024d2f16743e' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\layout\\layout.html',
      1 => 1464189071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31265745bee661d051-66348201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5745bee662ca6',
  'variables' => 
  array (
    'controller' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745bee662ca6')) {function content_5745bee662ca6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/".($_smarty_tpl->tpl_vars['controller']->value)."/".($_smarty_tpl->tpl_vars['action']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>