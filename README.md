# Template Bundle

[![CI](https://github.com/EdouardCourty/template-bundle/actions/workflows/ci.yml/badge.svg)](https://github.com/EdouardCourty/template-bundle/actions/workflows/ci.yml)

A Symfony bundle template for rapid bundle development.

> Replace this description, the badge URL and the `template` / `Template` names with your bundle's own.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Core Features](#core-features)
- [Configuration](#configuration)
- [Usage](#usage)
- [Development](#development)
- [License](#license)

---

## Requirements

- PHP **≥ 8.3**
- Symfony **≥ 7.0**

---

## Installation

```bash
composer require ecourty/template-bundle
```

Register the bundle in `config/bundles.php` (done automatically with Symfony Flex when a recipe exists):

```php
return [
    // ...
    Ecourty\TemplateBundle\TemplateBundle::class => ['all' => true],
];
```

---

## Core Features

- **Feature name** — short description.

---

## Configuration

```yaml
# config/packages/template.yaml
template: ~
```

---

## Usage

Describe how to use the bundle here.

---

## Development

For AI-assisted development and architecture guidelines, see [AGENTS.md](AGENTS.md).

```bash
composer install

composer test               # All tests
composer test-unit          # Unit tests only
composer test-integration   # Integration tests only
composer test-functional    # Functional tests only

composer phpstan            # Static analysis
composer cs-check           # Check code style
composer cs-fix             # Fix code style
composer qa                 # phpstan + cs-check + test
```

The functional and integration tests boot a minimal kernel located in `tests/App/TestKernel.php`.

---

## License

This bundle is released under the [MIT License](LICENSE).
