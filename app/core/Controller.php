<?php



class Controller
{


    //Load View
    public function view($view, $data = [])
    {
        if (is_array($data)) {
            extract($data);
        }
        $filename = "app/views/" . $view . ".php";
        if (file_exists($filename)) {
            require_once $filename;
        } else {
            die("View does not exist.");
        }
    }


    //Load  Model
    public function model($model)
    {
        // Normalize model name: accept 'User', 'user', 'UserModel' or 'usermodel'
        $model = trim($model);
        // Ensure Model suffix
        if (stripos($model, 'model') === (strlen($model) - 5)) {
            // already ends with 'Model' (case-insensitive)
            $modelClass = $model;
        } else {
            $modelClass = $model . 'Model';
        }

        // Normalize class name capitalization
        $modelClass = ucfirst($modelClass);
        $filename = "app/models/" . $modelClass . ".php";

        if (!file_exists($filename)) {
            throw new \RuntimeException("Model file not found: $filename. Requested model: '$model'.");
        }

        require_once $filename;

        if (!class_exists($modelClass)) {
            throw new \RuntimeException("Model class '$modelClass' not found in file $filename.");
        }

        return new $modelClass();
    }
}
