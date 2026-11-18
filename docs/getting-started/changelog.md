---
title: Release Notes
editLink: true
outline: deep
---

# Release Notes

## 2.0.0

Upgrading from 1.x? See the [upgrade guide](./installation.md#upgrade-guide) for the changes that may affect your application.

### Added

- Laravel 13 support on PHP 8.3 and later. Laravel 12 remains supported.
- Automated PHP and Blade integration tests for Laravel 12 and 13.

### Fixed

- The Laravel request is now the source of the user agent and remote endpoint. Outside Laravel, the package still reads `$_SERVER`.
- Missing user agents no longer cause warnings or classify the request as desktop. Passing an empty string to `Agent::set()` no longer reuses the request's user agent.
- Tablet detection now passes the selected user agent to Mobile Detect using its supported API.
- Static calls only throw `AgentException` for unknown methods instead of masking errors from valid calls.

### Changed

- The declared package minimum is PHP 8.0, which Mobile Detect 4.8 already required. Laravel 13 itself requires PHP 8.3.

## [1.7.0] - 2025-06-10

- Added Laravel 12 support.

## [1.4.0] - 2023-12-10

### Added

- **Static Access**: Now, the use of the `detect` method is no longer necessary to query connection agent data.

  Example

  ```php
  use Rmunate\AgentDetection\Agent;

  #Now
  Agent::isDesktop();
  
  #Before (Still works)
  Agent::detect()->isDesktop();
  ```

### Changed

- **Blade Directive Update**: Blade directives have been updated to be shorter and more concise.

  Example

  ```blade
  @agentMobile
    <h1>Is Mobile</h1>
  @endAgentMobile
  ```