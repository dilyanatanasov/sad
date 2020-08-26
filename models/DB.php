<?php

/**
 * Class DB
 */
class DB {
    /**
     * @var db main instance of db connection
     */
    protected $db;

    public function setDb($args){
        $this->db = new PDO("mysql:host=$args->domain;dbname=$args->dbName", $args->username, $args->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}