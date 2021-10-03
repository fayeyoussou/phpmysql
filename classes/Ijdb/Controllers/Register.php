<?php
namespace Ijdb\Controllers;
use \youtech\DatabaseTable;
class Register {
    private $authorsTable;
    public function __construct (DatabaseTable $authorsTable)
    {
        $this->authorsTable = $authorsTable;
    }
    public function registrationForm()
    {
        return [
            'template' => 'register.html.php',
            'title' => 'Register An Account'
        ];
    }
    public function success() {
        return [
            'template' => 'registersuccess.html.php',
            'title' => 'Registration Successfull'
        ];
    }
    public function registerUser () {
        $author = $_POST['author'];
        $this->authorsTable->save($author);
        header('location : /joke/public/author/success');
    }

}