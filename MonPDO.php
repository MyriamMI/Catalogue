<?php

class MonPDO
{
    // Attribut statique qui stocke l'unique instance de PDO
    private static ?PDO $pdo = null;

    /**
     * Retourne une instance de PDO connectée à la base "animals"
     */
    public static function getPDO(): PDO
    {
        if (self::$pdo === null) {
            // ⚠ Si ta BD s'appelle autrement, change "animals"
            $dsn = 'mysql:host=localhost;
            dbname=catalogue;
            charset=utf8';
            $user = 'root';
            $password = '';
            self::$pdo = new PDO($dsn, $user, $password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }
}
