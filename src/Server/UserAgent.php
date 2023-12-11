<?php

namespace Rmunate\AgentDetection\Server;

use Detection\MobileDetect;
use Jaybizzle\CrawlerDetect\CrawlerDetect;
use Rmunate\AgentDetection\Tools\Utilities;
use Rmunate\AgentDetection\Response\Browser;
use Rmunate\AgentDetection\Designators\Identifiers;

class UserAgent
{
    /**
     * @string Value User Agent
     */
    protected $agent;

    /**
     * UserAgent constructor.
     *
     * @param string|null $agent The user agent string.
     */
    public function __construct(string $agent = null)
    {
        $this->agent = !empty($agent) ? $agent : $_SERVER['HTTP_USER_AGENT'];
    }

    /**
     * Check if the user agent represents a mobile device.
     *
     * @return bool True if the user agent is from a mobile device, false otherwise.
     */
    public function isMobile()
    {
        return Utilities::inString($this->agent, Identifiers::MOBILES);
    }

    /**
     * Check if the user agent represents a desktop device.
     *
     * @return bool True if the user agent is from a desktop device, false otherwise.
     */
    public function isDesktop()
    {
        return !$this->isMobile();
    }

    /**
     * Check if the user agent represents an iPhone.
     *
     * @return bool True if the user agent is from an iPhone, false otherwise.
     */
    public function isIPhone()
    {
        return Utilities::inString($this->agent, Identifiers::IPHONE);
    }

    /**
     * Check if the user agent represents a Macintosh.
     *
     * @return bool True if the user agent is from a Macintosh, false otherwise.
     */
    public function isMacintosh()
    {
        return Utilities::inString($this->agent, Identifiers::MAC);
    }

    /**
     * Check if the user agent represents an iMac.
     *
     * @return bool True if the user agent is from an iMac, false otherwise.
     */
    public function isIMac()
    {
        return Utilities::inString($this->agent, Identifiers::IMAC);
    }

    /**
     * Check if the user agent represents an iPod.
     *
     * @return bool True if the user agent is from an iPod, false otherwise.
     */
    public function isIpod()
    {
        return Utilities::inString($this->agent, Identifiers::IPOD);
    }

    /**
     * Check if the user agent represents an iPad.
     *
     * @return bool True if the user agent is from an iPad, false otherwise.
     */
    public function isIpad()
    {
        return Utilities::inString($this->agent, Identifiers::IPAD);
    }

    /**
     * Check if the user agent represents a Linux system.
     *
     * @return bool True if the user agent is from a Linux system, false otherwise.
     */
    public function isLinux()
    {
        return Utilities::inString($this->agent, Identifiers::LINUX);
    }

    /**
     * Check if the user agent represents an Android device.
     *
     * @return bool True if the user agent is from an Android device, false otherwise.
     */
    public function isAndroid()
    {
        return Utilities::inString($this->agent, Identifiers::ANDROID);
    }

    /**
     * Check if the user agent represents a Windows system.
     *
     * @return bool True if the user agent is from a Windows system, false otherwise.
     */
    public function isWindows()
    {
        return Utilities::inString($this->agent, Identifiers::WINDOWS);
    }

    /**
     * Check if the user agent represents a Windows Phone device.
     *
     * @return bool True if the user agent is from a Windows Phone device, false otherwise.
     */
    public function isWindowsPhone()
    {
        return Utilities::inString($this->agent, Identifiers::WINDOWS_PHONE);
    }

    /**
     * Check if the user agent represents a tablet device.
     *
     * @return bool True if the user agent is from a tablet device, false otherwise.
     */
    public function isTablet()
    {
        $mobileDetect = new MobileDetect(null, $this->agent);

        return $mobileDetect->isTablet();
    }

    /**
     * Check if the user agent is identified as a crawler.
     *
     * @return bool True if the user agent is identified as a crawler, false otherwise.
     */
    public function isCrawler()
    {
        return (new CrawlerDetect())->isCrawler($this->agent);
    }

    /**
     * Get the matches from the crawler detection.
     *
     * @return array An array containing matches from the crawler detection.
     */
    public function getCrawler()
    {
        $CrawlerDetect = new CrawlerDetect();
        $CrawlerDetect->isCrawler($this->agent);

        return $CrawlerDetect->getMatches();
    }

    /**
     * Check if the user agent matches a given regex pattern.
     *
     * @param string $regex The regex pattern to match.
     *
     * @return bool True if the user agent matches the regex pattern, false otherwise.
     */
    public function match(string $regex)
    {
        return (stripos($this->agent, $regex) !== false);
    }

    /**
     * Get the client's operating system.
     *
     * @return string The client's operating system.
     */
    public function clientOS()
    {
        $operatingSystems = Identifiers::OPERATING_SYSTEM;

        foreach ($operatingSystems as $pattern => $os) {
            if (preg_match($pattern, $this->agent)) {
                return $os;
            }
        }

        return 'Unknown';
    }

    /**
     * Get the remote IP address.
     *
     * @return string|null The remote IP address, or null if not available.
     */
    public function remoteAddress()
    {
        return $_SERVER['REMOTE_ADDR'] ?? null;
    }

    /**
     * Get the remote port.
     *
     * @return string|null The remote port, or null if not available.
     */
    public function remotePort()
    {
        return $_SERVER['REMOTE_PORT'] ?? null;
    }

    /**
     * Get information about the browser.
     *
     * @return array An array containing browser name, version, and platform.
     */
    public function browser()
    {
        $userAgent = $this->agent;
        $browsers = Identifiers::BROWSERS;
        $platforms = Identifiers::PLATFORMS;

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
        foreach ($browsers as $browserNameI => $browserCode) {
            if ($browserName == 'Unknown') {
                foreach ($browserCode as $browse) {
                    $pattern = '#(?<browser>'.preg_quote($browse).')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
                    if (preg_match_all($pattern, $userAgent, $matches)) {
                        $i = count($matches['browser']);
                        if ($i > 0) {
                            $browserName = $browserNameI;
                            $version = $matches['version'][$i - 1];
                        }
                        break;
                    }
                }
            }
        }

        return new Browser([
            'name'     => $browserName,
            'version'  => $version,
            'platform' => $platform,
        ]);
    }
}
