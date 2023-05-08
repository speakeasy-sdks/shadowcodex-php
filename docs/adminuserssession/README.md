# adminUsersSession

### Available Operations

* [adminUsersSessionInvalidate](#adminuserssessioninvalidate) - Invalidate a single session for a user by session_id
* [adminUsersSessionReset](#adminuserssessionreset) - Wipes all valid sessions on all devices for a given user

## adminUsersSessionInvalidate

Invalidate a single session for a user by session_id

API method documentation
<https://api.slack.com/methods/admin.users.session.invalidate>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionInvalidateRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionInvalidateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionInvalidateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSessionInvalidateRequest();
    $request->requestBody = new AdminUsersSessionInvalidateApplicationJSON();
    $request->requestBody->sessionId = 788740;
    $request->requestBody->teamId = 'tenetur';
    $request->token = 'amet';

    $requestSecurity = new AdminUsersSessionInvalidateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsersSession->adminUsersSessionInvalidate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSessionReset

Wipes all valid sessions on all devices for a given user

API method documentation
<https://api.slack.com/methods/admin.users.session.reset>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionResetRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionResetApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionResetSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSessionResetRequest();
    $request->requestBody = new AdminUsersSessionResetApplicationJSON();
    $request->requestBody->mobileOnly = false;
    $request->requestBody->userId = 'tempore';
    $request->requestBody->webOnly = false;
    $request->token = 'accusamus';

    $requestSecurity = new AdminUsersSessionResetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsersSession->adminUsersSessionReset($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
