<?php

namespace Ijdb\Controllers;

class Login
{
    private $authentication;

    public function __construct(\Youtech\Authentication
    $authentication)
    {
        $this->authentication = $authentication;
    }

    public function error()
    {
        return ['template' => 'loginerror.html.php', 'title'
        => 'You are not logged in'];
    }
    public function loginForm()
    {
        return [
            'template' => 'login.html.php',
            'title' => 'Log In'
        ];
    }
    public function processLogin()
    {
        if ($this->authentication->login(
            $_POST['email'],
            $_POST['password']
        )) {
            header('location: /joke/public/login/success');
        } else {
            return [
                'template' => 'login.html.php',
                'title' => 'Log In',
                'variables' => [
                    'error' => 'Invalid username/password.'
                ]
            ];
        }
    }
    public function logout()
    {
        $_POST = [];
        unset($_POST);
        $_SESSION = [];
        unset($_SESSION);
        return [
            'template' => 'logout.html.php',
            'title' => 'You have been logged out'
        ];
    }


    public function success()
    {
        return [
            'template' => 'loginsuccess.html.php',
            'title' => 'Login Successful'
        ];
    }
}
