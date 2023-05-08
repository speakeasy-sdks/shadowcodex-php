# adminUsers

### Available Operations

* [adminUsersAssign](#adminusersassign) - Add an Enterprise user to a workspace.
* [adminUsersInvite](#adminusersinvite) - Invite a user to a workspace.
* [adminUsersList](#adminuserslist) - List users on a workspace
* [adminUsersRemove](#adminusersremove) - Remove a user from a workspace.
* [adminUsersSetAdmin](#adminuserssetadmin) - Set an existing guest, regular user, or owner to be an admin user.
* [adminUsersSetExpiration](#adminuserssetexpiration) - Set an expiration for a guest user
* [adminUsersSetOwner](#adminuserssetowner) - Set an existing guest, regular user, or admin user to be a workspace owner.
* [adminUsersSetRegular](#adminuserssetregular) - Set an existing guest user, admin user, or owner to be a regular user.

## adminUsersAssign

Add an Enterprise user to a workspace.

API method documentation
<https://api.slack.com/methods/admin.users.assign>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersAssignRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersAssignApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersAssignSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersAssignRequest();
    $request->requestBody = new AdminUsersAssignApplicationJSON();
    $request->requestBody->channelIds = 'asperiores';
    $request->requestBody->isRestricted = false;
    $request->requestBody->isUltraRestricted = false;
    $request->requestBody->teamId = 'nihil';
    $request->requestBody->userId = 'ipsum';
    $request->token = 'voluptate';

    $requestSecurity = new AdminUsersAssignSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersAssign($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersInvite

Invite a user to a workspace.

API method documentation
<https://api.slack.com/methods/admin.users.invite>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersInviteRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersInviteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersInviteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersInviteRequest();
    $request->requestBody = new AdminUsersInviteApplicationJSON();
    $request->requestBody->channelIds = 'id';
    $request->requestBody->customMessage = 'saepe';
    $request->requestBody->email = 'Brigitte75@gmail.com';
    $request->requestBody->guestExpirationTs = 'accusamus';
    $request->requestBody->isRestricted = false;
    $request->requestBody->isUltraRestricted = false;
    $request->requestBody->realName = 'ad';
    $request->requestBody->resend = false;
    $request->requestBody->teamId = 'saepe';
    $request->token = 'suscipit';

    $requestSecurity = new AdminUsersInviteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersInvite($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersList

List users on a workspace

API method documentation
<https://api.slack.com/methods/admin.users.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersListRequest();
    $request->cursor = 'deserunt';
    $request->limit = 588317;
    $request->teamId = 'minima';
    $request->token = 'repellendus';

    $requestSecurity = new AdminUsersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersRemove

Remove a user from a workspace.

API method documentation
<https://api.slack.com/methods/admin.users.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersRemoveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersRemoveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersRemoveRequest();
    $request->requestBody = new AdminUsersRemoveApplicationJSON();
    $request->requestBody->teamId = 'totam';
    $request->requestBody->userId = 'similique';
    $request->token = 'alias';

    $requestSecurity = new AdminUsersRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersRemove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetAdmin

Set an existing guest, regular user, or owner to be an admin user.

API method documentation
<https://api.slack.com/methods/admin.users.setAdmin>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetAdminRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetAdminApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetAdminSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetAdminRequest();
    $request->requestBody = new AdminUsersSetAdminApplicationJSON();
    $request->requestBody->teamId = 'at';
    $request->requestBody->userId = 'quaerat';
    $request->token = 'tempora';

    $requestSecurity = new AdminUsersSetAdminSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersSetAdmin($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetExpiration

Set an expiration for a guest user

API method documentation
<https://api.slack.com/methods/admin.users.setExpiration>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetExpirationRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetExpirationApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetExpirationSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetExpirationRequest();
    $request->requestBody = new AdminUsersSetExpirationApplicationJSON();
    $request->requestBody->expirationTs = 425451;
    $request->requestBody->teamId = 'quod';
    $request->requestBody->userId = 'officiis';
    $request->token = 'qui';

    $requestSecurity = new AdminUsersSetExpirationSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersSetExpiration($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetOwner

Set an existing guest, regular user, or admin user to be a workspace owner.

API method documentation
<https://api.slack.com/methods/admin.users.setOwner>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetOwnerRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetOwnerApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetOwnerSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetOwnerRequest();
    $request->requestBody = new AdminUsersSetOwnerApplicationJSON();
    $request->requestBody->teamId = 'dolorum';
    $request->requestBody->userId = 'a';
    $request->token = 'esse';

    $requestSecurity = new AdminUsersSetOwnerSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersSetOwner($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetRegular

Set an existing guest user, admin user, or owner to be a regular user.

API method documentation
<https://api.slack.com/methods/admin.users.setRegular>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetRegularRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetRegularApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetRegularSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetRegularRequest();
    $request->requestBody = new AdminUsersSetRegularApplicationJSON();
    $request->requestBody->teamId = 'harum';
    $request->requestBody->userId = 'iusto';
    $request->token = 'ipsum';

    $requestSecurity = new AdminUsersSetRegularSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsers->adminUsersSetRegular($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
