<?php
/**
 * 核心基类 Request
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
namespace Core;

class Request extends \Yaf\Request_Abstract
{
    // Module
	protected $_module;
    // Controller
	protected $_controller;
    // Action
	protected $_action;
    // 参数
	protected $_params;
    // 根目录路径
	protected $_baseUrl;
    // request uri
    protected $_requestUri;
    // base uri
    protected $_baseUri;
	
    /**
     * 构造
     */
	public function __construct(\Yaf\Request_Abstract $request)
    {
        $this->_params = $request->getParams();
        $this->_module = $request->module;
        $this->_controller = $request->controller;
        $this->_action = $request->action;
        $this->_baseUri = $request->getBaseUri();
        $this->_requestUri = $request->getRequestUri();
	}

    /**
     * [__get description]
     * @param  [type] $key [description]
     * @return [type]      [description]
     */
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
	
    /**
     * [__isset description]
     * @param  [type]  $key [description]
     * @return boolean      [description]
     */
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
