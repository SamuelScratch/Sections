<?php

class DtoUser
{
    // Description du Modele
    
    public $dtoDescription;

    // Propriétés

    public int $id;
    public string $name;
    public string $mail;

    // Constructeur

    function __construct(int $id, string $name, string $mail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        
        $this->dtoDescription = [
            "dbTable" => "user",
            "id" => $this->id,
            "name" => $this->name,
            "mail" => $this->mail
        ];
    }

    // Méthodes

    public static function DbUsersToLstUsers ($usersArray){
        $lstUsers = array();

        foreach($usersArray as $user){
            array_push($lstUsers, new DtoUser($user["id"], $user["name"], $user["mail"]));
        }
        return $lstUsers;
    }

}
