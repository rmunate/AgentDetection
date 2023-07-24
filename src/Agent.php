<?php

namespace Rmunate\AgentDetection;

use Rmunate\Server\System;/////////
use Rmunate\AgentDetection\Bases\BaseAgent;

class Agent extends BaseAgent
{
    protected $agent;

    public function __construct()
    {
        $this->agent = System::getServerVariable('HTTP_USER_AGENT');
    }

    /**
     * Validate if the agent is from a mobile device.
     *
     * @return bool
     */
    public function isMobile(): bool
    {
        $mobileKeywords = [
            'Mobile',
            'Android',
            'iPhone',
            'iPad',
            'iPod',
            'Windows Phone',
            'BlackBerry',
            'webOS',
            'Opera Mini',
            'IEMobile',
        ];

        foreach ($mobileKeywords as $keyword) {
            if (stripos($this->agent, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un escritorio. */
    public function isDesktop(): bool
    {
        return !$this->isMobile();
    }

    /* Retorna True si es un Iphone */
    public function isIPhone(): bool
    {
        return $this->containsKeyword(['iPhone', 'iPhone OS']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un MAC. */
    public function isMacintosh(): bool
    {
        return $this->containsKeyword(['Macintosh', 'Intel Mac OS']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android). */
    public function isLinux(): bool
    {
        return $this->containsKeyword(['Linux']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Android. */
    public function isAndroid(): bool
    {
        return $this->containsKeyword(['Android']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Windows. */
    public function isWindows(): bool
    {
        return $this->containsKeyword(['Windows']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Windows Phone. */
    public function isWindowsPhone(): bool
    {
        return $this->containsKeyword(['Windows Phone']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un iPod. */
    public function isIpod(): bool
    {
        return $this->containsKeyword(['iPod']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un iPad. */
    public function isIpad(): bool
    {
        return $this->containsKeyword(['iPad']);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un iMac. */
    public function isIMac(): bool
    {
        return $this->containsKeyword(['iMac']);
    }

    /**
     * Return the name of the current OS.
     *
     * @return string
     */
    public function clientOS(): string
    {
        $operatingSystems = [
            '/\bWindows\b/i'                  => 'Windows',
            '/\bMacintosh\b|Mac(?!.+OS X)/i'  => 'Mac',
            '/\bLinux\b/i'                    => 'Linux',
            '/\bAndroid\b/i'                  => 'Android',
            '/\biPhone\b|\biPad\b|\biPod\b/i' => 'iOS',
        ];

        foreach ($operatingSystems as $pattern => $os) {
            if (preg_match($pattern, $this->agent)) {
                return $os;
            }
        }

        return 'Unknown';
    }

    /**
     * Return browser information.
     *
     * @return array
     */
    public function browser(): array
    {
        $userAgent = $this->agent;
        $browsers = [
            'Internet Explorer' => 'MSIE',
            'Opera'             => 'Opera',
            'Netscape'          => 'Netscape',
            'Apple Safari'      => 'Safari',
            'Microsoft Edge'    => 'Edg',
            'Google Chrome'     => 'Chrome',
            'Mozilla Firefox'   => 'Firefox',
        ];

        $platforms = [
            'Linux'     => '/linux/i',
            'Macintosh' => '/macintosh|mac os x/i',
            'Windows'   => '/windows|win32/i',
        ];

        $browserName = 'Unknown';
        $platform = 'Unknown';
        $version = 'Unknown';

        // Detect platform
        foreach ($platforms as $platformName => $platformRegex) {
            if (preg_match($platformRegex, $userAgent)) {
                $platform = $platformName;
                break;
            }
        }

        // Detect browser and version
        foreach ($browsers as $browserName => $browserCode) {
            if (str_contains($userAgent, $browserCode)) {
                $pattern = '#(?<browser>'.preg_quote($browserCode).')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
                if (preg_match_all($pattern, $userAgent, $matches)) {
                    $i = count($matches['browser']);
                    if ($i > 0) {
                        $browserName = $browserName;
                        $version = $matches['version'][$i - 1];
                    }
                }
                break;
            }
        }

        return [
            'name'      => $browserName,
            'version'   => $version,
            'platform'  => $platform,
        ];
    }

    /**
     * Check if the user agent contains any of the given keywords.
     *
     * @param array $keywords
     * @return bool
     */
    private function containsKeyword(array $keywords): bool
    {
        foreach ($keywords as $keyword) {
            if (stripos($this->agent, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the IP address from which the current user is viewing the page.
     */
    public static function remoteAddress()
    {
        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
    }

    /**
     * Get the port used by the user's machine to communicate with the web server.
     */
    public static function remotePort()
    {
        return isset($_SERVER['REMOTE_PORT']) ? $_SERVER['REMOTE_PORT'] : null;
    }

}