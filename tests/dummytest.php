<?php

require_once('dummy.php');
use PHPUnit\Framework\TestCase;

class RemoteConnectTest extends TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
}
?>
