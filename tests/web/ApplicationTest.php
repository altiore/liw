<?php
/**
 * Created by PhpStorm.
 * User: r
 * Date: 17.07.16
 * Time: 14:44
 */

namespace tests\web;


use liw\web\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /** @var  Application */
    protected $app;

    public function setUp()
    {
        parent::setUp();
        $this->app = new Application();
    }

    public function testRunApplication()
    {
        $app = new Application(['param' => 'value']);
        $this->assertTrue($app->run());
        $wrongApp = new Application([]);
        $this->assertFalse($wrongApp->run());

        $this->assertEquals(true, $app->run());
    }

    public function testConfigureApplication()
    {
        $app = new Application();
        $app->configure(['param' => 'value']);
        $this->assertTrue($app->checkConfigure());
    }

    /**
     * Testing exception
     */
   public function testException()
   {
       $this->expectException(\InvalidArgumentException::class);
       $this->app->notFound();
   }

    /**
     * Testing output
     */
    public function testString()
    {
        $this->expectOutputString('Hello World!');
        $this->app->sayHello();
    }
}
