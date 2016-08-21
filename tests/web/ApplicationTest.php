<?php
namespace tests\web;

use liw\web\Application;
use liw\Request;
use liw\Response;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 *
 * @package tests\web
 */
class ApplicationTest extends TestCase
{
    /** @var  Application */
    protected $app;

    public function setUp()
    {
        parent::setUp();
        $this->app = new Application();
    }

//    public function testRunApplication()
//    {
//        $app = new Application(['param' => 'value']);
//        $this->assertTrue($app->run());
//        $wrongApp = new Application([]);
//        $this->assertFalse($wrongApp->run());
//
//        $this->assertEquals(true, $app->run());
//    }
//
//    public function testConfigureApplication()
//    {
//        $app = new Application();
//        $app->configure(['param' => 'value']);
//        $this->assertTrue($app->checkConfigure());
//    }
//
//    /**
//     * Testing exception
//     */
//   public function testException()
//   {
//       $this->expectException(\InvalidArgumentException::class);
//       $this->app->notFound();
//   }
//
//    /**
//     * Testing output
//     */
//    public function testString()
//    {
//        $this->expectOutputString('Hello World!');
//        $this->app->sayHello();
//    }

    /**
     * @dataProvider componentsProvider
     */
    public function testGetCoreComponent($componentName, $className = null)
    {
        if ($className === null) {
            $className = $componentName;
        }
        $this->assertTrue($this->app->{$componentName} instanceof $className);
    }

    /**
     * @return array
     */
    public function componentsProvider()
    {
        return [
            [Request::class],
            ['Request', Request::class],
        ];
    }

    /**
     * @dataProvider notExistingComponentsProvider
     */
    public function testTryToGetNotExistingComponent($componentName)
    {
        $this->expectException(\Exception::class);
        $this->app->{$componentName};
    }

    /**
     * @return array
     */
    public function notExistingComponentsProvider()
    {
        return [
            ['reqquest'],
            ['ressponse'],
        ];
    }
}
