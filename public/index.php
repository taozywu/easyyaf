<?php
/**
 * 入口
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

define("DEBUG", true);
error_reporting(DEBUG ? E_ALL : 0);
ini_set('display_errors', DEBUG ? 'On' : 'Off');
// 是否启用命名空间
if (phpversion() < '5.3') {
    die("Please install or upgrade your's php version >= 5.3.");
}
// 根目录
define("ROOT_PATH", realpath(dirname(__FILE__) . "/../"));
// 应用目录
define("APP_PATH", ROOT_PATH . "/app");
// 检查env
isset($env) || $env = DEBUG ? "dev" : "product";
$_SERVER['env'] = $env;
// 检查yaf extension
$_SERVER['yaf_extension'] = (int) extension_loaded("yaf");
// Yaf global config
$_SERVER['yaf_global'] = require_once ROOT_PATH . "/conf/yaf.php";
// 引入配置文件
require_once ROOT_PATH . "/core/System/config.php";
// new yaf
$app = new \Yaf\Application(ROOT_PATH . "/conf/conf.ini", $env);
$app->bootstrap()->run();
