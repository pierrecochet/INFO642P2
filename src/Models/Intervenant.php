<?php


namespace App\Models;


class Intervenant extends Model
{
    use Login;
    protected $id_Intervenant;
    protected $identifiant;
    protected $password;
    protected $nom;
    protected $prenom;
    protected $mail;
    static protected $table="Intervenant";
    protected $id_Domaine;

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

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
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
}