<?php

namespace App\Models;


class Model {
    static protected $table;

    static function get_by_id($id){
        $db = Database::get_instance();
        $class = get_called_class();
    	$table = $class::$table;
        $result = $db->get_dbh()->prepare('SELECT * from '.$table.' WHERE id_'.$table.' = '.$id);
        $result->execute();
        $instance = $result->fetchObject($class);
        return $instance;
    }

    static function get_all(){
        $db = Database::get_instance();
        $class = get_called_class();
        $table = $class::$table;
        $result = $db->get_dbh()->prepare('SELECT * from '.$table);
        $result->execute();
        $list = $result->fetchAll(PDO::FETCH_OBJECT,$class);
        return $list;
    }

  
  
   
    
} 
