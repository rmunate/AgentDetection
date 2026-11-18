---
title: Class Methods
editLink: true
outline: deep
---

# Class Methods

Import `Rmunate\AgentDetection\Agent` to inspect the current request. Use `Agent::set()` instead when you have a user-agent string you want to analyze separately.

## Get

This method returns the active Laravel request's `User-Agent` header, or `null` when it is missing. Without a Laravel request, the package reads `$_SERVER['HTTP_USER_AGENT']`.

```php
use Rmunate\AgentDetection\Agent;

Agent::get();
// "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) ... Safari/537.36" 
```

## Set

At times, you may need the package to analyze an agent different from the one identified by the server. In such cases, you can use the `set` method, passing a `string` with the agent value:

```php
use Rmunate\AgentDetection\Agent;

Agent::set("Mozilla/5.0...")->isMobile();
// True Or False
```

After the `set` method, you can chain detection methods. An empty string represents a missing user agent; it does not fall back to the current request.

## Detect

This method creates a detector for the current request. You can then chain detection methods.

```php
use Rmunate\AgentDetection\Agent;

Agent::detect()->isMobile();
// True Or False
```

For a single check, call the detection method directly, for example `Agent::isMobile()`. Use `Agent::detect()` to reuse the detector for multiple checks.

## Is Mobile Connection

This method validates if the connection is from a mobile device (tablet, smartphone, etc.). You can use it directly on the Agent class.

```php
use Rmunate\AgentDetection\Agent;

Agent::isMobile();
// True Or False
```

## Is Desktop Connection

This method returns `true` when a non-empty user agent is not classified as mobile. It returns `false` when the user agent is missing.

```php
use Rmunate\AgentDetection\Agent;

Agent::isDesktop();
// True Or False
```

## From iPhone

This method validates if the connection is from an iPhone specifically, not validating iPad or similar devices; it is limited to checking if the connecting device is an iPhone.

```php
use Rmunate\AgentDetection\Agent;

Agent::isIPhone();
// True Or False
```

## From Macintosh

This method validates if the connection is from a Macintosh device specifically, not validating iMac or similar devices.

```php
use Rmunate\AgentDetection\Agent;

Agent::isMacintosh();
// True Or False
```

## From iMac

This method validates if the connection is from an iMac specifically, not validating Macintosh or similar devices.

```php
use Rmunate\AgentDetection\Agent;

Agent::isIMac();
// True Or False
```

## From iPod

This method validates if the connection is from an iPod specifically, not validating similar devices.

```php
use Rmunate\AgentDetection\Agent;

Agent::isIpod();
// True Or False
```

## From iPad

This method validates if the connection is from an iPad specifically, not validating similar devices.

```php
use Rmunate\AgentDetection\Agent;

Agent::isIpad();
// True Or False
```

## From Linux

This method validates if the connection is from a device with the Linux operating system (regardless of the distribution).

```php
use Rmunate\AgentDetection\Agent;

Agent::isLinux();
// True Or False
```

## From Android

This method validates if the connection is from a device with the Android operating system, commonly working on Linux but determining if an Android is in use.

```php
use Rmunate\AgentDetection\Agent;

Agent::isAndroid();
// True Or False
```

## From Windows

This method validates if the connection is from a device with the Windows operating system, specifically Windows Desktop.

```php
use Rmunate\AgentDetection\Agent;

Agent::isWindows();
// True Or False
```

## From Windows Phone

Although rare, if there are still users with this technology, we can identify them.

```php
use Rmunate\AgentDetection\Agent;

Agent::isWindowsPhone();
// True Or False
```

## From a Tablet

Sometimes we need to adjust content for tablets, so with this method, you can determine if the connection is from a tablet.

```php
use Rmunate\AgentDetection\Agent;

Agent::isTablet();
// True Or False
```

## Is Crawler

If we need to validate if the agent is a crawler, we can do so extremely simply:

```php
use Rmunate\AgentDetection\Agent;

Agent::isCrawler();
// True Or False

Agent::set('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)')->isCrawler();
// True Or False
```

## Get Crawler

Use this method to get the matched crawler name, or `null` if no crawler was detected:

```php
use Rmunate\AgentDetection\Agent;

Agent::set('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)')->getCrawler();
// "Sosospider"
```

## Validate by Match

Use this method to check for a literal substring, ignoring case. It does not interpret regular expressions.

```php
use Rmunate\AgentDetection\Agent;

Agent::match('Mac');
// True Or False
```

## Get Operating System

If you want to extract the value of the operating system in use from the agent, it will be more convenient to use the following method.

```php
use Rmunate\AgentDetection\Agent;

Agent::clientOS();
// 'Windows' // 'Mac' // 'Linux' // 'Android' // 'iOS'
```

## Connection IP

This method returns the connection peer's `REMOTE_ADDR` as a string, or `null` when unavailable. It does not interpret forwarded headers or look up the client IP behind a proxy.

```php
use Rmunate\AgentDetection\Agent;

Agent::remoteAddress();
```

## Connection Port

This method returns the connection peer's `REMOTE_PORT` as a string, or `null` when unavailable. It is not the port the application listens on.

```php
use Rmunate\AgentDetection\Agent;

Agent::remotePort();
```

## Browser

Finally, we might be interested in the browser used to access our applications, so with the following method, you can extract all the connection browser data from the agent:

```php
use Rmunate\AgentDetection\Agent;

$browser = Agent::browser();

$browserName = $browser->getName();
$browserVersion = $browser->getVersion();
$browserPlatform = $browser->getPlatform();
```