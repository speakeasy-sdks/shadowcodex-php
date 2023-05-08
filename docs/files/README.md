# files

### Available Operations

* [filesCommentsDelete](#filescommentsdelete) - Deletes an existing comment on a file.
* [filesDelete](#filesdelete) - Deletes a file.
* [filesInfo](#filesinfo) - Gets information about a file.
* [filesList](#fileslist) - List for a team, in a channel, or from a user with applied filters.
* [filesRemoteAdd](#filesremoteadd) - Adds a file from a remote service
* [filesRemoteInfo](#filesremoteinfo) - Retrieve information about a remote file added to Slack
* [filesRemoteList](#filesremotelist) - Retrieve information about a remote file added to Slack
* [filesRemoteRemove](#filesremoteremove) - Remove a remote file.
* [filesRemoteShare](#filesremoteshare) - Share a remote file into a channel.
* [filesRemoteUpdate](#filesremoteupdate) - Updates an existing remote file.
* [filesRevokePublicURL](#filesrevokepublicurl) - Revokes public/external sharing access for a file
* [filesSharedPublicURL](#filessharedpublicurl) - Enables a file for public/external sharing.
* [filesUpload](#filesupload) - Uploads or creates a file.

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
    $request->requestBody->file = 'cum';
    $request->requestBody->id = '375ed4f6-fbee-441f-b331-7fe35b60eb1e';
    $request->token = 'similique';

    $requestSecurity = new FilesCommentsDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesCommentsDelete($request, $requestSecurity);

    if ($response->filesCommentsDeleteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesDelete

Deletes a file.

API method documentation
<https://api.slack.com/methods/files.delete>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesDeleteRequest;
use \shadowcodex\slackspec\Models\Operations\FilesDeleteApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\FilesDeleteSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesDeleteRequest();
    $request->requestBody = new FilesDeleteApplicationJSON();
    $request->requestBody->file = 'tempora';
    $request->token = 'aspernatur';

    $requestSecurity = new FilesDeleteSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesDelete($request, $requestSecurity);

    if ($response->filesDeleteSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesInfo

Gets information about a file.

API method documentation
<https://api.slack.com/methods/files.info>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesInfoRequest;
use \shadowcodex\slackspec\Models\Operations\FilesInfoSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesInfoRequest();
    $request->count = 'voluptas';
    $request->cursor = 'voluptas';
    $request->file = 'voluptas';
    $request->limit = 324405;
    $request->page = 'nobis';
    $request->token = 'dolorum';

    $requestSecurity = new FilesInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesInfo($request, $requestSecurity);

    if ($response->filesInfoSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesList

List for a team, in a channel, or from a user with applied filters.

API method documentation
<https://api.slack.com/methods/files.list>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesListRequest;
use \shadowcodex\slackspec\Models\Operations\FilesListSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesListRequest();
    $request->channel = 'adipisci';
    $request->count = 'minus';
    $request->page = 'dolores';
    $request->showFilesHiddenByLimit = false;
    $request->token = 'blanditiis';
    $request->tsFrom = 4492.92;
    $request->tsTo = 2962.42;
    $request->types = 'aliquam';
    $request->user = 'officiis';

    $requestSecurity = new FilesListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesList($request, $requestSecurity);

    if ($response->filesListSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->externalId = 'temporibus';
    $request->externalUrl = 'ullam';
    $request->filetype = 'adipisci';
    $request->indexableFileContents = 'cum';
    $request->previewImage = 'blanditiis';
    $request->title = 'Ms.';
    $request->token = 'hic';

    $requestSecurity = new FilesRemoteAddSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRemoteAdd($request, $requestSecurity);

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
    $request->externalId = 'nesciunt';
    $request->file = 'culpa';
    $request->token = 'corrupti';

    $requestSecurity = new FilesRemoteInfoSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRemoteInfo($request, $requestSecurity);

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
    $request->channel = 'pariatur';
    $request->cursor = 'totam';
    $request->limit = 940210;
    $request->token = 'exercitationem';
    $request->tsFrom = 7507.65;
    $request->tsTo = 246.19;

    $requestSecurity = new FilesRemoteListSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRemoteList($request, $requestSecurity);

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
    $request->externalId = 'rerum';
    $request->file = 'sed';
    $request->token = 'reiciendis';

    $requestSecurity = new FilesRemoteRemoveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRemoteRemove($request, $requestSecurity);

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
    $request->channels = 'explicabo';
    $request->externalId = 'asperiores';
    $request->file = 'facilis';
    $request->token = 'voluptate';

    $requestSecurity = new FilesRemoteShareSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRemoteShare($request, $requestSecurity);

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
    $request->externalId = 'expedita';
    $request->externalUrl = 'ab';
    $request->file = 'iste';
    $request->filetype = 'dolore';
    $request->indexableFileContents = 'laborum';
    $request->previewImage = 'sed';
    $request->title = 'Ms.';
    $request->token = 'commodi';

    $requestSecurity = new FilesRemoteUpdateSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRemoteUpdate($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesRevokePublicURL

Revokes public/external sharing access for a file

API method documentation
<https://api.slack.com/methods/files.revokePublicURL>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesRevokePublicURLRequest;
use \shadowcodex\slackspec\Models\Operations\FilesRevokePublicURLApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\FilesRevokePublicURLSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesRevokePublicURLRequest();
    $request->requestBody = new FilesRevokePublicURLApplicationJSON();
    $request->requestBody->file = 'quidem';
    $request->token = 'explicabo';

    $requestSecurity = new FilesRevokePublicURLSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesRevokePublicURL($request, $requestSecurity);

    if ($response->filesRevokePublicURLSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesSharedPublicURL

Enables a file for public/external sharing.

API method documentation
<https://api.slack.com/methods/files.sharedPublicURL>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesSharedPublicURLRequest;
use \shadowcodex\slackspec\Models\Operations\FilesSharedPublicURLApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\FilesSharedPublicURLSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesSharedPublicURLRequest();
    $request->requestBody = new FilesSharedPublicURLApplicationJSON();
    $request->requestBody->file = 'voluptas';
    $request->token = 'unde';

    $requestSecurity = new FilesSharedPublicURLSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesSharedPublicURL($request, $requestSecurity);

    if ($response->filesSharedPublicURLSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## filesUpload

Uploads or creates a file.

API method documentation
<https://api.slack.com/methods/files.upload>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\FilesUploadRequestBody;
use \shadowcodex\slackspec\Models\Operations\FilesUploadSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new FilesUploadRequestBody();
    $request->channels = 'architecto';
    $request->content = 'suscipit';
    $request->file = 'sapiente';
    $request->filename = 'debitis';
    $request->filetype = 'illo';
    $request->initialComment = 'reiciendis';
    $request->threadTs = 193;
    $request->title = 'Ms.';
    $request->token = 'maiores';

    $requestSecurity = new FilesUploadSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->files->filesUpload($request, $requestSecurity);

    if ($response->filesUploadSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
