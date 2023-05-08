# dialog

### Available Operations

* [dialogOpen](#dialogopen) - Open a dialog with a user

## dialogOpen

Open a dialog with a user

API method documentation
<https://api.slack.com/methods/dialog.open>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\DialogOpenRequest;
use \shadowcodex\slackspec\Models\Operations\DialogOpenSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new DialogOpenRequest();
    $request->dialog = 'possimus';
    $request->token = 'facilis';
    $request->triggerId = 'cum';

    $requestSecurity = new DialogOpenSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->dialog->dialogOpen($request, $requestSecurity);

    if ($response->dialogOpenSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
