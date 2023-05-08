# appsPermissionsScopes

### Available Operations

* [appsPermissionsScopesList](#appspermissionsscopeslist) - Returns list of scopes this app has on a team.

## appsPermissionsScopesList

Returns list of scopes this app has on a team.

API method documentation
<https://api.slack.com/methods/apps.permissions.scopes.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsScopesListRequest;
use \shadowcodex\slackspec\Models\Operations\AppsPermissionsScopesListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AppsPermissionsScopesListRequest();
    $request->token = 'distinctio';

    $requestSecurity = new AppsPermissionsScopesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->appsPermissionsScopes->appsPermissionsScopesList($request, $requestSecurity);

    if ($response->apiPermissionsScopesListSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
