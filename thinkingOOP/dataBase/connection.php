<?php

class Connection{
    public static function make($config){
//        var_dump($config);
        $pdo = new PDO ( "{$config['connection']};dbname={$config['database']}", $config['username'],$config['password'] );
        return $pdo;
    }
}
