# auth

### Available Operations

* [authRevoke](#authrevoke) - Revokes a token.
* [authTest](#authtest) - Checks authentication & identity.

## authRevoke

Revokes a token.

API method documentation
<https://api.slack.com/methods/auth.revoke>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AuthRevokeRequest;
use \shadowcodex\slackspec\Models\Operations\AuthRevokeSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AuthRevokeRequest();
    $request->test = false;
    $request->token = 'facilis';

    $requestSecurity = new AuthRevokeSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->auth->authRevoke($request, $requestSecurity);

    if ($response->authRevokeSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## authTest

Checks authentication & identity.

API method documentation
<https://api.slack.com/methods/auth.test>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AuthTestRequest;
use \shadowcodex\slackspec\Models\Operations\AuthTestSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AuthTestRequest();
    $request->token = 'aliquid';

    $requestSecurity = new AuthTestSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->auth->authTest($request, $requestSecurity);

    if ($response->authTestSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
