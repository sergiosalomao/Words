<?php
class Dicionario {

private $id;
private $palavraIngles;
private $palavraPortugues;



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
 * Get the value of palavraIngles
 */ 
public function getPalavraIngles()
{
return $this->palavraIngles;
}

/**
 * Set the value of palavraIngles
 *
 * @return  self
 */ 
public function setPalavraIngles($palavraIngles)
{
$this->palavraIngles = $palavraIngles;

return $this;
}

/**
 * Get the value of palavraPortugues
 */ 
public function getPalavraPortugues()
{
return $this->palavraPortugues;
}

/**
 * Set the value of palavraPortugues
 *
 * @return  self
 */ 
public function setPalavraPortugues($palavraPortugues)
{
$this->palavraPortugues = $palavraPortugues;

return $this;
}
}