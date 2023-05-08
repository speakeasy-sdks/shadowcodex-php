# usergroups

### Available Operations

* [usergroupsCreate](#usergroupscreate) - Create a User Group
* [usergroupsDisable](#usergroupsdisable) - Disable an existing User Group
* [usergroupsEnable](#usergroupsenable) - Enable a User Group
* [usergroupsList](#usergroupslist) - List all User Groups for a team
* [usergroupsUpdate](#usergroupsupdate) - Update an existing User Group
* [usergroupsUsersList](#usergroupsuserslist) - List all users in a User Group
* [usergroupsUsersUpdate](#usergroupsusersupdate) - Update the list of users for a User Group

## usergroupsCreate

Create a User Group

API method documentation
<https://api.slack.com/methods/usergroups.create>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsCreateRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsCreateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsergroupsCreateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsCreateRequest();
    $request->requestBody = new UsergroupsCreateApplicationJSON();
    $request->requestBody->channels = 'consequuntur';
    $request->requestBody->description = 'occaecati';
    $request->requestBody->handle = 'officiis';
    $request->requestBody->includeCount = false;
    $request->requestBody->name = 'Arnold Ferry';
    $request->token = 'consequuntur';

    $requestSecurity = new UsergroupsCreateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsCreate($request, $requestSecurity);

    if ($response->usergroupsCreateSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usergroupsDisable

Disable an existing User Group

API method documentation
<https://api.slack.com/methods/usergroups.disable>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsDisableRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsDisableApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsergroupsDisableSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsDisableRequest();
    $request->requestBody = new UsergroupsDisableApplicationJSON();
    $request->requestBody->includeCount = false;
    $request->requestBody->usergroup = 'fugit';
    $request->token = 'id';

    $requestSecurity = new UsergroupsDisableSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsDisable($request, $requestSecurity);

    if ($response->usergroupsDisableSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usergroupsEnable

Enable a User Group

API method documentation
<https://api.slack.com/methods/usergroups.enable>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsEnableRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsEnableApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsergroupsEnableSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsEnableRequest();
    $request->requestBody = new UsergroupsEnableApplicationJSON();
    $request->requestBody->includeCount = false;
    $request->requestBody->usergroup = 'quis';
    $request->token = 'reprehenderit';

    $requestSecurity = new UsergroupsEnableSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsEnable($request, $requestSecurity);

    if ($response->usergroupsEnableSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usergroupsList

List all User Groups for a team

API method documentation
<https://api.slack.com/methods/usergroups.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsListRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsListRequest();
    $request->includeCount = false;
    $request->includeDisabled = false;
    $request->includeUsers = false;
    $request->token = 'error';

    $requestSecurity = new UsergroupsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsList($request, $requestSecurity);

    if ($response->usergroupsListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usergroupsUpdate

Update an existing User Group

API method documentation
<https://api.slack.com/methods/usergroups.update>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUpdateRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUpdateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUpdateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsUpdateRequest();
    $request->requestBody = new UsergroupsUpdateApplicationJSON();
    $request->requestBody->channels = 'illo';
    $request->requestBody->description = 'corporis';
    $request->requestBody->handle = 'quidem';
    $request->requestBody->includeCount = false;
    $request->requestBody->name = 'Ms. Melvin Thiel IV';
    $request->requestBody->usergroup = 'quae';
    $request->token = 'molestiae';

    $requestSecurity = new UsergroupsUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsUpdate($request, $requestSecurity);

    if ($response->usergroupsUpdateSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usergroupsUsersList

List all users in a User Group

API method documentation
<https://api.slack.com/methods/usergroups.users.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUsersListRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUsersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsUsersListRequest();
    $request->includeDisabled = false;
    $request->token = 'eveniet';
    $request->usergroup = 'qui';

    $requestSecurity = new UsergroupsUsersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsUsersList($request, $requestSecurity);

    if ($response->usergroupsUsersListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usergroupsUsersUpdate

Update the list of users for a User Group

API method documentation
<https://api.slack.com/methods/usergroups.users.update>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUsersUpdateRequest;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUsersUpdateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsergroupsUsersUpdateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsergroupsUsersUpdateRequest();
    $request->requestBody = new UsergroupsUsersUpdateApplicationJSON();
    $request->requestBody->includeCount = false;
    $request->requestBody->usergroup = 'cum';
    $request->requestBody->users = 'iure';
    $request->token = 'necessitatibus';

    $requestSecurity = new UsergroupsUsersUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroups->usergroupsUsersUpdate($request, $requestSecurity);

    if ($response->usergroupsUsersUpdateSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
