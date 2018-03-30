
<?php
class Respondidas {
    
    private $id;
    private $correta;
    private $idPalavraDicionario;
    private $respostaUsuario;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

   
    /**
     * Get the value of correta
     */ 
    public function getCorreta()
    {
        return $this->correta;
    }

    /**
     * Set the value of correta
     *
     * @return  self
     */ 
    public function setCorreta($correta)
    {
        $this->correta = $correta;

        return $this;
    }


    /**
     * Get the value of respostaUsuario
     */ 
    public function getRespostaUsuario()
    {
        return $this->respostaUsuario;
    }

    /**
     * Set the value of respostaUsuario
     *
     * @return  self
     */ 
    public function setRespostaUsuario($respostaUsuario)
    {
        $this->respostaUsuario = $respostaUsuario;

        return $this;
    }

    /**
     * Get the value of idPalavraDicionario
     */ 
    public function getIdPalavraDicionario()
    {
        return $this->idPalavraDicionario;
    }

    /**
     * Set the value of idPalavraDicionario
     *
     * @return  self
     */ 
    public function setIdPalavraDicionario($idPalavraDicionario)
    {
        $this->idPalavraDicionario = $idPalavraDicionario;

        return $this;
    }
}


