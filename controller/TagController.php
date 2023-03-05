<?php
namespace Controller;

use App\Router;
use Model\Database;

require dirname(__DIR__)."/vendor/autoload.php";



    $db=new Database("efanampy;port=3308","root","");
    $router=new Router();

    if(isset($_GET['id'])){

        $id=$_GET['id'];
        $query=$db->prepare("SELECT * FROM utilisateur INNER JOIN questions USING(num_matricule) INNER JOIN reponses USING(id_question) JOIN tag USING(id_tag) WHERE id_tag=?");
        $data=$query->execute([$id]);

        $dataTag=$query->fetchAll(\PDO::FETCH_OBJ);

    }
    require dirname(__DIR__)."/Views/tag.php";
     //$router->render("tag",["data"=>$dataTag]);

