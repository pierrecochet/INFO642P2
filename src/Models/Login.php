<?php

namespace App\Models;


trait Login {
    public static function check_connexion($id,$pwd) {
        $db = Database::get_instance();
        $class = get_called_class();
        $table = $class::$table;
        $result = $db->get_dbh()->prepare('SELECT * from '.$table.' 
                                                    WHERE identifiant LIKE \''.$id.'\' 
                                                    AND password LIKE \''.$pwd.'\'');
        $result->execute();
        $instance = $result->fetchObject($class);
        return $instance;
    }
}