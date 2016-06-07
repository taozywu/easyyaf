<?php

/**
 * 此文件一般是为了兼容有无Yaf扩展情况以及针对NAMESPACE情况的配置
 * 注意：一般情况不需要做任何操作！
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
if ($_SERVER['yaf_extension'] == 0) {

    // 引入loader
    require_once ROOT_PATH . "/core/System/loader.php";

    if ($_SERVER['yaf_global']['use_namespace']) {
        \Yaf\G::iniSet('yaf.use_namespace', true);
        \Yaf\G::iniSet('yaf.library', $_SERVER['yaf_global']['library']);
        \Yaf\G::iniSet('yaf.lowcase_path', $_SERVER['yaf_global']['lowcase_path']);
        \Yaf\G::iniSet('yaf.environ', $_SERVER['env']);
        \Yaf\G::iniSet('yaf.name_suffix', $_SERVER['yaf_global']['name_suffix']);
        \Yaf\G::iniSet('yaf.use_spl_autoload', $_SERVER['yaf_global']['use_spl_autoload']);
        \Yaf\G::iniSet('yaf.name_separator', $_SERVER['yaf_global']['name_separator']);
        \Yaf\G::iniSet('yaf.cache_config', $_SERVER['yaf_global']['cache_config']);
        \Yaf\G::iniSet('yaf.forward_limit', $_SERVER['yaf_global']['forward_limit']);
    } else {
        Yaf_G::iniSet('yaf.use_namespace', false);
        Yaf_G::iniSet('yaf.library', $_SERVER['yaf_global']['library']);
        Yaf_G::iniSet('yaf.lowcase_path', $_SERVER['yaf_global']['lowcase_path']);
        Yaf_G::iniSet('yaf.environ', $_SERVER['env']);
        Yaf_G::iniSet('yaf.name_suffix', $_SERVER['yaf_global']['name_suffix']);
        Yaf_G::iniSet('yaf.use_spl_autoload', $_SERVER['yaf_global']['use_spl_autoload']);
        Yaf_G::iniSet('yaf.name_separator', $_SERVER['yaf_global']['name_separator']);
        Yaf_G::iniSet('yaf.cache_config', $_SERVER['yaf_global']['cache_config']);
        Yaf_G::iniSet('yaf.forward_limit', $_SERVER['yaf_global']['forward_limit']);
    }
} else {
    ini_set("yaf.library", $_SERVER['yaf_global']['library']);
    ini_set('yaf.environ', $_SERVER['env']);
    ini_set('yaf.lowcase_path', $_SERVER['yaf_global']['lowcase_path']);
    ini_set('yaf.use_namespace', $_SERVER['yaf_global']['use_namespace']);
    ini_set('yaf.name_suffix', $_SERVER['yaf_global']['name_suffix']);
    ini_set('yaf.use_spl_autoload', $_SERVER['yaf_global']['use_spl_autoload']);
    ini_set('yaf.name_separator', $_SERVER['yaf_global']['name_separator']);
    ini_set('yaf.cache_config', $_SERVER['yaf_global']['cache_config']);
    ini_set('yaf.forward_limit', $_SERVER['yaf_global']['forward_limit']);
}
