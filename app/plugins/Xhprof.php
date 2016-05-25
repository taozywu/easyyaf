<?php
/**
 * taozywu
 * 2015/11/07
 */
class XhprofPlugin extends \Yaf\Plugin_Abstract
{
	
	public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{
		$xhprofConf = \Yaf\Registry::get("conf");
		xhprof_enable(
			$xhprofConf->xhprof->flags,
			array('ignored_functions' =>  $xhprofConf->xhprof->ignored_functions)
		);
		unset($xhprofConf);
	}

	public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{
	}

	public function dispatchLoopStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{

	}

	public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{

	}

	public function postDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{

	}

	public function dispatchLoopShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{
		$xhprofConf = \Yaf\Registry::get("conf");
		// stop profiler
		$xhprof_data = xhprof_disable();
		
		// $XHPROF_ROOT = realpath(dirname(__FILE__).'/../../');
		include_once ROOT_PATH . "/xhprofLib/utils/xhprof_lib.php";
		include_once ROOT_PATH . "/xhprofLib/utils/xhprof_runs.php";
		
		// save raw data for this profiler run using default
		// implementation of iXHProfRuns.
		$xhprof_runs = new XHProfRuns_Default();
		
		// save the run under a namespace "xhprof_foo"
		$run_id = $xhprof_runs->save_run($xhprof_data, $xhprofConf->xhprof->namespace);
		
		header("xhprof_url", $_SEVER['HTTP_HOST'] . "/index.php?run=$run_id&source={$xhprofConf->xhprof->namespace}");
		unset($xhprofConf);
		exit;
	}
}
