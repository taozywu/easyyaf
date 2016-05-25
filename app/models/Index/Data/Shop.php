<?php

/**
 * 这个里面主要处理数据操作
 */
namespace Index\Data;

class ShopModel extends \Base\DbBase
{
    const TABLE_SHOP_DETAIL = 'shop_detail';
    const TABLE_SHOP_VOUCHER = 'shop_voucher';
    const DATABASE = 'shop';

    public function getVoucherList($pageSize)
    {
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select * from " . self::TABLE_SHOP_VOUCHER . " order by id desc limit {$pageSize}";
        return $db->queryAll($sql);
    }

    public function getShopList($page, $pageSize)
    {
        $startIndex = intval(($page -1) * $pageSize);

        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select * from " . self::TABLE_SHOP_DETAIL . " order by id desc limit {$startIndex}, {$pageSize}";
        return $db->queryAll($sql);
    }

}
