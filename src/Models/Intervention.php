<?php


namespace App\Models;


class Intervention extends Model
{
    protected $id_Etudiant;
    protected $id_Demande;
    protected $date_debut;
    protected $duree;
    protected $type;
    static protected $table="Intervention";

    /**
     * @return mixed
     */
    public function getIdEtudiant()
    {
        return $this->id_Etudiant;
    }

    /**
     * @param mixed $id_Etudiant
     */
    public function setIdEtudiant($id_Etudiant)
    {
        $this->id_Etudiant = $id_Etudiant;
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
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
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
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }
}