# reactions

### Available Operations

* [reactionsAdd](#reactionsadd) - Adds a reaction to an item.
* [reactionsGet](#reactionsget) - Gets reactions for an item.
* [reactionsList](#reactionslist) - Lists reactions made by a user.
* [reactionsRemove](#reactionsremove) - Removes a reaction from an item.

## reactionsAdd

Adds a reaction to an item.

API method documentation
<https://api.slack.com/methods/reactions.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ReactionsAddRequest;
use \shadowcodex\slackspec\Models\Operations\ReactionsAddApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ReactionsAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ReactionsAddRequest();
    $request->requestBody = new ReactionsAddApplicationJSON();
    $request->requestBody->channel = 'architecto';
    $request->requestBody->name = 'Francisco Powlowski';
    $request->requestBody->timestamp = 'nam';
    $request->token = 'tenetur';

    $requestSecurity = new ReactionsAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reactions->reactionsAdd($request, $requestSecurity);

    if ($response->reactionsAddSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## reactionsGet

Gets reactions for an item.

API method documentation
<https://api.slack.com/methods/reactions.get>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ReactionsGetRequest;
use \shadowcodex\slackspec\Models\Operations\ReactionsGetSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ReactionsGetRequest();
    $request->channel = 'laboriosam';
    $request->file = 'alias';
    $request->fileComment = 'amet';
    $request->full = false;
    $request->timestamp = 'deserunt';
    $request->token = 'voluptate';

    $requestSecurity = new ReactionsGetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reactions->reactionsGet($request, $requestSecurity);

    if ($response->reactionsGetSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## reactionsList

Lists reactions made by a user.

API method documentation
<https://api.slack.com/methods/reactions.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ReactionsListRequest;
use \shadowcodex\slackspec\Models\Operations\ReactionsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ReactionsListRequest();
    $request->count = 600392;
    $request->cursor = 'reiciendis';
    $request->full = false;
    $request->limit = 588740;
    $request->page = 833819;
    $request->token = 'delectus';
    $request->user = 'voluptates';

    $requestSecurity = new ReactionsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reactions->reactionsList($request, $requestSecurity);

    if ($response->reactionsListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## reactionsRemove

Removes a reaction from an item.

API method documentation
<https://api.slack.com/methods/reactions.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ReactionsRemoveRequest;
use \shadowcodex\slackspec\Models\Operations\ReactionsRemoveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ReactionsRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ReactionsRemoveRequest();
    $request->requestBody = new ReactionsRemoveApplicationJSON();
    $request->requestBody->channel = 'perferendis';
    $request->requestBody->file = 'est';
    $request->requestBody->fileComment = 'quidem';
    $request->requestBody->name = 'Chelsea Pfannerstill';
    $request->requestBody->timestamp = 'veniam';
    $request->token = 'voluptatem';

    $requestSecurity = new ReactionsRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->reactions->reactionsRemove($request, $requestSecurity);

    if ($response->reactionsRemoveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
