<?php /* Smarty version Smarty-3.1.7, created on 2016-06-02 10:51:58
         compiled from "D:\wnmp\nginx\html\muying\easyyaf/app/views\common\search.html" */ ?>
<?php /*%%SmartyHeaderCode:8422574f9f4ea2f251-34608263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af885cee1cc45e737734fe6d7c3f39880c34091' => 
    array (
      0 => 'D:\\wnmp\\nginx\\html\\muying\\easyyaf/app/views\\common\\search.html',
      1 => 1464232529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8422574f9f4ea2f251-34608263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_574f9f4ea2f25',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f9f4ea2f25')) {function content_574f9f4ea2f25($_smarty_tpl) {?><div class="search-box">

    <h3 class="clearfix">搜索商品：</h3>
    <form action="/index/index/search" method="get">
    <input class="txt" id="s" name="s" placeholder="输入搜索关键字..." type="text" value="">
    <input id="r" name="r" type="hidden" value="0">
    <button class="btn-search btn-submit"><i class="iconfont">  </i></button>
    </form>
    <h3 class="clearfix h3-hot-keyword">热搜关键字：</h3>
    <div class="hot-keyword">
        <ul class="list-inline">
            <li><a href="/index/index/search/keywords/1">奶粉</a></li>
        </ul>
    </div>
</div>
<?php }} ?>