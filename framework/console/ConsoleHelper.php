<?php
declare(strict_types=1);
namespace liw\console;

trait ConsoleHelper
{
    public $default_color = "default";

    private static $font_types = [
        'bold'     => "1",
        'underline'=> "4",
        'flash'    => "5",
        'inverse'  => "7",
        'hidden'   => "8",
    ];

    private static $font_colors = [
        'default' => "0",
        'black'   => "30",
        'red'     => "31",
        'green'   => "32",
        'yellow'  => "33",
        'blue'    => "34",
        'purple'  => "35",
        'aqua'    => "36",
        'white'   => "37",
    ];

    private static $font_backgrounds = [
        'default' => "",
        'grey'    => "7",
        'black'   => "40",
        'red'     => "41",
        'green'   => "42",
        'yellow'  => "43",
        'blue'    => "44",
        'purple'  => "45",
        'aqua'    => "46",
        'white'   => "47",
    ];

    /**
     * @param string $value
     * @param string $color
     * @param string $background
     * @param        $types
     * @throws \Exception
     */
    public function out(string $value, string $color = '', string $background = 'default', $types = [])
    {
        if ($color === '') {
            $color = $this->default_color;
        }
        if (is_string($types)) {
            $types = [$types];
        }
        self::testInArray($color, self::$font_colors);
        self::testInArray($background, self::$font_backgrounds);
//        if (!empty($types)) {
//            array_map('static::testInArray', $types, self::$font_types);
//        }
        $c = static::$font_colors[$color];
        $b = static::$font_backgrounds[$background];
        array_push($types, $c);
        if (!empty($b)) {
            array_push($types, $b);
        }
        echo  "\x1b[" . implode(';', $types) . "m" . $value . "\x1b[" . self::$font_colors[$this->default_color] . "m" . PHP_EOL;
    }

    private static function testInArray($needle, array $array)
    {
        if (!array_key_exists($needle, $array)) {
            throw new \Exception("Color not exists");
        }
    }
}
