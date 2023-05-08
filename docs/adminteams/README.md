# adminTeams

### Available Operations

* [adminTeamsCreate](#adminteamscreate) - Create an Enterprise team.
* [adminTeamsList](#adminteamslist) - List all teams on an Enterprise organization

## adminTeamsCreate

Create an Enterprise team.

API method documentation
<https://api.slack.com/methods/admin.teams.create>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsCreateRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsCreateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsCreateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsCreateRequest();
    $request->requestBody = new AdminTeamsCreateApplicationJSON();
    $request->requestBody->teamDescription = 'iste';
    $request->requestBody->teamDiscoverability = 'dolorum';
    $request->requestBody->teamDomain = 'deleniti';
    $request->requestBody->teamName = 'pariatur';
    $request->token = 'provident';

    $requestSecurity = new AdminTeamsCreateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeams->adminTeamsCreate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsList

List all teams on an Enterprise organization

API method documentation
<https://api.slack.com/methods/admin.teams.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsListRequest();
    $request->cursor = 'nobis';
    $request->limit = 730122;
    $request->token = 'delectus';

    $requestSecurity = new AdminTeamsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeams->adminTeamsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
