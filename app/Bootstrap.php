<?php

class Bootstrap extends \Yaf\Bootstrap_Abstract
{

    private $_conf = null;

    /**
     * 加载include
     */
    public function _initIncludePath()
    {
    }

    /**
     * 注册命名空间
     */
    public function _initNamespaces()
    {
        \Yaf\Loader::getInstance()->registerLocalNameSpace(array("Core", "Smarty", "YBase"));
    }

    /**
     * 初始化配置
     */
    public function _initConfig()
    {
        $this->_conf = \Yaf\Application::app()->getConfig()->toArray();
        
        if (isset($this->_conf['database']['file'])) {
            $this->_conf['database'] = include_once $this->_conf['database']['file'];
        }
        if (isset($this->_conf['smarty']['file'])) {
            $this->_conf['smarty'] = include_once $this->_conf['smarty']['file'];
        }

        \Yaf\Registry::set("config", $this->_conf);
    }

    /**
     * 初始化smarty
     * @param  Yaf_Dispatcher $dispatcher [description]
     * @return [type]                     [description]
     */
    public function _initSmarty(\Yaf\Dispatcher $dispatcher)
    {
         $smarty = new \Smarty\Adapter(null, $this->_conf['smarty']);
         \Yaf\Dispatcher::getInstance()->setView($smarty);
    }

    /**
     * 初始化database
     * @return [type] [description]
     */
    public function _initDatabase()
    {
        \Db\Connection::instance()->config($this->_conf['database']);
        // @todo 可以将后面这些操作放在model层去操作.
        $adapter['read'] = \Db\Connection::instance()->read();
        $adapter['write'] = \Db\Connection::instance()->write();
        \Yaf\Registry::set("adapter", $adapter);
    }

    /**
     * 初始化插件
     * @param  Yaf_Dispatcher $dispatcher [description]
     * @return [type]                     [description]
     */
    public function _initPlugin(\Yaf\Dispatcher $dispatcher) 
    {
        if (isset($this->_conf['benchmark']['open']) && $this->_conf['benchmark']['open']) {
            $benchmark = new \BenchmarkPlugin();
            $dispatcher->registerPlugin($benchmark);
        }
    }

}
