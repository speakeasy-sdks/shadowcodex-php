# rtm

### Available Operations

* [rtmConnect](#rtmconnect) - Starts a Real Time Messaging session.

## rtmConnect

Starts a Real Time Messaging session.

API method documentation
<https://api.slack.com/methods/rtm.connect>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\RtmConnectRequest;
use \shadowcodex\slackspec\Models\Operations\RtmConnectSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new RtmConnectRequest();
    $request->batchPresenceAware = false;
    $request->presenceSub = false;
    $request->token = 'esse';

    $requestSecurity = new RtmConnectSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->rtm->rtmConnect($request, $requestSecurity);

    if ($response->rtmConnectSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
