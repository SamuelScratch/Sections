<?php
include_once "./model/DtoUser.php";
include_once "./model/DtoProfile.php";
include_once "./lib/LibSections.php";

session_start();

if (!isset($_SESSION["id"])) {
    header('Location: /login', true, 303);
}

$id = $_SESSION["id"];

$user = getUser($id);
$profile = getProfile($id);

switch ($_SERVER['REQUEST_METHOD']) {

    case "GET":
        include_once "./view/ViewProfileEdit.php";
        break;
    case "POST":
        if (isset($_POST["description"]) && isset($_FILES["image"])) {
            $description = $_POST["description"];
            if ($_FILES["image"] != null && $_FILES["image"]["size"] > 0) {
                $image = $_FILES["image"];
                var_dump($image);
                $target_dir = "/img/";
                $target_file = $target_dir . random_int(0, 200000) . basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                /* VERIFICATION DE L'IMAGE */
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    echo "Seuls les fichier .JPG, .JPEG & .PNG sont autorisés !";
                    die();
                }
                if ($image["size"] > 8000000 || $image["size"] < 1) {
                    echo "Le poids maximum de l'image est de 8 Mo";
                    die();
                }
                $imageBlob = file_get_contents($image["tmp_name"]);
                $db = new SqliteManager("sections");
                $db->Execute("REPLACE INTO " . DtoProfile::$tableName . " (id, description, image, typeImage, user_id) VALUES (:id, :description, :image, :typeImage, :user_id)", array("id" => $profile->id, "description" => $description, "image" => $imageBlob, "typeImage" => $imageFileType, "user_id" => $profile->user_id));
            }
            else {
                $db = new SqliteManager("sections");
                $db->Execute("UPDATE " . DtoProfile::$tableName . " SET description = :description WHERE user_id = :user_id", array("description" => $description, "user_id" => $profile->user_id));
            }
            header('Location: /profile', true, 303);
        }
}
