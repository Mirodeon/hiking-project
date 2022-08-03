<?php
class delHike extends Dbconnect
{
    private $hikeId;

    public function __construct($hikeId)
    {
        $this->hikeId = $hikeId;
    }
    public function submitDelHike()
    {
        session_start();
        if ($this->emptyInput() == false) {
            header("location: 404");
            $_SESSION['error'] = "No hike selected";
            exit();
        }
        $db = $this->connect();
        $check = $db->prepare('SELECT * FROM hikes WHERE id=:idHike');
        $check->bindParam(":idHike", $this->hikeId);
        $check->execute();
        if ($check->rowCount() > 0) {
            $del = $db->prepare('DELETE FROM hikes WHERE id=:idHike');
            $del->bindParam(":idHike", $this->hikeId);
            $del->execute();
            header("location: myHikes"); 
        } else {
            $_SESSION['error'] = "No matching hike found";
            header("location: 404");
        }
    }
    private function emptyInput()
    {
        $result = null;
        if (empty($this->hikeId)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
