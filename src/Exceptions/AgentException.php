<?php

namespace Rmunate\AgentDetection\Exceptions;

use Exception;

class AgentException extends Exception
{
    /**
     * Create a new AgentException instance with a personalized message.
     *
     * @param string $message The exception message.
     *
     * @return AgentException
     */
    public static function create(string $message)
    {
        return new self("Rmunate\\AgentDetection\\Agent - Exception - {$message}");
    }
}
