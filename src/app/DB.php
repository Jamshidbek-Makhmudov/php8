<?php
//singleton patterns:
declare(strict_types = 1);
namespace App;
//namespace src\app;
//
//use PDO;

///**
// * @mixin PDO
// */
class DB
{
    private static ?DB $instance = null;
    private function __construct(public array $config)
    {
        echo "<hr>" . "this from DB" . "<hr>";

    }

    public static function getInstance(array $config):DB

    {
        if(self:: $instance === null){
            self::$instance = new DB($config);
        }
        return self:: $instance;
    }








//    private PDO $pdo;
//
//    public function __construct(array $config)
//    {
//        $defaultOptions = [
//            PDO::ATTR_EMULATE_PREPARES   => false,
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        ];
//
//        try {
//            $this->pdo = new PDO(
//                $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'],
//                $config['user'],
//                $config['pass'],
//                $config['options'] ?? $defaultOptions
//            );
//        } catch (\PDOException $e) {
//            throw new \PDOException($e->getMessage(), (int) $e->getCode());
//        }
//    }
//
//    public function __call(string $name, array $arguments)
//    {
//        return call_user_func_array([$this->pdo, $name], $arguments);
//    }
}
