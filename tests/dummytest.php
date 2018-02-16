<?php

require_once('dummy.php');
use PHPUnit\Framework\TestCase;

class RemoteConnectTest extends TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = '198.9.0.3';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
}
?>