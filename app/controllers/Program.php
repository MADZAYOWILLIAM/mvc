<?php

class Program extends Controller
{

    public $usermodel;
    public  $redirect;
    public ?Request $request;

    public function __construct(?Request $request = null)
    {
        $this->usermodel = $this->model('UserModel');
        $this->request = $request !== null ? $request : new Request();
        $this->redirect = new Redirect();
    }
    public function index()
    {
        // simple demo: load the home view if available
        if (method_exists($this, 'view')) {
            $this->view('programs');
            return;
        }
        echo "Home index";
    }

    // public function index()
    // {
    //     require 'app/views/programs.php';
    // }
}
