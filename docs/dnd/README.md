# dnd

### Available Operations

* [dndEndDnd](#dndenddnd) - Ends the current user's Do Not Disturb session immediately.
* [dndEndSnooze](#dndendsnooze) - Ends the current user's snooze mode immediately.
* [dndInfo](#dndinfo) - Retrieves a user's current Do Not Disturb status.
* [dndSetSnooze](#dndsetsnooze) - Turns on Do Not Disturb mode for the current user, or changes its duration.
* [dndTeamInfo](#dndteaminfo) - Retrieves the Do Not Disturb status for up to 50 users on a team.

## dndEndDnd

Ends the current user's Do Not Disturb session immediately.

API method documentation
<https://api.slack.com/methods/dnd.endDnd>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\DndEndDndRequest;
use \shadowcodex\slackspec\Models\Operations\DndEndDndSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new DndEndDndRequest();
    $request->token = 'commodi';

    $requestSecurity = new DndEndDndSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->dnd->dndEndDnd($request, $requestSecurity);

    if ($response->dndEndDndSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## dndEndSnooze

Ends the current user's snooze mode immediately.

API method documentation
<https://api.slack.com/methods/dnd.endSnooze>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\DndEndSnoozeRequest;
use \shadowcodex\slackspec\Models\Operations\DndEndSnoozeSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new DndEndSnoozeRequest();
    $request->token = 'in';

    $requestSecurity = new DndEndSnoozeSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->dnd->dndEndSnooze($request, $requestSecurity);

    if ($response->dndEndSnoozeSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## dndInfo

Retrieves a user's current Do Not Disturb status.

API method documentation
<https://api.slack.com/methods/dnd.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\DndInfoRequest;
use \shadowcodex\slackspec\Models\Operations\DndInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new DndInfoRequest();
    $request->token = 'corporis';
    $request->user = 'reiciendis';

    $requestSecurity = new DndInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->dnd->dndInfo($request, $requestSecurity);

    if ($response->dndInfoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## dndSetSnooze

Turns on Do Not Disturb mode for the current user, or changes its duration.

API method documentation
<https://api.slack.com/methods/dnd.setSnooze>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\DndSetSnoozeRequestBody;
use \shadowcodex\slackspec\Models\Operations\DndSetSnoozeSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new DndSetSnoozeRequestBody();
    $request->numMinutes = 'assumenda';
    $request->token = 'nemo';

    $requestSecurity = new DndSetSnoozeSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->dnd->dndSetSnooze($request, $requestSecurity);

    if ($response->dndSetSnoozeSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## dndTeamInfo

Retrieves the Do Not Disturb status for up to 50 users on a team.

API method documentation
<https://api.slack.com/methods/dnd.teamInfo>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\DndTeamInfoRequest;
use \shadowcodex\slackspec\Models\Operations\DndTeamInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new DndTeamInfoRequest();
    $request->token = 'recusandae';
    $request->users = 'aliquid';

    $requestSecurity = new DndTeamInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->dnd->dndTeamInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
