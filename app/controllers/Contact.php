<?php

class Contact extends Controller
{

    public $contactmodel;
    public  $redirect;
    public ?Request $request;

    public function __construct(?Request $request = null)
    {
        $this->contactmodel = $this->model('ContactModel');
        $this->request = $request !== null ? $request : new Request();
        $this->redirect = new Redirect();
    }
    public function index()
    {
        if ($this->request->isPost()) {
            $name = $this->request->data('username');
            $email = $this->request->data('email');
            $message = $this->request->data('message');

            $insert = $this->contactmodel->add($name, $email, $message);

            if (!$insert) {
                echo "Data Not Inserted";
                $this->redirect->to('contact');
            } else {
                $this->thankYou();
                $this->redirect->to('home');
            }
        }

        // On GET, fetch messages and pass to the contact view
        $messages = $this->contactmodel->getAllMessages();
        $this->view('contact', ['messages' => $messages]);
    }


    public function thankYou()
    {
        if (method_exists($this, 'view')) {
            $this->view('thank_you');
            return;
        }
        echo "Thank You for contacting us!";
    }
}
