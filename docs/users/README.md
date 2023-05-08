# users

### Available Operations

* [usersConversations](#usersconversations) - List conversations the calling user may access.
* [usersDeletePhoto](#usersdeletephoto) - Delete the user profile photo
* [usersGetPresence](#usersgetpresence) - Gets user presence information.
* [usersIdentity](#usersidentity) - Get a user's identity.
* [usersInfo](#usersinfo) - Gets information about a user.
* [usersList](#userslist) - Lists all users in a Slack team.
* [usersLookupByEmail](#userslookupbyemail) - Find a user with an email address.
* [usersProfileGet](#usersprofileget) - Retrieves a user's profile information.
* [usersProfileSet](#usersprofileset) - Set the profile information for a user.
* [usersSetActive](#userssetactive) - Marked a user as active. Deprecated and non-functional.
* [usersSetPhoto](#userssetphoto) - Set the user profile photo
* [usersSetPresence](#userssetpresence) - Manually sets user presence.

## usersConversations

List conversations the calling user may access.

API method documentation
<https://api.slack.com/methods/users.conversations>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersConversationsRequest;
use \shadowcodex\slackspec\Models\Operations\UsersConversationsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersConversationsRequest();
    $request->cursor = 'aliquam';
    $request->excludeArchived = false;
    $request->limit = 320565;
    $request->token = 'repellat';
    $request->types = 'alias';
    $request->user = 'corporis';

    $requestSecurity = new UsersConversationsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersConversations($request, $requestSecurity);

    if ($response->usersConversationsSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersDeletePhoto

Delete the user profile photo

API method documentation
<https://api.slack.com/methods/users.deletePhoto>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersDeletePhotoRequestBody;
use \shadowcodex\slackspec\Models\Operations\UsersDeletePhotoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersDeletePhotoRequestBody();
    $request->token = 'perspiciatis';

    $requestSecurity = new UsersDeletePhotoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersDeletePhoto($request, $requestSecurity);

    if ($response->usersDeletePhotoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersGetPresence

Gets user presence information.

API method documentation
<https://api.slack.com/methods/users.getPresence>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersGetPresenceRequest;
use \shadowcodex\slackspec\Models\Operations\UsersGetPresenceSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersGetPresenceRequest();
    $request->token = 'nihil';
    $request->user = 'mollitia';

    $requestSecurity = new UsersGetPresenceSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersGetPresence($request, $requestSecurity);

    if ($response->apiMethodUsersGetPresence !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersIdentity

Get a user's identity.

API method documentation
<https://api.slack.com/methods/users.identity>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersIdentityRequest;
use \shadowcodex\slackspec\Models\Operations\UsersIdentitySecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersIdentityRequest();
    $request->token = 'voluptas';

    $requestSecurity = new UsersIdentitySecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersIdentity($request, $requestSecurity);

    if ($response->usersIdentitySchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersInfo

Gets information about a user.

API method documentation
<https://api.slack.com/methods/users.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersInfoRequest;
use \shadowcodex\slackspec\Models\Operations\UsersInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersInfoRequest();
    $request->includeLocale = false;
    $request->token = 'alias';
    $request->user = 'maiores';

    $requestSecurity = new UsersInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersInfo($request, $requestSecurity);

    if ($response->usersInfoSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersList

Lists all users in a Slack team.

API method documentation
<https://api.slack.com/methods/users.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersListRequest;
use \shadowcodex\slackspec\Models\Operations\UsersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersListRequest();
    $request->cursor = 'reiciendis';
    $request->includeLocale = false;
    $request->limit = 174658;
    $request->token = 'id';

    $requestSecurity = new UsersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersList($request, $requestSecurity);

    if ($response->usersListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersLookupByEmail

Find a user with an email address.

API method documentation
<https://api.slack.com/methods/users.lookupByEmail>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersLookupByEmailRequest;
use \shadowcodex\slackspec\Models\Operations\UsersLookupByEmailSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersLookupByEmailRequest();
    $request->email = 'Elda6@gmail.com';
    $request->token = 'recusandae';

    $requestSecurity = new UsersLookupByEmailSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersLookupByEmail($request, $requestSecurity);

    if ($response->usersLookupByEmailSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->token = 'omnis';
    $request->user = 'quaerat';

    $requestSecurity = new UsersProfileGetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersProfileGet($request, $requestSecurity);

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
    $request->requestBody->name = 'Carla Graham';
    $request->requestBody->profile = 'debitis';
    $request->requestBody->user = 'laudantium';
    $request->requestBody->value = 'eum';
    $request->token = 'nemo';

    $requestSecurity = new UsersProfileSetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersProfileSet($request, $requestSecurity);

    if ($response->usersProfileSetSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersSetActive

Marked a user as active. Deprecated and non-functional.

API method documentation
<https://api.slack.com/methods/users.setActive>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersSetActiveRequest;
use \shadowcodex\slackspec\Models\Operations\UsersSetActiveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersSetActiveRequest();
    $request->token = 'recusandae';

    $requestSecurity = new UsersSetActiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersSetActive($request, $requestSecurity);

    if ($response->usersSetActiveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersSetPhoto

Set the user profile photo

API method documentation
<https://api.slack.com/methods/users.setPhoto>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersSetPhotoRequestBody;
use \shadowcodex\slackspec\Models\Operations\UsersSetPhotoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersSetPhotoRequestBody();
    $request->cropW = 'esse';
    $request->cropX = 'provident';
    $request->cropY = 'quis';
    $request->image = 'eum';
    $request->token = 'reiciendis';

    $requestSecurity = new UsersSetPhotoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersSetPhoto($request, $requestSecurity);

    if ($response->usersSetPhotoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## usersSetPresence

Manually sets user presence.

API method documentation
<https://api.slack.com/methods/users.setPresence>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\UsersSetPresenceRequest;
use \shadowcodex\slackspec\Models\Operations\UsersSetPresenceApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\UsersSetPresenceSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new UsersSetPresenceRequest();
    $request->requestBody = new UsersSetPresenceApplicationJSON();
    $request->requestBody->presence = 'provident';
    $request->token = 'aspernatur';

    $requestSecurity = new UsersSetPresenceSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->users->usersSetPresence($request, $requestSecurity);

    if ($response->usersSetPresenceSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
