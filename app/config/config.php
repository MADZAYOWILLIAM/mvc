<?php

function baseUrl()
{
    // Dynamically determine the base URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $script = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    return rtrim($protocol . $host . $script, '/');
}

$GLOBALS['config'] = [
    'base_url' => baseUrl(),
    'mysql' => array(
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'myDB',

    ),
];
