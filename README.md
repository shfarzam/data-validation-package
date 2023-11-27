
---

# DataValidation

DataValidation is a PHP package designed to simplify data validation tasks. It provides methods to validate email addresses, URLs, and passwords.

## Installation

You can install this package via Composer:

```bash
composer require shfarzam/data-validation
```

## Usage

### Email Validation

```php
use shfarzam\DataValidation\Validator;

if (Validator::validateEmail('example@example.com')) {
    // Valid email address
} else {
    // Invalid email address
}
```

### URL Validation

```php
use shfarzam\DataValidation\Validator;

if (Validator::validateURL('https://www.example.com')) {
    // Valid URL
} else {
    // Invalid URL
}
```

### Password Validation

```php
use shfarzam\DataValidation\Validator;

$password = 'securepassword';

if (Validator::validatePassword($password, 8)) {
    // Valid password
} else {
    // Invalid password
}
```

## About

This package is a lightweight solution for common data validation tasks in PHP projects. It aims to provide a straightforward interface for validating emails, URLs, and passwords without extensive configuration.

## License

This project is licensed under the Proprietary License - see the [LICENSE](LICENSE) file for details.

---