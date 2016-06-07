<?php

/**
 * 用户逻辑层
 *
 */
namespace Index;

class UserModel extends \Base\ModuleBase
{

    /**
     * 检查参数
     * @param  array  $params [description]
     * @return [type]         [description]
     */
    public function checkParams(array $params = array())
    {
        $result = array (
            "error_code" => 0,
            "msg" => "",
            "data" => array(),
        );
        if (!$params) {
            $result['error_code'] = -1;
            return $result;
        }

        if (isset($params['user_name']) && !$params['user_name']) {
            $result['error_code'] = -2;
            return $result;
        }
        if (isset($params['email']) && !\Core\Common::checkEmail($params['email'])) {
            $result['error_code'] = -3;
            return $result;
        }
        if (isset($params['password']) && !\Core\Common::checkPassword($params['password'])) {
            $result['error_code'] = -4;
            return $result;
        }
        return $result;
    }

    /**
     * 添加用户
     * @param array $params [description]
     */
    public function addUser(array $params = array())
    {
        $params['password'] = md5($params['password']);
        if ($this->checkUserName($params['user_name']) > 0) {
            return -11;
        }
        $add = \Index\Data\UserModel::instance()->addUser($params);
        if ($add > 0) {
            return $this->getUserInfoByUserNameOrEmail($params['user_name']);
        }
        return null;
    }

    /**
     * [getUserInfoByUserNameOrEmail description]
     * @param  [type]  $userValue [description]
     * @param  integer $userFlag  [description]
     * @return [type]             [description]
     */
    public function getUserInfoByUserNameOrEmail($userValue, $userFlag = 1)
    {
        return \Index\Data\UserModel::instance()->getUserInfoByUserNameOrEmail($userValue, $userFlag);
    }

    /**
     * [getUserInfo description]
     * @param  [type] $userName [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    public function getUserInfo($userName, $password)
    {
        // 优先找user_name
        if ($this->checkUserName($userName) > 0) {
            return $this->getUserInfoByUserName($userName, $password);
        }
        return $this->getUserInfoByEmail($userName, $password);
    }

    /**
     * [getUserInfoByUserName description]
     * @param  [type] $userName [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    private function getUserInfoByUserName($userName, $password)
    {
        $password = md5($password);
        return \Index\Data\UserModel::instance()->getUserInfoByUserName($userName, $password);
    }

    /**
     * [getUserInfoByEmail description]
     * @param  [type] $email    [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    private function getUserInfoByEmail($email, $password)
    {
        $password = md5($password);
        return \Index\Data\UserModel::instance()->getUserInfoByEmail($email, $password);
    }

    /**
     * [checkUserName description]
     * @param  [type] $userName [description]
     * @return [type]           [description]
     */
    private function checkUserName($userName)
    {
        return \Index\Data\UserModel::instance()->checkUserName($userName);
    }

}
