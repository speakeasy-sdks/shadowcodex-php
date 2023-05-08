# apps

### Available Operations

* [appsEventAuthorizationsList](#appseventauthorizationslist) - Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.
* [appsPermissionsInfo](#appspermissionsinfo) - Returns list of permissions this app has on a team.
* [appsPermissionsRequest](#appspermissionsrequest) - Allows an app to request additional scopes
* [appsPermissionsResourcesList](#appspermissionsresourceslist) - Returns list of resource grants this app has on a team.
* [appsPermissionsScopesList](#appspermissionsscopeslist) - Returns list of scopes this app has on a team.
* [appsUninstall](#appsuninstall) - Uninstalls your app from a workspace.

## appsEventAuthorizationsList

Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.

API method documentation
<https://api.slack.com/methods/apps.event.authorizations.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AppsEventAuthorizationsListRequest;
use \shadowcodex\slackspec\Models\Operations\AppsEventAuthorizationsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AppsEventAuthorizationsListRequest();
    $request->cursor = 'dolorem';
    $request->eventContext = 'sapiente';
    $request->limit = 518201;
    $request->token = 'nihil';

    $requestSecurity = new AppsEventAuthorizationsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->apps->appsEventAuthorizationsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->token = 'sit';

    $requestSecurity = new AppsPermissionsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->apps->appsPermissionsInfo($request, $requestSecurity);

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
    $request->scopes = 'expedita';
    $request->token = 'neque';
    $request->triggerId = 'sed';

    $requestSecurity = new AppsPermissionsRequestSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->apps->appsPermissionsRequest($request, $requestSecurity);

    if ($response->appsPermissionsRequestSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->cursor = 'vel';
    $request->limit = 730442;
    $request->token = 'voluptas';

    $requestSecurity = new AppsPermissionsResourcesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->apps->appsPermissionsResourcesList($request, $requestSecurity);

    if ($response->appsPermissionsResourcesListSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->token = 'deserunt';

    $requestSecurity = new AppsPermissionsScopesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->apps->appsPermissionsScopesList($request, $requestSecurity);

    if ($response->apiPermissionsScopesListSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## appsUninstall

Uninstalls your app from a workspace.

API method documentation
<https://api.slack.com/methods/apps.uninstall>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AppsUninstallRequest;
use \shadowcodex\slackspec\Models\Operations\AppsUninstallSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AppsUninstallRequest();
    $request->clientId = 'quam';
    $request->clientSecret = 'ipsum';
    $request->token = 'incidunt';

    $requestSecurity = new AppsUninstallSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->apps->appsUninstall($request, $requestSecurity);

    if ($response->appsUninstallSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
