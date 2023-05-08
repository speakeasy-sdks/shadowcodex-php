# views

### Available Operations

* [viewsOpen](#viewsopen) - Open a view for a user.
* [viewsPublish](#viewspublish) - Publish a static view for a User.
* [viewsPush](#viewspush) - Push a view onto the stack of a root view.
* [viewsUpdate](#viewsupdate) - Update an existing view.

## viewsOpen

Open a view for a user.

API method documentation
<https://api.slack.com/methods/views.open>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ViewsOpenRequest;
use \shadowcodex\slackspec\Models\Operations\ViewsOpenSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ViewsOpenRequest();
    $request->token = 'repellat';
    $request->triggerId = 'doloribus';
    $request->view = 'ullam';

    $requestSecurity = new ViewsOpenSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->views->viewsOpen($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## viewsPublish

Publish a static view for a User.

API method documentation
<https://api.slack.com/methods/views.publish>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ViewsPublishRequest;
use \shadowcodex\slackspec\Models\Operations\ViewsPublishSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ViewsPublishRequest();
    $request->hash = 'in';
    $request->token = 'nam';
    $request->userId = 'earum';
    $request->view = 'officia';

    $requestSecurity = new ViewsPublishSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->views->viewsPublish($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## viewsPush

Push a view onto the stack of a root view.

API method documentation
<https://api.slack.com/methods/views.push>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ViewsPushRequest;
use \shadowcodex\slackspec\Models\Operations\ViewsPushSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ViewsPushRequest();
    $request->token = 'laborum';
    $request->triggerId = 'placeat';
    $request->view = 'modi';

    $requestSecurity = new ViewsPushSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->views->viewsPush($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## viewsUpdate

Update an existing view.

API method documentation
<https://api.slack.com/methods/views.update>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ViewsUpdateRequest;
use \shadowcodex\slackspec\Models\Operations\ViewsUpdateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ViewsUpdateRequest();
    $request->externalId = 'voluptatibus';
    $request->hash = 'molestias';
    $request->token = 'officiis';
    $request->view = 'sapiente';
    $request->viewId = 'cumque';

    $requestSecurity = new ViewsUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->views->viewsUpdate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
