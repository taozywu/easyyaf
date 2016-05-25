<?php

/**
 * Db 配置
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
    // 读
    "read" => array(
        'shop' => array(
            'dsn'           => 'mysql:host=127.0.0.1;port=3306;dbname=shop',
            'user'          => 'root',
            'password'      => '123456',
            'confirm_link'  => true, // required to set to TRUE in daemons.
            'options'       => array(
                  // \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                  \PDO::ATTR_TIMEOUT => 3
            )
        )
    ),
    // 写
    "write" => array(
        'shop' => array(
            'dsn'           => 'mysql:host=127.0.0.1;port=3306;dbname=shop',
            'user'          => 'root',
            'password'      => '123456',
            'confirm_link'  => true, // required to set to TRUE in daemons.
            'options'       => array(
                  // \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                  \PDO::ATTR_TIMEOUT => 3
            )
        )
    )
);
