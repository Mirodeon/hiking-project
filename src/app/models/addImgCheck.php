<?php
class addImgCheck extends addImgDb
{
    private $urlImg;
    private $idHike;
    private $userId;

    public function __construct($urlImg, $idHike, $userId)
    {
        $this->urlImg = $urlImg;
        $this->idHike = $idHike;
        $this->userId = $userId;
    }

    public function submitImg()
    {
        session_start();
        if ($this->emptyInput() == false) {
            header("location: imgForm");
            $_SESSION['error'] = "Url incomplete";
            exit();
        }
        if ($this->sessionCheck() == false) {
            header("location: imgForm");
            $_SESSION['error'] = "User not logged in";
            exit();
        }
        if ($this->invalidUrl() == false) {
            header("location: imgForm");
            $_SESSION['error'] = "Invalid URL";
            exit();
        }
        $this->setImg($this->urlImg, $this->idHike);
    }

    private function emptyInput()
    {
        $result = null;
        if (empty($this->urlImg)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function sessionCheck()
    {
        $result = null;
        if (empty($this->userId)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUrl()
    {
        $result = null;
        if (!preg_match("/^(http(s?):)([\/|.|\w|\s|-])*.([.](jpg|gif|png))$/", $this->urlImg)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
