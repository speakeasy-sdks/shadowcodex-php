# team

### Available Operations

* [teamAccessLogs](#teamaccesslogs) - Gets the access logs for the current team.
* [teamBillableInfo](#teambillableinfo) - Gets billable users information for the current team.
* [teamInfo](#teaminfo) - Gets information about the current team.
* [teamIntegrationLogs](#teamintegrationlogs) - Gets the integration logs for the current team.
* [teamProfileGet](#teamprofileget) - Retrieve a team's profile.

## teamAccessLogs

Gets the access logs for the current team.

API method documentation
<https://api.slack.com/methods/team.accessLogs>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\TeamAccessLogsRequest;
use \shadowcodex\slackspec\Models\Operations\TeamAccessLogsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new TeamAccessLogsRequest();
    $request->before = 'sunt';
    $request->count = 'recusandae';
    $request->page = 'dolorum';
    $request->token = 'repellendus';

    $requestSecurity = new TeamAccessLogsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->team->teamAccessLogs($request, $requestSecurity);

    if ($response->teamAccessLogsSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## teamBillableInfo

Gets billable users information for the current team.

API method documentation
<https://api.slack.com/methods/team.billableInfo>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\TeamBillableInfoRequest;
use \shadowcodex\slackspec\Models\Operations\TeamBillableInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new TeamBillableInfoRequest();
    $request->token = 'labore';
    $request->user = 'reiciendis';

    $requestSecurity = new TeamBillableInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->team->teamBillableInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## teamInfo

Gets information about the current team.

API method documentation
<https://api.slack.com/methods/team.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\TeamInfoRequest;
use \shadowcodex\slackspec\Models\Operations\TeamInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new TeamInfoRequest();
    $request->team = 'doloremque';
    $request->token = 'repudiandae';

    $requestSecurity = new TeamInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->team->teamInfo($request, $requestSecurity);

    if ($response->teamInfoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## teamIntegrationLogs

Gets the integration logs for the current team.

API method documentation
<https://api.slack.com/methods/team.integrationLogs>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\TeamIntegrationLogsRequest;
use \shadowcodex\slackspec\Models\Operations\TeamIntegrationLogsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new TeamIntegrationLogsRequest();
    $request->appId = 'dicta';
    $request->changeType = 'accusantium';
    $request->count = 'beatae';
    $request->page = 'dolores';
    $request->serviceId = 'enim';
    $request->token = 'laboriosam';
    $request->user = 'velit';

    $requestSecurity = new TeamIntegrationLogsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->team->teamIntegrationLogs($request, $requestSecurity);

    if ($response->teamIntegrationLogsSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## teamProfileGet

Retrieve a team's profile.

API method documentation
<https://api.slack.com/methods/team.profile.get>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\TeamProfileGetRequest;
use \shadowcodex\slackspec\Models\Operations\TeamProfileGetSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new TeamProfileGetRequest();
    $request->token = 'a';
    $request->visibility = 'molestias';

    $requestSecurity = new TeamProfileGetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->team->teamProfileGet($request, $requestSecurity);

    if ($response->teamProfileGetSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
