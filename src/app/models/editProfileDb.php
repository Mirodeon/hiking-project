<?php
class editProfileDb extends Dbconnect
{
    protected function editUser($firstname, $lastname, $login, $email, $password, $newPassword)
    {
        $q = $this->connect()->prepare("SELECT * FROM users WHERE id=:idUser");
        $q->bindParam(':idUser', $_SESSION['user']['id']);
        if ($q->execute()) {
            $result = $q->fetch();
            if ($q->rowCount() == 0) {
                $q = null;
                header("location: profile");
                $_SESSION['error'] = "This user doesn't exist.";
                exit();
            } else {
                if (password_verify($password, $result["password"])) {

                    if (!empty($newPassword)) {
                        $password = $newPassword;
                    } 
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                    $e = $this->connect()->prepare("UPDATE `users` SET `firstname`=:firstname, 
                    `lastname`=:lastname, `nickname`=:nickname, `email`=:email, 
                    `password`=:pass
                    WHERE `id`=:idUser");
                    $e->bindParam(":firstname", $firstname);
                    $e->bindParam(":lastname", $lastname);
                    $e->bindParam(":nickname", $login);
                    $e->bindParam(":email", $email);
                    $e->bindParam(':pass', $hashed_password);
                    $e->bindParam(":idUser", $_SESSION['user']['id']);
                    if (!$e->execute()) {
                        $e = null;
                        header("location: register");
                        $_SESSION['error'] = "Something went wrong!";
                        exit();
                    }
                } else {
                    header("location: profile");
                    $_SESSION['error'] = "Wrong password";
                }
            }
        }
        $q = null;
    }
    protected function checkLoginUser($login)
    {
        $q = $this->connect()->prepare("SELECT * FROM users WHERE nickname=:nickname");
        $q->bindParam(":nickname", $login);
        if (!$q->execute()) {
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
    protected function checkMailUser($email)
    {
        $q = $this->connect()->prepare("SELECT * FROM users WHERE email=:email");
        $q->bindParam(":email", $email);
        if (!$q->execute()) {
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
