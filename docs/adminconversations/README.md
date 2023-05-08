# adminConversations

### Available Operations

* [adminConversationsArchive](#adminconversationsarchive) - Archive a public or private channel.
* [adminConversationsConvertToPrivate](#adminconversationsconverttoprivate) - Convert a public channel to a private channel.
* [adminConversationsCreate](#adminconversationscreate) - Create a public or private channel-based conversation.
* [adminConversationsDelete](#adminconversationsdelete) - Delete a public or private channel.
* [adminConversationsDisconnectShared](#adminconversationsdisconnectshared) - Disconnect a connected channel from one or more workspaces.
* [adminConversationsGetConversationPrefs](#adminconversationsgetconversationprefs) - Get conversation preferences for a public or private channel.
* [adminConversationsGetTeams](#adminconversationsgetteams) - Get all the workspaces a given public or private channel is connected to within this Enterprise org.
* [adminConversationsInvite](#adminconversationsinvite) - Invite a user to a public or private channel.
* [adminConversationsRename](#adminconversationsrename) - Rename a public or private channel.
* [adminConversationsSearch](#adminconversationssearch) - Search for public or private channels in an Enterprise organization.
* [adminConversationsSetConversationPrefs](#adminconversationssetconversationprefs) - Set the posting permissions for a public or private channel.
* [adminConversationsSetTeams](#adminconversationssetteams) - Set the workspaces in an Enterprise grid org that connect to a public or private channel.
* [adminConversationsUnarchive](#adminconversationsunarchive) - Unarchive a public or private channel.

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
    $request->requestBody->channelId = 'magnam';
    $request->token = 'distinctio';

    $requestSecurity = new AdminConversationsArchiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsArchive($request, $requestSecurity);

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
    $request->requestBody->channelId = 'id';
    $request->token = 'labore';

    $requestSecurity = new AdminConversationsConvertToPrivateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsConvertToPrivate($request, $requestSecurity);

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
    $request->requestBody->description = 'labore';
    $request->requestBody->isPrivate = false;
    $request->requestBody->name = 'Ada Rohan';
    $request->requestBody->orgWide = false;
    $request->requestBody->teamId = 'aspernatur';
    $request->token = 'architecto';

    $requestSecurity = new AdminConversationsCreateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsCreate($request, $requestSecurity);

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
    $request->requestBody->channelId = 'magnam';
    $request->token = 'et';

    $requestSecurity = new AdminConversationsDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsDelete($request, $requestSecurity);

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
    $request->requestBody->channelId = 'excepturi';
    $request->requestBody->leavingTeamIds = 'ullam';
    $request->token = 'provident';

    $requestSecurity = new AdminConversationsDisconnectSharedSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsDisconnectShared($request, $requestSecurity);

    if ($response->adminConversationsRenameSchema !== null) {
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
    $request->channelId = 'quos';
    $request->token = 'sint';

    $requestSecurity = new AdminConversationsGetConversationPrefsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsGetConversationPrefs($request, $requestSecurity);

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
    $request->channelId = 'accusantium';
    $request->cursor = 'mollitia';
    $request->limit = 968962;
    $request->token = 'mollitia';

    $requestSecurity = new AdminConversationsGetTeamsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsGetTeams($request, $requestSecurity);

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
    $request->requestBody->channelId = 'ad';
    $request->requestBody->userIds = 'eum';
    $request->token = 'dolor';

    $requestSecurity = new AdminConversationsInviteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsInvite($request, $requestSecurity);

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
    $request->requestBody->channelId = 'necessitatibus';
    $request->requestBody->name = 'Vivian Boyle';
    $request->token = 'debitis';

    $requestSecurity = new AdminConversationsRenameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsRename($request, $requestSecurity);

    if ($response->adminConversationsRenameSchema !== null) {
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
    $request->cursor = 'eius';
    $request->limit = 806194;
    $request->query = 'deleniti';
    $request->searchChannelTypes = 'facilis';
    $request->sort = 'in';
    $request->sortDir = 'architecto';
    $request->teamIds = 'architecto';
    $request->token = 'repudiandae';

    $requestSecurity = new AdminConversationsSearchSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsSearch($request, $requestSecurity);

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
    $request->requestBody->channelId = 'ullam';
    $request->requestBody->prefs = 'expedita';
    $request->token = 'nihil';

    $requestSecurity = new AdminConversationsSetConversationPrefsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsSetConversationPrefs($request, $requestSecurity);

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
    $request->requestBody->channelId = 'repellat';
    $request->requestBody->orgChannel = false;
    $request->requestBody->targetTeamIds = 'quibusdam';
    $request->requestBody->teamId = 'sed';
    $request->token = 'saepe';

    $requestSecurity = new AdminConversationsSetTeamsSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsSetTeams($request, $requestSecurity);

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
    $request->requestBody->channelId = 'pariatur';
    $request->token = 'accusantium';

    $requestSecurity = new AdminConversationsUnarchiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversations->adminConversationsUnarchive($request, $requestSecurity);

    if ($response->adminConversationsUnarchiveSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
