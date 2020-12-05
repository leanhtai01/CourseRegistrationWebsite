<?php
class Database {
    const SELECTSINGLE = 1;
    const SELECTALL = 2;
    const EXECUTE = 3;

    private $pdo;

    // constructor
    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=course_registration", "leanhtai01", "123");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function queryDB($sql, $mode, $values = array()) {
        $stmt = $this->pdo->prepare($sql);

        foreach ($values as $valueToBind) {
            $stmt->bindValue($valueToBind[0], $valueToBind[1]);
        }

        $stmt->execute();

        if ($mode != Database::SELECTSINGLE && $mode != Database::SELECTALL && $mode != Database::EXECUTE) {
            throw new Exception('Invalid mode');
        }
        else if ($mode == Database::SELECTSINGLE) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        else if ($mode == Database::SELECTALL) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}