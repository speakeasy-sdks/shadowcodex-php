# adminConversationsRestrictAccess

### Available Operations

* [adminConversationsRestrictAccessAddGroup](#adminconversationsrestrictaccessaddgroup) - Add an allowlist of IDP groups for accessing a channel
* [adminConversationsRestrictAccessListGroups](#adminconversationsrestrictaccesslistgroups) - List all IDP Groups linked to a channel
* [adminConversationsRestrictAccessRemoveGroup](#adminconversationsrestrictaccessremovegroup) - Remove a linked IDP group linked from a private channel

## adminConversationsRestrictAccessAddGroup

Add an allowlist of IDP groups for accessing a channel

API method documentation
<https://api.slack.com/methods/admin.conversations.restrictAccess.addGroup>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsRestrictAccessAddGroupRequestBody();
    $request->channelId = 'quo';
    $request->groupId = 'illum';
    $request->teamId = 'pariatur';
    $request->token = 'maxime';

    $requestSecurity = new AdminConversationsRestrictAccessAddGroupSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversationsRestrictAccess->adminConversationsRestrictAccessAddGroup($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsRestrictAccessListGroups

List all IDP Groups linked to a channel

API method documentation
<https://api.slack.com/methods/admin.conversations.restrictAccess.listGroups>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsRestrictAccessListGroupsRequest();
    $request->channelId = 'ea';
    $request->teamId = 'excepturi';
    $request->token = 'odit';

    $requestSecurity = new AdminConversationsRestrictAccessListGroupsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversationsRestrictAccess->adminConversationsRestrictAccessListGroups($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsRestrictAccessRemoveGroup

Remove a linked IDP group linked from a private channel

API method documentation
<https://api.slack.com/methods/admin.conversations.restrictAccess.removeGroup>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsRestrictAccessRemoveGroupRequestBody();
    $request->channelId = 'ea';
    $request->groupId = 'accusantium';
    $request->teamId = 'ab';
    $request->token = 'maiores';

    $requestSecurity = new AdminConversationsRestrictAccessRemoveGroupSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversationsRestrictAccess->adminConversationsRestrictAccessRemoveGroup($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
