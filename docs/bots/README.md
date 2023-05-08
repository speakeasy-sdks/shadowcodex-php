# bots

### Available Operations

* [botsInfo](#botsinfo) - Gets information about a bot user.

## botsInfo

Gets information about a bot user.

API method documentation
<https://api.slack.com/methods/bots.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\BotsInfoRequest;
use \shadowcodex\slackspec\Models\Operations\BotsInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new BotsInfoRequest();
    $request->bot = 'quam';
    $request->token = 'molestias';

    $requestSecurity = new BotsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->bots->botsInfo($request, $requestSecurity);

    if ($response->botsInfoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
