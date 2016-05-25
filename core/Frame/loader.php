<?php

/**
 * Yaf loader.
 * 借鉴：https://github.com/sillydong/CZD_Yaf_Extension
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
function yaf_auto_load($classname)
{
	$yafNamespace = 'Yaf';
	$namespaceSeparator = '\\';
	$fileName = '';
	$namespace = '';
	if ($yafNamespace . $namespaceSeparator === substr($classname, 0, strlen($yafNamespace . $namespaceSeparator)))
	{
		$fileName = '';
		$namespace = '';
		if (false !== ($lastNsPos = strripos($classname, $namespaceSeparator)))
		{
			$namespace = substr($classname, 0, $lastNsPos);
			$classname = substr($classname, $lastNsPos + 1);
			$fileName = str_replace($namespaceSeparator, DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}
	}
	if ($namespace == 'Yaf' || stripos($namespace, $yafNamespace . $namespaceSeparator) === 0)
	{
		include_once(ROOT_PATH . '/core/Frame/Yaf_Namespace/G.php');
		$fileName = str_replace('Yaf' . DIRECTORY_SEPARATOR, 'Yaf_Namespace' . DIRECTORY_SEPARATOR, $fileName);
	}

	foreach($_SERVER['yaf_global']['autoload_dir'] as $k => $root)
    {
        $classFile = $root . $fileName . str_replace('_', DIRECTORY_SEPARATOR, $classname) . '.php';
        // echo "{$classFile}...\r\n";
        if(is_file($classFile))
        {
            include_once($classFile);
        }
    }
}

spl_autoload_register('yaf_auto_load');
