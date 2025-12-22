<?php

class Home extends Controller
{

    public $usermodel;
    public  $redirect;
    public  $request;

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
            $this->view('home');
            return;
        }
        echo "Home index";

        // if ($this->request->isPost()) {
        //     $name = $this->request->data('name');
        //     $email = $this->request->data('email');

        //     $insert = $this->usermodel->add($name, $email);

        //     if (!$insert) {
        //         echo "Data Not Inserted";
        //         $this->redirect->to('home');
        //     } else {
        //         echo "Data Inserted Successfully";
        //         $this->redirect->to('home');
        //     }
        // }
    }
}
