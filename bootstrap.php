<?php

require_once 'app/config/config.php';
// Show all errors during development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session (used for flash messages)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function ($className) {
    $paths = [
        'app/core/',
        'app/controllers/',
        'app/models/'
    ];

    foreach ($paths as $path) {
        $file = $path . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
