# adminAppsRestricted

### Available Operations

* [adminAppsRestrictedList](#adminappsrestrictedlist) - List restricted apps for an org or workspace.

## adminAppsRestrictedList

List restricted apps for an org or workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.restricted.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsRestrictedListRequest();
    $request->cursor = 'natus';
    $request->enterpriseId = 'omnis';
    $request->limit = 474867;
    $request->teamId = 'perferendis';
    $request->token = 'nihil';

    $requestSecurity = new AdminAppsRestrictedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminAppsRestricted->adminAppsRestrictedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
