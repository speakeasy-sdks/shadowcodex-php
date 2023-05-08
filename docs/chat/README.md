# chat

### Available Operations

* [chatDelete](#chatdelete) - Deletes a message.
* [chatDeleteScheduledMessage](#chatdeletescheduledmessage) - Deletes a pending scheduled message from the queue.
* [chatGetPermalink](#chatgetpermalink) - Retrieve a permalink URL for a specific extant message
* [chatMeMessage](#chatmemessage) - Share a me message into a channel.
* [chatPostEphemeral](#chatpostephemeral) - Sends an ephemeral message to a user in a channel.
* [chatPostMessage](#chatpostmessage) - Sends a message to a channel.
* [chatScheduleMessage](#chatschedulemessage) - Schedules a message to be sent to a channel.
* [chatScheduledMessagesList](#chatscheduledmessageslist) - Returns a list of scheduled messages.
* [chatUnfurl](#chatunfurl) - Provide custom unfurl behavior for user-posted URLs
* [chatUpdate](#chatupdate) - Updates a message.

## chatDelete

Deletes a message.

API method documentation
<https://api.slack.com/methods/chat.delete>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatDeleteRequest;
use \shadowcodex\slackspec\Models\Operations\ChatDeleteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatDeleteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatDeleteRequest();
    $request->requestBody = new ChatDeleteApplicationJSON();
    $request->requestBody->asUser = false;
    $request->requestBody->channel = 'aliquid';
    $request->requestBody->ts = 934.59;
    $request->token = 'saepe';

    $requestSecurity = new ChatDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatDelete($request, $requestSecurity);

    if ($response->chatDeleteSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatDeleteScheduledMessage

Deletes a pending scheduled message from the queue.

API method documentation
<https://api.slack.com/methods/chat.deleteScheduledMessage>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatDeleteScheduledMessageRequest;
use \shadowcodex\slackspec\Models\Operations\ChatDeleteScheduledMessageApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatDeleteScheduledMessageSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatDeleteScheduledMessageRequest();
    $request->requestBody = new ChatDeleteScheduledMessageApplicationJSON();
    $request->requestBody->asUser = false;
    $request->requestBody->channel = 'vel';
    $request->requestBody->scheduledMessageId = 'harum';
    $request->token = 'molestiae';

    $requestSecurity = new ChatDeleteScheduledMessageSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatDeleteScheduledMessage($request, $requestSecurity);

    if ($response->chatDeleteScheduledMessageSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatGetPermalink

Retrieve a permalink URL for a specific extant message

API method documentation
<https://api.slack.com/methods/chat.getPermalink>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatGetPermalinkRequest;
use \shadowcodex\slackspec\Models\Operations\ChatGetPermalinkSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatGetPermalinkRequest();
    $request->channel = 'rerum';
    $request->messageTs = 'occaecati';
    $request->token = 'minima';

    $requestSecurity = new ChatGetPermalinkSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatGetPermalink($request, $requestSecurity);

    if ($response->chatGetPermalinkSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatMeMessage

Share a me message into a channel.

API method documentation
<https://api.slack.com/methods/chat.meMessage>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatMeMessageRequest;
use \shadowcodex\slackspec\Models\Operations\ChatMeMessageApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatMeMessageSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatMeMessageRequest();
    $request->requestBody = new ChatMeMessageApplicationJSON();
    $request->requestBody->channel = 'distinctio';
    $request->requestBody->text = 'eligendi';
    $request->token = 'sit';

    $requestSecurity = new ChatMeMessageSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatMeMessage($request, $requestSecurity);

    if ($response->chatMeMessageSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatPostEphemeral

Sends an ephemeral message to a user in a channel.

API method documentation
<https://api.slack.com/methods/chat.postEphemeral>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatPostEphemeralRequest;
use \shadowcodex\slackspec\Models\Operations\ChatPostEphemeralApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatPostEphemeralSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatPostEphemeralRequest();
    $request->requestBody = new ChatPostEphemeralApplicationJSON();
    $request->requestBody->asUser = false;
    $request->requestBody->attachments = 'culpa';
    $request->requestBody->blocks = 'tempore';
    $request->requestBody->channel = 'adipisci';
    $request->requestBody->iconEmoji = 'cumque';
    $request->requestBody->iconUrl = 'consequuntur';
    $request->requestBody->linkNames = false;
    $request->requestBody->parse = 'consequatur';
    $request->requestBody->text = 'minus';
    $request->requestBody->threadTs = 'quaerat';
    $request->requestBody->user = 'sapiente';
    $request->requestBody->username = 'Darlene_Koch';
    $request->token = 'a';

    $requestSecurity = new ChatPostEphemeralSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatPostEphemeral($request, $requestSecurity);

    if ($response->chatPostEphemeralSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatPostMessage

Sends a message to a channel.

API method documentation
<https://api.slack.com/methods/chat.postMessage>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatPostMessageRequest;
use \shadowcodex\slackspec\Models\Operations\ChatPostMessageApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatPostMessageSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatPostMessageRequest();
    $request->requestBody = new ChatPostMessageApplicationJSON();
    $request->requestBody->asUser = 'nulla';
    $request->requestBody->attachments = 'quas';
    $request->requestBody->blocks = 'esse';
    $request->requestBody->channel = 'quasi';
    $request->requestBody->iconEmoji = 'a';
    $request->requestBody->iconUrl = 'error';
    $request->requestBody->linkNames = false;
    $request->requestBody->mrkdwn = false;
    $request->requestBody->parse = 'sint';
    $request->requestBody->replyBroadcast = false;
    $request->requestBody->text = 'pariatur';
    $request->requestBody->threadTs = 'possimus';
    $request->requestBody->unfurlLinks = false;
    $request->requestBody->unfurlMedia = false;
    $request->requestBody->username = 'Carlotta_Upton8';
    $request->token = 'consequuntur';

    $requestSecurity = new ChatPostMessageSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatPostMessage($request, $requestSecurity);

    if ($response->chatPostMessageSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatScheduleMessage

Schedules a message to be sent to a channel.

API method documentation
<https://api.slack.com/methods/chat.scheduleMessage>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatScheduleMessageRequest;
use \shadowcodex\slackspec\Models\Operations\ChatScheduleMessageApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatScheduleMessageSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatScheduleMessageRequest();
    $request->requestBody = new ChatScheduleMessageApplicationJSON();
    $request->requestBody->asUser = false;
    $request->requestBody->attachments = 'quasi';
    $request->requestBody->blocks = 'similique';
    $request->requestBody->channel = 'culpa';
    $request->requestBody->linkNames = false;
    $request->requestBody->parse = 'aliquid';
    $request->requestBody->postAt = 'tenetur';
    $request->requestBody->replyBroadcast = false;
    $request->requestBody->text = 'quae';
    $request->requestBody->threadTs = 9367.47;
    $request->requestBody->unfurlLinks = false;
    $request->requestBody->unfurlMedia = false;
    $request->token = 'vel';

    $requestSecurity = new ChatScheduleMessageSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatScheduleMessage($request, $requestSecurity);

    if ($response->chatScheduleMessageSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->channel = 'in';
    $request->cursor = 'eius';
    $request->latest = 7276.97;
    $request->limit = 849039;
    $request->oldest = 7422.38;
    $request->token = 'accusantium';

    $requestSecurity = new ChatScheduledMessagesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatScheduledMessagesList($request, $requestSecurity);

    if ($response->chatScheduledMessagesListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatUnfurl

Provide custom unfurl behavior for user-posted URLs

API method documentation
<https://api.slack.com/methods/chat.unfurl>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatUnfurlRequest;
use \shadowcodex\slackspec\Models\Operations\ChatUnfurlApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatUnfurlSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatUnfurlRequest();
    $request->requestBody = new ChatUnfurlApplicationJSON();
    $request->requestBody->channel = 'aliquam';
    $request->requestBody->ts = 'sapiente';
    $request->requestBody->unfurls = 'dicta';
    $request->requestBody->userAuthMessage = 'ullam';
    $request->requestBody->userAuthRequired = false;
    $request->requestBody->userAuthUrl = 'reprehenderit';
    $request->token = 'ullam';

    $requestSecurity = new ChatUnfurlSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatUnfurl($request, $requestSecurity);

    if ($response->chatUnfurlSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## chatUpdate

Updates a message.

API method documentation
<https://api.slack.com/methods/chat.update>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ChatUpdateRequest;
use \shadowcodex\slackspec\Models\Operations\ChatUpdateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ChatUpdateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ChatUpdateRequest();
    $request->requestBody = new ChatUpdateApplicationJSON();
    $request->requestBody->asUser = 'nisi';
    $request->requestBody->attachments = 'aut';
    $request->requestBody->blocks = 'voluptatum';
    $request->requestBody->channel = 'qui';
    $request->requestBody->linkNames = 'quibusdam';
    $request->requestBody->parse = 'ex';
    $request->requestBody->text = 'deleniti';
    $request->requestBody->ts = 'itaque';
    $request->token = 'dolorum';

    $requestSecurity = new ChatUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->chat->chatUpdate($request, $requestSecurity);

    if ($response->chatUpdateSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
