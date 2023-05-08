# filesRemote

### Available Operations

* [filesRemoteAdd](#filesremoteadd) - Adds a file from a remote service
* [filesRemoteInfo](#filesremoteinfo) - Retrieve information about a remote file added to Slack
* [filesRemoteList](#filesremotelist) - Retrieve information about a remote file added to Slack
* [filesRemoteRemove](#filesremoteremove) - Remove a remote file.
* [filesRemoteShare](#filesremoteshare) - Share a remote file into a channel.
* [filesRemoteUpdate](#filesremoteupdate) - Updates an existing remote file.

## filesRemoteAdd

Adds a file from a remote service

API method documentation
<https://api.slack.com/methods/files.remote.add>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteAddRequestBody;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteAddSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRemoteAddRequestBody();
    $request->externalId = 'magni';
    $request->externalUrl = 'aperiam';
    $request->filetype = 'saepe';
    $request->indexableFileContents = 'numquam';
    $request->previewImage = 'veniam';
    $request->title = 'Ms.';
    $request->token = 'officiis';

    $requestSecurity = new FilesRemoteAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesRemote->filesRemoteAdd($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesRemoteInfo

Retrieve information about a remote file added to Slack

API method documentation
<https://api.slack.com/methods/files.remote.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteInfoRequest;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRemoteInfoRequest();
    $request->externalId = 'beatae';
    $request->file = 'laudantium';
    $request->token = 'exercitationem';

    $requestSecurity = new FilesRemoteInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesRemote->filesRemoteInfo($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesRemoteList

Retrieve information about a remote file added to Slack

API method documentation
<https://api.slack.com/methods/files.remote.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteListRequest;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRemoteListRequest();
    $request->channel = 'praesentium';
    $request->cursor = 'cum';
    $request->limit = 386827;
    $request->token = 'dolorum';
    $request->tsFrom = 5300.89;
    $request->tsTo = 6223.85;

    $requestSecurity = new FilesRemoteListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesRemote->filesRemoteList($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesRemoteRemove

Remove a remote file.

API method documentation
<https://api.slack.com/methods/files.remote.remove>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteRemoveRequestBody;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteRemoveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRemoteRemoveRequestBody();
    $request->externalId = 'hic';
    $request->file = 'expedita';
    $request->token = 'debitis';

    $requestSecurity = new FilesRemoteRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesRemote->filesRemoteRemove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesRemoteShare

Share a remote file into a channel.

API method documentation
<https://api.slack.com/methods/files.remote.share>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteShareRequest;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteShareSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRemoteShareRequest();
    $request->channels = 'neque';
    $request->externalId = 'dolorum';
    $request->file = 'nostrum';
    $request->token = 'officia';

    $requestSecurity = new FilesRemoteShareSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesRemote->filesRemoteShare($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesRemoteUpdate

Updates an existing remote file.

API method documentation
<https://api.slack.com/methods/files.remote.update>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteUpdateRequestBody;
use \shadowcodex\slackspec\Models\Operations\FilesRemoteUpdateSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRemoteUpdateRequestBody();
    $request->externalId = 'dolorum';
    $request->externalUrl = 'corrupti';
    $request->file = 'accusamus';
    $request->filetype = 'tempora';
    $request->indexableFileContents = 'atque';
    $request->previewImage = 'fugit';
    $request->title = 'Mrs.';
    $request->token = 'fugiat';

    $requestSecurity = new FilesRemoteUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->filesRemote->filesRemoteUpdate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
