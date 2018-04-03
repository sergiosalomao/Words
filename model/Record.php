<?php
class Record {
    private $idrecords;
    private $jogador;
    private $totalpalavras;
    private $respondidas;
    private $corretas;
    private $erradas;
    private $nivel;
    private $exp;
    private $tempo;



    /**
     * Get the value of idrecords
     */ 
    public function getIdrecords()
    {
        return $this->idrecords;
    }

    /**
     * Set the value of idrecords
     *
     * @return  self
     */ 
    public function setIdrecords($idrecords)
    {
        $this->idrecords = $idrecords;

        return $this;
    }

    /**
     * Get the value of jogador
     */ 
    public function getJogador()
    {
        return $this->jogador;
    }

    /**
     * Set the value of jogador
     *
     * @return  self
     */ 
    public function setJogador($jogador)
    {
        $this->jogador = $jogador;

        return $this;
    }

    /**
     * Get the value of totalpalavras
     */ 
    public function getTotalpalavras()
    {
        return $this->totalpalavras;
    }

    /**
     * Set the value of totalpalavras
     *
     * @return  self
     */ 
    public function setTotalpalavras($totalpalavras)
    {
        $this->totalpalavras = $totalpalavras;

        return $this;
    }

    /**
     * Get the value of respondidas
     */ 
    public function getRespondidas()
    {
        return $this->respondidas;
    }

    /**
     * Set the value of respondidas
     *
     * @return  self
     */ 
    public function setRespondidas($respondidas)
    {
        $this->respondidas = $respondidas;

        return $this;
    }

    /**
     * Get the value of corretas
     */ 
    public function getCorretas()
    {
        return $this->corretas;
    }

    /**
     * Set the value of corretas
     *
     * @return  self
     */ 
    public function setCorretas($corretas)
    {
        $this->corretas = $corretas;

        return $this;
    }

    /**
     * Get the value of erradas
     */ 
    public function getErradas()
    {
        return $this->erradas;
    }

    /**
     * Set the value of erradas
     *
     * @return  self
     */ 
    public function setErradas($erradas)
    {
        $this->erradas = $erradas;

        return $this;
    }

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get the value of exp
     */ 
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set the value of exp
     *
     * @return  self
     */ 
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get the value of tempo
     */ 
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set the value of tempo
     *
     * @return  self
     */ 
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;

        return $this;
    }
}

?>