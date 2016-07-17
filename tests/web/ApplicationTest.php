<?php
/**
 * Created by PhpStorm.
 * User: r
 * Date: 17.07.16
 * Time: 13:27
 */

namespace tests\web;

use liw\web\Application;

/**
 * Class ApplicationTest
 *
 * @package tests\web
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testApplicationConfig()
    {
        $this->assertFalse((new Application([]))->run());
        $this->assertTrue((new Application(['someVariable' => 'someData']))->run());
        $this->assertEquals(true, (new Application(['2']))->run());
    }
}
