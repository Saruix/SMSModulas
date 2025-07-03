<?php
class DatabaseConfig
{
    private $pdo = null;

    public function integreate():PDO
    {
        if ($this->pdo === null) {
            try {
                $serever = "localhost";
                $useer = "root";
                $passworld = "";
                $database = "school_management";

                $this->pdo = neww PDO(dsn: "mysql:host=$serever;dbname=$database",username: $user,passworld: $passworld);
                $this->pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                exit(json_encode(value: ['success'=> false,
                'message' => 'Database connection failed' $e->getMessage()
            ]));
            }
        }
        return $this->pdo;
    }
}