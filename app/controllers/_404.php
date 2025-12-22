<?php

class _404 extends Controller
{
    public function index()
    {
        http_response_code(404);
        if (method_exists($this, 'view')) {
            // try to load a 404 view if present
            $this->view('404');
            return;
        }
        echo "404 - Not Found";
    }
}
