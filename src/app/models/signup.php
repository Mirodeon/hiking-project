
<?php
class Signup extends Dbconnect
{
    protected function setUser($firstname, $lastname, $login, $email, $password, $permission)
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        echo " .!. " . $hashed_password . " .!. ";
        $q = $this->connect()->prepare("INSERT INTO `users`(`firstname`, `lastname`, `nickname`, `email`, `password`, `permission`) 
        VALUES (:firstname, :lastname, :nickname, :email, :pass, :permission)");
        $q->bindParam(":firstname", $firstname);
        $q->bindParam(":lastname", $lastname);
        $q->bindParam(":nickname", $login);
        $q->bindParam(":email", $email);
        $q->bindParam(':pass', $hashed_password);
        $q->bindParam(":permission", $permission);
        if (!$q->execute()) {
            $q = null;
            header("location: register");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
    }
    protected function checkUser($login, $email)
    {
        $q = $this->connect()->prepare("SELECT * FROM users WHERE nickname = ? OR email = ?;");
        if (!$q->execute(array($login, $email))) {
            $q = null;
            header("location: register");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
        $resultcheck = null;
        if ($q->rowCount() > 0) {
            $resultcheck = false;
        } else {
            $resultcheck = true;
        }
        return $resultcheck;
    }
}
