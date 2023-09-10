<?php
include_once "./model/DtoUser.php";
include_once "./model/DtoProfile.php";
include_once "./lib/LibSections.php";
include_once "./controller/ControllerPublication.php";
session_start();

if (isset($params["id"])){
    $id = $params["id"];
}
else if (!isset($_SESSION["id"])){
    header('Location: /login', true, 303);
}
else {
    $id = $_SESSION["id"];
}

$user = getUser($id);
$profile = getProfile($id);
$feed = getUserPublications($id);

include_once "./view/ViewProfile.php";
?>