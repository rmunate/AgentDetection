<?php

namespace Rmunate\AgentDetection;

use Rmunate\AgentDetection\Exceptions\AgentException;
use Rmunate\AgentDetection\Server\UserAgent;

class Agent
{
    /**
     * Handle calls to missing static methods.
     *
     * @param string $method     The name of the method being called.
     * @param array  $parameters The parameters passed to the method.
     *
     * @throws AgentException If the method does not exist.
     *
     * @return mixed The result of the called method.
     */
    public static function __callStatic($method, $parameters)
    {
        try {
            $userAgent = new UserAgent();

            return $userAgent->{$method}(...$parameters);
        } catch (\Throwable $th) {
            throw AgentException::create("The method '{$method}()' does not exist.");
        }
    }

    /**
     * Get a UserAgent instance for the current request.
     *
     * @return UserAgent The UserAgent instance.
     */
    public static function detect()
    {
        return new UserAgent();
    }

    /**
     * Get the raw user agent string from the current request.
     *
     * @return string|null The user agent string.
     */
    public static function get()
    {
        return $_SERVER['HTTP_USER_AGENT'] ?? null;
    }

    /**
     * Set a custom user agent string for testing or manipulation.
     *
     * @param string $string The custom user agent string.
     *
     * @return UserAgent The UserAgent instance with the custom string.
     */
    public static function set(string $string)
    {
        return new UserAgent($string);
    }
}
