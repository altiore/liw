<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: r
 * Date: 01.09.16
 * Time: 2:10
 */

namespace liw\validators;

/**
 * Class Trim
 *
 * @property string|integer|boolean|array|object|null $value
 */
trait Trim
{
    public function trim() : Validator
    {
        $this->value = trim($this->value);
        return $this;
    }
}
