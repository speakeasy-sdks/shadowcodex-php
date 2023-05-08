# teamProfile

### Available Operations

* [teamProfileGet](#teamprofileget) - Retrieve a team's profile.

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
    $request->token = 'magnam';
    $request->visibility = 'saepe';

    $requestSecurity = new TeamProfileGetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->teamProfile->teamProfileGet($request, $requestSecurity);

    if ($response->teamProfileGetSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
