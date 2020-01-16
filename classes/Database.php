<?php

class Database
{
    public static $host = "127.0.0.1";
    public static $dbname = "MVC";
    public static $username = "root";
    public static $password = "";

    private static function connect()
    {
        $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array())
    {
        $statment = self::connect()->prepare($query);
        $statment->execute($params);

        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statment->fetchAll();
            return $data;
        }
    }

    public function save()
    {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];

        // mysql query to insert data
        $pdoQuery = "INSERT INTO `users`(`name`, `lastname`) VALUES (:name, :lastname)";
        $statment = self::connect()->prepare($pdoQuery);
        $statment->execute(array(":name" => $name, ":lastname" => $lastname));
    }
}
