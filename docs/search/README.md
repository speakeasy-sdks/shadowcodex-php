# search

### Available Operations

* [searchMessages](#searchmessages) - Searches for messages matching a query.

## searchMessages

Searches for messages matching a query.

API method documentation
<https://api.slack.com/methods/search.messages>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\SearchMessagesRequest;
use \shadowcodex\slackspec\Models\Operations\SearchMessagesSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new SearchMessagesRequest();
    $request->count = 227759;
    $request->highlight = false;
    $request->page = 826825;
    $request->query = 'ea';
    $request->sort = 'atque';
    $request->sortDir = 'error';
    $request->token = 'officiis';

    $requestSecurity = new SearchMessagesSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->search->searchMessages($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
