<?php /* Smarty version Smarty-3.1.7, created on 2016-06-02 10:52:41
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\modules\index\list.html" */ ?>
<?php /*%%SmartyHeaderCode:17959574f9f79a7b294-68776375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4420f25c40aa7ffc1975bf212724dfca3d4ae3' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\modules\\index\\list.html',
      1 => 1464835041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17959574f9f79a7b294-68776375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'site' => 0,
    'shopList' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_574f9f79ab5c2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f9f79ab5c2')) {function content_574f9f79ab5c2($_smarty_tpl) {?><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("common/header-top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper clearfix">
    <p class="line-title">
        <span>热门商品</span>
    </p>
</div>
<div class="wrapper index-cat clearfix js-product-cat">
    <?php echo $_smarty_tpl->getSubTemplate ("common/type.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="wrapper grid-pad-big product-list grid-big">

    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shopList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
    <div class="col-1-5 mobile-col-1-2 product-item">
        <div class="product-img">
            <a title="<?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
" target="_blank" href="/index/index/detail/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">
            <img class="lazy img-responsive" data-original="<?php echo $_smarty_tpl->tpl_vars['s']->value['first_img'];?>
" />
            </a>

        </div>
        <div class="product-title">
            <p>
                <a target="_blank" href="/index/index/detail/id/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</a>
            </p>
        </div>
        <div class="product-price">
            <p>¥<?php echo $_smarty_tpl->tpl_vars['s']->value['price'];?>
</p>
        </div>
    </div>
    <?php } ?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/foot-bar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>