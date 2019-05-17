<?php


namespace Models;


class Demande extends Model
{
    protected $id_Demande;
    protected $description;
    protected $etat;
    static protected $table="Demande";
    protected $id_Etudiant;
    protected $id_Professeur;
    protected $id_Intervenant;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
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
    public function getIdProfesseur()
    {
        return $this->id_Professeur;
    }

    /**
     * @param mixed $id_Professeur
     */
    public function setIdProfesseur($id_Professeur)
    {
        $this->id_Professeur = $id_Professeur;
    }

    /**
     * @return mixed
     */
    public function getIdIntervenant()
    {
        return $this->id_Intervenant;
    }

    /**
     * @param mixed $id_Intervenant
     */
    public function setIdIntervenant($id_Intervenant)
    {
        $this->id_Intervenant = $id_Intervenant;
    }
}