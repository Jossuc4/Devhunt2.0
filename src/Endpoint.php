<?php
namespace App;
use App\Router;

require dirname(__DIR__)."/vendor/autoload.php";

$router=new Router();

if(isset($_GET['p']) && !empty($_GET['p'])) {

    //die("ça reste là");
   
    $page=strtolower($_GET['p']);

    if($page=="home"){

        $router->render("home",["data"=>"Bienvenue"]);

    }else{

        if(is_file($file=dirname(__DIR__)."/controller/". ucfirst($page)."Controller.php")){
            //die("Controller présente");
            require $file;
            //$router->render($page,["title"=> $page,"data"=>"Hello World"]);
    
        }else{
            $router->render("error/404",["title"=>"404 not found!","data"=>"Page introuvable :("]);
        }


    }

    
}else{
    $router->load();
}