<?php


namespace App\Models;


class Fichier extends Model
{
    protected $id_Fichier;
    protected $id_Demande;
    protected $path;
    protected $label;
    protected $type;
    static protected $table="Fichier";

    /**
     * @return mixed
     */
    public function getIdFichier()
    {
        return $this->id_Fichier;
    }

    /**
     * @param mixed $id_Fichier
     */
    public function setIdFichier($id_Fichier)
    {
        $this->id_Fichier = $id_Fichier;
    }

    /**
     * @return mixed
     */
    public function getIdDemande()
    {
        return $this->id_Demande;
    }

    /**
     * @param mixed $id_Demande
     */
    public function setIdDemande($id_Demande)
    {
        $this->id_Demande = $id_Demande;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
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
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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