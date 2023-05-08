# usersProfile

### Available Operations

* [usersProfileGet](#usersprofileget) - Retrieves a user's profile information.
* [usersProfileSet](#usersprofileset) - Set the profile information for a user.

## usersProfileGet

Retrieves a user's profile information.

API method documentation
<https://api.slack.com/methods/users.profile.get>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersProfileGetRequest;
use \shadowcodex\slackspec\Models\Operations\UsersProfileGetSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersProfileGetRequest();
    $request->includeLabels = false;
    $request->token = 'ullam';
    $request->user = 'quasi';

    $requestSecurity = new UsersProfileGetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usersProfile->usersProfileGet($request, $requestSecurity);

    if ($response->usersProfileGetSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersProfileSet

Set the profile information for a user.

API method documentation
<https://api.slack.com/methods/users.profile.set>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersProfileSetRequest;
use \shadowcodex\slackspec\Models\Operations\UsersProfileSetApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsersProfileSetSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersProfileSetRequest();
    $request->requestBody = new UsersProfileSetApplicationJSON();
    $request->requestBody->name = 'Gordon O'Hara';
    $request->requestBody->profile = 'animi';
    $request->requestBody->user = 'ex';
    $request->requestBody->value = 'aliquid';
    $request->token = 'accusantium';

    $requestSecurity = new UsersProfileSetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usersProfile->usersProfileSet($request, $requestSecurity);

    if ($response->usersProfileSetSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
