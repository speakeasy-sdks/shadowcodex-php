# adminTeamsSettings

### Available Operations

* [adminTeamsSettingsInfo](#adminteamssettingsinfo) - Fetch information about settings in a workspace
* [adminTeamsSettingsSetDefaultChannels](#adminteamssettingssetdefaultchannels) - Set the default channels of a workspace.
* [adminTeamsSettingsSetDescription](#adminteamssettingssetdescription) - Set the description of a given workspace.
* [adminTeamsSettingsSetDiscoverability](#adminteamssettingssetdiscoverability) - An API method that allows admins to set the discoverability of a given workspace
* [adminTeamsSettingsSetIcon](#adminteamssettingsseticon) - Sets the icon of a workspace.
* [adminTeamsSettingsSetName](#adminteamssettingssetname) - Set the name of a given workspace.

## adminTeamsSettingsInfo

Fetch information about settings in a workspace

API method documentation
<https://api.slack.com/methods/admin.teams.settings.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsInfoRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsSettingsInfoRequest();
    $request->teamId = 'hic';
    $request->token = 'excepturi';

    $requestSecurity = new AdminTeamsSettingsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsSettings->adminTeamsSettingsInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsSettingsSetDefaultChannels

Set the default channels of a workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.settings.setDefaultChannels>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDefaultChannelsRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDefaultChannelsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsSettingsSetDefaultChannelsRequestBody();
    $request->channelIds = 'cum';
    $request->teamId = 'voluptate';
    $request->token = 'dignissimos';

    $requestSecurity = new AdminTeamsSettingsSetDefaultChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsSettings->adminTeamsSettingsSetDefaultChannels($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsSettingsSetDescription

Set the description of a given workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.settings.setDescription>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDescriptionRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDescriptionApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDescriptionSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsSettingsSetDescriptionRequest();
    $request->requestBody = new AdminTeamsSettingsSetDescriptionApplicationJSON();
    $request->requestBody->description = 'reiciendis';
    $request->requestBody->teamId = 'amet';
    $request->token = 'dolorum';

    $requestSecurity = new AdminTeamsSettingsSetDescriptionSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsSettings->adminTeamsSettingsSetDescription($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsSettingsSetDiscoverability

An API method that allows admins to set the discoverability of a given workspace

API method documentation
<https://api.slack.com/methods/admin.teams.settings.setDiscoverability>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDiscoverabilityRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDiscoverabilityApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetDiscoverabilitySecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsSettingsSetDiscoverabilityRequest();
    $request->requestBody = new AdminTeamsSettingsSetDiscoverabilityApplicationJSON();
    $request->requestBody->discoverability = 'numquam';
    $request->requestBody->teamId = 'veritatis';
    $request->token = 'ipsa';

    $requestSecurity = new AdminTeamsSettingsSetDiscoverabilitySecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsSettings->adminTeamsSettingsSetDiscoverability($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsSettingsSetIcon

Sets the icon of a workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.settings.setIcon>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetIconRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetIconSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsSettingsSetIconRequestBody();
    $request->imageUrl = 'ipsa';
    $request->teamId = 'iure';
    $request->token = 'odio';

    $requestSecurity = new AdminTeamsSettingsSetIconSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsSettings->adminTeamsSettingsSetIcon($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsSettingsSetName

Set the name of a given workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.settings.setName>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetNameRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetNameApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsSettingsSetNameSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsSettingsSetNameRequest();
    $request->requestBody = new AdminTeamsSettingsSetNameApplicationJSON();
    $request->requestBody->name = 'Sophia Predovic';
    $request->requestBody->teamId = 'natus';
    $request->token = 'eos';

    $requestSecurity = new AdminTeamsSettingsSetNameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminTeamsSettings->adminTeamsSettingsSetName($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
