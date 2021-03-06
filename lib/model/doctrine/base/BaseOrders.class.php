<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Orders', 'doctrine');

/**
 * BaseOrders
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property float $amount
 * @property string $firstname
 * @property integer $mobile
 * @property string $address
 * @property integer $payment_type
 * @property string $ip
 * @property string $agent
 * @property integer $status
 * @property timestamp $created_at
 * 
 * @method integer   getId()           Returns the current record's "id" value
 * @method integer   getUserId()       Returns the current record's "user_id" value
 * @method float     getAmount()       Returns the current record's "amount" value
 * @method string    getFirstname()    Returns the current record's "firstname" value
 * @method integer   getMobile()       Returns the current record's "mobile" value
 * @method string    getAddress()      Returns the current record's "address" value
 * @method integer   getPaymentType()  Returns the current record's "payment_type" value
 * @method string    getIp()           Returns the current record's "ip" value
 * @method string    getAgent()        Returns the current record's "agent" value
 * @method integer   getStatus()       Returns the current record's "status" value
 * @method timestamp getCreatedAt()    Returns the current record's "created_at" value
 * @method Orders    setId()           Sets the current record's "id" value
 * @method Orders    setUserId()       Sets the current record's "user_id" value
 * @method Orders    setAmount()       Sets the current record's "amount" value
 * @method Orders    setFirstname()    Sets the current record's "firstname" value
 * @method Orders    setMobile()       Sets the current record's "mobile" value
 * @method Orders    setAddress()      Sets the current record's "address" value
 * @method Orders    setPaymentType()  Sets the current record's "payment_type" value
 * @method Orders    setIp()           Sets the current record's "ip" value
 * @method Orders    setAgent()        Sets the current record's "agent" value
 * @method Orders    setStatus()       Sets the current record's "status" value
 * @method Orders    setCreatedAt()    Sets the current record's "created_at" value
 * 
 * @package    megamed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrders extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('orders');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('amount', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('firstname', 'string', 155, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 155,
             ));
        $this->hasColumn('mobile', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('address', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('payment_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('agent', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}