# calls

### Available Operations

* [callsAdd](#callsadd) - Registers a new Call.
* [callsEnd](#callsend) - Ends a Call.
* [callsInfo](#callsinfo) - Returns information about a Call.
* [callsParticipantsAdd](#callsparticipantsadd) - Registers new participants added to a Call.
* [callsParticipantsRemove](#callsparticipantsremove) - Registers participants removed from a Call.
* [callsUpdate](#callsupdate) - Updates information about a Call.

## callsAdd

Registers a new Call.

API method documentation
<https://api.slack.com/methods/calls.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\CallsAddRequest;
use \shadowcodex\slackspec\Models\Operations\CallsAddApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\CallsAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new CallsAddRequest();
    $request->requestBody = new CallsAddApplicationJSON();
    $request->requestBody->createdBy = 'temporibus';
    $request->requestBody->dateStart = 183280;
    $request->requestBody->desktopAppJoinUrl = 'neque';
    $request->requestBody->externalDisplayId = 'fugit';
    $request->requestBody->externalUniqueId = 'magni';
    $request->requestBody->joinUrl = 'odio';
    $request->requestBody->title = 'Mr.';
    $request->requestBody->users = 'ullam';
    $request->token = 'nam';

    $requestSecurity = new CallsAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->calls->callsAdd($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## callsEnd

Ends a Call.

API method documentation
<https://api.slack.com/methods/calls.end>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\CallsEndRequest;
use \shadowcodex\slackspec\Models\Operations\CallsEndApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\CallsEndSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new CallsEndRequest();
    $request->requestBody = new CallsEndApplicationJSON();
    $request->requestBody->duration = 940432;
    $request->requestBody->id = '0cbb1e31-b8b9-40f3-843a-1108e0adcf4b';
    $request->token = 'cupiditate';

    $requestSecurity = new CallsEndSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->calls->callsEnd($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## callsInfo

Returns information about a Call.

API method documentation
<https://api.slack.com/methods/calls.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\CallsInfoRequest;
use \shadowcodex\slackspec\Models\Operations\CallsInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new CallsInfoRequest();
    $request->id = '21879fce-953f-473e-b7fb-c7abd74dd39c';
    $request->token = 'aut';

    $requestSecurity = new CallsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->calls->callsInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->requestBody->id = 'f5d2cff7-c70a-4456-a6d4-36813f16d9f5';
    $request->requestBody->users = 'sapiente';
    $request->token = 'quisquam';

    $requestSecurity = new CallsParticipantsAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->calls->callsParticipantsAdd($request, $requestSecurity);

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
    $request->requestBody->id = 'e6c55614-6c3e-4250-bb00-8c42e141aac3';
    $request->requestBody->users = 'eum';
    $request->token = 'autem';

    $requestSecurity = new CallsParticipantsRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->calls->callsParticipantsRemove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## callsUpdate

Updates information about a Call.

API method documentation
<https://api.slack.com/methods/calls.update>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\CallsUpdateRequest;
use \shadowcodex\slackspec\Models\Operations\CallsUpdateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\CallsUpdateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new CallsUpdateRequest();
    $request->requestBody = new CallsUpdateApplicationJSON();
    $request->requestBody->desktopAppJoinUrl = 'nobis';
    $request->requestBody->id = '8dd6b144-2907-4474-b78a-7bd466d28c10';
    $request->requestBody->joinUrl = 'id';
    $request->requestBody->title = 'Miss';
    $request->token = 'neque';

    $requestSecurity = new CallsUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->calls->callsUpdate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
