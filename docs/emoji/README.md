# emoji

### Available Operations

* [emojiList](#emojilist) - Lists custom emoji for a team.

## emojiList

Lists custom emoji for a team.

API method documentation
<https://api.slack.com/methods/emoji.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\EmojiListRequest;
use \shadowcodex\slackspec\Models\Operations\EmojiListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new EmojiListRequest();
    $request->token = 'aperiam';

    $requestSecurity = new EmojiListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->emoji->emojiList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
