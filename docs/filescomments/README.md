# filesComments

### Available Operations

* [filesCommentsDelete](#filescommentsdelete) - Deletes an existing comment on a file.

## filesCommentsDelete

Deletes an existing comment on a file.

API method documentation
<https://api.slack.com/methods/files.comments.delete>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesCommentsDeleteRequest;
use \shadowcodex\slackspec\Models\Operations\FilesCommentsDeleteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\FilesCommentsDeleteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesCommentsDeleteRequest();
    $request->requestBody = new FilesCommentsDeleteApplicationJSON();
    $request->requestBody->file = 'incidunt';
    $request->requestBody->id = '294e3698-f447-4f60-be8b-445e80ca55ef';
    $request->token = 'nulla';

    $requestSecurity = new FilesCommentsDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesComments->filesCommentsDelete($request, $requestSecurity);

    if ($response->filesCommentsDeleteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
