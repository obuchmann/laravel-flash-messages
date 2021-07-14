# Laravel Flash Messages
Provides easy Flash Support for Laravel

## Usage

```php

use Obuchmann\LaravelFlashMessages\Flash;

Flash::info('Something is going on');

Flash::success('Password changed');

Flash::warning('Invalid input');
Flash::warn('Invalid input');

Flash::danger('Invalid password');
Flash::error('Unknown Username');



```