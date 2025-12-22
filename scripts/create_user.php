<?php
// scripts/create_user.php
// Usage: php create_user.php username password [email]
// If password is '-', the script will prompt for the password interactively.

require_once __DIR__ . '/../bootstrap.php';

// minimal CLI environment check
if (php_sapi_name() !== 'cli') {
    fwrite(STDERR, "This script must be run from the command-line.\n");
    exit(1);
}

array_shift($argv); // remove script name

if (count($argv) < 2) {
    echo "Usage: php create_user.php username password [email]\n";
    echo "If password is '-', you'll be prompted to enter it securely.\n";
    exit(1);
}

$username = $argv[0];
$password = $argv[1];
$email = $argv[2] ?? null;

if ($password === '-') {
    // prompt for password
    echo "Enter password: ";
    // disable echo on *nix
    if (strncasecmp(PHP_OS, 'WIN', 3) === 0) {
        // Windows: fallback to normal input
        $password = trim(fgets(STDIN));
    } else {
        system('stty -echo');
        $password = trim(fgets(STDIN));
        system('stty echo');
        echo "\n";
    }
}

try {
    // Use the existing model to register (reuses password hashing and checks)
    $model = new LoginModel();
    $result = $model->register($username, $password, $email);

    if (is_array($result) && isset($result['ok']) && $result['ok'] === true) {
        echo "User created successfully. ID: " . ($result['user']['id'] ?? '(unknown)') . "\n";
        exit(0);
    }

    // If result indicates duplicate or db_error, print a helpful message
    if (is_array($result) && isset($result['reason'])) {
        if ($result['reason'] === 'exists') {
            fwrite(STDERR, "Error: username already exists.\n");
            exit(2);
        }
        fwrite(STDERR, "Error: failed to create user (" . $result['reason'] . ").\n");
        exit(3);
    }

    // fallback
    fwrite(STDERR, "Error: could not create user.\n");
    exit(4);
} catch (Throwable $e) {
    fwrite(STDERR, "Exception: " . $e->getMessage() . "\n");
    exit(5);
}
