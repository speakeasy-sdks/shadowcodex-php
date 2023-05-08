# adminTeamsOwners

### Available Operations

* [adminTeamsOwnersList](#adminteamsownerslist) - List all of the owners on a given workspace.

## adminTeamsOwnersList

List all of the owners on a given workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.owners.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsOwnersListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsOwnersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsOwnersListRequest();
    $request->cursor = 'dolorem';
    $request->limit = 222443;
    $request->teamId = 'qui';
    $request->token = 'ipsum';

    $requestSecurity = new AdminTeamsOwnersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsOwners->adminTeamsOwnersList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
