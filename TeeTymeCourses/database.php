<?php
    class Database{
        public static function prepare($sql, $values) {
            $pdo = new PDO("mysql:host=localhost;dbname=artaylo2", "artaylo2", "381714");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute($values);
            return $query;
        }
    }
?> 