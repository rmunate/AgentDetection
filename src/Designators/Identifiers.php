<?php

namespace Rmunate\AgentDetection\Designators;

class Identifiers
{
    // Mobile user agent identifiers
    const MOBILES = [
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
    const IPHONE = [
        'iPhone',
        'iPhone OS',
    ];

    // Mac user agent identifiers
    const MAC = [
        'Macintosh',
        'Intel Mac OS',
        'Intel Mac',
    ];

    // Linux user agent identifiers
    const LINUX = [
        'Linux',
    ];

    // Android user agent identifiers
    const ANDROID = [
        'Android',
    ];

    // Windows user agent identifiers
    const WINDOWS = [
        'Windows',
    ];

    // Windows Phone user agent identifiers
    const WINDOWS_PHONE = [
        'Windows Phone',
    ];

    // iPod user agent identifiers
    const IPOD = [
        'iPod',
    ];

    // iPad user agent identifiers
    const IPAD = [
        'iPad',
    ];

    // iMac user agent identifiers
    const IMAC = [
        'iMac',
    ];

    // Operating system mapping based on regular expressions
    const OPERATING_SYSTEM = [
        '/\bWindows\b/i'                  => 'Windows',
        '/\bMacintosh\b|Mac(?!.+OS X)/i'  => 'Mac',
        '/\bLinux\b/i'                    => 'Linux',
        '/\bAndroid\b/i'                  => 'Android',
        '/\biPhone\b|\biPad\b|\biPod\b/i' => 'iOS',
    ];

    // Browser mapping
    const BROWSERS = [
        'Internet Explorer' => [
            'MSIE',
            'IEMobile',
            'MSIEMobile',
        ],
        'Netscape'          => [
            'Netscape',
        ],
        'Opera'             => [
            'Opera',
            'Opera Mini',
        ],
        'Microsoft Edge'    => [
            'Edg',
            'Edge',
        ],
        'Coc Coc'           => [
            'coc_coc_browser',
        ],
        'Vivaldi'           => [
            'Vivaldi',
        ],
        'UCBrowser'         => [
            'UCBrowser',
        ],
        'Google Chrome'     => [
            'Chrome',
        ],
        'Mozilla Firefox'   => [
            'Firefox',
        ],
        'WeChat'            => [
            'MicroMessenger',
        ],
        'Safari'            => [
            'Safari',
            'Apple Safari',
        ],
    ];

    // Platform mapping based on regular expressions
    const PLATFORMS = [
        'Linux'     => '/linux/i',
        'Macintosh' => '/macintosh|mac os x/i',
        'Windows'   => '/windows|win32/i',
    ];
}
