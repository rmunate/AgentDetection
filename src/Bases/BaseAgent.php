<?php

namespace Rmunate\AgentDetection\Bases;

abstract class BaseAgent
{
    /**
     * Handle calls to missing methods on the helper.
     *
     * @param string $method     The name of the method being called.
     * @param array  $parameters The parameters passed to the method.
     *
     */
    public function __call($method, $parameters)
    {
        try {
            return new static($_SERVER['HTTP_USER_AGENT'])->{$method}($parameters);
        } catch (\Throwable $th) {
            throw new Exception("El metodo {$method} no existe", 500);
        }
    }


    /**
     * Get the raw user agent string from the server.
     *
     * @return string The raw user agent string.
     */
    public static function get()
    {
        return self::$agent ?? $_SERVER['HTTP_USER_AGENT'];
    }

    /**
     * Set a custom user agent string.
     *
     * @param string $string The custom user agent string.
     *
     * @return \Rmunate\Server\Agent An instance of the Agent class.
     */
    public static function set($string)
    {
        return new static($string);
    }
}
