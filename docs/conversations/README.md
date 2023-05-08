# conversations

### Available Operations

* [conversationsArchive](#conversationsarchive) - Archives a conversation.
* [conversationsClose](#conversationsclose) - Closes a direct message or multi-person direct message.
* [conversationsCreate](#conversationscreate) - Initiates a public or private channel-based conversation
* [conversationsHistory](#conversationshistory) - Fetches a conversation's history of messages and events.
* [conversationsInfo](#conversationsinfo) - Retrieve information about a conversation.
* [conversationsInvite](#conversationsinvite) - Invites users to a channel.
* [conversationsJoin](#conversationsjoin) - Joins an existing conversation.
* [conversationsKick](#conversationskick) - Removes a user from a conversation.
* [conversationsLeave](#conversationsleave) - Leaves a conversation.
* [conversationsList](#conversationslist) - Lists all channels in a Slack team.
* [conversationsMark](#conversationsmark) - Sets the read cursor in a channel.
* [conversationsMembers](#conversationsmembers) - Retrieve members of a conversation.
* [conversationsOpen](#conversationsopen) - Opens or resumes a direct message or multi-person direct message.
* [conversationsRename](#conversationsrename) - Renames a conversation.
* [conversationsReplies](#conversationsreplies) - Retrieve a thread of messages posted to a conversation
* [conversationsSetPurpose](#conversationssetpurpose) - Sets the purpose for a conversation.
* [conversationsSetTopic](#conversationssettopic) - Sets the topic for a conversation.
* [conversationsUnarchive](#conversationsunarchive) - Reverses conversation archival.

## conversationsArchive

Archives a conversation.

API method documentation
<https://api.slack.com/methods/conversations.archive>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsArchiveRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsArchiveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsArchiveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsArchiveRequest();
    $request->requestBody = new ConversationsArchiveApplicationJSON();
    $request->requestBody->channel = 'voluptate';
    $request->token = 'ipsa';

    $requestSecurity = new ConversationsArchiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsArchive($request, $requestSecurity);

    if ($response->conversationsArchiveSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsClose

Closes a direct message or multi-person direct message.

API method documentation
<https://api.slack.com/methods/conversations.close>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsCloseRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsCloseApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsCloseSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsCloseRequest();
    $request->requestBody = new ConversationsCloseApplicationJSON();
    $request->requestBody->channel = 'minima';
    $request->token = 'veritatis';

    $requestSecurity = new ConversationsCloseSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsClose($request, $requestSecurity);

    if ($response->conversationsCloseSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsCreate

Initiates a public or private channel-based conversation

API method documentation
<https://api.slack.com/methods/conversations.create>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsCreateRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsCreateApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsCreateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsCreateRequest();
    $request->requestBody = new ConversationsCreateApplicationJSON();
    $request->requestBody->isPrivate = false;
    $request->requestBody->name = 'Sherry Morar IV';
    $request->token = 'aut';

    $requestSecurity = new ConversationsCreateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsCreate($request, $requestSecurity);

    if ($response->conversationsCreateSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsHistory

Fetches a conversation's history of messages and events.

API method documentation
<https://api.slack.com/methods/conversations.history>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsHistoryRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsHistorySecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsHistoryRequest();
    $request->channel = 'laudantium';
    $request->cursor = 'eum';
    $request->inclusive = false;
    $request->latest = 6498.32;
    $request->limit = 68074;
    $request->oldest = 5445.91;
    $request->token = 'non';

    $requestSecurity = new ConversationsHistorySecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsHistory($request, $requestSecurity);

    if ($response->conversationsHistorySuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsInfo

Retrieve information about a conversation.

API method documentation
<https://api.slack.com/methods/conversations.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsInfoRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsInfoRequest();
    $request->channel = 'voluptatem';
    $request->includeLocale = false;
    $request->includeNumMembers = false;
    $request->token = 'dolor';

    $requestSecurity = new ConversationsInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsInfo($request, $requestSecurity);

    if ($response->conversationsInfoSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsInvite

Invites users to a channel.

API method documentation
<https://api.slack.com/methods/conversations.invite>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsInviteRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsInviteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsInviteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsInviteRequest();
    $request->requestBody = new ConversationsInviteApplicationJSON();
    $request->requestBody->channel = 'occaecati';
    $request->requestBody->users = 'numquam';
    $request->token = 'impedit';

    $requestSecurity = new ConversationsInviteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsInvite($request, $requestSecurity);

    if ($response->conversationsInviteErrorSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsJoin

Joins an existing conversation.

API method documentation
<https://api.slack.com/methods/conversations.join>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsJoinRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsJoinApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsJoinSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsJoinRequest();
    $request->requestBody = new ConversationsJoinApplicationJSON();
    $request->requestBody->channel = 'explicabo';
    $request->token = 'voluptas';

    $requestSecurity = new ConversationsJoinSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsJoin($request, $requestSecurity);

    if ($response->conversationsJoinSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsKick

Removes a user from a conversation.

API method documentation
<https://api.slack.com/methods/conversations.kick>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsKickRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsKickApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsKickSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsKickRequest();
    $request->requestBody = new ConversationsKickApplicationJSON();
    $request->requestBody->channel = 'aut';
    $request->requestBody->user = 'dignissimos';
    $request->token = 'dicta';

    $requestSecurity = new ConversationsKickSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsKick($request, $requestSecurity);

    if ($response->conversationsKickSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsLeave

Leaves a conversation.

API method documentation
<https://api.slack.com/methods/conversations.leave>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsLeaveRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsLeaveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsLeaveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsLeaveRequest();
    $request->requestBody = new ConversationsLeaveApplicationJSON();
    $request->requestBody->channel = 'maiores';
    $request->token = 'natus';

    $requestSecurity = new ConversationsLeaveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsLeave($request, $requestSecurity);

    if ($response->conversationsLeaveSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsList

Lists all channels in a Slack team.

API method documentation
<https://api.slack.com/methods/conversations.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsListRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsListRequest();
    $request->cursor = 'velit';
    $request->excludeArchived = false;
    $request->limit = 974257;
    $request->token = 'voluptas';
    $request->types = 'asperiores';

    $requestSecurity = new ConversationsListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsList($request, $requestSecurity);

    if ($response->conversationsListSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsMark

Sets the read cursor in a channel.

API method documentation
<https://api.slack.com/methods/conversations.mark>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsMarkRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsMarkApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsMarkSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsMarkRequest();
    $request->requestBody = new ConversationsMarkApplicationJSON();
    $request->requestBody->channel = 'aperiam';
    $request->requestBody->ts = 4090.54;
    $request->token = 'quaerat';

    $requestSecurity = new ConversationsMarkSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsMark($request, $requestSecurity);

    if ($response->conversationsMarkSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsMembers

Retrieve members of a conversation.

API method documentation
<https://api.slack.com/methods/conversations.members>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsMembersRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsMembersSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsMembersRequest();
    $request->channel = 'consequuntur';
    $request->cursor = 'repellendus';
    $request->limit = 638762;
    $request->token = 'maxime';

    $requestSecurity = new ConversationsMembersSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsMembers($request, $requestSecurity);

    if ($response->conversationsMembersSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsOpen

Opens or resumes a direct message or multi-person direct message.

API method documentation
<https://api.slack.com/methods/conversations.open>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsOpenRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsOpenApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsOpenSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsOpenRequest();
    $request->requestBody = new ConversationsOpenApplicationJSON();
    $request->requestBody->channel = 'dignissimos';
    $request->requestBody->returnIm = false;
    $request->requestBody->users = 'officia';
    $request->token = 'asperiores';

    $requestSecurity = new ConversationsOpenSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsOpen($request, $requestSecurity);

    if ($response->conversationsOpenSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsRename

Renames a conversation.

API method documentation
<https://api.slack.com/methods/conversations.rename>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsRenameRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsRenameApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsRenameSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsRenameRequest();
    $request->requestBody = new ConversationsRenameApplicationJSON();
    $request->requestBody->channel = 'nemo';
    $request->requestBody->name = 'Darlene Sawayn';
    $request->token = 'ab';

    $requestSecurity = new ConversationsRenameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsRename($request, $requestSecurity);

    if ($response->conversationsRenameSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsReplies

Retrieve a thread of messages posted to a conversation

API method documentation
<https://api.slack.com/methods/conversations.replies>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsRepliesRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsRepliesSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsRepliesRequest();
    $request->channel = 'adipisci';
    $request->cursor = 'fuga';
    $request->inclusive = false;
    $request->latest = 6625.05;
    $request->limit = 380729;
    $request->oldest = 2460.63;
    $request->token = 'culpa';
    $request->ts = 6658.59;

    $requestSecurity = new ConversationsRepliesSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsReplies($request, $requestSecurity);

    if ($response->conversationsRepliesSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsSetPurpose

Sets the purpose for a conversation.

API method documentation
<https://api.slack.com/methods/conversations.setPurpose>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsSetPurposeRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsSetPurposeApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsSetPurposeSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsSetPurposeRequest();
    $request->requestBody = new ConversationsSetPurposeApplicationJSON();
    $request->requestBody->channel = 'recusandae';
    $request->requestBody->purpose = 'totam';
    $request->token = 'fugiat';

    $requestSecurity = new ConversationsSetPurposeSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsSetPurpose($request, $requestSecurity);

    if ($response->conversationsSetPurposeSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsSetTopic

Sets the topic for a conversation.

API method documentation
<https://api.slack.com/methods/conversations.setTopic>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsSetTopicRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsSetTopicApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsSetTopicSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsSetTopicRequest();
    $request->requestBody = new ConversationsSetTopicApplicationJSON();
    $request->requestBody->channel = 'vel';
    $request->requestBody->topic = 'ducimus';
    $request->token = 'quos';

    $requestSecurity = new ConversationsSetTopicSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsSetTopic($request, $requestSecurity);

    if ($response->conversationsSetTopicSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## conversationsUnarchive

Reverses conversation archival.

API method documentation
<https://api.slack.com/methods/conversations.unarchive>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\ConversationsUnarchiveRequest;
use \shadowcodex\slackspec\Models\Operations\ConversationsUnarchiveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\ConversationsUnarchiveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new ConversationsUnarchiveRequest();
    $request->requestBody = new ConversationsUnarchiveApplicationJSON();
    $request->requestBody->channel = 'vel';
    $request->token = 'labore';

    $requestSecurity = new ConversationsUnarchiveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->conversations->conversationsUnarchive($request, $requestSecurity);

    if ($response->conversationsUnarchiveSuccessSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
