# adminConversationsEkm

### Available Operations

* [adminConversationsEkmListOriginalConnectedChannelInfo](#adminconversationsekmlistoriginalconnectedchannelinfo) - List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.

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
    $request->channelIds = 'consequuntur';
    $request->cursor = 'praesentium';
    $request->limit = 615560;
    $request->teamIds = 'magni';
    $request->token = 'sunt';

    $requestSecurity = new AdminConversationsEkmListOriginalConnectedChannelInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminConversationsEkm->adminConversationsEkmListOriginalConnectedChannelInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
