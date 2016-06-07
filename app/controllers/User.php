<?php


/**
 * 欢迎页.
 */
class UserController extends \Core\Controller\Web
{

    /**
     * 构造
     * @return [type] [description]
     */
    public function init()
    {
        /**
         * init 
         */
        parent::init();
        /**
         * init site
         */
        parent::initSite();

        /**
         * assign type
         */
        $this->_view->assign("typeList", $this->getTypeData());
    }

    /**
     * 注册
     * @return [type] [description]
     */
    public function registerAction()
    {

    }

    /**
     * 注册操作
     * @return [type] [description]
     */
    public function doRegisterAction()
    {
        $params = array(
            "user_name" => trim($this->_req->user_name),
            "email" => trim($this->_req->email),
            "password" => $this->_req->password
        );
        $result = \Index\UserModel::instance()->checkParams($params);
        $errorMsg = "";
        switch ($result['error_code']) {
            case '-1':
                $errorMsg = "未知错误";
                break;
            case '-2':
                $errorMsg = "用户名不能为空";
                break;
            case '-3':
                $errorMsg = "Email不能为空或格式不正确";
                break;
            case '-4':
                $errorMsg = "密码由6到20个字符或数字或下划线组成";
                break;
            default:
                break;
        }

        if ($result['error_code'] < 0) {
            $this->errorAction($errorMsg, "/index/index/register", 3);
            exit;
        }

        $addUser = \Index\UserModel::instance()->addUser($params);
        if ($addUser < 1) {
            $this->errorAction("已存在该账号！", "/index/index/register", 3);
            exit;
        }
        if (is_array($addUser) && $addUser) {
            $_SESSION['user'] = $addUser;
            $this->redirect("/");
            exit;
        } else {
            $this->errorAction("注册失败", "/index/index/register", 3);
            exit;
        }
    }

    /**
     * 登录
     * @return [type] [description]
     */
    public function loginAction()
    {
        
    }

    /**
     * 登录操作
     * @return [type] [description]
     */
    public function doLoginAction()
    {
        $params = array(
            "user_name" => trim($this->_req->user_name),
            "password" => $this->_req->password
        );
        // print_r($params);exit;
        $result = \Index\UserModel::instance()->checkParams($params);
        $errorMsg = "";
        switch ($result['error_code']) {
            case '-1':
                $errorMsg = "未知错误";
                break;
            case '-2':
                $errorMsg = "用户名或Email不能为空";
                break;
            case '-4':
                $errorMsg = "密码由6到20个字符串组成。";
                break;
            default:
                break;
        }

        if ($result['error_code'] < 0) {
            $this->errorAction($errorMsg, "/index/index/login", 3);
            exit;
        }
        $userInfo = \Index\UserModel::instance()->getUserInfo(
            $params['user_name'], $params['password']
        );
        if (!$userInfo) {
            $this->errorAction("登录失败", "/index/index/login", 3);
            exit;
        }
        $_SESSION['user'] = $userInfo;
        header("Location:/index/index/index");
        exit;
    }

    /**
     * 个人资料
     * @return [type] [description]
     */
    public function myinfoAction()
    {
        die("个人资料页");
    }

    /**
     * 修改密码
     * @return [type] [description]
     */
    public function modifyPasswordAction()
    {
        die("修改密码页");
    }

    /**
     * 修改密码操作
     * @return [type] [description]
     */
    public function doModifyPasswordAction()
    {
        die("修改密码页");
    }

    /**
     * 登出
     * @return [type] [description]
     */
    public function logoutAction()
    {
        $_SESSION = array();
        session_destroy();
        header("Location:/index/index/index");
        exit;
    }

}
