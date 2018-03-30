<?php
class Record {
    private $idrecords;
    private $jogador;
    private $char;
    private $word;
    private $CPS;
    private $PPS;

    


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
     * Get the value of char
     */ 
    public function getChar()
    {
        return $this->char;
    }

    /**
     * Set the value of char
     *
     * @return  self
     */ 
    public function setChar($char)
    {
        $this->char = $char;

        return $this;
    }

    /**
     * Get the value of word
     */ 
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set the value of word
     *
     * @return  self
     */ 
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get the value of CPS
     */ 
    public function getCPS()
    {
        return $this->CPS;
    }

    /**
     * Set the value of CPS
     *
     * @return  self
     */ 
    public function setCPS($CPS)
    {
        $this->CPS = $CPS;

        return $this;
    }

    /**
     * Get the value of PPS
     */ 
    public function getPPS()
    {
        return $this->PPS;
    }

    /**
     * Set the value of PPS
     *
     * @return  self
     */ 
    public function setPPS($PPS)
    {
        $this->PPS = $PPS;

        return $this;
    }

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
}

?>