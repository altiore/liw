<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: r
 * Date: 01.09.16
 * Time: 3:08
 */

namespace liw\validators;


trait Required
{
    public function required() : Validator
    {
        $this->value;
        return $this;
    }
}
