<?php

include "./db/db.php";
include "./model/DtoUser.php";

if (isset($params["id"])){ /*** SINGLE USER ***/
    switch ($_SERVER['REQUEST_METHOD']){
    
        case "GET":
            $db = new SqliteManager("AppMvc");
            $lstUsersDb = $db->GetById((new DtoUser(0, "", ""))->dtoDescription["dbTable"], $params["id"]);
            $user = DtoUser::DbUsersToLstUsers($lstUsersDb)[0];
            include "./view/ViewUser.php";
            break;
        case "POST":
            if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["mail"])
            && is_int($_POST["id"]) && is_string($_POST["name"]) && is_string($_POST["mail"])
            ){
                $user = new DtoUser($_POST["id"], $_POST["name"], $_POST["name"]);
                $db = new SqliteManager("AppMvc");
                $db->Save($user, $_POST);
            }
            break;
    }
}
else { /*** ALL USERS LIST ***/
    switch ($_SERVER['REQUEST_METHOD']){
    
        case "GET":
            $db = new SqliteManager("AppMvc");
            $lstUsersDb = $db->GetAllFromTable((new DtoUser(0, "", ""))->dtoDescription["dbTable"]);
            $lstUsers = DtoUser::DbUsersToLstUsers($lstUsersDb);
            include "./view/ViewUsersList.php";
            break;
    }
}
