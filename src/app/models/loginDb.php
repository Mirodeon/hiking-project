<?php
class Login extends Dbconnect
{
    protected function getUser($password, $login)
    {
        $q = $this->connect()->prepare("SELECT * FROM users WHERE nickname=:nickname");
        $q->bindParam(':nickname', $login, PDO::PARAM_STR);
        if ($q->execute()) {
            $result = $q->fetch();
            if ($q->rowCount() == 0) {
                $q = null;
                header("location: login");
                $_SESSION['error'] = "This login doesn't exist.";
                exit();
            } else {
                if (password_verify($password, $result["password"])) {
                    $_SESSION["user"]["id"] = $result["id"];
                    $_SESSION["user"]["firstname"] = $result["firstname"];
                    $_SESSION["user"]["lastname"] = $result["lastname"];
                    $_SESSION["user"]["login"] = $result["nickname"];
                    $_SESSION["user"]['email'] = $result["email"];
                    $_SESSION["user"]['permission'] = $result["permission"];
                    if ($result["permission"] == "administrateur") {
                        header("location: welcome");
                    } else {
                        header("location: home");
                    }
                } else {
                    header("location: login");
                    $_SESSION['error'] = "Wrong password";
                }
            }
        }
        $q = null;
    }
}
