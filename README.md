# Agent Detection | Discover and Analyze Connection Agent Information

The `Agent Detection` library offers a wide range of methods that allow you to discover and analyze the connection agent data in your application.

⚙️ This library is compatible with Laravel versions 8.0 and above ⚙️

[![Laravel 8.0+](https://img.shields.io/badge/Laravel-8.0%2B-orange.svg)](https://laravel.com)
[![Laravel 9.0+](https://img.shields.io/badge/Laravel-9.0%2B-orange.svg)](https://laravel.com)
[![Laravel 10.0+](https://img.shields.io/badge/Laravel-10.0%2B-orange.svg)](https://laravel.com)

![LOGO](https://github.com/rmunate/PHPInfoServer/assets/91748598/f1ee8001-aa76-49c3-82ad-49014b28fd61)

📖 [**DOCUMENTACIÓN EN ESPAÑOL**](README_SPANISH.md) 📖

## Table of Contents
1. [Installation](#installation)
2. [Available Methods](#available-methods)
3. [Usage](#usage)
4. [Creator](#creator)
5. [License](#license)

## Introduction
This straightforward library allows you to obtain specific details about the connection agent, enabling you to enhance the user experience based on connection data. For example, if you detect that it's a mobile connection, you can prompt the user to download the mobile app if your system has one. Likewise, you can offer a more personalized experience for Android users or differentiate options, menus, and other elements for desktop or mobile device users.

In summary, you have a multitude of possibilities at your disposal.

## Installation
You can easily install the library via Composer.
```shell
composer require rmunate/agent-detection
```

## Available Methods

| Method | Description |
| ------ | ----------- |
| `Agent::get()` | Returns the current connection agent detected by the server. |
| `Agent::detect()->isMobile()` | Checks if the agent comes from a mobile device. |
| `Agent::detect()->isDesktop()` | Returns `true` if the user is accessing from a desktop device. |
| `Agent::detect()->isIPhone()` | Returns `true` if the user's agent corresponds to an iPhone. |
| `Agent::detect()->isMacintosh()` | Returns `true` if the user's agent corresponds to a Macintosh operating system. |
| `Agent::detect()->isLinux()` | Returns `true` if the user's agent corresponds to a Linux operating system (PC or Android systems). |
| `Agent::detect()->isAndroid()` | Returns `true` if the user's agent corresponds to a Android operating system. |
| `Agent::detect()->isWindows()` | Returns `true` if the user's agent corresponds to a Windows operating system. |
| `Agent::detect()->isWindowsPhone()` | Returns `true` if the user's agent corresponds to a Windows Phone operating system. |
| `Agent::detect()->isIpod()` | Returns `true` if the user's agent corresponds to an iPod. |
| `Agent::detect()->isIpad()` | Returns `true` if the user's agent corresponds to an iPad. |
| `Agent::detect()->isIMac()` | Returns `true` if the user's agent corresponds to an iMac. |
| `Agent::detect()->clientOS()` | Returns the name of the current client's operating system. |
| `Agent::detect()->browser()` | Returns information about the client's browser (Name, Version, and Platform). |
| `Agent::detect()->remoteAddress()` | Returns the IP in use in the connection to the system. |
| `Agent::detect()->remotePort()` | Returns the port in use in the connection to the system. |

With this powerful tool, you can obtain connection data in your application and offer different experiences depending on the system, browser, or device the user is using to connect.

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

Need to know the browser data?
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
This project is under the [MIT License](https://choosealicense.com/licenses/mit/).

🌟 Support My Projects! 🚀

Make any contributions you see fit; the code is entirely yours. Together, we can do amazing things and improve the world of development. Your support is invaluable. 💖✨

If you have ideas, suggestions, or just want to collaborate, we are open to everything! Join our community and be part of our journey to success! 🌐👩‍💻👨‍💻