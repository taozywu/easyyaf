<?php

/**
 * 这个里面主要处理数据操作
 */
namespace Index\Data;

class ShopModel extends \Base\DbBase
{
    const TABLE_SHOP_DETAIL = 'shop_detail';
    const TABLE_SHOP_VOUCHER = 'shop_voucher';
    const TABLE_SHOP_TYPE = 'shop_type';
    const DATABASE = 'shop';

    public function getVoucherList($pageSize)
    {
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select * from " . self::TABLE_SHOP_VOUCHER . " order by id desc limit {$pageSize}";
        return $db->queryAll($sql);
    }

    /**
     * 获取商品总数
     * 
     * @param  [type] $where [description]
     * @return [type]        [description]
     */
    public function getShopCount($where)
    {
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select count(1) from " . self::TABLE_SHOP_DETAIL;
        $sql .= " where id > 0 {$where}";
        return $db->querySimple($sql);
    }

    /**
     * 获取商品数据按照score进行排序
     * 
     * @param  [type] $ptid     [description]
     * @param  [type] $tid      [description]
     * @param  [type] $page     [description]
     * @param  [type] $pageSize [description]
     * @return [type]           [description]
     */
    public function getShopList($where, $page, $pageSize)
    {
        $startIndex = intval(($page -1) * $pageSize);
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select * from " . self::TABLE_SHOP_DETAIL;
        $sql .= " where id > 0 {$where} order by score desc limit {$startIndex}, {$pageSize}";
        return $db->queryAll($sql);
    }

    public function getTypeData($parentId)
    {
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select id,tid,name,short_name from " . self::TABLE_SHOP_TYPE;
        $sql .= " where parent_id = {$parentId} order by hot_sort asc";
        return $db->queryAll($sql);
    }

    public function getTypeName($tid)
    {
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select name from " . self::TABLE_SHOP_TYPE;
        $sql .= " where tid = {$tid} ";
        return $db->querySimple($sql);
    }

    public function getShopDetail($id)
    {
        $db = \Db\Connection::instance()->read(self::DATABASE);
        $sql = "select * from " . self::TABLE_SHOP_DETAIL;
        $sql .= " where id = {$id} ";
        return $db->queryRow($sql);
    }

}
