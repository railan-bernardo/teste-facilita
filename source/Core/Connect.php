<?php


namespace Source\Core;

use \PDO;
use \PDOException;
class Connect
{
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    public static function getInstance(): ?\PDO
    {
        if(empty(self::$instance)){
            try {
                self::$instance = new PDO(
                    "mysql:host=" . CONF_DB_HOST . ";dbname=" . CONF_DB_NAME,
                    CONF_DB_USER,
                    CONF_DB_PASSWD,
                    self::OPTIONS
                );
            }catch (PDOException $exception){
                die("<h1>Opsss problemas</h1>");
            }
        }

        return self::$instance;
    }

    final private function __construct()
    {
    }
}