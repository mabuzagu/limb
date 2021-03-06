<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com 
 * @copyright  Copyright &copy; 2004-2009 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html 
 */

require_once(dirname(__FILE__) . '/../DriverTypeInfoTestBase.class.php');

class lmbPgsqlTypeInfoTest extends DriverTypeInfoTestBase
{

  function lmbPgsqlTypeInfoTest()
  {
    parent :: DriverTypeInfoTestBase('lmbPgsqlStatement', 'lmbPgsqlRecord');
  }

  function setUp()
  {
    $this->connection = lmbToolkit :: instance()->getDefaultDbConnection();
    $this->typeInfo = $this->connection->getTypeInfo();
    parent::setUp();
  }
}


