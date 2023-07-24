<?php

namespace Rmunate\AgentDetection\Bases;

use Rmunate\Server\System;

abstract class BaseAgent
{
    /**
     * Detect the user agent and return an instance of the Agent class.
     *
     * @return \Rmunate\Server\Agent An instance of the Agent class.
     */
    public static function detect()
    {
        return new static();
    }

    /**
     * Detect the user agent and return an instance of the Agent class.
     *
     * @return \Rmunate\Server\Agent An instance of the Agent class.
     */
    public static function intersect()
    {
        return new static();
    }

    /**
     * Get the raw user agent string from the server.
     *
     * @return string The raw user agent string.
     */
    public static function get()
    {
        return $_SERVER['HTTP_USER_AGENT'] ?? null;
    }
}
