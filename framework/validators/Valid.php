<?php

namespace liw\validators;

/**
 * @method boolean
 *
 * Class Valid
 * @package yii\validators
 */
class Valid
{
    public $attribute;
    public $model;

    /**
     * @var Validator[]
     */
    public static $validators = [];

    public function check($attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    public static function createForModel($model)
    {
        return new self($model);
    }

    protected function __construct($model)
    {
        $this->model = $model;
    }

    public function setModelAttribute($attribute, $model = null)
    {
        if ($model === null && empty($this->model)) {
            throw new \Exception("Model not set for attribute $attribute");
        }

        if ($model !== null) {
            $this->model = $model;
        }

        $this->attribute = $attribute;
        return $this;
    }

    public function __call($name, $arguments)
    {
        if (array_key_exists($name, self::$validators)) {
            self::$validators[$name]->validateAttribute($this->model, $this->attribute);
        } elseif (array_key_exists($name, Validator::$builtInValidators)) {
            self::$validators[$name] = new Validator::$builtInValidators[$name];
        } else {
            throw new Exception("Validator $name not found!");
        }
    }


}
