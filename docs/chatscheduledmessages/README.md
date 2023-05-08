# chatScheduledMessages

### Available Operations

* [chatScheduledMessagesList](#chatscheduledmessageslist) - Returns a list of scheduled messages.

## chatScheduledMessagesList

Returns a list of scheduled messages.

API method documentation
<https://api.slack.com/methods/chat.scheduledMessages.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatScheduledMessagesListRequest;
use \shadowcodex\slackspec\Models\Operations\ChatScheduledMessagesListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatScheduledMessagesListRequest();
    $request->channel = 'architecto';
    $request->cursor = 'omnis';
    $request->latest = 9453.02;
    $request->limit = 98478;
    $request->oldest = 8694.89;
    $request->token = 'et';

    $requestSecurity = new ChatScheduledMessagesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chatScheduledMessages->chatScheduledMessagesList($request, $requestSecurity);

    if ($response->chatScheduledMessagesListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
