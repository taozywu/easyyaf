<?php

/**
 * database
 */
return array(
    // 检查是否开启连接池(php-cp)
    "open_connect_pool" => false,
    // 读
    "read" => array(
        'default' => array(
            'dsn'           => 'mysql:host=127.0.0.1;port=3306;dbname=test',
            'user'          => 'root',
            'password'      => '',
            'confirm_link'  => true, // required to set to TRUE in daemons.
            'options'       => array(
                  \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                  \PDO::ATTR_TIMEOUT => 3
            )
        )
    ),
    // 写
    "write" => array(
        'default' => array(
            'dsn'           => 'mysql:host=127.0.0.1;port=3306;dbname=test',
            'user'          => 'root',
            'password'      => '',
            'confirm_link'  => true, // required to set to TRUE in daemons.
            'options'       => array(
                  \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                  \PDO::ATTR_TIMEOUT => 3
            )
        )
    )
);