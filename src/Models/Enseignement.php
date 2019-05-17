<?php

namespace App\Models;

class Enseignement extends Model {

	protected $id_Enseignement;
	protected $label;
    protected $table="Enseignement";

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

    }
  
   
    
} 
