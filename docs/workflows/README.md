# workflows

### Available Operations

* [workflowsStepCompleted](#workflowsstepcompleted) - Indicate that an app's step in a workflow completed execution.
* [workflowsStepFailed](#workflowsstepfailed) - Indicate that an app's step in a workflow failed to execute.
* [workflowsUpdateStep](#workflowsupdatestep) - Update the configuration for a workflow extension step.

## workflowsStepCompleted

Indicate that an app's step in a workflow completed execution.

API method documentation
<https://api.slack.com/methods/workflows.stepCompleted>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\WorkflowsStepCompletedRequest;
use \shadowcodex\slackspec\Models\Operations\WorkflowsStepCompletedSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new WorkflowsStepCompletedRequest();
    $request->outputs = 'vitae';
    $request->token = 'rerum';
    $request->workflowStepExecuteId = 'tempora';

    $requestSecurity = new WorkflowsStepCompletedSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->workflows->workflowsStepCompleted($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## workflowsStepFailed

Indicate that an app's step in a workflow failed to execute.

API method documentation
<https://api.slack.com/methods/workflows.stepFailed>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\WorkflowsStepFailedRequest;
use \shadowcodex\slackspec\Models\Operations\WorkflowsStepFailedSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new WorkflowsStepFailedRequest();
    $request->error = 'quis';
    $request->token = 'inventore';
    $request->workflowStepExecuteId = 'fugit';

    $requestSecurity = new WorkflowsStepFailedSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->workflows->workflowsStepFailed($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## workflowsUpdateStep

Update the configuration for a workflow extension step.

API method documentation
<https://api.slack.com/methods/workflows.updateStep>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\WorkflowsUpdateStepRequest;
use \shadowcodex\slackspec\Models\Operations\WorkflowsUpdateStepSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new WorkflowsUpdateStepRequest();
    $request->inputs = 'cumque';
    $request->outputs = 'quae';
    $request->stepImageUrl = 'perferendis';
    $request->stepName = 'velit';
    $request->token = 'aspernatur';
    $request->workflowStepEditId = 'eum';

    $requestSecurity = new WorkflowsUpdateStepSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->workflows->workflowsUpdateStep($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
