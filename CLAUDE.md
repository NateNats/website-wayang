# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Common Development Commands
- `composer install` - Install all dependencies
- `composer update` - Update dependencies
- `php -f [filename].php` - Run a PHP script directly
- `php covering [filename].php` - (If tests exist, run PHPUnit tests)

## Code Architecture
This is a PSR-compliant PHP project structure with:
- Core PSR libraries for events, caching, containers, HTTP, and clock
- Service dependencies managed via Composer
- PSR interfaces defining contracts for components
- Architecture follows PSR-7 standards for HTTP messages

## Key Directories
- `vendor/psr/container` - Service container implementation
- `vendor/psr/simple-cache` - PSR-compliant caching system
- `vendor/psr/http-message` - Standardized HTTP message handling
- `vendor/phar-io/version` - Version constraint parsing/validation

## Development Practices
- All code follows PSR standards for naming and structure
- Dependency injection is used where appropriate
- PSR interfaces are the primary API definitions
- Use `php-coveralls` for test coverage reporting if tests exist

## Required Files
- composer.json (in project root and vendor directories)
- LICENSE (in vendor directories)
- README.md (in vendor directories)