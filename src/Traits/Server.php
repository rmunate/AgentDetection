<?php

namespace Rmunate\AgentDetection\Traits;

trait Server
{
    /**
     * Get the value of the HTTP_USER_AGENT server variable.
     *
     * @return string|null The user agent string or null if not set.
     */
    public static function HTTP_USER_AGENT()
    {
        return $_SERVER['HTTP_USER_AGENT'] ?? null;
    }

    /**
     * Get the value of the REMOTE_ADDR server variable.
     *
     * @return string|null The remote IP address or null if not set.
     */
    public static function REMOTE_ADDR()
    {
        return $_SERVER['REMOTE_ADDR'] ?? null;
    }

    /**
     * Get the value of the REMOTE_PORT server variable.
     *
     * @return int|null The remote port number or null if not set.
     */
    public static function REMOTE_PORT()
    {
        return $_SERVER['REMOTE_PORT'] ?? null;
    }
}
