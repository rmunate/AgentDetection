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
        'Intel Mac',
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
        'Internet Explorer' => 'IEMobile',
        'Internet Explorer' => 'MSIEMobile',
        'Netscape'          => 'Netscape',
        'Opera Mini'        => 'Opera Mini',
        'Opera'             => 'Opera',
        'Microsoft Edge'    => 'Edg',
        'Microsoft Edge'    => 'Edge',
        'Coc Coc'           => 'coc_coc_browser',
        'Vivaldi'           => 'Vivaldi',
        'UCBrowser'         => 'UCBrowser',
        'Google Chrome'     => 'Chrome',
        'Mozilla Firefox'   => 'Firefox',
        'WeChat'            => 'MicroMessenger',
        'Safari'            => 'Safari',
        'Apple Safari'      => 'Safari',
    ];

    // Platform mapping based on regular expressions
    public static $PLATFORMS = [
        'Linux'     => '/linux/i',
        'Macintosh' => '/macintosh|mac os x/i',
        'Windows'   => '/windows|win32/i',
    ];
}
