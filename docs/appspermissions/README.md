# appsPermissions

### Available Operations

* [appsPermissionsInfo](#appspermissionsinfo) - Returns list of permissions this app has on a team.
* [appsPermissionsRequest](#appspermissionsrequest) - Allows an app to request additional scopes

## appsPermissionsInfo

Returns list of permissions this app has on a team.

API method documentation
<https://api.slack.com/methods/apps.permissions.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsInfoRequest;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AppsPermissionsInfoRequest();
    $request->token = 'soluta';

    $requestSecurity = new AppsPermissionsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->appsPermissions->appsPermissionsInfo($request, $requestSecurity);

    if ($response->appsPermissionsInfoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## appsPermissionsRequest

Allows an app to request additional scopes

API method documentation
<https://api.slack.com/methods/apps.permissions.request>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsRequestRequest;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsRequestSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AppsPermissionsRequestRequest();
    $request->scopes = 'dicta';
    $request->token = 'laborum';
    $request->triggerId = 'totam';

    $requestSecurity = new AppsPermissionsRequestSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->appsPermissions->appsPermissionsRequest($request, $requestSecurity);

    if ($response->appsPermissionsRequestSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
