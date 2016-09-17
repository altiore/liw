<?php

namespace tests\mvc;

use liw\mvc\Controller;
use liw\mvc\View;
use liw\Request;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: r
 * Date: 17.09.16
 * Time: 15:34
 */
class ControllerTest extends TestCase
{
    /**
     * Test
     */
    public function testObserverPattern()
    {
        $controller = new Controller();
        $controller->addObserver(new View(new Request()));
        $this->expectOutputString(Controller::class);
        $controller->notifyObservers();
    }

}
