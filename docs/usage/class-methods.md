---
title: Class Methods
editLink: true
outline: deep
---

# Class Methods

On this page, you will learn about all the methods currently available within the package. You may be interested in adding new features, so we invite you to contribute to this useful solution.

## Get

This method returns the complete user connection agent based on the information gathered from the PHP global variable $_SERVER.

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

After the `set` method, you can chain any of the methods available in this guide.

## Detected

This method instructs the class to take the value identified by the server and then chain any other method from this guide.

```php
use Rmunate\AgentDetection\Agent;

Agent::detected()->isMobile();
// True Or False
```

Since version 1.4.0, its use is not mandatory; now you can pass the final method directly to the class for querying.

## Is Mobile Connection

This method validates if the connection is from a mobile device (tablet, smartphone, etc.). You can use it directly on the Agent class.

```php
use Rmunate\AgentDetection\Agent;

Agent::isMobile();
// True Or False
```

## Is Desktop Connection

This method validates if the connection is from a desktop device. You can use it directly on the Agent class.

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

If, more than validating if it is a crawler, you need to extract it from the agent, you can use the following method:

```php
use Rmunate\AgentDetection\Agent;

Agent::set('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)')->getCrawler();
// "Sosospider"
```

## Validate by Match

If you want to have a dynamic method of validating the agent, you may find it convenient to use the following method supplied by the package:

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

You can also find out through which IP the Agent connected to the application:

```php
use Rmunate\AgentDetection\Agent;

Agent::remoteAddress();
```

## Connection Port

It may be useful to know through which port the connection occurred, so here it is:

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