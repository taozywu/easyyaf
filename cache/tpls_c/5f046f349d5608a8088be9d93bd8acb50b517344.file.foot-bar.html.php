<?php /* Smarty version Smarty-3.1.7, created on 2016-06-02 10:52:41
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\common\foot-bar.html" */ ?>
<?php /*%%SmartyHeaderCode:25970574f9f79c01cf1-11827242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f046f349d5608a8088be9d93bd8acb50b517344' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\common\\foot-bar.html',
      1 => 1464435096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25970574f9f79c01cf1-11827242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typeList' => 0,
    'pk' => 0,
    'pv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_574f9f79c4050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f9f79c4050')) {function content_574f9f79c4050($_smarty_tpl) {?><ul id="navs" data-open="斯奇" data-close="宝宝">
    <?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['pv']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['pk']->value<6){?>
    <li><a href="/index/index/list/type/<?php echo $_smarty_tpl->tpl_vars['pv']->value['tid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pv']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['pv']->value['short_name'];?>
</a></li>
    <?php }?>
    <?php } ?>
</ul>

<script type="text/javascript">
(function(){
var ul=$("#navs"),li=$("#navs li"),i=li.length,n=i-1,r=120;
ul.click(function(){
$(this).toggleClass('active');
    if($(this).hasClass('active')) {
        for(var a=0;a<i;a++){
            li.eq(a).css({
                'transition-delay':""+(50*a)+"ms",
                '-webkit-transition-delay':""+(50*a)+"ms",
                '-o-transition-delay':""+(50*a)+"ms",
                'transform':"translate("+(r*Math.cos(90/n*a*(Math.PI/180)))+"px,"+(-r*Math.sin(90/n*a*(Math.PI/180)))+"px",
                '-webkit-transform':"translate("+(r*Math.cos(90/n*a*(Math.PI/180)))+"px,"+(-r*Math.sin(90/n*a*(Math.PI/180)))+"px",
                '-o-transform':"translate("+(r*Math.cos(90/n*a*(Math.PI/180)))+"px,"+(-r*Math.sin(90/n*a*(Math.PI/180)))+"px",
                '-ms-transform':"translate("+(r*Math.cos(90/n*a*(Math.PI/180)))+"px,"+(-r*Math.sin(90/n*a*(Math.PI/180)))+"px"
            });
        }
    } else {
        li.removeAttr('style');
    }
});
})($);
</script>
<?php }} ?>