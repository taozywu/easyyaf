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
    public $_layout = '';
    
    /**
     * 默认的布局模板文件路径
     * @var string
     */
    public $_defaultLayout = '';
 
    /**
     * Constructor
     *
     * @param string $tmplPath
     * @param array $extraParams
     * @return void
     */
    public function __construct($tmplPath = null, $extraParams = array())
    {
        // @todo 暂时没有更好的办法
        error_reporting(DEBUG ? E_ALL^E_WARNING: 0);
        // 加载smarty
        \Yaf\Loader::import(ROOT_PATH . "/core/Lib/Smarty/Smarty.class.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_templatecompilerbase.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_templatelexer.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_templateparser.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_compilebase.php");
        \Yaf\Loader::import( ROOT_PATH . "/core/Lib/Smarty/sysplugins/smarty_internal_write_file.php");

        $this->_smarty = new \Smarty;
 
        if (null !== $tmplPath) {
            $this->setScriptPath($tmplPath);
        }

        $this->_smarty->setTemplateDir($extraParams ['template_dir']);
        $this->_smarty->setCompileDir($extraParams ['compile_dir']);
        $this->_smarty->setConfigDir($extraParams ['config_dir']);
        $this->_smarty->setCacheDir($extraParams ['cache_dir']);
        $this->_smarty->caching = $extraParams ['caching'];
        $this->_smarty->cache_lifetime = $extraParams ['cache_lifetime'];

        $this->_defaultLayout = $extraParams['layout'];
        $this->_smarty->assign("imgurl", $extraParams['img_url']);
        $this->_smarty->assign("jsurl", $extraParams['js_url']);
        $this->_smarty->assign("cssurl", $extraParams['css_url']);
        $this->_smarty->assign('DEBUG_MODE', DEBUG);
    }
 
    /**
     * Assign variables to the template
     *
     * Allows setting a specific key to the specified value, OR passing
     * an array of key => value pairs to set en masse.
     *
     * @see __set()
     * @param string|array $spec The assignment strategy to use (key or
     * array of key => value pairs)
     * @param mixed $value (Optional) If assigning a named variable,
     * use this as the value.
     * @return void
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
     * Processes a template and returns the output.
     *
     * @param string $name The template to process.
     * @return string The output.
     */
    public function render($name,$tpl_vars = array())
    {
        // 如果禁用layout
        if ($this->isDisabledLayout()) {
            return $this->_smarty->fetch($name);
        }
        return $this->_smarty->fetch($this->getLayout());
    }

    /**
     * [display description]
     * @param  [type] $name     [description]
     * @param  array  $tpl_vars [description]
     * @return [type]           [description]
     */
    public function display($name, $tpl_vars = array())
    {
    	if (!empty($tpl_vars)) {
    	   $this->assign($tpl_vars);
    	}
    	echo $this->_smarty->display($name);
    }

    /**
     * [setScriptPath description]
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
     * [getScriptPath description]
     * @return [type] [description]
     */
    public function getScriptPath()
    {
    	return $this->_smarty->template_dir;
    }

    /**
     * Add Js TO Smarty
     * @param [type] $path [description]
     */
    public function addJsPath($path)
    {
        if(is_string($path)) {
            $path = array($path);
        }
        // $this->_js = array_merge($this->_js, $path);
        $this->_smarty->assign("yafscript", json_encode($path));
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
