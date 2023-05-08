# adminTeamsAdmins

### Available Operations

* [adminTeamsAdminsList](#adminteamsadminslist) - List all of the admins on a given workspace.

## adminTeamsAdminsList

List all of the admins on a given workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.admins.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsAdminsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsAdminsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsAdminsListRequest();
    $request->cursor = 'quaerat';
    $request->limit = 554242;
    $request->teamId = 'aliquid';
    $request->token = 'dolorem';

    $requestSecurity = new AdminTeamsAdminsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsAdmins->adminTeamsAdminsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
