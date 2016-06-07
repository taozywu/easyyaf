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
        /**
         * init 
         */
        parent::init();
        /**
         * init site
         */
        parent::initSite();

        /**
         * assign type
         */
        $this->_view->assign("typeList", $this->getTypeData());
    }

    /**
     * 首页
     * @return [type] [description]
     */
    public function indexAction()
    {
        // 获取优惠券
        // $shopVoucher = \Index\ShopModel::instance()->getVoucherList(10);
        // 商品信息
        $shopList = \Index\ShopModel::instance()->getShopList("", 1, 40);

        $this->_view->assign("type", 0);
        $this->_view->assign("shopVoucher", array());
        $this->_view->assign("shopList", $shopList);
    }

    

    /**
     * [listAction description]
     * @return [type] [description]
     */
    public function listAction()
    {
        $type = (int) $this->_req->type;
        $page = (int) $this->_req->page;
        $pageSize = 40;

        $where = "";
        if ($type > 0) {
            $where .= " and type_parent_id = {$type}";
        }

        // 商品总数
        $shopCount = \Index\ShopModel::instance()->getShopCount($where);
        $pageCount = ceil($shopCount/$pageSize);
        /**
         * 输入的页码比最大页码还大情况。
         * @var [type]
         */
        $page = $page > $pageCount ? $pageCount : $page;
        $page = $page < 1 ? 1 : $page;
        // 商品信息
        $shopList = \Index\ShopModel::instance()->getShopList($where, $page, $pageSize);

        $linkCount = 10;
        $url = "/index/index/list/type/{$type}";
        
        $result = \Helper\Page::page($page, $pageCount, $linkCount);
        $pageShow = \Core\Common::page($page, $pageCount, $url, $result);

        $typeName = \Index\ShopModel::instance()->getTypeName($type);
        $typeName = !$typeName ? $this->_conf['system']['site']['name'] : $typeName;

        $this->_view->assign("title", $typeName);
        $this->_view->assign("type", $type);
        $this->_view->assign("shopList", $shopList);
        $this->_view->assign("pageShow", $pageShow);
    }

    /**
     * 详情
     * @return [type] [description]
     */
    public function detailAction()
    {
        $id = (int) $this->_req->id;
        $shopRow = \Index\ShopModel::instance()->getShopDetail($id);
        if (!$shopRow) {
            $this->errorAction();
            exit;
        }
        $shopRow['shop_imgs'] = $shopRow['shop_imgs'] ? json_decode($shopRow['shop_imgs'], true) : array();
        if ($shopRow['shop_imgs']) {
            $shopRow['img_show_first']= str_replace("_60x60q90.jpg", "_400x400.jpg", $shopRow['shop_imgs'][0]);

            $count = count($shopRow['shop_imgs']);
            for($i =0; $i < $count; $i++) {
                $shopRow['img_show'][] = array(
                    "small" => $shopRow['shop_imgs'][$i],
                    "mid" => str_replace("_60x60q90.jpg", "_400x400.jpg", $shopRow['shop_imgs'][$i]),
                    "big" => str_replace("_60x60q90.jpg", "", $shopRow['shop_imgs'][$i]),
                );
            }
        }

        $shopRow['main_configs']= $shopRow['main_configs'] ? json_decode($shopRow['main_configs'], true) : array();
        
        $shopRow['service_text']= $shopRow['service_text'] ? json_decode($shopRow['service_text'], true) : array();
        // print_r($shopRow);exit;

        $this->_view->assign("title", $shopRow['title']);
        $this->_view->assign("shopRow", $shopRow);
    }

}
 
