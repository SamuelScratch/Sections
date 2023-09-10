<?php

// Create a DtoPublication class based on Dto class and on the DtoUser class. The class will represent the publication table in the database. The class will have the following fields: id, content, user_id.
include_once "./model/Dto.php";

class DtoPublication extends Dto
{
    // Info table db

    public static string $tableName = "publication";

    // Propriétés

    public int $id;
    public string $content;
    public int $user_id;

    // Constructeur

    function __construct(int $id, string $content, int $user_id) {
        $this->id = $id;
        $this->content = $content;
        $this->user_id = $user_id;
        
        $this->dtoDescription = [
            "dbTable" => "publication",
            "id" => $this->id,
            "content" => $this->content,
            "user_id" => $this->user_id
        ];
    }
}

?>