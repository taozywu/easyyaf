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

    public function getShopCount($where)
    {
        return \Index\Data\ShopModel::instance()->getShopCount($where);
    }

    public function getShopList($where, $page = 1, $pageSize = 10)
    {
        return \Index\Data\ShopModel::instance()->getShopList($where, $page, $pageSize);
    }

    public function getTypeData($parentId = 0)
    {
        return \Index\Data\ShopModel::instance()->getTypeData((int) $parentId);
    }

    public function getTypeName($tid)
    {
        return \Index\Data\ShopModel::instance()->getTypeName((int) $tid);
    }

    public function getShopDetail($id)
    {
        return \Index\Data\ShopModel::instance()->getShopDetail((int) $id);
    }

}
