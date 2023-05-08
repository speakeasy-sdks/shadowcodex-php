# adminAppsApproved

### Available Operations

* [adminAppsApprovedList](#adminappsapprovedlist) - List approved apps for an org or workspace.

## adminAppsApprovedList

List approved apps for an org or workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.approved.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApprovedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApprovedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsApprovedListRequest();
    $request->cursor = 'nam';
    $request->enterpriseId = 'id';
    $request->limit = 501324;
    $request->teamId = 'deleniti';
    $request->token = 'sapiente';

    $requestSecurity = new AdminAppsApprovedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminAppsApproved->adminAppsApprovedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
