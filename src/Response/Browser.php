<?php

namespace Rmunate\AgentDetection\Response;

class Browser
{
    /**
     * @var string The name of the browser.
     */
    public $name;

    /**
     * @var string The version of the browser.
     */
    public $version;

    /**
     * @var string The platform on which the browser is running.
     */
    public $platform;

    /**
     * Browser constructor.
     *
     * @param array $data An associative array containing browser information.
     */
    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->platform = $data['platform'] ?? null;
    }

    /**
     * Get the name of the browser.
     *
     * @return string The browser name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the version of the browser.
     *
     * @return string The browser version.
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Get the platform on which the browser is running.
     *
     * @return string The browser platform.
     */
    public function getPlatform()
    {
        return $this->platform;
    }
}
