<?php
namespace tests\validators;

use liw\validators\Validator;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 *
 * @package tests\web
 */
class ValidatorsTest extends TestCase
{
    /** @var  Validator */
    public $validator;

    public function setUp()
    {
        $this->validator = new Validator();
    }

    /**
     * @dataProvider trimData
     */
    public function testTrimValidator($value, $result)
    {
        $this->validator->run($value)->trim();
        $this->assertEquals($result, $value);
    }

    public function trimData()
    {
        return [
            [' sss sss     ', 'sss sss'],
            ['sss sss     ', 'sss sss'],
            [' sss sss', 'sss sss'],
        ];
    }

    /**
     * @dataProvider booleanData
     */
    public function testBooleanValidator($value, $isValid, $strict)
    {
        $this->validator->run($value)->boolean($strict);
        $this->assertEquals($isValid, $this->validator->isValid);
    }

    public function booleanData()
    {
        return [
            [true, false, true],
            [false, false, true],
            [' sss sss', false, true],
            [1, false, true],
            [[1, 2, 3], false, true],
            [[1, 2, 3], false, false],
        ];
    }
}
