# adminInviteRequests

### Available Operations

* [adminInviteRequestsApprove](#admininviterequestsapprove) - Approve a workspace invite request.
* [adminInviteRequestsDeny](#admininviterequestsdeny) - Deny a workspace invite request.
* [adminInviteRequestsList](#admininviterequestslist) - List all pending workspace invite requests.

## adminInviteRequestsApprove

Approve a workspace invite request.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.approve>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApproveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApproveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApproveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsApproveRequest();
    $request->requestBody = new AdminInviteRequestsApproveApplicationJSON();
    $request->requestBody->inviteRequestId = 'nostrum';
    $request->requestBody->teamId = 'hic';
    $request->token = 'recusandae';

    $requestSecurity = new AdminInviteRequestsApproveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminInviteRequests->adminInviteRequestsApprove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsDeny

Deny a workspace invite request.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.deny>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDenyRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDenyApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDenySecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsDenyRequest();
    $request->requestBody = new AdminInviteRequestsDenyApplicationJSON();
    $request->requestBody->inviteRequestId = 'omnis';
    $request->requestBody->teamId = 'facilis';
    $request->token = 'perspiciatis';

    $requestSecurity = new AdminInviteRequestsDenySecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminInviteRequests->adminInviteRequestsDeny($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsList

List all pending workspace invite requests.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsListRequest();
    $request->cursor = 'voluptatem';
    $request->limit = 783645;
    $request->teamId = 'consequuntur';
    $request->token = 'blanditiis';

    $requestSecurity = new AdminInviteRequestsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminInviteRequests->adminInviteRequestsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
