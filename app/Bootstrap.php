<?php

/**
 * Class Bootstrap
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

class Bootstrap extends \Yaf\Bootstrap_Abstract
{

    private $_conf = null;

    /**
     * 初始化配置
     */
    public function _initConfig()
    {
        $this->_conf = \Yaf\Application::app()->getConfig()->toArray();
        if (isset($this->_conf['config']['file'])) {
            $this->_conf = array_merge($this->_conf, (array) include_once $this->_conf['config']['file']);
        }

        \Yaf\Registry::set("config", $this->_conf);
    }

    /**
     * 初始化注册命名空间
     */
    public function _initNamespaces()
    {
        \Yaf\Loader::getInstance()->registerLocalNameSpace(array("Core", "Smarty"));
    }

    /**
     * 初始化default
     */
    public function _initDefaultName(\Yaf\Dispatcher $dispatcher) 
    {
        $dispatcher->setDefaultModule("Index")->setDefaultController("Index")->setDefaultAction("index");
    }

    /**
     * 初始化smarty
     */
    public function _initSmarty(\Yaf\Dispatcher $dispatcher)
    {
         $smarty = new \Smarty\Adapter(null, $this->_conf['smarty']);
         \Yaf\Dispatcher::getInstance()->setView($smarty);
    }

    /**
     * 初始化database
     */
    public function _initDatabase()
    {
        
    }

    /**
     * 初始化redis
     */
    public function _initRedis()
    {
        // @todo
    }

    /**
     * 初始化memcache
     */
    public function _initMemcache()
    {

    }

    /**
     * 初始化插件
     */
    public function _initPlugin(\Yaf\Dispatcher $dispatcher) 
    {
        if (isset($this->_conf['benchmark']['open']) && $this->_conf['benchmark']['open']) {
            $benchmark = new \BenchmarkPlugin();
            $dispatcher->registerPlugin($benchmark);
        }
    }

    /**
     * 初始化xhprof
     */
    public function _initXhprof(\Yaf\Dispatcher $dispatcher)
    {
        if (isset($this->_conf['xhprof']['open']) && $this->_conf['xhprof']['open']) {
            $xhprof = new \XhprofPlugin();
            $dispatcher->registerPlugin($xhprof);
        }
    }

}
