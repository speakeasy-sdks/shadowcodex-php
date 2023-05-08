# usergroupsUsers

### Available Operations

* [usergroupsUsersList](#usergroupsuserslist) - List all users in a User Group
* [usergroupsUsersUpdate](#usergroupsusersupdate) - Update the list of users for a User Group

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
    $request->token = 'ratione';
    $request->usergroup = 'laborum';

    $requestSecurity = new UsergroupsUsersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroupsUsers->usergroupsUsersList($request, $requestSecurity);

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
    $request->requestBody->usergroup = 'distinctio';
    $request->requestBody->users = 'voluptatum';
    $request->token = 'rem';

    $requestSecurity = new UsergroupsUsersUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->usergroupsUsers->usergroupsUsersUpdate($request, $requestSecurity);

    if ($response->usergroupsUsersUpdateSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
