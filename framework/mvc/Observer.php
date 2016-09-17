<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: r
 * Date: 17.09.16
 * Time: 15:08
 */

namespace liw\mvc;

interface Observer
{
    /**
     * @param Observable $observable
     *
     * @return mixed
     */
    public function handleEvent(Observable $observable);
}
