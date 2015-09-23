<?php

class Bootstrap extends \Yaf\Bootstrap_Abstract
{

    private $_config = null;

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
        \Yaf\Loader::getInstance()->registerLocalNameSpace(array("Core", "Smarty"));
    }

    /**
     * 初始化配置
     */
    public function _initConfig()
    {
        $this->_config = \Yaf\Application::app()->getConfig();
        // \YClient\YTextRpcClient::config($this->_config->rpcserver->toArray());
        \Yaf\Registry::set("config", $this->_config);
    }

    /**
     * 初始化smarty
     * @param  Yaf_Dispatcher $dispatcher [description]
     * @return [type]                     [description]
     */
    public function _initSmarty(\Yaf\Dispatcher $dispatcher)
    {
         $smarty = new \Smarty\Adapter(null, $this->_config->smarty->toArray());
         $dispatcher->setView($smarty);
    }

    /**
     * 初始化插件
     * @param  Yaf_Dispatcher $dispatcher [description]
     * @return [type]                     [description]
     */
    public function _initPlugin(\Yaf\Dispatcher $dispatcher) 
    {
        if (isset($this->_config->application->benchmark) && $this->_config->application->benchmark)
        {
            $benchmark = new \BenchmarkPlugin();
            $dispatcher->registerPlugin($benchmark);
        }
    }


}
