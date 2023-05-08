# adminEmoji

### Available Operations

* [adminEmojiAdd](#adminemojiadd) - Add an emoji.
* [adminEmojiAddAlias](#adminemojiaddalias) - Add an emoji alias.
* [adminEmojiList](#adminemojilist) - List emoji for an Enterprise Grid organization.
* [adminEmojiRemove](#adminemojiremove) - Remove an emoji across an Enterprise Grid organization
* [adminEmojiRename](#adminemojirename) - Rename an emoji.

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
    $request->name = 'Clyde Kling';
    $request->token = 'eaque';
    $request->url = 'pariatur';

    $requestSecurity = new AdminEmojiAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminEmoji->adminEmojiAdd($request, $requestSecurity);

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
    $request->aliasFor = 'nemo';
    $request->name = 'Joseph Steuber DDS';
    $request->token = 'corporis';

    $requestSecurity = new AdminEmojiAddAliasSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminEmoji->adminEmojiAddAlias($request, $requestSecurity);

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
    $request->cursor = 'hic';
    $request->limit = 729991;
    $request->token = 'nobis';

    $requestSecurity = new AdminEmojiListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminEmoji->adminEmojiList($request, $requestSecurity);

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
    $request->name = 'Beatrice Lebsack II';
    $request->token = 'nesciunt';

    $requestSecurity = new AdminEmojiRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminEmoji->adminEmojiRemove($request, $requestSecurity);

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
    $request->name = 'Dorothy Dach';
    $request->newName = 'dolor';
    $request->token = 'vero';

    $requestSecurity = new AdminEmojiRenameSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->adminEmoji->adminEmojiRename($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
