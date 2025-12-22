<?php
// scripts/check_controllers.php
// Instantiate every controller to catch constructor-time errors.

// When running from CLI, ensure minimal $_SERVER values so baseUrl() doesn't throw warnings
if (php_sapi_name() === 'cli') {
    $_SERVER['SERVER_PORT'] = $_SERVER['SERVER_PORT'] ?? 80;
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $_SERVER['SCRIPT_NAME'] = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
    $_SERVER['HTTPS'] = $_SERVER['HTTPS'] ?? 'off';
}

require_once __DIR__ . '/../bootstrap.php';

$controllerDir = __DIR__ . '/../app/controllers';
$files = glob($controllerDir . '/*.php');

if (!$files) {
    echo "No controller files found in $controllerDir\n";
    exit(0);
}

$results = [];

foreach ($files as $file) {
    $base = basename($file, '.php');
    $class = $base;
    echo "Checking controller: $class ... ";
    try {
        if (!class_exists($class)) {
            // referencing the class will trigger the autoloader
            // but if class still doesn't exist, attempt to require file directly
            require_once $file;
        }

        if (!class_exists($class)) {
            throw new \RuntimeException("Controller class '$class' not found in $file");
        }

        // Try instantiating the controller to catch constructor errors
        $instance = new $class();
        echo "OK\n";
        $results[$class] = ['ok' => true];
    } catch (\Throwable $e) {
        echo "ERROR: " . $e->getMessage() . "\n";
        $results[$class] = ['ok' => false, 'error' => $e->getMessage()];
    }
}

// Summary
$failed = array_filter($results, function ($r) {
    return $r['ok'] === false;
});

echo "\nSummary: " . count($results) . " controllers checked, " . count($failed) . " failures.\n";

if ($failed) {
    foreach ($failed as $c => $info) {
        echo " - $c: " . $info['error'] . "\n";
    }
}

return 0;
