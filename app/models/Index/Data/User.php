<?php

/**
 * 这个里面主要处理数据操作
 */
namespace Index\Data;

class UserModel extends \Base\DbBase
{
    const TABLE_SHOP_USER = 'shop_user';
    const DATABASE = 'shop';

    /**
     * [addUser description]
     * @param array $params [description]
     */
    public function addUser(array $params = array())
    {
        if (!$params) {
            return -1;
        }
        $result = array(
            "user_name" => $params['user_name'],
            "email" => $params['email'],
            "password" => $params['password'],
            "add_time_int" => time(),
            "last_time_int" => time(),
        );
        $db = {};
        return $db->insert(self::TABLE_SHOP_USER, $result);
    }

    /**
     * [getUserInfoByUserNameOrEmail description]
     * @param  [type] $userValue [description]
     * @param  [type] $userFlag  1=user_name2=email
     * @return [type]            [description]
     */
    public function getUserInfoByUserNameOrEmail($userValue, $userFlag = 1)
    {
        $db = {};
        $where = $userFlag == 1 ? "user_name" : "email";
        $sql = "select * from " . self::TABLE_SHOP_USER . " where `{$where}` = '{$userValue}'";
        return $db->queryRow($sql);
    }

    /**
     * [checkUserName description]
     * @param  [type] $userName [description]
     * @return [type]           [description]
     */
    public function checkUserName($userName)
    {
        $db = {};
        $sql = "select count(1) from " . self::TABLE_SHOP_USER . " where user_name = '{$userName}'";
        return (int) $db->querySimple($sql);
    }

    /**
     * [getUserInfoByUserName description]
     * @param  [type] $userName [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    public function getUserInfoByUserName($userName, $password)
    {
        $db = {};
        $sql = "select * from " . self::TABLE_SHOP_USER;
        $sql .= " where user_name = '{$userName}' and password = '{$password}'";
        return $db->queryRow($sql);
    }

    /**
     * [getUserInfoByEmail description]
     * @param  [type] $email    [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    public function getUserInfoByEmail($email, $password)
    {
        $db = {};
        $sql = "select * from " . self::TABLE_SHOP_USER;
        $sql .= " where email = '{$email}' and password = '{$password}'";
        return $db->queryRow($sql);
    }
}
