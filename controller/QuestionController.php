<?php 
namespace Controller;

use App\Router;
use Model\Database;

require dirname(__DIR__)."/vendor/autoload.php";

define('DBREF',new Database("efanampy;port=3308","root",""));

function saveQuestion(string $matricule,string $contenu,int $id_tag){
    $queryAdd=DBREF->prepare("INSERT INTO questions(num_matricule,contenu,id_tag,date_post) VALUES (?,?,?,CURDATE())");
    return $queryAdd->execute([$matricule,$contenu,$id_tag]);
}

function getMatricule(string $name){
    $find=DBREF->prepare("SELECT num_matricule FROM utilisateur WHERE nom_utilisateur =?");
    $nom=$find->execute([$name]);
    $nom=$find->fetch(\PDO::FETCH_COLUMN);

    return $nom;
}
function getTagId(string $contenu){
    $get=DBREF->prepare("SELECT is_tag FROM tag WHERE contexte=?");
    $gg=$get->execute([$contenu]);

    return $gg->fetch(\PDO::FETCH_OBJ);
}

require dirname(__DIR__)."/Views/question.php";