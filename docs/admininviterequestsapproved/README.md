# adminInviteRequestsApproved

### Available Operations

* [adminInviteRequestsApprovedList](#admininviterequestsapprovedlist) - List all approved workspace invite requests.

## adminInviteRequestsApprovedList

List all approved workspace invite requests.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.approved.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApprovedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApprovedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsApprovedListRequest();
    $request->cursor = 'error';
    $request->limit = 50370;
    $request->teamId = 'occaecati';
    $request->token = 'rerum';

    $requestSecurity = new AdminInviteRequestsApprovedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminInviteRequestsApproved->adminInviteRequestsApprovedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
