<?php

class SignUp extends Controller
{
    protected $request;
    protected $redirect;
    protected $signmodel;

    public function __construct()
    {
        $this->request = new Request();
        $this->redirect = new Redirect();
        // Use the SignModel (existing model) which implements register/login
        $this->signmodel = $this->model('SignModel');
    }

    public function index()
    {
        // If POST, process registration
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Populate request data container for compatibility
            $this->request->data = $_POST;

            $username = trim($this->request->data('username') ?? '');
            $email = trim($this->request->data('email') ?? '') ?: null;
            $password = $this->request->data('password') ?? '';
            $confirm = $this->request->data('confirm_password') ?? '';

            // Basic validation
            if (empty($username) || empty($password) || empty($confirm)) {
                $_SESSION['flash'] = ['type' => 'error', 'message' => 'Please fill all required fields.'];
                // re-render the sign_up view
                $this->view('sign_up');
                return;
            }
            //Password Matching
            if ($password !== $confirm) {
                $_SESSION['flash'] = ['type' => 'error', 'message' => 'Passwords do not match.'];
                $this->view('sign_up');
                return;
            }

            // Call register on the model
            $result = $this->signmodel->register($username, $password, $email);

            if (is_array($result) && array_key_exists('ok', $result)) {
                if ($result['ok'] === true) {
                    $_SESSION['flash'] = ['type' => 'success', 'message' => 'Account created. Please log in.'];
                    echo "Account Successfully Created";
                    // Redirect to login page
                    $this->redirect->to('login');
                    return;
                } else {
                    $reason = isset($result['reason']) ? $result['reason'] : 'unknown';
                    $msg = $reason === 'exists' ? 'Username already taken.' : 'Could not create account. Try again later.';
                    $_SESSION['flash'] = ['type' => 'error', 'message' => $msg];
                    $this->view('sign_up');
                    return;
                }
            }

            // Fallback error
            $_SESSION['flash'] = ['type' => 'error', 'message' => 'Unexpected error.'];
            $this->view('sign_up');
            return;
        }

        // GET: show the sign_up view
        $this->view('sign_up');
    }
}
