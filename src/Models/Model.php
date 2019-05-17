<?php

namespace App\Models;

use PDO;

class Model {
    private $host = 'localhost';
    private $dbname = 'intervenants_db';
    private $username = 'root';
    private $password = 'root';
    protected $dbh;
    protected $table;

    function __construct(){
    	try {
    		$this->dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
    }

    function get_by_id($id){
    	$table = $this->table;
        $result = $this->dbh->query('SELECT * from '.$table.' WHERE id_'.$table.' = '.$id);
        foreach($result as $row){
            foreach($row as $col=>$value) {
                $this->$col = $value;
//                if($col == "password")
//                    var_dump($value);
            }
        }
        return $this;
    }
  
  
   
    
} 
