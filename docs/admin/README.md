# admin

### Available Operations

* [adminAppsApprove](#adminappsapprove) - Approve an app for installation on a workspace.
* [adminAppsApprovedList](#adminappsapprovedlist) - List approved apps for an org or workspace.
* [adminAppsRequestsList](#adminappsrequestslist) - List app requests for a team/workspace.
* [adminAppsRestrict](#adminappsrestrict) - Restrict an app for installation on a workspace.
* [adminAppsRestrictedList](#adminappsrestrictedlist) - List restricted apps for an org or workspace.
* [adminConversationsArchive](#adminconversationsarchive) - Archive a public or private channel.
* [adminConversationsConvertToPrivate](#adminconversationsconverttoprivate) - Convert a public channel to a private channel.
* [adminConversationsCreate](#adminconversationscreate) - Create a public or private channel-based conversation.
* [adminConversationsDelete](#adminconversationsdelete) - Delete a public or private channel.
* [adminConversationsDisconnectShared](#adminconversationsdisconnectshared) - Disconnect a connected channel from one or more workspaces.
* [adminConversationsEkmListOriginalConnectedChannelInfo](#adminconversationsekmlistoriginalconnectedchannelinfo) - List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
* [adminConversationsGetConversationPrefs](#adminconversationsgetconversationprefs) - Get conversation preferences for a public or private channel.
* [adminConversationsGetTeams](#adminconversationsgetteams) - Get all the workspaces a given public or private channel is connected to within this Enterprise org.
* [adminConversationsInvite](#adminconversationsinvite) - Invite a user to a public or private channel.
* [adminConversationsRename](#adminconversationsrename) - Rename a public or private channel.
* [adminConversationsRestrictAccessAddGroup](#adminconversationsrestrictaccessaddgroup) - Add an allowlist of IDP groups for accessing a channel
* [adminConversationsRestrictAccessListGroups](#adminconversationsrestrictaccesslistgroups) - List all IDP Groups linked to a channel
* [adminConversationsRestrictAccessRemoveGroup](#adminconversationsrestrictaccessremovegroup) - Remove a linked IDP group linked from a private channel
* [adminConversationsSearch](#adminconversationssearch) - Search for public or private channels in an Enterprise organization.
* [adminConversationsSetConversationPrefs](#adminconversationssetconversationprefs) - Set the posting permissions for a public or private channel.
* [adminConversationsSetTeams](#adminconversationssetteams) - Set the workspaces in an Enterprise grid org that connect to a public or private channel.
* [adminConversationsUnarchive](#adminconversationsunarchive) - Unarchive a public or private channel.
* [adminEmojiAdd](#adminemojiadd) - Add an emoji.
* [adminEmojiAddAlias](#adminemojiaddalias) - Add an emoji alias.
* [adminEmojiList](#adminemojilist) - List emoji for an Enterprise Grid organization.
* [adminEmojiRemove](#adminemojiremove) - Remove an emoji across an Enterprise Grid organization
* [adminEmojiRename](#adminemojirename) - Rename an emoji.
* [adminInviteRequestsApprove](#admininviterequestsapprove) - Approve a workspace invite request.
* [adminInviteRequestsApprovedList](#admininviterequestsapprovedlist) - List all approved workspace invite requests.
* [adminInviteRequestsDeniedList](#admininviterequestsdeniedlist) - List all denied workspace invite requests.
* [adminInviteRequestsDeny](#admininviterequestsdeny) - Deny a workspace invite request.
* [adminInviteRequestsList](#admininviterequestslist) - List all pending workspace invite requests.
* [adminTeamsAdminsList](#adminteamsadminslist) - List all of the admins on a given workspace.
* [adminTeamsCreate](#adminteamscreate) - Create an Enterprise team.
* [adminTeamsList](#adminteamslist) - List all teams on an Enterprise organization
* [adminTeamsOwnersList](#adminteamsownerslist) - List all of the owners on a given workspace.
* [adminTeamsSettingsInfo](#adminteamssettingsinfo) - Fetch information about settings in a workspace
* [adminTeamsSettingsSetDefaultChannels](#adminteamssettingssetdefaultchannels) - Set the default channels of a workspace.
* [adminTeamsSettingsSetDescription](#adminteamssettingssetdescription) - Set the description of a given workspace.
* [adminTeamsSettingsSetDiscoverability](#adminteamssettingssetdiscoverability) - An API method that allows admins to set the discoverability of a given workspace
* [adminTeamsSettingsSetIcon](#adminteamssettingsseticon) - Sets the icon of a workspace.
* [adminTeamsSettingsSetName](#adminteamssettingssetname) - Set the name of a given workspace.
* [adminUsergroupsAddChannels](#adminusergroupsaddchannels) - Add one or more default channels to an IDP group.
* [adminUsergroupsAddTeams](#adminusergroupsaddteams) - Associate one or more default workspaces with an organization-wide IDP group.
* [adminUsergroupsListChannels](#adminusergroupslistchannels) - List the channels linked to an org-level IDP group (user group).
* [adminUsergroupsRemoveChannels](#adminusergroupsremovechannels) - Remove one or more default channels from an org-level IDP group (user group).
* [adminUsersAssign](#adminusersassign) - Add an Enterprise user to a workspace.
* [adminUsersInvite](#adminusersinvite) - Invite a user to a workspace.
* [adminUsersList](#adminuserslist) - List users on a workspace
* [adminUsersRemove](#adminusersremove) - Remove a user from a workspace.
* [adminUsersSessionInvalidate](#adminuserssessioninvalidate) - Invalidate a single session for a user by session_id
* [adminUsersSessionReset](#adminuserssessionreset) - Wipes all valid sessions on all devices for a given user
* [adminUsersSetAdmin](#adminuserssetadmin) - Set an existing guest, regular user, or owner to be an admin user.
* [adminUsersSetExpiration](#adminuserssetexpiration) - Set an expiration for a guest user
* [adminUsersSetOwner](#adminuserssetowner) - Set an existing guest, regular user, or admin user to be a workspace owner.
* [adminUsersSetRegular](#adminuserssetregular) - Set an existing guest user, admin user, or owner to be a regular user.

## adminAppsApprove

Approve an app for installation on a workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.approve>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsApproveRequest();
    $request->requestBody = new AdminAppsApproveApplicationJSON();
    $request->requestBody->appId = 'unde';
    $request->requestBody->requestId = 'nulla';
    $request->requestBody->teamId = 'corrupti';
    $request->token = 'illum';

    $requestSecurity = new AdminAppsApproveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsApprove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminAppsApprovedList

List approved apps for an org or workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.approved.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApprovedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApprovedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsApprovedListRequest();
    $request->cursor = 'vel';
    $request->enterpriseId = 'error';
    $request->limit = 645894;
    $request->teamId = 'suscipit';
    $request->token = 'iure';

    $requestSecurity = new AdminAppsApprovedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsApprovedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminAppsRequestsList

List app requests for a team/workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.requests.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRequestsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRequestsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsRequestsListRequest();
    $request->cursor = 'magnam';
    $request->limit = 891773;
    $request->teamId = 'ipsa';
    $request->token = 'delectus';

    $requestSecurity = new AdminAppsRequestsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsRequestsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminAppsRestrict

Restrict an app for installation on a workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.restrict>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsRestrictRequest();
    $request->requestBody = new AdminAppsRestrictApplicationJSON();
    $request->requestBody->appId = 'tempora';
    $request->requestBody->requestId = 'suscipit';
    $request->requestBody->teamId = 'molestiae';
    $request->token = 'minus';

    $requestSecurity = new AdminAppsRestrictSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsRestrict($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminAppsRestrictedList

List restricted apps for an org or workspace.

API method documentation
<https://api.slack.com/methods/admin.apps.restricted.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsRestrictedListRequest();
    $request->cursor = 'placeat';
    $request->enterpriseId = 'voluptatum';
    $request->limit = 479977;
    $request->teamId = 'excepturi';
    $request->token = 'nisi';

    $requestSecurity = new AdminAppsRestrictedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsRestrictedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsArchive

Archive a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.archive>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsArchiveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsArchiveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsArchiveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsArchiveRequest();
    $request->requestBody = new AdminConversationsArchiveApplicationJSON();
    $request->requestBody->channelId = 'recusandae';
    $request->token = 'temporibus';

    $requestSecurity = new AdminConversationsArchiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsArchive($request, $requestSecurity);

    if ($response->adminConversationsArchiveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsConvertToPrivate

Convert a public channel to a private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.convertToPrivate>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsConvertToPrivateRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsConvertToPrivateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsConvertToPrivateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsConvertToPrivateRequest();
    $request->requestBody = new AdminConversationsConvertToPrivateApplicationJSON();
    $request->requestBody->channelId = 'ab';
    $request->token = 'quis';

    $requestSecurity = new AdminConversationsConvertToPrivateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsConvertToPrivate($request, $requestSecurity);

    if ($response->adminConversationsConvertToPrivateSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsCreate

Create a public or private channel-based conversation.

API method documentation
<https://api.slack.com/methods/admin.conversations.create>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsCreateRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsCreateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsCreateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsCreateRequest();
    $request->requestBody = new AdminConversationsCreateApplicationJSON();
    $request->requestBody->description = 'veritatis';
    $request->requestBody->isPrivate = false;
    $request->requestBody->name = 'Christopher Hills';
    $request->requestBody->orgWide = false;
    $request->requestBody->teamId = 'quo';
    $request->token = 'odit';

    $requestSecurity = new AdminConversationsCreateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsCreate($request, $requestSecurity);

    if ($response->adminConversationsCreateSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsDelete

Delete a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.delete>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsDeleteRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsDeleteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsDeleteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsDeleteRequest();
    $request->requestBody = new AdminConversationsDeleteApplicationJSON();
    $request->requestBody->channelId = 'at';
    $request->token = 'at';

    $requestSecurity = new AdminConversationsDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsDelete($request, $requestSecurity);

    if ($response->adminConversationsDeleteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsDisconnectShared

Disconnect a connected channel from one or more workspaces.

API method documentation
<https://api.slack.com/methods/admin.conversations.disconnectShared>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsDisconnectSharedRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsDisconnectSharedApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsDisconnectSharedSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsDisconnectSharedRequest();
    $request->requestBody = new AdminConversationsDisconnectSharedApplicationJSON();
    $request->requestBody->channelId = 'maiores';
    $request->requestBody->leavingTeamIds = 'molestiae';
    $request->token = 'quod';

    $requestSecurity = new AdminConversationsDisconnectSharedSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsDisconnectShared($request, $requestSecurity);

    if ($response->adminConversationsRenameSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsEkmListOriginalConnectedChannelInfo

List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.

API method documentation
<https://api.slack.com/methods/admin.conversations.ekm.listOriginalConnectedChannelInfo>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsEkmListOriginalConnectedChannelInfoRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsEkmListOriginalConnectedChannelInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsEkmListOriginalConnectedChannelInfoRequest();
    $request->channelIds = 'quod';
    $request->cursor = 'esse';
    $request->limit = 520478;
    $request->teamIds = 'porro';
    $request->token = 'dolorum';

    $requestSecurity = new AdminConversationsEkmListOriginalConnectedChannelInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsEkmListOriginalConnectedChannelInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsGetConversationPrefs

Get conversation preferences for a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.getConversationPrefs>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsGetConversationPrefsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsGetConversationPrefsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsGetConversationPrefsRequest();
    $request->channelId = 'dicta';
    $request->token = 'nam';

    $requestSecurity = new AdminConversationsGetConversationPrefsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsGetConversationPrefs($request, $requestSecurity);

    if ($response->adminConversationsGetConversationPrefsSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsGetTeams

Get all the workspaces a given public or private channel is connected to within this Enterprise org.

API method documentation
<https://api.slack.com/methods/admin.conversations.getTeams>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsGetTeamsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsGetTeamsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsGetTeamsRequest();
    $request->channelId = 'officia';
    $request->cursor = 'occaecati';
    $request->limit = 143353;
    $request->token = 'deleniti';

    $requestSecurity = new AdminConversationsGetTeamsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsGetTeams($request, $requestSecurity);

    if ($response->adminConversationsGetTeamsSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsInvite

Invite a user to a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.invite>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsInviteRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsInviteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsInviteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsInviteRequest();
    $request->requestBody = new AdminConversationsInviteApplicationJSON();
    $request->requestBody->channelId = 'hic';
    $request->requestBody->userIds = 'optio';
    $request->token = 'totam';

    $requestSecurity = new AdminConversationsInviteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsInvite($request, $requestSecurity);

    if ($response->adminConversationsInviteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsRename

Rename a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.rename>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRenameRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRenameApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsRenameSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsRenameRequest();
    $request->requestBody = new AdminConversationsRenameApplicationJSON();
    $request->requestBody->channelId = 'beatae';
    $request->requestBody->name = 'Tanya Gleason';
    $request->token = 'cum';

    $requestSecurity = new AdminConversationsRenameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsRename($request, $requestSecurity);

    if ($response->adminConversationsRenameSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->channelId = 'esse';
    $request->groupId = 'ipsum';
    $request->teamId = 'excepturi';
    $request->token = 'aspernatur';

    $requestSecurity = new AdminConversationsRestrictAccessAddGroupSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsRestrictAccessAddGroup($request, $requestSecurity);

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
    $request->channelId = 'perferendis';
    $request->teamId = 'ad';
    $request->token = 'natus';

    $requestSecurity = new AdminConversationsRestrictAccessListGroupsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsRestrictAccessListGroups($request, $requestSecurity);

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
    $request->channelId = 'sed';
    $request->groupId = 'iste';
    $request->teamId = 'dolor';
    $request->token = 'natus';

    $requestSecurity = new AdminConversationsRestrictAccessRemoveGroupSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsRestrictAccessRemoveGroup($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsSearch

Search for public or private channels in an Enterprise organization.

API method documentation
<https://api.slack.com/methods/admin.conversations.search>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSearchRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSearchSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsSearchRequest();
    $request->cursor = 'laboriosam';
    $request->limit = 943749;
    $request->query = 'saepe';
    $request->searchChannelTypes = 'fuga';
    $request->sort = 'in';
    $request->sortDir = 'corporis';
    $request->teamIds = 'iste';
    $request->token = 'iure';

    $requestSecurity = new AdminConversationsSearchSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsSearch($request, $requestSecurity);

    if ($response->adminConversationsSearchSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsSetConversationPrefs

Set the posting permissions for a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.setConversationPrefs>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSetConversationPrefsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSetConversationPrefsApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSetConversationPrefsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsSetConversationPrefsRequest();
    $request->requestBody = new AdminConversationsSetConversationPrefsApplicationJSON();
    $request->requestBody->channelId = 'saepe';
    $request->requestBody->prefs = 'quidem';
    $request->token = 'architecto';

    $requestSecurity = new AdminConversationsSetConversationPrefsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsSetConversationPrefs($request, $requestSecurity);

    if ($response->adminConversationsSetConversationPrefsSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsSetTeams

Set the workspaces in an Enterprise grid org that connect to a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.setTeams>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSetTeamsRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSetTeamsApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsSetTeamsSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsSetTeamsRequest();
    $request->requestBody = new AdminConversationsSetTeamsApplicationJSON();
    $request->requestBody->channelId = 'ipsa';
    $request->requestBody->orgChannel = false;
    $request->requestBody->targetTeamIds = 'reiciendis';
    $request->requestBody->teamId = 'est';
    $request->token = 'mollitia';

    $requestSecurity = new AdminConversationsSetTeamsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsSetTeams($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminConversationsUnarchive

Unarchive a public or private channel.

API method documentation
<https://api.slack.com/methods/admin.conversations.unarchive>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsUnarchiveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsUnarchiveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminConversationsUnarchiveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminConversationsUnarchiveRequest();
    $request->requestBody = new AdminConversationsUnarchiveApplicationJSON();
    $request->requestBody->channelId = 'laborum';
    $request->token = 'dolores';

    $requestSecurity = new AdminConversationsUnarchiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminConversationsUnarchive($request, $requestSecurity);

    if ($response->adminConversationsUnarchiveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminEmojiAdd

Add an emoji.

API method documentation
<https://api.slack.com/methods/admin.emoji.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiAddRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminEmojiAddRequestBody();
    $request->name = 'Stacy Champlin';
    $request->token = 'omnis';
    $request->url = 'nemo';

    $requestSecurity = new AdminEmojiAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminEmojiAdd($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminEmojiAddAlias

Add an emoji alias.

API method documentation
<https://api.slack.com/methods/admin.emoji.addAlias>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiAddAliasRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiAddAliasSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminEmojiAddAliasRequestBody();
    $request->aliasFor = 'minima';
    $request->name = 'Brian Kessler';
    $request->token = 'sapiente';

    $requestSecurity = new AdminEmojiAddAliasSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminEmojiAddAlias($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminEmojiList

List emoji for an Enterprise Grid organization.

API method documentation
<https://api.slack.com/methods/admin.emoji.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminEmojiListRequest();
    $request->cursor = 'architecto';
    $request->limit = 652790;
    $request->token = 'dolorem';

    $requestSecurity = new AdminEmojiListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminEmojiList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminEmojiRemove

Remove an emoji across an Enterprise Grid organization

API method documentation
<https://api.slack.com/methods/admin.emoji.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiRemoveRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminEmojiRemoveRequestBody();
    $request->name = 'Carlos Ziemann';
    $request->token = 'numquam';

    $requestSecurity = new AdminEmojiRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminEmojiRemove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminEmojiRename

Rename an emoji.

API method documentation
<https://api.slack.com/methods/admin.emoji.rename>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiRenameRequestBody;
use \shadowcodex\slackspec\Models\Operations\AdminEmojiRenameSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminEmojiRenameRequestBody();
    $request->name = 'Claudia Krajcik';
    $request->newName = 'quia';
    $request->token = 'quis';

    $requestSecurity = new AdminEmojiRenameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminEmojiRename($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsApprove

Approve a workspace invite request.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.approve>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApproveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApproveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApproveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsApproveRequest();
    $request->requestBody = new AdminInviteRequestsApproveApplicationJSON();
    $request->requestBody->inviteRequestId = 'vitae';
    $request->requestBody->teamId = 'laborum';
    $request->token = 'animi';

    $requestSecurity = new AdminInviteRequestsApproveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminInviteRequestsApprove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsApprovedList

List all approved workspace invite requests.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.approved.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApprovedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsApprovedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsApprovedListRequest();
    $request->cursor = 'enim';
    $request->limit = 138183;
    $request->teamId = 'quo';
    $request->token = 'sequi';

    $requestSecurity = new AdminInviteRequestsApprovedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminInviteRequestsApprovedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsDeniedList

List all denied workspace invite requests.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.denied.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsDeniedListRequest();
    $request->cursor = 'tenetur';
    $request->limit = 368725;
    $request->teamId = 'id';
    $request->token = 'possimus';

    $requestSecurity = new AdminInviteRequestsDeniedListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminInviteRequestsDeniedList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsDeny

Deny a workspace invite request.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.deny>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDenyRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDenyApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDenySecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsDenyRequest();
    $request->requestBody = new AdminInviteRequestsDenyApplicationJSON();
    $request->requestBody->inviteRequestId = 'aut';
    $request->requestBody->teamId = 'quasi';
    $request->token = 'error';

    $requestSecurity = new AdminInviteRequestsDenySecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminInviteRequestsDeny($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminInviteRequestsList

List all pending workspace invite requests.

API method documentation
<https://api.slack.com/methods/admin.inviteRequests.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminInviteRequestsListRequest();
    $request->cursor = 'temporibus';
    $request->limit = 673660;
    $request->teamId = 'quasi';
    $request->token = 'reiciendis';

    $requestSecurity = new AdminInviteRequestsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminInviteRequestsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsAdminsList

List all of the admins on a given workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.admins.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsAdminsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsAdminsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsAdminsListRequest();
    $request->cursor = 'voluptatibus';
    $request->limit = 878194;
    $request->teamId = 'nihil';
    $request->token = 'praesentium';

    $requestSecurity = new AdminTeamsAdminsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsAdminsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsCreate

Create an Enterprise team.

API method documentation
<https://api.slack.com/methods/admin.teams.create>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsCreateRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsCreateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsCreateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsCreateRequest();
    $request->requestBody = new AdminTeamsCreateApplicationJSON();
    $request->requestBody->teamDescription = 'voluptatibus';
    $request->requestBody->teamDiscoverability = 'ipsa';
    $request->requestBody->teamDomain = 'omnis';
    $request->requestBody->teamName = 'voluptate';
    $request->token = 'cum';

    $requestSecurity = new AdminTeamsCreateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsCreate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsList

List all teams on an Enterprise organization

API method documentation
<https://api.slack.com/methods/admin.teams.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsListRequest();
    $request->cursor = 'perferendis';
    $request->limit = 39187;
    $request->token = 'reprehenderit';

    $requestSecurity = new AdminTeamsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminTeamsOwnersList

List all of the owners on a given workspace.

API method documentation
<https://api.slack.com/methods/admin.teams.owners.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsOwnersListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminTeamsOwnersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminTeamsOwnersListRequest();
    $request->cursor = 'ut';
    $request->limit = 979587;
    $request->teamId = 'dicta';
    $request->token = 'corporis';

    $requestSecurity = new AdminTeamsOwnersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsOwnersList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->teamId = 'dolore';
    $request->token = 'iusto';

    $requestSecurity = new AdminTeamsSettingsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsSettingsInfo($request, $requestSecurity);

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
    $request->channelIds = 'dicta';
    $request->teamId = 'harum';
    $request->token = 'enim';

    $requestSecurity = new AdminTeamsSettingsSetDefaultChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsSettingsSetDefaultChannels($request, $requestSecurity);

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
    $request->requestBody->description = 'accusamus';
    $request->requestBody->teamId = 'commodi';
    $request->token = 'repudiandae';

    $requestSecurity = new AdminTeamsSettingsSetDescriptionSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsSettingsSetDescription($request, $requestSecurity);

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
    $request->requestBody->discoverability = 'quae';
    $request->requestBody->teamId = 'ipsum';
    $request->token = 'quidem';

    $requestSecurity = new AdminTeamsSettingsSetDiscoverabilitySecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsSettingsSetDiscoverability($request, $requestSecurity);

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
    $request->imageUrl = 'molestias';
    $request->teamId = 'excepturi';
    $request->token = 'pariatur';

    $requestSecurity = new AdminTeamsSettingsSetIconSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsSettingsSetIcon($request, $requestSecurity);

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
    $request->requestBody->name = 'Irma Ledner DVM';
    $request->requestBody->teamId = 'sint';
    $request->token = 'veritatis';

    $requestSecurity = new AdminTeamsSettingsSetNameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminTeamsSettingsSetName($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->requestBody->channelIds = 'itaque';
    $request->requestBody->teamId = 'incidunt';
    $request->requestBody->usergroupId = 'enim';
    $request->token = 'consequatur';

    $requestSecurity = new AdminUsergroupsAddChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsergroupsAddChannels($request, $requestSecurity);

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
    $request->requestBody->teamIds = 'est';
    $request->requestBody->usergroupId = 'quibusdam';
    $request->token = 'explicabo';

    $requestSecurity = new AdminUsergroupsAddTeamsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsergroupsAddTeams($request, $requestSecurity);

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
    $request->teamId = 'deserunt';
    $request->token = 'distinctio';
    $request->usergroupId = 'quibusdam';

    $requestSecurity = new AdminUsergroupsListChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsergroupsListChannels($request, $requestSecurity);

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
    $request->requestBody->channelIds = 'labore';
    $request->requestBody->usergroupId = 'modi';
    $request->token = 'qui';

    $requestSecurity = new AdminUsergroupsRemoveChannelsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsergroupsRemoveChannels($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersAssign

Add an Enterprise user to a workspace.

API method documentation
<https://api.slack.com/methods/admin.users.assign>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersAssignRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersAssignApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersAssignSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersAssignRequest();
    $request->requestBody = new AdminUsersAssignApplicationJSON();
    $request->requestBody->channelIds = 'aliquid';
    $request->requestBody->isRestricted = false;
    $request->requestBody->isUltraRestricted = false;
    $request->requestBody->teamId = 'cupiditate';
    $request->requestBody->userId = 'quos';
    $request->token = 'perferendis';

    $requestSecurity = new AdminUsersAssignSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersAssign($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersInvite

Invite a user to a workspace.

API method documentation
<https://api.slack.com/methods/admin.users.invite>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersInviteRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersInviteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersInviteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersInviteRequest();
    $request->requestBody = new AdminUsersInviteApplicationJSON();
    $request->requestBody->channelIds = 'magni';
    $request->requestBody->customMessage = 'assumenda';
    $request->requestBody->email = 'Abigale_Corkery27@yahoo.com';
    $request->requestBody->guestExpirationTs = 'facilis';
    $request->requestBody->isRestricted = false;
    $request->requestBody->isUltraRestricted = false;
    $request->requestBody->realName = 'tempore';
    $request->requestBody->resend = false;
    $request->requestBody->teamId = 'labore';
    $request->token = 'delectus';

    $requestSecurity = new AdminUsersInviteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersInvite($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersList

List users on a workspace

API method documentation
<https://api.slack.com/methods/admin.users.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersListRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersListRequest();
    $request->cursor = 'eum';
    $request->limit = 248753;
    $request->teamId = 'eligendi';
    $request->token = 'sint';

    $requestSecurity = new AdminUsersListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersRemove

Remove a user from a workspace.

API method documentation
<https://api.slack.com/methods/admin.users.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersRemoveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersRemoveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersRemoveRequest();
    $request->requestBody = new AdminUsersRemoveApplicationJSON();
    $request->requestBody->teamId = 'aliquid';
    $request->requestBody->userId = 'provident';
    $request->token = 'necessitatibus';

    $requestSecurity = new AdminUsersRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersRemove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSessionInvalidate

Invalidate a single session for a user by session_id

API method documentation
<https://api.slack.com/methods/admin.users.session.invalidate>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionInvalidateRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionInvalidateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionInvalidateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSessionInvalidateRequest();
    $request->requestBody = new AdminUsersSessionInvalidateApplicationJSON();
    $request->requestBody->sessionId = 572252;
    $request->requestBody->teamId = 'officia';
    $request->token = 'dolor';

    $requestSecurity = new AdminUsersSessionInvalidateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersSessionInvalidate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSessionReset

Wipes all valid sessions on all devices for a given user

API method documentation
<https://api.slack.com/methods/admin.users.session.reset>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionResetRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionResetApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSessionResetSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSessionResetRequest();
    $request->requestBody = new AdminUsersSessionResetApplicationJSON();
    $request->requestBody->mobileOnly = false;
    $request->requestBody->userId = 'debitis';
    $request->requestBody->webOnly = false;
    $request->token = 'a';

    $requestSecurity = new AdminUsersSessionResetSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersSessionReset($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetAdmin

Set an existing guest, regular user, or owner to be an admin user.

API method documentation
<https://api.slack.com/methods/admin.users.setAdmin>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetAdminRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetAdminApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetAdminSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetAdminRequest();
    $request->requestBody = new AdminUsersSetAdminApplicationJSON();
    $request->requestBody->teamId = 'dolorum';
    $request->requestBody->userId = 'in';
    $request->token = 'in';

    $requestSecurity = new AdminUsersSetAdminSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersSetAdmin($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetExpiration

Set an expiration for a guest user

API method documentation
<https://api.slack.com/methods/admin.users.setExpiration>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetExpirationRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetExpirationApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetExpirationSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetExpirationRequest();
    $request->requestBody = new AdminUsersSetExpirationApplicationJSON();
    $request->requestBody->expirationTs = 846409;
    $request->requestBody->teamId = 'maiores';
    $request->requestBody->userId = 'rerum';
    $request->token = 'dicta';

    $requestSecurity = new AdminUsersSetExpirationSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersSetExpiration($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetOwner

Set an existing guest, regular user, or admin user to be a workspace owner.

API method documentation
<https://api.slack.com/methods/admin.users.setOwner>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetOwnerRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetOwnerApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetOwnerSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetOwnerRequest();
    $request->requestBody = new AdminUsersSetOwnerApplicationJSON();
    $request->requestBody->teamId = 'magnam';
    $request->requestBody->userId = 'cumque';
    $request->token = 'facere';

    $requestSecurity = new AdminUsersSetOwnerSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersSetOwner($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## adminUsersSetRegular

Set an existing guest user, admin user, or owner to be a regular user.

API method documentation
<https://api.slack.com/methods/admin.users.setRegular>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetRegularRequest;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetRegularApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminUsersSetRegularSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminUsersSetRegularRequest();
    $request->requestBody = new AdminUsersSetRegularApplicationJSON();
    $request->requestBody->teamId = 'ea';
    $request->requestBody->userId = 'aliquid';
    $request->token = 'laborum';

    $requestSecurity = new AdminUsersSetRegularSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminUsersSetRegular($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
