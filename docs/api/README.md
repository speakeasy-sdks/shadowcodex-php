# api

### Available Operations

* [apiTest](#apitest) - Checks API calling code.

## apiTest

Checks API calling code.

API method documentation
<https://api.slack.com/methods/api.test>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ApiTestRequest;
use \shadowcodex\slackspec\Models\Operations\ApiTestSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ApiTestRequest();
    $request->error = 'numquam';
    $request->foo = 'enim';

    $requestSecurity = new ApiTestSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->api->apiTest($request, $requestSecurity);

    if ($response->apiTestSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
