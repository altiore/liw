<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: r
 * Date: 01.09.16
 * Time: 2:31
 */

namespace liw\validators;


trait Boolean
{
    /**
     * @var mixed the value representing true status. Defaults to '1'.
     */
    public $trueValue = '1';
    /**
     * @var mixed the value representing false status. Defaults to '0'.
     */
    public $falseValue = '0';

    /**
     * @inheritdoc
     */
    public function boolean($strict = false)
    {
        $this->isValid = !$strict && ($this->value == $this->trueValue || $this->value == $this->falseValue)
            || $strict && ($this->value === $this->trueValue || $this->value === $this->falseValue);

        return $this;
    }
}
