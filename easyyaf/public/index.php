<?php

/**
 * 入口
 */
// DEBUG模式
define('DEBUG', true);

//目录分隔符
define( 'DS' , DIRECTORY_SEPARATOR );
//根目录
define("ROOT_PATH", realpath(dirname(__FILE__) . "/../"));

$app = new \Yaf\Application(ROOT_PATH . "/conf/conf.ini", ini_get('yaf.environ'));

$app->bootstrap()->run();
