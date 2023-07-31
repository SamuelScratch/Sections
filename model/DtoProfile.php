<?php
include_once("./model/Dto.php");

class DtoProfile extends Dto
{
    // Info table db
    public static string $tableName = "profile";
    // Propriétés

    public  $description;
    public $image;
    public $typeImage;
    public string $user_id;

    // Constructeur

    function __construct(int $id, $description, $image, $typeImage, string $user_id)
    {
        $this->id = $id;
        $this->description = $description;
        $this->image = $image;
        $this->typeImage = $typeImage;
        $this->user_id = $user_id;
        
        $this->dtoDescription = [
            "dbTable" => "profile",
            "id" => $this->id,
            "description" => $this->description,
            "image" => $this->image,
            "typeImage" => $this->typeImage,
            "user_id" => $this->user_id
        ];
    }

}
