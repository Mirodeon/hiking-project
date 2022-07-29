<?php
class addHikeDb extends Dbconnect
{
    protected function setHike($name, $date, $distance, $durationH, $durationM, $elevation, $description, $userId)
    {
        session_start();
        $duration = $durationH . "h" . $durationM;
        $difficulty = "";
        $url = "";
        $db = $this->connect();
        $q = $db->prepare("INSERT INTO `hikes`(`name`, `difficulty`, `creation_date`, `distance`, `duration`, `elevation`, `description`, `url`, `user_id`) 
        VALUES (:name, :difficulty, :creation_date, :distance, :duration, :elevation, :description, :url, :user_id)");
        $q->bindParam(":name", $name);
        $q->bindParam(":difficulty", $difficulty);
        $q->bindParam(":creation_date", $date);
        $q->bindParam(":distance", $distance);
        $q->bindParam(":duration", $duration);
        $q->bindParam(':elevation', $elevation);
        $q->bindParam(":description", $description);
        $q->bindParam(":url", $url);
        $q->bindParam(":user_id", $userId);
        if (!$q->execute()) {
            $q = null;
            header("location: addHike");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
        $id = $db->lastInsertId();
        $_SESSION["hike"] = [
            "id" => $id
        ];
    }
}
