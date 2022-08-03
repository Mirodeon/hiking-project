<?php
class editProfileCheck extends editProfileDb
{
    private $firstname;
    private $lastname;
    private $login;
    private $email;
    private $password;
    private $newPassword;

    public function __construct($firstname, $lastname, $login, $email, $password, $newPassword)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
        $this->newPassword = $newPassword;
    }

    public function SubmitEditUser()
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
        if ($this->checkLogin() == false && $this->login != $_SESSION['user']['login']) {
            header("location: register");
            $_SESSION['error'] = "Login is already taken.";
            exit();
        }
        if ($this->checkMail() == false && $this->email != $_SESSION['user']['email']) {
            header("location: register");
            $_SESSION['error'] = "Email is already taken.";
            exit();
        }
        $this->editUser($this->firstname, $this->lastname, $this->login, $this->email, $this->password, $this->newPassword);
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
    private function checkLogin()
    {
        $result = null;
        if (!$this->checkLoginUser($this->login)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function checkMail()
    {
        $result = null;
        if (!$this->checkMailUser($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
