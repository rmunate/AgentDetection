---
title: Installation
editLink: true
outline: deep
---

# Installation

## Requirements

Agent Detection 2.x requires PHP 8.0 or later. Laravel applications must also meet the framework's PHP requirements:

| Laravel | Minimum PHP | PHP versions tested in CI |
| --- | --- | --- |
| 13 | 8.3 | 8.3, 8.4, 8.5 |
| 12 | 8.2 | 8.2 |
| 11 | 8.2 | Not tested |
| 10 | 8.1 | Not tested |
| 9 | 8.0.2 | Not tested |

Laravel 9–11 remain allowed by the package's dependencies for existing applications, but are no longer maintained upstream. A full Laravel 8 application cannot install the package with Mobile Detect 4.8 or later: Laravel 8 requires PSR Simple Cache 1.x, while Mobile Detect requires 2.x or 3.x.

## Install with Composer

Run this command from your application directory to install the 2.x series:

```bash
composer require "rmunate/agent-detection:^2.0"
```

Laravel automatically discovers the service provider and registers the Blade directives. If you have disabled package discovery, register `Rmunate\AgentDetection\Providers\AgentProvider` manually (in `bootstrap/providers.php` on Laravel 12 and 13).

## Upgrade guide

To upgrade from 1.x, use the Composer command above to replace your `1.x` constraint with `^2.0`. The PHP API and Blade directive names are unchanged, but these behaviors are worth checking:

- **Request data:** Inside Laravel, the active request supplies the `User-Agent` and the connection peer's IP and port. Missing values are not filled from `$_SERVER`. Outside Laravel, the package still reads `$_SERVER`.
- **Missing or empty user agents:** `Agent::get()` returns `null` when the header is missing. Both `isMobile()` and `isDesktop()` return `false` for missing or empty agents. `Agent::set('')` analyzes the empty value rather than falling back to the request.
- **Static method errors:** `AgentException` still reports unknown methods. Errors from valid calls, such as missing arguments, now propagate instead of being reported as unknown methods.

If a Laravel HTTP test used to set `$_SERVER` directly, pass the values with the test request instead:

```php
$this->withServerVariables(['REMOTE_ADDR' => '203.0.113.10', 'REMOTE_PORT' => 54321])
    ->get('/example', ['User-Agent' => 'Mozilla/5.0 (iPhone) Mobile']);
```

See the [2.0.0 release notes](./changelog.md) for the full list of changes.