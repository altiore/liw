<?php declare(strict_types = 1);

namespace liw\web;

/**
 * Class Application
 *
 * @package liw\web
 */
class Application
{
    private $config = [];

    /**
     * Application constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->checkConfig($config);
        $this->config = $config;
    }

    /**
     * @return bool
     */
    public function run()
    {
        if (empty($this->config)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param $config
     *
     * @throws \Exception
     */
    private function checkConfig($config)
    {
        if (!is_array($config)) {
            throw new \Exception("Config must be an array!");
        }
    }
}
