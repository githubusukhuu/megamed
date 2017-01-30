<?php

/**
 * ProductDetailTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProductDetailTable extends Doctrine_Table
{

    /**
     * Returns an instance of this class.
     *
     * @return object ProductDetailTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ProductDetail');
    }

    public static function getList($productId)
    {
        $rows = self::getInstance()
                ->createQuery()
                ->where('product_id = ?', $productId)
                ->fetchArray();

        return $rows;
    }

    public static function getDetails($productId)
    {
        $sql = 'select p.id, t.id type_id, t.name, p.val
                from product_detail p
                inner join product_detail_type t on t.id = p.product_detail_type_id
                where p.product_id = ' . (int) $productId;

        $pdo = Doctrine_Manager::connection()->getDbh();
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $arr = array();
        foreach ($rows as $row) {
            $arr[$row['type_id']][] = $row;
        }

        return $arr;
    }

}
