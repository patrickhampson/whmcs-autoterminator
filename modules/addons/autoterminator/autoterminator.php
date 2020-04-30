<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function autoterminator_config()
{
    return [
        // Display name for your module
        'name' => 'Auto Terminator',
        // Description displayed within the admin interface
        'description' => 'This module automatically processes termination requests as they are made by customers.',
        // Module author name
        'author' => 'patrickhampson',
        // Default language
        'language' => 'english',
        // Version number
        'version' => '1.0',
        'fields' => [
        ]
    ];
}

function autoterminator_activate()
{
    // Create custom tables and schema required by your module
    try {
        return [
            // Supported values here include: success, error or info
            'status' => 'success',
            'description' => 'When a user requests immediate cancellation, the module will auto terminate the service.',
        ];
    } catch (\Exception $e) {
        return [
            // Supported values here include: success, error or info
            'status' => "error",
            'description' => $e->getMessage(),
        ];
    }
}

function autoterminator_deactivate()
{
    // Undo any database and schema modifications made by your module here
    try {
        return [
            // Supported values here include: success, error or info
            'status' => 'success',
            'description' => 'The module will no longer automatically.',
        ];
    } catch (\Exception $e) {
        return [
            // Supported values here include: success, error or info
            'status' => "error",
            'description' => $e->getMessage(),
        ];
    }
}