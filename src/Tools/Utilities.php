<?php

namespace Rmunate\AgentDetection\Tools;

class Utilities
{
    /**
     * Check if a string contains any of the specified keywords.
     *
     * @param string $value    The string to check.
     * @param array  $keywords An array of keywords to search for.
     *
     * @return bool True if the string contains any keyword, false otherwise.
     */
    public static function inString(string $value, array $keywords)
    {
        foreach ($keywords as $keyword) {
            if (stripos($value, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }
}
