<?php

function getUser($id){
    $db = new SqliteManager("sections");
    $request = "SELECT * FROM " . DtoUser::$tableName . " WHERE id = :id";
    $result = $db->Execute($request, array("id" => $id));
    return new DtoUser($result[0]["id"], $result[0]["name"], $result[0]["password"], $result[0]["mail"]);
}

function getProfile($user_id){
    $db = new SqliteManager("sections");
    $request = "SELECT * FROM " . DtoProfile::$tableName . " WHERE user_id = :user_id";
    $result = $db->Execute($request, array("user_id" => $user_id));
    return new DtoProfile($result[0]["id"], $result[0]["description"], $result[0]["image"], $result[0]["typeImage"], $result[0]["user_id"]);
}

?>