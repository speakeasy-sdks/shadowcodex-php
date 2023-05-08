# appsEventAuthorizations

### Available Operations

* [appsEventAuthorizationsList](#appseventauthorizationslist) - Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.

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
    $request->cursor = 'qui';
    $request->eventContext = 'cupiditate';
    $request->limit = 807581;
    $request->token = 'pariatur';

    $requestSecurity = new AppsEventAuthorizationsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->appsEventAuthorizations->appsEventAuthorizationsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
