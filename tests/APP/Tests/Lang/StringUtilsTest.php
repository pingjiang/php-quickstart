<?php

namespace APP\Tests\Lang;

use APP\Lang\StringUtils;

/**
* StringUtilsTest
*/
class StringUtilsTest extends \PHPUnit_Framework_TestCase
{
    public function testCharAt()
    {
        $this->assertEquals('P', StringUtils::charAt('PHP', 0));
        $this->assertEquals('H', StringUtils::charAt('PHP', 1));
        $this->assertEquals('P', StringUtils::charAt('PHP', 2));
    }
    
    public function testIndexOf()
    {
        $this->assertEquals('HP', StringUtils::indexOf('PHP', 'H'));
    }
}
?>
