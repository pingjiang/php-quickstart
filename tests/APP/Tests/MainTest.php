<?php

namespace APP\Tests;

use APP\Main;

/**
* MainTest
*/
class MainTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        //print("setUp testcase.\n");
        //$this->assertTrue(FALSE, 'NOT Implemented Yet.');
    }
    
    public function testMain()
    {
        $this->assertEquals(0, Main::main());
    }
    
    public function tearDown()
    {
        //print("tearDown testcase.\n");
    }
}
?>