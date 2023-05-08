<!-- Start SDK Example Usage -->
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
    $request->requestBody->appId = 'corrupti';
    $request->requestBody->requestId = 'provident';
    $request->requestBody->teamId = 'distinctio';
    $request->token = 'quibusdam';

    $requestSecurity = new AdminAppsApproveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsApprove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->