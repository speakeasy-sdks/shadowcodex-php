# migration

### Available Operations

* [migrationExchange](#migrationexchange) - For Enterprise Grid workspaces, map local user IDs to global user IDs

## migrationExchange

For Enterprise Grid workspaces, map local user IDs to global user IDs

API method documentation
<https://api.slack.com/methods/migration.exchange>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\MigrationExchangeRequest;
use \shadowcodex\slackspec\Models\Operations\MigrationExchangeSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new MigrationExchangeRequest();
    $request->teamId = 'voluptatem';
    $request->toOld = false;
    $request->token = 'culpa';
    $request->users = 'expedita';

    $requestSecurity = new MigrationExchangeSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->migration->migrationExchange($request, $requestSecurity);

    if ($response->migrationExchangeSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
