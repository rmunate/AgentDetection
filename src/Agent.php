<?php

namespace Rmunate\AgentDetection;

use Rmunate\AgentDetection\Exceptions\AgentException;
use Rmunate\AgentDetection\Response\Browser;
use Rmunate\AgentDetection\Server\RequestContext;
use Rmunate\AgentDetection\Server\UserAgent;

/**
 * @method bool        isMobile()           Check if the user agent represents a mobile device.
 * @method bool        isDesktop()          Check if the user agent represents a desktop device.
 * @method bool        isIPhone()           Check if the user agent represents an iPhone.
 * @method bool        isMacintosh()        Check if the user agent represents a Macintosh.
 * @method bool        isIMac()             Check if the user agent represents an iMac.
 * @method bool        isIpod()             Check if the user agent represents an iPod.
 * @method bool        isIpad()             Check if the user agent represents an iPad.
 * @method bool        isLinux()            Check if the user agent represents a Linux system.
 * @method bool        isAndroid()          Check if the user agent represents an Android device.
 * @method bool        isWindows()          Check if the user agent represents a Windows system.
 * @method bool        isWindowsPhone()     Check if the user agent represents a Windows Phone device.
 * @method bool        isTablet()           Check if the user agent represents a tablet device.
 * @method bool        isCrawler()          Check if the user agent is identified as a crawler.
 * @method string|null getCrawler()         Get the matched crawler name, if any.
 * @method bool        match(string $regex) Check if the user agent contains the given string.
 * @method string      clientOS()           Get the client's operating system.
 * @method string|null remoteAddress()      Get the remote IP address.
 * @method string|null remotePort()         Get the remote port.
 * @method Browser     browser()            Get information about the browser.
 */
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
        $userAgent = self::detect();

        if (!is_callable([$userAgent, $method])) {
            throw AgentException::create("The method '{$method}()' does not exist.");
        }

        return $userAgent->{$method}(...$parameters);
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
        return RequestContext::userAgent();
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
