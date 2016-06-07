<?php /* Smarty version Smarty-3.1.7, created on 2016-06-02 10:52:41
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\common\type.html" */ ?>
<?php /*%%SmartyHeaderCode:28884574f9f79ac5629-64640293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '401f5158dbb93f0234e83806f459b172a29ca6ba' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\common\\type.html',
      1 => 1464448158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28884574f9f79ac5629-64640293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typeList' => 0,
    'pv' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_574f9f79adcd3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f9f79adcd3')) {function content_574f9f79adcd3($_smarty_tpl) {?><ul class="list-inline">
    <?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['pv']->key;
?>
    <li><a href="/index/index/list/type/<?php echo $_smarty_tpl->tpl_vars['pv']->value['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['pv']->value['tid']){?> class="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['pv']->value['name'];?>
</a></li>
    <li>/</li>
    <?php } ?>
</ul>
<?php }} ?>