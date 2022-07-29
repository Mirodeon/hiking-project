<?php
class addImgDb extends Dbconnect
{
    protected function setImg($urlImg, $idHike)
    {
        session_start();
        $db = $this->connect();
        $q = $db->prepare("UPDATE `hikes` SET `url`=:urlImg WHERE `id`=:idHike");
        $q->bindParam(":urlImg", $urlImg);
        $q->bindParam(":idHike", $idHike);
        $q->execute();
        if (!$q->execute()) {
            $q = null;
            header("location: addHike");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
    }
}