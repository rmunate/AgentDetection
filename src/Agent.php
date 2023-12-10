<?php

namespace Rmunate\AgentDetection;

use Rmunate\AgentDetection\Bases\BaseAgent;

class Agent extends BaseAgent
{

    /**
     * Constructor for the Agent class.
     *
     * @param string|null $agent The user agent string (if provided).
     */
    public function __construct($agent = null)
    {
        $this->agent = !empty($agent) ? $agent : $_SERVER['HTTP_USER_AGENT'];
    }



















    /**
     * Check if the user agent corresponds to a mobile device.
     *
     * @return bool True if the user agent indicates a mobile device, false otherwise.
     */
    public function isMobile()
    {
        // Validate the user agent against a list of known mobile keywords.
        return $this->validateKeyword(self::$MOBILES);
    }

    /**
     * Check if the user agent corresponds to a desktop device.
     *
     * @return bool True if the user agent indicates a desktop device, false otherwise.
     */
    public function isDesktop()
    {
        // Invert the result of the isMobile() method to check for desktop devices.
        return !$this->isMobile();
    }

    /**
     * Check if the user agent corresponds to an iPhone device.
     *
     * @return bool True if the user agent indicates an iPhone device, false otherwise.
     */
    public function isIPhone()
    {
        // Validate the user agent against a list of known iPhone keywords.
        return $this->validateKeyword(self::$IPHONE);
    }

    /**
     * Check if the user agent corresponds to a Macintosh device.
     *
     * @return bool True if the user agent indicates a Macintosh device, false otherwise.
     */
    public function isMacintosh()
    {
        // Validate the user agent against a list of known Macintosh keywords.
        return $this->validateKeyword(self::$MAC);
    }

    /**
     * Check if the user agent corresponds to a Linux-based device.
     *
     * @return bool True if the user agent indicates a Linux-based device, false otherwise.
     */
    public function isLinux()
    {
        // Validate the user agent against a list of known Linux keywords.
        return $this->validateKeyword(self::$LINUX);
    }

    /**
     * Check if the user agent corresponds to an Android device.
     *
     * @return bool True if the user agent indicates an Android device, false otherwise.
     */
    public function isAndroid()
    {
        // Validate the user agent against a list of known Android keywords.
        return $this->validateKeyword(self::$ANDROID);
    }

    /**
     * Check if the user agent corresponds to a Windows-based device.
     *
     * @return bool True if the user agent indicates a Windows-based device, false otherwise.
     */
    public function isWindows()
    {
        // Validate the user agent against a list of known Windows keywords.
        return $this->validateKeyword(self::$WINDOWS);
    }

    /**
     * Check if the user agent corresponds to a Windows Phone device.
     *
     * @return bool True if the user agent indicates a Windows Phone device, false otherwise.
     */
    public function isWindowsPhone()
    {
        // Validate the user agent against a list of known Windows Phone keywords.
        return $this->validateKeyword(self::$WINDOWS_PHONE);
    }

    /**
     * Check if the user agent corresponds to an iPod device.
     *
     * @return bool True if the user agent indicates an iPod device, false otherwise.
     */
    public function isIpod()
    {
        // Validate the user agent against a list of known iPod keywords.
        return $this->validateKeyword(self::$IPOD);
    }

    /**
     * Check if the user agent corresponds to an iPad device.
     *
     * @return bool True if the user agent indicates an iPad device, false otherwise.
     */
    public function isIpad()
    {
        // Validate the user agent against a list of known iPad keywords.
        return $this->validateKeyword(self::$IPAD);
    }

    /**
     * Check if the user agent corresponds to an iMac device.
     *
     * @return bool True if the user agent indicates an iMac device, false otherwise.
     */
    public function isIMac(): bool
    {
        // Validate the user agent against a list of known iMac keywords.
        return $this->validateKeyword(self::$IMAC);
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @return bool
     */
    public function isCrawler()
    {
        return self::crawlerDetect()->isCrawler($this->agent);
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @return bool
     */
    public function isRobot()
    {
        return $this->isCrawler();
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @return bool
     */
    public function getIfIsCrawler()
    {
        $CrawlerDetect = self::crawlerDetect();
        $CrawlerDetect->isCrawler($this->agent);

        return $CrawlerDetect->getMatches();
    }

    /**
     * Extended function of the library https://github.com/JayBizzle/Crawler-Detect.
     *
     * @return bool
     */
    public function getIfIsRobot()
    {
        return $this->getIfIsCrawler();
    }

    /**
     * Return the name of the current OS.
     *
     * @return string
     */
    public function clientOS()
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
    public function browser()
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
     * Set the headers of the object with the provided array.
     *
     * @param array $array The array containing the headers to set.
     */
    public function setHeaders(array $array)
    {
        // Assign the provided array of headers to the object.
        $this->headers = $array;

        return $this;
    }

    /**
     * Check if the user agent indicates a tablet device.
     *
     * @return bool True if the user agent indicates a tablet device, false otherwise.
     */
    public function isTablet()
    {
        // Use MobileDetect to determine if the user agent indicates a tablet.
        return self::mobileDetect($this->headers, $this->agent)->isTablet();
    }

    /**
     * Match the user agent against a regular expression.
     *
     * @param string $regex The regular expression pattern to match against the user agent.
     *
     * @return bool True if the user agent matches the pattern, false otherwise.
     */
    public function match(string $regex)
    {
        // Use MobileDetect to match the user agent against the specified regular expression.
        return self::mobileDetect($this->headers, $this->agent)->match($regex);
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
}
