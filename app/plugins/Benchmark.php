<?php
/**
 * Plugin Benchmark
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
class BenchmarkPlugin extends \Yaf\Plugin_Abstract
{
	
	public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) 
	{
		\Yaf\Registry::set('benchmark_start', microtime(true));
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
		$start = \Yaf\Registry::get('benchmark_start');
		\Yaf\Registry::del('benchmark_start');
		$time = microtime(true) - (float)$start;
		$configs = \Yaf\Registry::get("config");
		if ($time > $configs['benchmark']['time'])
		{
			file_put_contents(
				$configs['benchmark']['file'], 
				'[benchmark]=>' . $request->getRequestUri() . ':' . $time . "s" . ':' . (memory_get_usage(true) / 1024) . 'kb' . "\n\r", 
				FILE_APPEND
			);
		}
		unset($configs);
	}
}
