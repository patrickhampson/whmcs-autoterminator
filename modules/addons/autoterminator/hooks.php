<?php

add_hook('CancellationRequest', 1, function(array $params) {
    try {
        logModuleCall("AutoTerminator", "Hook_CancellationRequest_Start", $params, [], [], []);
        if($params['type'] != "Immediate") {
            return;
        }

        $command = 'UpdateClientProduct';
        $postData = array(
            'serviceid' => $params['relid'],
            'status' => 'Terminated'
        );
        
        $results = localAPI($command, $postData, "");

        logActivity('AutoTerminator - Cancel request processed for ServiceID: ' . $params['relid']);
        logModuleCall("AutoTerminator", "Hook_CancellationRequest_End", $params, $results, [], []);
    } catch (Exception $e) {
        logModuleCall("AutoTerminator", "Hook_CancellationRequest_Error", $params, $e, [], []);
    }
});
