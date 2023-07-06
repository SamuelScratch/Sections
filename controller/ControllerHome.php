<?php
switch ($_SERVER['REQUEST_METHOD']){
    
    case "GET":
        include "./view/ViewHome.php";
        break;
}
