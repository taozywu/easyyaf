<?php

/**
 * 入口
 */
// DEBUG模式
define('DEBUG', true);

//根目录
define("ROOT_PATH", realpath(dirname(__FILE__) . "/../"));
//设定yaf全局library
ini_set("yaf.library", ROOT_PATH . "/Core/YBase/");

$app = new \Yaf\Application(ROOT_PATH . "/conf/conf.ini", ini_get('yaf.environ'));

$app->bootstrap()->run();
