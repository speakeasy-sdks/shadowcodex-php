# adminAppsRequests

### Available Operations

* [adminAppsRequestsList](#adminappsrequestslist) - List app requests for a team/workspace.

## adminAppsRequestsList

List app requests for a team/workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.requests.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRequestsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRequestsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsRequestsListRequest();
    $request->cursor = 'amet';
    $request->limit = 643990;
    $request->teamId = 'nisi';
    $request->token = 'vel';

    $requestSecurity = new AdminAppsRequestsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminAppsRequests->adminAppsRequestsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
