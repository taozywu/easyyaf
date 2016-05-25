<?php

/**
 * 这里主要处理逻辑操作
 *
 */
namespace Index;

class ShopModel extends \Base\ModuleBase
{

    public function getVoucherList($limit = 10)
    {
        return \Index\Data\ShopModel::instance()->getVoucherList($limit);
    }

    public function getShopList($maxId = 0, $limit = 9)
    {
        return \Index\Data\ShopModel::instance()->getShopList($maxId, $limit);
    }

}
