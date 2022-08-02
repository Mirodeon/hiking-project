<?php
class editHikeCheck extends editHikeDb
{
    private $name;
    private $difficulty;
    private $update;
    private $distance;
    private $durationH;
    private $durationM;
    private $elevation;
    private $description;
    private $userId;
    private $hikeId;

    public function __construct($name, $difficulty, $update, $distance, $durationH, $durationM, $elevation, $description, $userId, $hikeId)
    {
        $this->name = $name;
        $this->difficulty = $difficulty;
        $this->update = $update;
        $this->distance = $distance;
        $this->durationH = $durationH;
        $this->durationM = $durationM;
        $this->elevation = $elevation;
        $this->description = $description;
        $this->userId = $userId;
        $this->hikeId = $hikeId;
    }
    public function submitEditHike()
    {
        session_start();
        $_SESSION["editHike"]["name"] = $this->name;
        $_SESSION["editHike"]["difficulty"] = $this->difficulty;
        $_SESSION["editHike"]["distance"] = $this->distance;
        $_SESSION["editHike"]["durationH"] = $this->durationH;
        $_SESSION["editHike"]["durationM"] = $this->durationM;
        $_SESSION["editHike"]["elevation"] = $this->elevation;
        $_SESSION["editHike"]["description"] = $this->description;
        $_SESSION["editHike"]["userId"] = $this->userId;
        $_SESSION["editHike"]["hikeId"] = $this->hikeId;
        if ($this->emptyInput() == false) {
            header("location: addHike");
            $_SESSION['error'] = "Form incomplete";
            exit();
        }
        if ($this->sessionCheck() == false) {
            header("location: addHike");
            $_SESSION['error'] = "User not logged in";
            exit();
        }
        if ($this->distanceCheck($this->distance) == false) {
            header("location: addHike");
            $_SESSION['error'] = "Invalid distance, check it ! => " . $this->distance;
            exit();
        }
        if ($this->hoursCheck($this->durationH) == false) {
            header("location: addHike");
            $_SESSION['error'] = "Invalid hours, check it ! => " . $this->durationH;
            exit();
        }
        if ($this->minuteCheck($this->durationM) == false) {
            header("location: addHike");
            $_SESSION['error'] = "Invalid minutes, check it ! => " . $this->durationM;
            exit();
        }
        if ($this->elevationCheck($this->elevation) == false) {
            header("location: addHike");
            $_SESSION['error'] = "Do you really want to climb this ? => " . $this->elevation;
            exit();
        }
        unset($_SESSION["editHike"]);
        $this->editHike($this->name, $this->difficulty, $this->update, $this->distance, $this->durationH, $this->durationM, $this->elevation, $this->description, $this->userId, $this->hikeId);
    }
    private function emptyInput()
    {
        $result = null;
        if (
            empty($this->name) || empty($this->update) || empty($this->distance) ||
            empty($this->elevation) || empty($this->description) || empty($this->difficulty) ||
            empty($this->hikeId) || (empty($this->durationH) && empty($this->durationM))
        ) {
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
    private function distanceCheck($number)
    {
        $result = null;
        if (!preg_match("/^\d{1}\d{0,2}((,|\.)\d)?$/", $number)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function hoursCheck($numberH)
    {
        $result = null;
        if (!preg_match("/^[0-9]{1,3}$/", $numberH) && !empty($numberH)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function minuteCheck($numberM)
    {
        $result = null;
        if (!preg_match("/^[0-5]{0,1}[0-9]{1}$/", $numberM) && !empty($numberM)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function elevationCheck($number)
    {
        $result = null;
        if (!preg_match("/^[0-9]{1,4}$/", $number)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
