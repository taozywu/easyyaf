<?php 
/**
 * 
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
        $this->_conf = \Yaf\Registry::get("config");
    }

    /**
     * init app module
     * @return [type] [description]
     */
    public function initAppModule()
    {
        $this->_view->assign('module', $this->getModuleName());
        $this->_view->assign('controller', strtolower($this->getRequest()->getControllerName()));
        $this->_view->assign('action', $this->getRequest()->getActionName());
    }

}
