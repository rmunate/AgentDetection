# Agent Detection | Discover and Analyze Connection Agent Information

The `Agent Detection` library offers a wide variety of methods that allow you to explore and analyze connection agent data in your application.

![LOGO](https://github.com/rmunate/PHPInfoServer/assets/91748598/f1ee8001-aa76-49c3-82ad-49014b28fd61)

## Table of Contents
1. [Available Methods](#available-methods)
2. [Usage](#usage)
3. [Creator](#creator)
4. [License](#license)

## Introduction
This simple utility library enables you to retrieve specific details about the connection agent, allowing you to enhance the user experience based on connection data. For example, if you detect a mobile connection, you can prompt the user to download the mobile app if your system has one. Additionally, you can provide a more tailored experience for Android users or differentiate options, menus, and other elements for desktop or mobile users.

In essence, you have a world of possibilities at your fingertips.

## Available Methods

| Method | Description |
| ------ | ----------- |
| `Agent::get()` | Returns the current connection agent detected by the server. |
| `Agent::detect()->isMobile()` | Checks if the agent comes from a mobile device. |
| `Agent::detect()->isDesktop()` | Returns `true` if the user is accessing from a desktop device. |
| `Agent::detect()->isIPhone()` | Returns `true` if the user's agent corresponds to an iPhone. |
| `Agent::detect()->isMacintosh()` | Returns `true` if the user's agent corresponds to a Macintosh operating system. |
| `Agent::detect()->isLinux()` | Returns `true` if the user's agent corresponds to a Linux operating system (PC or Android systems). |
| `Agent::detect()->isWindows()` | Returns `true` if the user's agent corresponds to a Windows operating system. |
| `Agent::detect()->isWindowsPhone()` | Returns `true` if the user's agent corresponds to a Windows Phone operating system. |
| `Agent::detect()->isIpod()` | Returns `true` if the user's agent corresponds to an iPod. |
| `Agent::detect()->isIpad()` | Returns `true` if the user's agent corresponds to an iPad. |
| `Agent::detect()->isIMac()` | Returns `true` if the user's agent corresponds to an iMac. |
| `Agent::detect()->clientOS()` | Returns the name of the current client's operating system. |
| `Agent::detect()->browser()` | Returns information about the browser used by the client (Name, Version, and Platform). |
| `Agent::detect()->remoteAddress()` | Returns the IP address in use in the connection to the system. |
| `Agent::detect()->remotePort()` | Returns the port in use in the connection to the system. |

With this powerful tool, you can gather connection data in your application and offer different experiences based on the user's system, browser, or device when connecting.

## Usage

Want to check if it's a mobile connection?
```php
use Rmunate\Server\Agent;

if (Agent::detect()->isMobile()) {
    // It's a mobile connection
} else {
    // It's a desktop connection
}
```

Need to know the browser details?
```php
use Rmunate\Server\Agent;

$browser = Agent::detect()->browser();
// array:3 [▼
//   "name" => "Apple Safari"
//   "version" => "537.36"
//   "platform" => "Macintosh"
// ]
```

## Creator
- 🇨🇴 Raúl Mauricio Uñate Castro
- Email: raulmauriciounate@gmail.com

## License
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)