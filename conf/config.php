<?php
/**
 * 配置文件
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
/**
 * key => array()
 */
return array(
    "system" => include_once ROOT_PATH . "/conf/system.php",
    "db" => include_once ROOT_PATH . "/conf/db.php",
    "smarty" => include_once ROOT_PATH . "/conf/smarty.php",
    "lang" => include_once ROOT_PATH . "/conf/lang/cn.php",
    "redis" => include_once ROOT_PATH . "/conf/redis.php",
    "memcache" => include_once ROOT_PATH . "/conf/memcache.php",
    "csrf" => include_once ROOT_PATH . "/conf/safe.php",
);
