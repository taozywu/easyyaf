<?php


/**
 * 欢迎页.
 */
class IndexController extends \Core\Controller\Web
{

    /**
     * 构造
     * @return [type] [description]
     */
    public function init()
    {
        parent::init();
    }

    /**
     * 首页
     * @return [type] [description]
     */
    public function indexAction()
    {
       $shopVoucher = \Index\ShopModel::instance()->getVoucherList(10);
       $shopList = \Index\ShopModel::instance()->getShopList(1, 1, 9);

       $this->_view->assign("shopVoucher", $shopVoucher);
       $this->_view->assign("shopList", $shopList);
    }

    public function registerAction()
    {

    }

    public function loginAction()
    {

    }


    public function listAction()
    {

    }

    public function detailAction()
    {
        
    }
}
