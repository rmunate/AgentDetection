---
title: Release Notes
editLink: true
outline: deep
---

# Release Notes

## [1.4.0] - 2023-12-10

### Added

- **Static Access**: Now, the use of the `detected` method is no longer necessary to query connection agent data.

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