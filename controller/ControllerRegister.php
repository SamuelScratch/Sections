<?php
include_once "./model/DtoUser.php";

// Message d'alerte
$msgErr = "";
$msgSucc = "";

switch ($_SERVER['REQUEST_METHOD']){
    
    case "GET":
        include_once "./view/ViewRegister.php";
        break;
    case "POST":
        if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["mail"]) ){
            $db = new SqliteManager("sections");
            if ($db->Inscription(DtoUser::$tableName, $_POST["name"], $_POST["mail"], $_POST["password"])){
                $msgSucc = "Inscription réussie !";
                include_once "./view/ViewLogin.php";
            }
            else {
                $msgErr = "Inscription impossible";
                include_once "./view/ViewRegister.php";
            }
        }
        break;
}
?>