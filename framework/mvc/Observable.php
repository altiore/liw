<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: r
 * Date: 17.09.16
 * Time: 15:17
 */

namespace liw\mvc;


interface Observable
{
    /**
     * @param Observer $observer
     *
     * @return mixed
     */
    public function addObserver(Observer $observer);

    /**
     * @param Observer $observer
     *
     * @return mixed
     */
    public function removeObserver(Observer $observer);

    /**
     * Execute methods Observer::handleEvent for all observers
     *
     * @return void
     */
    public function notifyObservers();
}
