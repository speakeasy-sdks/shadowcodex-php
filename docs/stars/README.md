# stars

### Available Operations

* [starsAdd](#starsadd) - Adds a star to an item.
* [starsList](#starslist) - Lists stars for a user.
* [starsRemove](#starsremove) - Removes a star from an item.

## starsAdd

Adds a star to an item.

API method documentation
<https://api.slack.com/methods/stars.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\StarsAddRequest;
use \shadowcodex\slackspec\Models\Operations\StarsAddApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\StarsAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new StarsAddRequest();
    $request->requestBody = new StarsAddApplicationJSON();
    $request->requestBody->channel = 'officiis';
    $request->requestBody->file = 'accusamus';
    $request->requestBody->fileComment = 'natus';
    $request->requestBody->timestamp = 'minima';
    $request->token = 'aspernatur';

    $requestSecurity = new StarsAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->stars->starsAdd($request, $requestSecurity);

    if ($response->starsAddSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## starsList

Lists stars for a user.

API method documentation
<https://api.slack.com/methods/stars.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\StarsListRequest;
use \shadowcodex\slackspec\Models\Operations\StarsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new StarsListRequest();
    $request->count = 'ex';
    $request->cursor = 'maiores';
    $request->limit = 544647;
    $request->page = 'at';
    $request->token = 'error';

    $requestSecurity = new StarsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->stars->starsList($request, $requestSecurity);

    if ($response->starsListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## starsRemove

Removes a star from an item.

API method documentation
<https://api.slack.com/methods/stars.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\StarsRemoveRequest;
use \shadowcodex\slackspec\Models\Operations\StarsRemoveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\StarsRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new StarsRemoveRequest();
    $request->requestBody = new StarsRemoveApplicationJSON();
    $request->requestBody->channel = 'blanditiis';
    $request->requestBody->file = 'suscipit';
    $request->requestBody->fileComment = 'repudiandae';
    $request->requestBody->timestamp = 'atque';
    $request->token = 'atque';

    $requestSecurity = new StarsRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->stars->starsRemove($request, $requestSecurity);

    if ($response->starsRemoveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
