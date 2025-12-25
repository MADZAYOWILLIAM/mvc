<?php


class Program extends Controller
{

    public $programmodel;
    public  $redirect;
    public ?Request $request;

    public function __construct(?Request $request = null)
    {
        $this->programmodel = $this->model('ProgramModel');
        $this->request = $request !== null ? $request : new Request();
        $this->redirect = new Redirect();
    }
    public function index()
    {
        // simple demo: load the home view if available
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->request->data = $_POST;
            $name = trim($this->request->data('full_name') ?? '');
            $email = trim($this->request->data('email') ?? '');
            $phone = trim($this->request->data('phone') ?? '');
            $program = trim($this->request->data('programs') ?? '');
            $newsletter = $this->request->data('newsletter') ? 1 : 0;

            $data = [
                'full_name' => $name,
                'email' => $email,
                'phone' => $phone,
                'program' => $program,
                'newsletter' => $newsletter
            ];

            $this->programmodel->addProgramApplication($data);
        }
        $this->view('programs');
    }
}
