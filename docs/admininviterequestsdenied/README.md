# adminInviteRequestsDenied

### Available Operations

* [adminInviteRequestsDeniedList](#admininviterequestsdeniedlist) - List all denied workspace invite requests.

## adminInviteRequestsDeniedList

List all denied workspace invite requests.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.denied.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsDeniedListRequest();
    $request->cursor = 'adipisci';
    $request->limit = 992397;
    $request->teamId = 'earum';
    $request->token = 'modi';

    $requestSecurity = new AdminInviteRequestsDeniedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminInviteRequestsDenied->adminInviteRequestsDeniedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
