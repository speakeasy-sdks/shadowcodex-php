# oauth

### Available Operations

* [oauthAccess](#oauthaccess) - Exchanges a temporary OAuth verifier code for an access token.
* [oauthToken](#oauthtoken) - Exchanges a temporary OAuth verifier code for a workspace token.
* [oauthV2Access](#oauthv2access) - Exchanges a temporary OAuth verifier code for an access token.

## oauthAccess

Exchanges a temporary OAuth verifier code for an access token.

API method documentation
<https://api.slack.com/methods/oauth.access>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\OauthAccessRequest;
use \shadowcodex\slackspec\Models\Operations\OauthAccessSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new OauthAccessRequest();
    $request->clientId = 'magnam';
    $request->clientSecret = 'consequatur';
    $request->code = 'esse';
    $request->redirectUri = 'ipsam';
    $request->singleChannel = false;

    $requestSecurity = new OauthAccessSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->oauth->oauthAccess($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## oauthToken

Exchanges a temporary OAuth verifier code for a workspace token.

API method documentation
<https://api.slack.com/methods/oauth.token>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\OauthTokenRequest;
use \shadowcodex\slackspec\Models\Operations\OauthTokenSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new OauthTokenRequest();
    $request->clientId = 'sit';
    $request->clientSecret = 'voluptatum';
    $request->code = 'quas';
    $request->redirectUri = 'repudiandae';
    $request->singleChannel = false;

    $requestSecurity = new OauthTokenSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->oauth->oauthToken($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## oauthV2Access

Exchanges a temporary OAuth verifier code for an access token.

API method documentation
<https://api.slack.com/methods/oauth.v2.access>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\OauthV2AccessRequest;
use \shadowcodex\slackspec\Models\Operations\OauthV2AccessSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new OauthV2AccessRequest();
    $request->clientId = 'corporis';
    $request->clientSecret = 'et';
    $request->code = 'blanditiis';
    $request->redirectUri = 'ex';

    $requestSecurity = new OauthV2AccessSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->oauth->oauthV2Access($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
