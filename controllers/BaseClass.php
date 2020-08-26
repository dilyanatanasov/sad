<?php
require "models/DB.php";
require "models/DbStructure.php";

class BaseClass extends DB {
    public $dbInstance;

    public function __construct()
    {
        $dbStructure = new DbStruct();
        $dbStructure->domain = "localhost";
        $dbStructure->username = "root";
        $dbStructure->password = "";
        $dbStructure->dbName = "iktmi";

        if (!$this->dbInstance) {
            $this->setDb($dbStructure);
            $this->dbInstance = $this->db;
        }
    }
}