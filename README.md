# whmcs-autoterminator
A module to auto terminate service upon cancellation request in WHMCS.

When a cancellation request is received in WHMCS you can configure it to auto terminate services with a cancellation request when the cron job runs.  This module uses the CancellationRequest hook to automatically terminate the service if cancellation type "Immediate" was selected.

## Installation
1. Download this repository as a [zip](https://github.com/patrickhampson/whmcs-autoterminator/archive/master.zip).
2. Copy modules/addons/autoterminator to the WHMCS modules/addons/ directory.
3. Activate the module in Setup -> Addon Modules

## Usage
If the module is activated any cancellation requests with a type of "Immediate" will automatically set the service status to "Terminated".  The module will log a line in the activity log like: "AutoTerminator - Cancel request processed for ServiceID: 123"
