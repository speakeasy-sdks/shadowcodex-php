# reminders

### Available Operations

* [remindersAdd](#remindersadd) - Creates a reminder.
* [remindersComplete](#reminderscomplete) - Marks a reminder as complete.
* [remindersDelete](#remindersdelete) - Deletes a reminder.
* [remindersInfo](#remindersinfo) - Gets information about a reminder.
* [remindersList](#reminderslist) - Lists all reminders created by or for a given user.

## remindersAdd

Creates a reminder.

API method documentation
<https://api.slack.com/methods/reminders.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\RemindersAddRequest;
use \shadowcodex\slackspec\Models\Operations\RemindersAddApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\RemindersAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new RemindersAddRequest();
    $request->requestBody = new RemindersAddApplicationJSON();
    $request->requestBody->text = 'quisquam';
    $request->requestBody->time = 'repudiandae';
    $request->requestBody->user = 'quasi';
    $request->token = 'atque';

    $requestSecurity = new RemindersAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reminders->remindersAdd($request, $requestSecurity);

    if ($response->remindersAddSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## remindersComplete

Marks a reminder as complete.

API method documentation
<https://api.slack.com/methods/reminders.complete>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\RemindersCompleteRequest;
use \shadowcodex\slackspec\Models\Operations\RemindersCompleteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\RemindersCompleteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new RemindersCompleteRequest();
    $request->requestBody = new RemindersCompleteApplicationJSON();
    $request->requestBody->reminder = 'reprehenderit';
    $request->token = 'asperiores';

    $requestSecurity = new RemindersCompleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reminders->remindersComplete($request, $requestSecurity);

    if ($response->remindersCompleteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## remindersDelete

Deletes a reminder.

API method documentation
<https://api.slack.com/methods/reminders.delete>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\RemindersDeleteRequest;
use \shadowcodex\slackspec\Models\Operations\RemindersDeleteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\RemindersDeleteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new RemindersDeleteRequest();
    $request->requestBody = new RemindersDeleteApplicationJSON();
    $request->requestBody->reminder = 'totam';
    $request->token = 'suscipit';

    $requestSecurity = new RemindersDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reminders->remindersDelete($request, $requestSecurity);

    if ($response->remindersDeleteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## remindersInfo

Gets information about a reminder.

API method documentation
<https://api.slack.com/methods/reminders.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\RemindersInfoRequest;
use \shadowcodex\slackspec\Models\Operations\RemindersInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new RemindersInfoRequest();
    $request->reminder = 'quidem';
    $request->token = 'maxime';

    $requestSecurity = new RemindersInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reminders->remindersInfo($request, $requestSecurity);

    if ($response->remindersInfoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## remindersList

Lists all reminders created by or for a given user.

API method documentation
<https://api.slack.com/methods/reminders.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\RemindersListRequest;
use \shadowcodex\slackspec\Models\Operations\RemindersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new RemindersListRequest();
    $request->token = 'et';

    $requestSecurity = new RemindersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reminders->remindersList($request, $requestSecurity);

    if ($response->remindersListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
