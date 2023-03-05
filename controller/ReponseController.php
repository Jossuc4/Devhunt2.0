<?php 
namespace Controller;

use Model\Database;

require dirname(__DIR__)."/vendor/autoload.php";

function listComments(){
    $bd=new Database("efanampy;port=3308","root","");
    $comments=$bd->prepare("SELECT * FROM reponse");

    $data=$comments->execute();
    return $comments->fetchAll(\PDO::FETCH_OBJ);
}

function targetResponse(string $tag){
    $bd=new Database("efanampy;port=3308","root","");
    $comments=$bd->prepare("SELECT * FROM reponse JOIN tag USING(id_tag) WHERE tag.contexte=?");

    $data=$comments->execute([$tag]);
    return $comments->fetchAll(\PDO::FETCH_OBJ);
}

require dirname(__DIR__)."/Views/reponse.php";