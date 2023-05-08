# adminUsergroups

### Available Operations

* [adminUsergroupsAddChannels](#adminusergroupsaddchannels) - Add one or more default channels to an IDP group.
* [adminUsergroupsAddTeams](#adminusergroupsaddteams) - Associate one or more default workspaces with an organization-wide IDP group.
* [adminUsergroupsListChannels](#adminusergroupslistchannels) - List the channels linked to an org-level IDP group (user group).
* [adminUsergroupsRemoveChannels](#adminusergroupsremovechannels) - Remove one or more default channels from an org-level IDP group (user group).

## adminUsergroupsAddChannels

Add one or more default channels to an IDP group.

API method documentation
<https://api.slack.com/methods/admin.usergroups.addChannels>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsAddChannelsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsAddChannelsApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsAddChannelsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsergroupsAddChannelsRequest();
    $request->requestBody = new AdminUsergroupsAddChannelsApplicationJSON();
    $request->requestBody->channelIds = 'atque';
    $request->requestBody->teamId = 'sit';
    $request->requestBody->usergroupId = 'fugiat';
    $request->token = 'ab';

    $requestSecurity = new AdminUsergroupsAddChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsergroups->adminUsergroupsAddChannels($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsergroupsAddTeams

Associate one or more default workspaces with an organization-wide IDP group.

API method documentation
<https://api.slack.com/methods/admin.usergroups.addTeams>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsAddTeamsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsAddTeamsApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsAddTeamsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsergroupsAddTeamsRequest();
    $request->requestBody = new AdminUsergroupsAddTeamsApplicationJSON();
    $request->requestBody->autoProvision = false;
    $request->requestBody->teamIds = 'soluta';
    $request->requestBody->usergroupId = 'dolorum';
    $request->token = 'iusto';

    $requestSecurity = new AdminUsergroupsAddTeamsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsergroups->adminUsergroupsAddTeams($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsergroupsListChannels

List the channels linked to an org-level IDP group (user group).

API method documentation
<https://api.slack.com/methods/admin.usergroups.listChannels>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsListChannelsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsListChannelsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsergroupsListChannelsRequest();
    $request->includeNumMembers = false;
    $request->teamId = 'voluptate';
    $request->token = 'dolorum';
    $request->usergroupId = 'deleniti';

    $requestSecurity = new AdminUsergroupsListChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsergroups->adminUsergroupsListChannels($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsergroupsRemoveChannels

Remove one or more default channels from an org-level IDP group (user group).

API method documentation
<https://api.slack.com/methods/admin.usergroups.removeChannels>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsRemoveChannelsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsRemoveChannelsApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsergroupsRemoveChannelsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsergroupsRemoveChannelsRequest();
    $request->requestBody = new AdminUsergroupsRemoveChannelsApplicationJSON();
    $request->requestBody->channelIds = 'omnis';
    $request->requestBody->usergroupId = 'necessitatibus';
    $request->token = 'distinctio';

    $requestSecurity = new AdminUsergroupsRemoveChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminUsergroups->adminUsergroupsRemoveChannels($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
