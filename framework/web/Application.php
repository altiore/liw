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
    public function __construct(array $config = null)
    {
        if ($config !== null) {
            $this->checkConfig($config);
            $this->config = $config;
        }
    }

    /**
     * @param array $config
     *
     * @throws \Exception
     */
    public function configure(array $config)
    {
        $this->checkConfig($config);
        $this->config = $config;
    }

    /**
     * @return bool
     */
    public function checkConfigure()
    {
        return !empty($this->config);
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
     * @throws \InvalidArgumentException
     */
    public function notFound()
    {
        throw new \InvalidArgumentException();
    }

    public function sayHello()
    {
        echo 'Hello World!';
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
