<?php 
/**
 * 核心基类控制器
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
namespace Core\Controller;

class Base extends \Yaf\Controller_Abstract
{
    /**
     * config
     * @var null
     */
    protected $_conf = null;

    // 初始化
    public function init()
    {
        /**
         * config
         * @var [type]
         */
        $this->_conf = \Yaf\Registry::get("config");
        $this->_req = new \Core\Request($this->getRequest());
    }

    /**
     * 加载AppModule
     * @return [type] [description]
     */
    public function initAppModule()
    {
        $this->_view->assign('module', $this->_req->_module);
        $this->_view->assign('controller', $this->_req->_controller);
        $this->_view->assign('action', $this->_req->_action);
    }

    public function initSite()
    {
        
    }

    public function __get($key)
    {
        $val = '';
        switch (true) {
            case isset($this->_params[$key]):
                $val = $this->_params[$key];
                break;
            case isset($_GET[$key]):
                $val = $_GET[$key];
                break;
            case isset($_POST[$key]):
                $val = $_POST[$key];
                break;
            case isset($_COOKIE[$key]):
                $val = $_COOKIE[$key];
                break;
            case ($key == 'REQUEST_URI'):
                $val = $this->getRequestUri();
                break;
            case ($key == 'PATH_INFO'):
                $val = $this->getPathInfo();
                break;
            case isset($_SERVER[$key]):
                $val = $_SERVER[$key];
                break;
            case isset($_ENV[$key]):
                $val = $_ENV[$key];
                break;
            default:
                return null;
        }
        
        if(is_array($val)){
            foreach($val as $key=>$row){
                $val[$key] = htmlspecialchars(rawurldecode($row));
            }
        }else{
            $val = htmlspecialchars(rawurldecode($val));
        }
        return $val;
    }
    
    public function __isset($key)
    {
        switch (true) {
            case isset($this->_params[$key]):
                return true;
            case isset($_GET[$key]):
                return true;
            case isset($_POST[$key]):
                return true;
            case isset($_COOKIE[$key]):
                return true;
            case isset($_SERVER[$key]):
                return true;
            case isset($_ENV[$key]):
                return true;
            default:
                return false;
        }
    }

}
