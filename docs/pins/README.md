# pins

### Available Operations

* [pinsAdd](#pinsadd) - Pins an item to a channel.
* [pinsList](#pinslist) - Lists items pinned to a channel.
* [pinsRemove](#pinsremove) - Un-pins an item from a channel.

## pinsAdd

Pins an item to a channel.

API method documentation
<https://api.slack.com/methods/pins.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\PinsAddRequest;
use \shadowcodex\slackspec\Models\Operations\PinsAddApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\PinsAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new PinsAddRequest();
    $request->requestBody = new PinsAddApplicationJSON();
    $request->requestBody->channel = 'saepe';
    $request->requestBody->timestamp = 'error';
    $request->token = 'consequatur';

    $requestSecurity = new PinsAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pins->pinsAdd($request, $requestSecurity);

    if ($response->pinsAddSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## pinsList

Lists items pinned to a channel.

API method documentation
<https://api.slack.com/methods/pins.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\PinsListRequest;
use \shadowcodex\slackspec\Models\Operations\PinsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new PinsListRequest();
    $request->channel = 'incidunt';
    $request->token = 'reiciendis';

    $requestSecurity = new PinsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pins->pinsList($request, $requestSecurity);

    if ($response->pinsListSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## pinsRemove

Un-pins an item from a channel.

API method documentation
<https://api.slack.com/methods/pins.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\PinsRemoveRequest;
use \shadowcodex\slackspec\Models\Operations\PinsRemoveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\PinsRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new PinsRemoveRequest();
    $request->requestBody = new PinsRemoveApplicationJSON();
    $request->requestBody->channel = 'dolorem';
    $request->requestBody->timestamp = 'harum';
    $request->token = 'dicta';

    $requestSecurity = new PinsRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pins->pinsRemove($request, $requestSecurity);

    if ($response->pinsRemoveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
