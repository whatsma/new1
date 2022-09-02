<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class ShowPhpVersion extends \PHPUnit\Framework\TestCase
{
    public function testVersion()
    {
        echo 'Current PHP version: ' . phpversion();
        $this->assertTrue(true);
    }
}
