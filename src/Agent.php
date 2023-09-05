<?php

namespace Rmunate\AgentDetection;

use Rmunate\AgentDetection\Traits\Server;
use Rmunate\AgentDetection\Bases\BaseAgent;
use Rmunate\AgentDetection\Traits\Validate;
use Rmunate\AgentDetection\Traits\Wrappers;
use Rmunate\AgentDetection\Traits\Identifiers;

class Agent extends BaseAgent
{
    use Server;
    use Validate;
    use Identifiers;
    use Wrappers;

    protected $agent;

    public function __construct()
    {
        $this->agent = self::HTTP_USER_AGENT();
    }

    /**
     * Validate if the agent is from a mobile device.
     *
     * @return bool
     */
    public function isMobile(): bool
    {
        return $this->validateKeyword(self::$MOBILES);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un escritorio. */
    public function isDesktop(): bool
    {
        return !$this->isMobile();
    }

    /* Retorna True si es un Iphone */
    public function isIPhone(): bool
    {
        return $this->validateKeyword(self::$IPHONE);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un MAC. */
    public function isMacintosh(): bool
    {
        return $this->validateKeyword(self::$MAC);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android). */
    public function isLinux(): bool
    {
        return $this->validateKeyword(self::$LINUX);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Android. */
    public function isAndroid(): bool
    {
        return $this->validateKeyword(self::$ANDROID);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Windows. */
    public function isWindows(): bool
    {
        return $this->validateKeyword(self::$WINDOWS);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Windows Phone. */
    public function isWindowsPhone(): bool
    {
        return $this->validateKeyword(self::$WINDOWS_PHONE);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un iPod. */
    public function isIpod(): bool
    {
        return $this->validateKeyword(self::$IPOD);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un iPad. */
    public function isIpad(): bool
    {
        return $this->validateKeyword(self::$IPAD);
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un iMac. */
    public function isIMac(): bool
    {
        return $this->validateKeyword(self::$IMAC);
    }

    /**
     * Return the name of the current OS.
     *
     * @return string
     */
    public function clientOS(): string
    {
        $operatingSystems = self::$OPERATING_SYSTEM;

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
        $browsers = self::$BROWSERS;
        $platforms = self::$PLATFORMS;

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
            'name'     => $browserName,
            'version'  => $version,
            'platform' => $platform,
        ];
    }

    /**
     * Get the IP address from which the current user is viewing the page.
     */
    public static function remoteAddress()
    {
        return self::REMOTE_ADDR();
    }

    /**
     * Get the port used by the user's machine to communicate with the web server.
     */
    public static function remotePort()
    {
        return self::REMOTE_PORT();
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @param  string|null  $agent
     * @return bool
     */
    public static function isCrawler($agent = null)
    {
        return (!empty($agent)) ? self::crawlerDetect()->isCrawler($agent) : self::crawlerDetect()->isCrawler();
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @param  string|null  $agent
     * @return bool
     */
    public static function isRobot($agent = null)
    {
        return (!empty($agent)) ? self::crawlerDetect()->isCrawler($agent) : self::crawlerDetect()->isCrawler();
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @param  string|null  $agent
     * @return bool
     */
    public static function getRobot($agent = null)
    {
        if (self::isRobot($agent)) {
            return self::crawlerDetect()->getMatches();
        }

        return null;
    }
}
