<?php

namespace Smarty;

/**
 * 视图引擎定义
 * Smarty/Adapter.php
 */
class Adapter implements \Yaf\View_Interface
{

    /**
     * Smarty object
     * @var Smarty
     */
    public $_smarty;

    /**
     * 是否禁用模板布局文件
     * @var boolean
     */
    public $_disabledlayout = false;
    
    /**
     * 布局模板文件路径
     * @var string
     */
    public $_layout = null;
    
    /**
     * 默认的布局模板文件路径
     * @var string
     */
    public $_defaultLayout = null;
 
    /**
     * Constructor
     *
     * @param string $tmplPath
     * @param array $extraParams
     * @return void
     */
    public function __construct($tmplPath = null, $extraParams = array())
    {
        // 加载smarty
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/Smarty.class.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_templatecompilerbase.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_templatelexer.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_templateparser.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_compilebase.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_write_file.php");

        $this->_smarty = new \Smarty;
 
        if (null !== $tmplPath) {
            $this->setScriptPath($tmplPath);
        }

        foreach ($extraParams['smarty'] as $ek => $ev) {
            $this->_smarty->$ek = $ev;
        }

        /**
         * [$this->_defaultLayout description]
         * @var [type]
         */
        $this->_defaultLayout = $extraParams['layout'];
        $this->_smarty->assign('DEBUG_MODE', DEBUG);
    }
 
    /**
     * 设置模板变量
     * 
     * @param  [type] $spec  [description]
     * @param  [type] $value [description]
     * @return [type]        [description]
     */
    public function assign($spec, $value = null)
    {
        if (is_array($spec)) {
            $this->_smarty->assign($spec);
            return;
        }
 
        $this->_smarty->assign($spec, $value);
    }
 
    /**
     * 此函数yaf会自动加载。
     * 1、当禁止布局情况下 
     * $this->_view->disabledLayout();
     *
     * 2、不禁止布局情况下
     * 
     * @param  [type] $name     [description]
     * @param  array  $tpl_vars [description]
     * @return [type]           [description]
     */
    public function render($name,$tpl_vars = array())
    {
        if (!empty($tpl_vars)) {
           $this->assign($tpl_vars);
        }

        if ($this->isDisabledLayout()) {
            return $this->_smarty->fetch($name);
        } else {
            $result = $this->_smarty->fetch($this->getLayout());
            return str_replace("__CONTENT__", $this->_smarty->fetch("modules/" . $name), $result);
        }
    }

    /**
     * 需主动调用
     * 1、当禁止布局情况下
     * $this->_view->disabledLayout();
     *
     * 2、不禁止布局情况
     * 
     * @param  [type] $name     [description]
     * @param  array  $tpl_vars [description]
     * @return [type]           [description]
     */
    public function display($name, $tpl_vars = array())
    {
    	if (!empty($tpl_vars)) {
    	   $this->assign($tpl_vars);
    	}

        if ($this->isDisabledLayout()) {
            echo $this->_smarty->display($name);
        } else {
            $result = $this->_smarty->fetch($this->getLayout());
            echo str_replace("__CONTENT__", $this->_smarty->fetch("modules/" . $name), $result);
        }
        exit;
    }

    /**
     * 动态设置模板路径
     * @param [type] $path [description]
     */
    public function setScriptPath($path)
    {
    	if (is_readable($path)) {
    	   $this->_smarty->template_dir = $path;
    	} else {
    	   throw new Exception('Invalid path provided');
    	}
    }

    /**
     * 获取模板路径
     * @return [type] [description]
     */
    public function getScriptPath()
    {
    	return $this->_smarty->template_dir;
    }

    /**
     * 需主动调用
     * 添加JS加载路径
     * @param [type] $path [description]
     */
    public function addJsPath($path)
    {
        if (is_string($path)) {
            $path = array($path);
        }
        $this->_smarty->assign("yafScript", json_encode($path));
    }

    /**
     * 设置布局模板路径
     * @param string $layout  模板路径
     */
    public function setLayout($layout)
    {
        $this->_layout = $layout;
    }

    /**
     * 获得布局模板路径
     * @return string
     */
    public function getLayout()
    {
        return $this->_layout ? $this->_layout : $this->getDefaultLayout();
    }

    /**
     * 获得默认布局模板路径
     */
    public function getDefaultLayout()
    {
        return $this->_defaultLayout;
    }

    /**
     * 是否禁用布局
     * @return boolean
     */
    public function isDisabledLayout()
    {
        return $this->_disabledlayout;
    }
    
    /**
     * 禁用布局
     */
    public function disabledLayout()
    {
        $this->_disabledlayout = true;
    }

}
?>
