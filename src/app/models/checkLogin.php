<?php
class LoginContr extends Login
{
    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: login");
            $_SESSION['error'] = "Empty input";
            exit();
        }
        $this->getUser($this->password, $this->login);
    }

    private function emptyInput()
    {
        $result = null;
        if (empty($this->login) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
