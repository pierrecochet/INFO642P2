<?php
/**
 * Created by PhpStorm.
 * User: evand
 * Date: 17-May-19
 * Time: 14:02
 */

namespace App\Models;

use PDO;

class Database
{
    static private $instance;
    private $dbh;
    private $host = 'localhost';
    private $dbname = 'intervenants_db';
    private $username = 'root';
    private $password = 'root';

    private function __construct(){
        try {
            $this->dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    static function get_instance(){
        if(self::$instance){
            return self::$instance;
        }
        self::$instance = new Database();
        return self::$instance;
    }

    function get_dbh(){
        return $this->dbh;
    }
}