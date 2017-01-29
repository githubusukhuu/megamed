<?php

/**
 * ProductTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProductTable extends Doctrine_Table
{

    /**
     * Returns an instance of this class.
     *
     * @return object ProductTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Product');
    }

    public static function getBy($id)
    {
        return self::getInstance()
                        ->createQuery()
                        ->where('id = ?', $id)
                        ->fetchOne();
    }

    public static function getList($categoryId = false)
    {
        $where = array();
        $where[] = '1';
        if ($categoryId) {
            $where[] = 'p.category_id = ' . (int) $categoryId;
        }
        $where = implode(' AND ', $where);

        $sql = 'SELECT c.`name` AS category_name, p.*
                FROM product p
                LEFT JOIN category c ON c.id = p.category_id
                WHERE ' . $where;

        $pdo = AppEntity::getConnection();
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }

}
