<?php
use Model\Database;
require dirname(__DIR__)."/vendor/autoload.php";

function loadSession(){
    if(isset($_SESSION['pseudo'])){
        $session=$_SESSION['pseudo'];
    }
    return $session;
}


require dirname(__DIR__)."/src/Endpoint.php";
