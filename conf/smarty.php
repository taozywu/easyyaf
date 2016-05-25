<?php
/**
 * Smarty 配置
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 * 
 * @author taozy.wu<taozy.wu@qq.com>
 * @copyright taozy.wu<taozy.wu@qq.com>
 * @link http://www.github.com/taozywu
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
return array(
    "template_dir" => ROOT_PATH . "/app/views/",
    "compile_dir" => ROOT_PATH . "/cache/tpls_c/",
    'config_dir' => ROOT_PATH . '/conf/tpl/',
    'cache_dir' => ROOT_PATH . '/cache/tpls/',
    "plugins_dir" => ROOT_PATH . "/core/Lib/Smarty/sysplugins/",
    'caching' => 0,
    'cache_lifetime' => '60',
    'layout' => 'layout/layout.html',
    "img_url" => "./img",
    "js_url" => "./js",
    "css_url" => "./css",
);
