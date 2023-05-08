# callsParticipants

### Available Operations

* [callsParticipantsAdd](#callsparticipantsadd) - Registers new participants added to a Call.
* [callsParticipantsRemove](#callsparticipantsremove) - Registers participants removed from a Call.

## callsParticipantsAdd

Registers new participants added to a Call.

API method documentation
<https://api.slack.com/methods/calls.participants.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\CallsParticipantsAddRequest;
use \shadowcodex\slackspec\Models\Operations\CallsParticipantsAddApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\CallsParticipantsAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new CallsParticipantsAddRequest();
    $request->requestBody = new CallsParticipantsAddApplicationJSON();
    $request->requestBody->id = 'cdca4251-904e-4523-87e0-bc7178e4796f';
    $request->requestBody->users = 'dolores';
    $request->token = 'deserunt';

    $requestSecurity = new CallsParticipantsAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->callsParticipants->callsParticipantsAdd($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## callsParticipantsRemove

Registers participants removed from a Call.

API method documentation
<https://api.slack.com/methods/calls.participants.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\CallsParticipantsRemoveRequest;
use \shadowcodex\slackspec\Models\Operations\CallsParticipantsRemoveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\CallsParticipantsRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new CallsParticipantsRemoveRequest();
    $request->requestBody = new CallsParticipantsRemoveApplicationJSON();
    $request->requestBody->id = '70c68828-2aa4-4825-a2f2-22e9817ee17c';
    $request->requestBody->users = 'nam';
    $request->token = 'vero';

    $requestSecurity = new CallsParticipantsRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->callsParticipants->callsParticipantsRemove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
