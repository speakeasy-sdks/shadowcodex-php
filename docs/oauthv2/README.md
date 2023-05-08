# oauthV2

### Available Operations

* [oauthV2Access](#oauthv2access) - Exchanges a temporary OAuth verifier code for an access token.

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
    $request->clientId = 'sed';
    $request->clientSecret = 'sit';
    $request->code = 'vel';
    $request->redirectUri = 'nostrum';

    $requestSecurity = new OauthV2AccessSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->oauthV2->oauthV2Access($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
