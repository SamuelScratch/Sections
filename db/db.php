<?php

class SqliteManager { // Classe permettant de faire des opérations sur la base de donnée sqlite

    // Propriétés

    private PDO $db;

    // Constructeur

    function __construct($dbName)
    {
        $this->db = new PDO('sqlite:' . './db/' . $dbName . '.db');
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
    }

    // Méthodes
    
    public function Execute($request)
    {
        $statement = $this->db->prepare($request);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
?>