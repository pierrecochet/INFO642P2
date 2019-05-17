<?php


namespace Models;


class Domaine extends model
{
    protected $id_Domaine;
    protected $label;
    static protected $table = "Domaine";

    /**
     * @return mixed
     */
    public function getIdDomaine()
    {
        return $this->id_Domaine;
    }

    /**
     * @param mixed $id_Domaine
     */
    public function setIdDomaine($id_Domaine)
    {
        $this->id_Domaine = $id_Domaine;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$table;
    }

    /**
     * @param string $table
     */
    public static function setTable($table)
    {
        self::$table = $table;
    }


}