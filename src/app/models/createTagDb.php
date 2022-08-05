<?php
class createTag extends Dbconnect
{
    private $hikeId;
    private $tag;

    public function __construct($hikeId, $tag)
    {
        $this->hikeId = $hikeId;
        $this->tag = $tag;
    }
    public function submitTag()
    {
        session_start();
        if ($this->emptyInput() == false) {
            header("location: singleHike");
            $_SESSION['error'] = "No hike or tag selected";
            exit();
        }
        if ($this->invalidTag() == false) {
            header("location: singleHike");
            $_SESSION['error'] = "Invalid tag";
            exit();
        }
        $q = $this->connect()->prepare("SELECT * FROM tags WHERE name_tag=:tag");
        $q->bindParam(':tag', $this->tag);
        if (!$q->execute()) {
            $q = null;
            header("location: singleHike");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
        if ($q->execute()) {
            if ($q->rowCount() == 0) {
                $db = $this->connect();
                $createTag = $db->prepare("INSERT INTO tags (name_tag) VALUES (:tag)");
                $createTag->bindParam(':tag', $this->tag);
                if (!$createTag->execute()) {
                    $createTag = null;
                    header("location: singleHike");
                    $_SESSION['error'] = "Something went wrong!";
                    exit();
                }
                $tagId = $db->lastInsertId();
            } else {
                $q = null;
                header("location: singleHike");
                $_SESSION['error'] = "This tag exist already.";
                exit();
            }
        }
        $q = null;
        $addTag = $this->connect()->prepare("INSERT INTO hikes_tags (id_tag, id_hike) 
        VALUES (:tag, :hike)");
        $addTag->bindParam(":hike", $this->hikeId);
        $addTag->bindParam(":tag", $tagId);
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
        if (empty($this->hikeId) || empty($this->tag)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidTag()
    {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->tag)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
