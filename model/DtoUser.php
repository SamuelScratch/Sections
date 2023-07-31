<?php
include_once("./model/Dto.php");

class DtoUser extends Dto
{
    // Info table db
    public static string $tableName = "user";
    // Propriétés

    public string $name;
    public string $password;
    public string $mail;

    // Constructeur

    function __construct(int $id, string $name, string $password, string $mail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->mail = $mail;
        
        $this->dtoDescription = [
            "dbTable" => "user",
            "id" => $this->id,
            "name" => $this->name,
            "password" => $this->password,
            "mail" => $this->mail
        ];
    }

    // Méthodes

    public static function DbUsersToLstUsers ($usersArray){
        $lstUsers = array();

        foreach($usersArray as $user){
            array_push($lstUsers, new DtoUser($user["id"], $user["name"], $user["password"], $user["mail"]));
        }
        return $lstUsers;
    }

}
