<?php
/**
 * Created by PhpStorm.
 * User: r
 * Date: 14.08.16
 * Time: 12:40
 */

namespace liw;

class Controller
{
    protected $request;
    protected $response;

    public function __construct(\liw\Request $request)
    {
        $this->request = $request;
    }
}
