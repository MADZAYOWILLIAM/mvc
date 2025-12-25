<?php


class Login extends Controller
{
    public $request;
    public $redirect;
    public $loginmodel;

    public function __construct()
    {
        // Initialize request and redirect properties
        $this->request = new Request();
        $this->redirect = new Redirect();
        $this->loginmodel = $this->model('LoginModel');
    }

    public function index()
    {
        // If POST, process login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($this->request->data('username') ?? '');
            $password = $this->request->data('password') ?? '';

            // Validate input
            if (!$this->loginmodel->validateInput($username, $password)) {
                $_SESSION['flash'] = ['type' => 'error', 'message' => 'Please enter both username and password.'];
                $this->view('login');
                return;
            }

            // Authenticate user
            $result = $this->loginmodel->authenticate($username, $password);

            // Debug logging
            error_log("Login attempt for user: $username");
            error_log("Auth result: " . print_r($result, true));

            if (is_array($result) && $result['ok'] === true) {
                // Set session variables for logged-in user
                $_SESSION['user_id'] = $result['user']['id'];
                $_SESSION['username'] = $result['user']['username'];
                $_SESSION['logged_in'] = true;

                $_SESSION['flash'] = ['type' => 'success', 'message' => 'Login successful!'];

                // Redirect to home page - this should work now
                Redirect::to('home');
            } else {
                // Login failed
                $reason = isset($result['reason']) ? $result['reason'] : 'unknown';
                $msg = $reason === 'user_not_found'
                    ? 'Username not found.'
                    : 'Invalid password.';

                $_SESSION['flash'] = ['type' => 'error', 'message' => $msg];
                $this->view('login');
                return;
            }
        }

        // GET: show the login view
        $this->view('login');
    }







    // Redirect to a home page or dashboard after successful login
    // public function redirectToHome()
    // {
    //     // Assuming you have a method to redirect to the home page
    //     $this->redirect->to('home');
    // }


    // Redirect to an error page if login fails
    public function redirectToError()
    {
        // Assuming you have a method to redirect to an error page
        $this->redirect->to('404');
    }
}
