<?php

namespace Rmunate\AgentDetection\Traits;

trait Identifiers
{
    // Mobile user agent identifiers
    public static $MOBILES = [
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

    // iPhone user agent identifiers
    public static $IPHONE = [
        'iPhone',
        'iPhone OS',
    ];

    // Mac user agent identifiers
    public static $MAC = [
        'Macintosh',
        'Intel Mac OS',
    ];

    // Linux user agent identifiers
    public static $LINUX = [
        'Linux',
    ];

    // Android user agent identifiers
    public static $ANDROID = [
        'Android',
    ];

    // Windows user agent identifiers
    public static $WINDOWS = [
        'Windows',
    ];

    // Windows Phone user agent identifiers
    public static $WINDOWS_PHONE = [
        'Windows Phone',
    ];

    // iPod user agent identifiers
    public static $IPOD = [
        'iPod',
    ];

    // iPad user agent identifiers
    public static $IPAD = [
        'iPad',
    ];

    // iMac user agent identifiers
    public static $IMAC = [
        'iMac',
    ];

    // Operating system mapping based on regular expressions
    public static $OPERATING_SYSTEM = [
        '/\bWindows\b/i'                  => 'Windows',
        '/\bMacintosh\b|Mac(?!.+OS X)/i'  => 'Mac',
        '/\bLinux\b/i'                    => 'Linux',
        '/\bAndroid\b/i'                  => 'Android',
        '/\biPhone\b|\biPad\b|\biPod\b/i' => 'iOS',
    ];

    // Browser mapping
    public static $BROWSERS = [
        'Internet Explorer' => 'MSIE',
        'Opera'             => 'Opera',
        'Netscape'          => 'Netscape',
        'Apple Safari'      => 'Safari',
        'Microsoft Edge'    => 'Edg',
        'Google Chrome'     => 'Chrome',
        'Mozilla Firefox'   => 'Firefox',
    ];

    // Platform mapping based on regular expressions
    public static $PLATFORMS = [
        'Linux'     => '/linux/i',
        'Macintosh' => '/macintosh|mac os x/i',
        'Windows'   => '/windows|win32/i',
    ];
}
