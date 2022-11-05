# Invoke Toolkit Explore

Invoke Explore for PHP.

## Installation

```shell
composer require invoke-toolkit-explore
```

## Usage

Basic:

```php
use Invoke\Toolkit\Explore\InvokeToolkitExplore;

$html = InvokeToolkitExplore::render(
    url: '/invoke/getApiDocument',
    base: '/invoke-explore'
);
```

Laravel:

```php
// routes/web.php

use Invoke\Toolkit\Explore\InvokeToolkitExplore;

Route::get('/invoke-explore', function () {
    return InvokeToolkitExplore::render(
        url: '/api/invoke/getApiDocument',
        base: '/invoke-explore'
    );
});
```
