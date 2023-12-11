---
title: Blade Directives
editLink: true
outline: deep
---

# Blade Directives

If you're using the package to conditionally render HTML based on the connection agent, you can do so in a simple and elegant way. Here are all the directives included in the package.

## Is Mobile Connection

This directive validates if the connection is from a mobile device (tablet, smartphone, etc.). You can use it directly in the Blade views.

```blade
@agentMobile
  <p>Mobile Connection Detected</p>
@endAgentMobile
```

## Is Desktop Connection

This directive validates if the connection is from a desktop device. You can use it directly in the Blade views.

```blade
@agentDesktop
  <p>Desktop Connection Detected</p>
@endAgentDesktop
```

## From iPhone

This directive validates if the connection is from an iPhone specifically, not validating iPad or similar devices; it is limited to checking if the connecting device is an iPhone.

```blade
@agentIPhone
  <p>Connection from iPhone Detected</p>
@endAgentIPhone
```

## From Macintosh

This directive validates if the connection is from a Macintosh device specifically, not validating iMac or similar devices.

```blade
@agentMacintosh
  <p>Connection from Macintosh Detected</p>
@endAgentMacintosh
```

## From iMac

This directive validates if the connection is from an iMac specifically, not validating Macintosh or similar devices.

```blade
@agentIMac
  <p>Connection from iMac Detected</p>
@endAgentIMac
```

## From iPod

This directive validates if the connection is from an iPod specifically, not validating similar devices.

```blade
@agentIpod
  <p>Connection from iPod Detected</p>
@endAgentIpod
```

## From iPad

This directive validates if the connection is from an iPad specifically, not validating similar devices.

```blade
@agentIpad
  <p>Connection from iPad Detected</p>
@endAgentIpad
```

## From Linux

This directive validates if the connection is from a device with the Linux operating system (regardless of the distribution).

```blade
@agentLinux
  <p>Connection from Linux Device Detected</p>
@endAgentLinux
```

## From Android

This directive validates if the connection is from a device with the Android operating system, commonly working on Linux but determining if an Android is in use.

```blade
@agentAndroid
  <p>Connection from Android Device Detected</p>
@endAgentAndroid
```

## From Windows

This directive validates if the connection is from a device with the Windows operating system, specifically Windows Desktop.

```blade
@agentWindows
  <p>Connection from Windows Device Detected</p>
@endAgentWindows
```

## From Windows Phone

Although rare, if there are still users with this technology, we can identify them.

```blade
@agentWindowsPhone
  <p>Connection from Windows Phone Detected</p>
@endAgentWindowsPhone
```

## From a Tablet

Sometimes we need to adjust content for tablets, so with this method, you can determine if the connection is from a tablet.

```blade
@agentTablet
  <p>Connection from Tablet Detected</p>
@endAgentTablet
```

## Is Crawler

If we need to validate if the agent is a crawler, we can do so extremely simply:

```blade
@agentCrawler
  <p>Connection from Crawler Detected</p>
@endAgentCrawler
```

## Validate by Match

If you want to have a dynamic method of validating the agent, you may find it convenient to use the following method supplied by the package:

```blade
@agentMatch('Mac')
  <p>Connection from Mac Detected</p>
@endAgentMatch
```

## Connection IP:

You can also find out through which IP the Agent connected to the application:

```blade
@agentRemoteIp('181.10.10.23')
  <p>Connection from IP: 181.10.10.23 Detected</p>
@endAgentRemoteIp
```

## Connection Port

It may be useful to know through which port the connection occurred, so here it is:

```blade
@agentRemotePort('8080')
  <p>Connection from Port: 8080 Detected</p>
@endAgentRemotePort
```