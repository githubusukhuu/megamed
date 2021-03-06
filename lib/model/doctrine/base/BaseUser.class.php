<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('User', 'doctrine');

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $lastname
 * @property string $firstname
 * @property string $photo
 * @property integer $mobile
 * @property integer $total_point
 * @property integer $used_point
 * @property integer $is_verify
 * @property integer $is_system_admin
 * @property integer $status
 * @property integer $user_type_id
 * @property timestamp $last_login
 * @property timestamp $verified_at
 * @property timestamp $updated_at
 * @property timestamp $created_at
 * 
 * @method integer   getId()              Returns the current record's "id" value
 * @method string    getEmail()           Returns the current record's "email" value
 * @method string    getUsername()        Returns the current record's "username" value
 * @method string    getPassword()        Returns the current record's "password" value
 * @method string    getLastname()        Returns the current record's "lastname" value
 * @method string    getFirstname()       Returns the current record's "firstname" value
 * @method string    getPhoto()           Returns the current record's "photo" value
 * @method integer   getMobile()          Returns the current record's "mobile" value
 * @method integer   getTotalPoint()      Returns the current record's "total_point" value
 * @method integer   getUsedPoint()       Returns the current record's "used_point" value
 * @method integer   getIsVerify()        Returns the current record's "is_verify" value
 * @method integer   getIsSystemAdmin()   Returns the current record's "is_system_admin" value
 * @method integer   getStatus()          Returns the current record's "status" value
 * @method integer   getUserTypeId()      Returns the current record's "user_type_id" value
 * @method timestamp getLastLogin()       Returns the current record's "last_login" value
 * @method timestamp getVerifiedAt()      Returns the current record's "verified_at" value
 * @method timestamp getUpdatedAt()       Returns the current record's "updated_at" value
 * @method timestamp getCreatedAt()       Returns the current record's "created_at" value
 * @method User      setId()              Sets the current record's "id" value
 * @method User      setEmail()           Sets the current record's "email" value
 * @method User      setUsername()        Sets the current record's "username" value
 * @method User      setPassword()        Sets the current record's "password" value
 * @method User      setLastname()        Sets the current record's "lastname" value
 * @method User      setFirstname()       Sets the current record's "firstname" value
 * @method User      setPhoto()           Sets the current record's "photo" value
 * @method User      setMobile()          Sets the current record's "mobile" value
 * @method User      setTotalPoint()      Sets the current record's "total_point" value
 * @method User      setUsedPoint()       Sets the current record's "used_point" value
 * @method User      setIsVerify()        Sets the current record's "is_verify" value
 * @method User      setIsSystemAdmin()   Sets the current record's "is_system_admin" value
 * @method User      setStatus()          Sets the current record's "status" value
 * @method User      setUserTypeId()      Sets the current record's "user_type_id" value
 * @method User      setLastLogin()       Sets the current record's "last_login" value
 * @method User      setVerifiedAt()      Sets the current record's "verified_at" value
 * @method User      setUpdatedAt()       Sets the current record's "updated_at" value
 * @method User      setCreatedAt()       Sets the current record's "created_at" value
 * 
 * @package    megamed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('email', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('username', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('password', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('lastname', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('firstname', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('photo', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('mobile', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('total_point', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('used_point', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_verify', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_system_admin', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '2',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('user_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('last_login', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('verified_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}