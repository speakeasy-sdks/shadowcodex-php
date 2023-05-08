# adminApps

### Available Operations

* [adminAppsApprove](#adminappsapprove) - Approve an app for installation on a workspace.
* [adminAppsRestrict](#adminappsrestrict) - Restrict an app for installation on a workspace.

## adminAppsApprove

Approve an app for installation on a workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.approve>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsApproveRequest();
    $request->requestBody = new AdminAppsApproveApplicationJSON();
    $request->requestBody->appId = 'accusamus';
    $request->requestBody->requestId = 'non';
    $request->requestBody->teamId = 'occaecati';
    $request->token = 'enim';

    $requestSecurity = new AdminAppsApproveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminApps->adminAppsApprove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminAppsRestrict

Restrict an app for installation on a workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.restrict>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsRestrictRequest();
    $request->requestBody = new AdminAppsRestrictApplicationJSON();
    $request->requestBody->appId = 'accusamus';
    $request->requestBody->requestId = 'delectus';
    $request->requestBody->teamId = 'quidem';
    $request->token = 'provident';

    $requestSecurity = new AdminAppsRestrictSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminApps->adminAppsRestrict($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
