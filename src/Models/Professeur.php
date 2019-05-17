<?php


namespace Models;


class Professeur extends Model{

    protected $id_Professeur;
    protected $identifiant;
    protected $password;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $id_Enseignement;
    static protected $table="Professeur";

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
     * @return mixed
     */
    public function getIdEnseignement()
    {
        return $this->id_Enseignement;
    }

    /**
     * @param mixed $id_Enseignement
     */
    public function setIdEnseignement($id_Enseignement)
    {
        $this->id_Enseignement = $id_Enseignement;
    }
}