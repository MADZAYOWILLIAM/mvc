<?php

class App
{

    private $controller = 'Home';
    private $method = 'index';
    private $params = [];


    //Geting the URL
    private function spliltURL()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", filter_var(rtrim($URL, "/"), FILTER_SANITIZE_URL));
        return $URL;
    }



    public function run()
    {
        $URL = $this->spliltURL();

        // var_dump(print_r($URL));

        //Controller
        // Normalize requested controller segment: strip .php and invalid chars
        $raw = isset($URL[0]) ? $URL[0] : 'home';
        $raw = preg_replace('/\.php$/i', '', $raw); // remove .php suffix if present
        $raw = preg_replace('/[^a-zA-Z0-9_\-]/', '', $raw); // allow only alnum, underscore, dash
        $controllerName = $raw !== '' ? ucfirst($raw) : 'Home';

        // Try several candidate controller names to be forgiving with links
        $candidates = [$controllerName];
        // if user linked to plural (e.g., services), try singular (Service)
        if (substr($controllerName, -1) === 's') {
            $singular = rtrim($controllerName, 's');
            if ($singular !== '') {
                $candidates[] = ucfirst($singular);
            }
        }

        // also try camel-cased variant for names like sign_up -> SignUp
        $camel = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $raw)));
        if ($camel !== '' && !in_array($camel, $candidates)) {
            $candidates[] = $camel;
        }

        // Build filename from the first candidate that exists
        $filename = null;
        $foundController = null;
        foreach ($candidates as $c) {
            $try = "app/controllers/" . $c . ".php";
            if (file_exists($try)) {
                $filename = $try;
                $foundController = $c;
                break;
            }
        }
        // default to first candidate filename if none exist (keeps existing behavior)
        if ($filename === null) {
            $filename = "app/controllers/" . $controllerName . ".php";
            $foundController = $controllerName;
        }

        // Debug: log routing attempts to /tmp/mvc_debug.log
        $debug = [
            'url' => $URL,
            'requested' => $controllerName,
            'resolved' => $foundController,
            'filename' => $filename,
            'file_exists' => file_exists($filename)
        ];
        @file_put_contents('/tmp/mvc_debug.log', date('c') . ' ' . json_encode($debug) . PHP_EOL, FILE_APPEND);

        if (file_exists($filename)) {
            require_once $filename;
            // set controller to the resolved class name that was found
            $this->controller = $foundController;
            unset($URL[0]);
        } else {
            $filename = "app/controllers/_404.php";
            require_once $filename;
            $this->controller = "_404";
        }
        $this->controller = new $this->controller;
        //Method
        if (!empty($URL[1])) {
            if (method_exists($this->controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }
        //Params

        $this->params = (count($URL) > 0) ? array_values($URL) : [];

        //Call the controller and method with params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
