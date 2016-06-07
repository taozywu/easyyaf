<?php /* Smarty version Smarty-3.1.7, created on 2016-06-02 10:51:58
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\modules\user\register.html" */ ?>
<?php /*%%SmartyHeaderCode:23080574f9f4e98b120-40471650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ad2898b0321d69b4ab30dbb178fe4fbbffb233' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\modules\\user\\register.html',
      1 => 1464779111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23080574f9f4e98b120-40471650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_574f9f4e9e104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f9f4e9e104')) {function content_574f9f4e9e104($_smarty_tpl) {?><title>注册|<?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("common/header-top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- 注册 -->
<form action="/index/user/doRegister" method="post" novalidate="novalidate">
<div class="wrapper page-account">
        <h1>- 注册 <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
 -</h1>
        <div class="page-account-content">
            <div class="page-account-content-left float-left">
                <table>
                    <tbody><tr>
                        <td>
                            <input class="txt" data-val="true" data-val-required="用户名不能为空" id="user_name" name="user_name" placeholder="用户名" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="user_name" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="txt" data-val="true" data-val-required="Email 字段是必需的。" id="email" name="email" placeholder="Email 地址" type="text" value="">
                            <span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="txt" data-val="true" data-val-length="密码由6到20个字符或数字或下划线组成。" data-val-length-max="20" data-val-length-min="6" data-val-required="密码不能为空" id="password" name="password" placeholder="密码" type="password">
                            <span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="txt btn-submit" type="submit" value="注册">
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div class="page-account-content-right float-right">
                <a class="first" href="https://oauth.taobao.com/authorize?response_type=code&amp;client_id=21565374&amp;redirect_uri=http%3a%2f%2fwww.haodian8.com%2faccount%2flogin&amp;state=taobao"><i class="iconfont taobao"></i>使用淘宝账号登录</a><a href="https://api.weibo.com/oauth2/authorize?response_type=code&amp;client_id=1051430212&amp;redirect_uri=http%3a%2f%2fwww.haodian8.com%2faccount%2flogin&amp;state=sinaweibo"><i class="iconfont weibo"></i>使用微博账号登录</a><a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&amp;client_id=100478530&amp;redirect_uri=http%3a%2f%2fwww.haodian8.com%2faccount%2flogin&amp;state=qq"><i class="iconfont qq"></i>使用QQ账号登录</a>
            </div>
        </div>
        <div class="page-account-more">
            <p>
                已经有一个账号了？<a href="/index/user/login">请登录</a>
            </p>
        </div>
    </div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("common/search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>