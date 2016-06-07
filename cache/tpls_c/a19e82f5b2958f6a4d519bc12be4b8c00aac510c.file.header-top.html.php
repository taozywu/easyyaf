<?php /* Smarty version Smarty-3.1.7, created on 2016-06-02 10:51:58
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\common\header-top.html" */ ?>
<?php /*%%SmartyHeaderCode:17217574f9f4e9ecbc4-63225378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19e82f5b2958f6a4d519bc12be4b8c00aac510c' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\common\\header-top.html',
      1 => 1464834329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17217574f9f4e9ecbc4-63225378',
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
  'unifunc' => 'content_574f9f4ea236d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f9f4ea236d')) {function content_574f9f4ea236d($_smarty_tpl) {?><div class="wrapper site-header clearfix">
    <div class="float-left site-logo">
        <a href="/"><img id="logo-img" alt="" src="/img/logo.png" width="76" height="21"></a>
    </div>
    <div class="float-right site-account">
        <?php if (!isset($_SESSION['user'])){?>
        <div class="float-left site-login">
            <a class="white" href="/index/user/login" style="height: 32px;">登录</a>
        </div>
        <div class="float-right site-register">
            <a class="white" href="/index/user/register" style="height: 32px;">注册</a>
        </div>
        <?php }else{ ?>
        <div class="float-right site-register site-my-account" style="min-width:120px;text-align:center;">
            <a class="white" href="javascript:void(0);" style="height: 46px;">
            <?php echo $_SESSION['user']['user_name'];?>

            <i class="iconfont"> </i>
            </a>
            <div class="nav-user-backend">
                <ul>
                    <li><a href="/index/user/myInfo" style="height: 32px;">个人资料</a></li>
                    <li><a href="/index/user/modifyPasswd" style="height: 32px;">修改密码</a></li>
                    <li><a href="/index/user/logout" style="height: 32px;">登出</a></li>
                </ul>
            </div>
        </div>
        <?php }?>
    </div>
    <div class="float-left site-nav">
        <ul class="list-inline">
            <li class="site-nav-item"><a href="/index/index/list/type/hot">薅羊毛</a></li>
            <li class="site-nav-item"><a href="/index/index/list/type/hot">热门商品</a></li>
            <li class="site-nav-item site-nav-item-mega">
                <a href="javascript:void(0);">全部商品
                <i class="iconfont"> </i>
                </a>
                <div class="mega-nav">
                    <ul class="list-block">
                        <li class="title">热门</li>
                        <?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['pv']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pk']->value<5){?>
                        <li><a href="/index/index/list/type/<?php echo $_smarty_tpl->tpl_vars['pv']->value['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['pv']->value['name'];?>
</a></li>
                        <?php }?>
                        <?php } ?>
                    </ul>
                    <ul class="list-block">
                        <li class="title">其他</li>
                        <?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_smarty_tpl->tpl_vars['pk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
 $_smarty_tpl->tpl_vars['pk']->value = $_smarty_tpl->tpl_vars['pv']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pk']->value>=5){?>
                        <li><a href="/index/index/list/type/<?php echo $_smarty_tpl->tpl_vars['pv']->value['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['pv']->value['name'];?>
</a></li>
                        <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li class="site-nav-item mobile-search-icon">
            <a href="javascript:void(0);">
            <i class="iconfont">  </i>
            </a>
            </li>
        </ul>
    </div>
    <div class="float-left site-search">
        <span>
        <i class="iconfont">  </i>
        <input readonly="readonly" type="text" placeholder="点击搜索..."></span>
    </div>

</div>
<?php }} ?>