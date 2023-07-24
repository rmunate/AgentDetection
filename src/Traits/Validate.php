<?php

namespace Rmunate\AgentDetection\Traits;

trait Validate
{
    /**
     * Check if the user agent contains any of the given keywords.
     *
     * @param array $keywords
     *
     * @return bool
     */
    private function validateKeyword(array $keywords)
    {
        foreach ($keywords as $keyword) {
            if (stripos($this->agent, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }
}
