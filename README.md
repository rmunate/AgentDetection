# Agent Detection

Agent Detection 2.0.0 identifies devices, browsers, operating systems, and crawlers from the request's `User-Agent`. Use its PHP API or Blade directives to tailor what your application displays.

## Installation

Use PHP 8.3 or later with Laravel 13, or PHP 8.2 or later with Laravel 12. See the [compatibility table](./docs/getting-started/installation.md#requirements) for other versions.

```shell
composer require "rmunate/agent-detection:^2.0"
```

## Quick start

```php
use Rmunate\AgentDetection\Agent;

$isMobile = Agent::isMobile();
$browserName = Agent::browser()->getName();
```

In a Laravel Blade view:

```blade
@agentMobile
    <p>Mobile view</p>
@endAgentMobile
```

## Documentation

- [Documentation site](https://rmunate.github.io/AgentDetection/)
- [Upgrade guide for 1.x users](./docs/getting-started/installation.md#upgrade-guide)
- [PHP API](./docs/usage/class-methods.md) and [Blade directives](./docs/usage/blade-directives.md)
- [Release notes](./docs/getting-started/changelog.md)

## License
This project is under the [MIT License](https://choosealicense.com/licenses/mit/).

🌟 Support My Projects! 🚀

[![Become a Sponsor](https://img.shields.io/badge/-Become%20a%20Sponsor-blue?style=for-the-badge&logo=github)](https://github.com/sponsors/rmunate)

Make any contributions you see fit; the code is entirely yours. Together, we can do amazing things and improve the world of development. Your support is invaluable. ✨

If you have ideas, suggestions, or just want to collaborate, we are open to everything! Join our community and be part of our journey to success! 🌐👩‍💻👨‍💻
