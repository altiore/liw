<?php declare(strict_types = 1);

namespace liw\validators;

/**
 * Created by PhpStorm.
 * User: r
 * Date: 01.09.16
 * Time: 2:08
 */
class Validator
{
    use Required,
        Trim,
        Boolean;

    public $isValid = true;
    public $value;
    public $field;

    public function run(&$value)
    {
        $this->value = &$value;
        return $this;
    }
}
