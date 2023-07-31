<?php
include_once "./model/DtoUser.php";

// Message d'alerte
$msgErr = "";
$msgSucc = "";

switch ($_SERVER['REQUEST_METHOD']){
    
    case "GET":
        include_once "./view/ViewLogin.php";
        break;
    case "POST":
        if (isset($_POST["name"]) && isset($_POST["password"])){
            $db = new SqliteManager("sections");
            if ($db->TestConnexion(DtoUser::$tableName, $_POST["name"], $_POST["password"])){
                session_start();
                $id = $db->GetIdOf(DtoUser::$tableName, "name", $_POST["name"]);
                $_SESSION["id"] = $id;
                header('Location: /', true, 303);
            }
            else {
                $msgErr = "Erreur d'identifiant ou de mot de passe";
                include_once "./view/ViewLogin.php";
            }
        }
        break;
}
?>