<?php declare(strict_types = 1);

namespace lis\db;

use liw\validators\Validator;

/**
 * Created by PhpStorm.
 * User: r
 * Date: 01.09.16
 * Time: 2:11
 */
class ActiveRecord
{
    protected $validator;
    public $name;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    protected function validate($field)
    {
        return $this->validator->run($field);
    }

    public function rules()
    {
        $this->validate($this->name)->required()->integer()->string()->match();
        $this->validate('field')->required()->trim()->filter()->match();
    }
}
