<?php
include_once "./model/DtoPublication.php";
// Create a "feed" variable to store DtoPublication objects
$feed = array();

// Create a function to get publications from the database using SqliteManager class and DtoPublication class. The function will return all the publications from the same user id passed as parameter. To have some pagination the function will return only the first 10 publications. To get the next 10 publications and so on, a "page" parameter will be passed.
function getUserPublications($id, $page = 1){
    $db = new SqliteManager("sections");
    $result = $db->Execute("SELECT * FROM publication WHERE user_id = :id ORDER BY id DESC LIMIT 10 OFFSET :page", array("id" => $id, "page" => ($page - 1) * 10));
    $lstDtoPublication = array();
    foreach ($result as $publication){
        array_push($lstDtoPublication, new DtoPublication($publication["id"], $publication["content"], $publication["user_id"]));
    }
    return $lstDtoPublication;
}

?>