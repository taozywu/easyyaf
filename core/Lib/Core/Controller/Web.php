<?php
/**
 * 核心WEB基类控制器
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
namespace Core\Controller;

class Web extends Base
{
    public function init()
    {
        parent::init();
        parent::initAppModule();

        session_start();
    }

    /**
     * [getTypeData description]
     * @return [type] [description]
     */
    public function getTypeData($parentId = 0)
    {
        return \Index\ShopModel::instance()->getTypeData($parentId);
    }

    /**
     * [initSite description]
     * @return [type] [description]
     */
    public function initSite()
    {
        $this->_view->assign('site', $this->_conf['system']['site']);
    }

    /**
     * 错误
     * @return [type] [description]
     */
    public function errorAction($errorMsg = "", $errorUrl = "", $errorTime = 3)
    {
        $this->_view->assign("errorMsg", $errorMsg);
        $this->_view->assign("errorUrl", $errorUrl);
        $this->_view->assign("errorTime", $errorTime * 1000);
        $this->_view->display("../Common/404.html");
    }
}
