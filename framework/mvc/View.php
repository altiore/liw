<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: r
 * Date: 17.09.16
 * Time: 15:12
 */

namespace liw\mvc;

use liw\Request;
use liw\Response;

class View implements Observer
{
    protected $request;

    /**
     * View constructor.
     *
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Response
     */
    public function handleEvent(Observable $observable)
    {
        echo get_class($observable);
    }
}
