# appsPermissionsResources

### Available Operations

* [appsPermissionsResourcesList](#appspermissionsresourceslist) - Returns list of resource grants this app has on a team.

## appsPermissionsResourcesList

Returns list of resource grants this app has on a team.

API method documentation
<https://api.slack.com/methods/apps.permissions.resources.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsResourcesListRequest;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsResourcesListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AppsPermissionsResourcesListRequest();
    $request->cursor = 'incidunt';
    $request->limit = 132068;
    $request->token = 'dolores';

    $requestSecurity = new AppsPermissionsResourcesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->appsPermissionsResources->appsPermissionsResourcesList($request, $requestSecurity);

    if ($response->appsPermissionsResourcesListSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
