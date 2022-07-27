<?php
class SignupCheck extends Signup
{
    private $firstname;
    private $lastname;
    private $login;
    private $email;
    private $password;
    private $permission;

    public function __construct($firstname, $lastname, $login, $email, $password, $permission)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
        $this->permission = $permission;
    }

    public function signupUser()
    {
        session_start();
        if ($this->emptyInput() == false) {
            header("location: register");
            $_SESSION['error'] = "Form incomplete";
            exit();
        }
        if ($this->invalidLogin() == false) {
            header("location: register");
            $_SESSION['error'] = "Invalid login";
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: register");
            $_SESSION['error'] = "Invalid email";
            exit();
        }
        /*if ($this->passwordMatch() == false) {
            header("location: register");
            $_SESSION['error'] = "Password doesn't match";
            exit();
        }*/ //confirm password if double input password.
        if ($this->check() == false) {
            header("location: register");
            $_SESSION['error'] = "Login or Email is already taken.";
            exit();
        }
        $this->setUser($this->firstname, $this->lastname, $this->login, $this->email, $this->password, $this->permission);
    }

    private function emptyInput()
    {
        $result = null;
        if (
            empty($this->firstname) || empty($this->lastname) || empty($this->login) ||
            empty($this->email) || empty($this->password)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidLogin()
    {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->login)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result = null;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    /*private function passwordMatch()
    {
        $result = null;
        if ($this->password !== $this->cpassword) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }*/ //confirm password if double input password.

    private function check()
    {
        $result = null;
        if (!$this->checkUser($this->login, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
