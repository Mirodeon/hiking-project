<?php
class addTag extends Dbconnect
{
    private $hikeId;
    private $tagId;

    public function __construct($hikeId, $tagId)
    {
        $this->hikeId = $hikeId;
        $this->tagId = $tagId;
    }
    public function submitTag()
    {
        session_start();
        if ($this->emptyInput() == false) {
            header("location: singleHike");
            $_SESSION['error'] = "No hike or tag selected";
            exit();
        }
        $db = $this->connect();
        $addTag = $db->prepare("INSERT INTO `hikes_tags`(`id_tag`, `id_hike`) 
        VALUES (:tag, :hike)");
        $addTag->bindParam(":hike", $this->hikeId);
        $addTag->bindParam(":tag", $this->tagId);
        if (!$addTag->execute()) {
            $addTag = null;
            header("location: singleHike");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
    }
    private function emptyInput()
    {
        $result = null;
        if (empty($this->hikeId) || empty($this->tagId)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
