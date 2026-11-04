# AGENTS.md - Coding Guidelines for AI Agents

## 🎯 Core Concept

[TO BE FILLED]

### Problem Solved

[TO BE FILLED]

### Solution

[TO BE FILLED]

---

## 🏗️ Architecture

### Overview

[TO BE FILLED]

### Main Components

[TO BE FILLED]

---

## 🚀 Typical Use Cases

[TO BE FILLED]

---

## 💡 Design Patterns Used

[TO BE FILLED]

---

## Project breakdown

```
src/
  TemplateBundle.php                    # Bundle class (getPath() points to the project root)
  DependencyInjection/
    Configuration.php                   # Config tree, root key `template`
    TemplateExtension.php               # Loads Resources/config/services.php
  Resources/config/services.php         # Explicit service definitions

tests/
  bootstrap.php
  App/                                  # Test kernel (FrameworkBundle + the bundle)
    TestKernel.php
    bin/console
    config/{services.php,packages/framework.yaml}
  Unit/                                 # No kernel, mocks/stubs allowed
  Integration/                          # Real services, ContainerBuilder or kernel
  Functional/                           # Boots TestKernel (KernelTestCase)
```

**IMPORTANT**: This section should evolve with the project. When a new feature is created, updated or removed, this section should too.

## 🧪 Testing

This bundle should be covered by unit, integration and functional tests.
The tests are located in the `tests/{Unit|Integration|Functional}` folder.
Unit tests can use mocks or stubs if needed.

- `composer test-unit|test-integration|test-functional` run a single suite, `composer qa` runs PHPStan, CS check and all tests.
- The test kernel lives in `tests/App/TestKernel.php`. Its cache and logs go to `tests/App/var` (git-ignored).

### Testing private bundle services

The compiler inlines private services with a single consumer, so they cannot be fetched from the test container.
Do NOT add a compiler pass to expose them. Instantiate the service directly in integration tests, taking its dependencies from the container, and mirror the real DI wiring.

---

## Remarks & Guidelines

### General

- NEVER commit or push the git repository.
- When unsure about something, you MUST ask the user for clarification. Same goes if the user request is unclear.
- When facing a problem that has an easy "hacky" solution, and a more robust but more difficult to implement one, always choose the robust one:
  - Easy hacky fixes become technical debt, and can lead to issues down the road
  - Robust solutions means the project will remain serious and well-built.
- ALWAYS write tests for the important components. Better safe than sorry!
- Do NOT write ANY type documentation unless explicitly asked.
- Keep comments and documentation succinct: state what is non-obvious, do not over-explain.
- Once a feature is complete, update the @README.md and @AGENTS.md accordingly.
- The @README.md file should consist of a project overview for end-users, not a technical explanation of the project. It should include:
  - Table of contents
  - Quick start / Installation
  - Core features
  - Configuration reference
  - Usage
  - Development / Contribution guidelines

### Commits

- Format: `type(domain): quick explanation`, where `type` is one of `feat`, `fix`, `docs`, `tests`.
- Keep the explanation short: it is a summary line, not a changelog entry.

### Symfony Bundles

- Symfony bundles are meant to be re-used and integrated in other Symfony projects. When developing features, keep this in mind.  
- Architecture, naming, design, extensibility and easiness to install and use should be key priorities to consider when developing this project.
- Wire the bundle's own services explicitly in `src/Resources/config/services.php` (`->set()`, `->arg()`, `->tag()`). Do NOT use `defaults()->autowire()->autoconfigure()` there. The test app (`tests/App/config/services.php`) may use them.
- Never hardcode values that users may want to change: expose them through `Configuration` and container parameters (`<alias>.<key>`).

## 📚 References

- **Source code**: `/src`
- **Tests**: `/tests`
- **README**: User documentation
- **Symfony Docs**: https://symfony.com/doc/current/bundles.html

# FIRST READING OF THIS FILE

If you read this, it means the user did not yet fill this file.  
Ask the users the following questions :
- What problem is this bundle trying to solve?
- What solution have you considered to do so?
- What architecture have you thought about?
- What should be the name of the bundle?
- What are some typical usecases for this?

When answered, read this file again (@AGENTS.md) and fill the parts that contain "[TO BE FILLED]" content. Keep the file under 500 lines.  
This file will be read by every future developer working on this project.

Keep it simple, efficient and clear.  
Great documentation is easy to read.  
Do NOT overcomplicate things.  
Do NOT include examples for everything.
