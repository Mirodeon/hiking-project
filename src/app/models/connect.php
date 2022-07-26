<?php
class Dbconnect
{
    protected function connect()
    {
        try {
            $db = new MyPDO();
            echo '<span class="tag is-success is-light">Connected to db !</span>';
            return $db;
        } catch (Exception $e) {
            die('<span class="tag is-danger is-light">Error : </span>' . $e->getMessage());
        }
    }
}
