<?php

class Dto
{
    // Description du Modele
    
    public $dtoDescription;

    // Propriétés

    public int $id;

    // Constructeur

    function __construct(int $id)
    {
        $this->id = $id;
    }
}
?>