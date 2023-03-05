<?php
namespace Controller;
require dirname(__DIR__)."/vendor/autoload.php";

use Model\Database;
use Model\Query;
use Model\UpdateQuery;
use Exception;
use App\Router;

try
{
    $database=new Database("efanampy;port=3308","root","");
}catch(Exception $e){
    echo $e->getMessage();
}
$query=new Query();
$modifQuery=new UpdateQuery();
$router=new Router();


if(isset($_GET['type'])){

    if($_GET['type']=="login"){

        $router->render("auth",["type"=>"login","database"=>$database,"query"=>$query,"router"=>$router,"error"=>null]);
        exit();
        
        }else if($_GET['type']=="login"){
            if(!empty($_POST)){
        
            }else{

                echo json_encode(["data"=>"Login successful"]);

            }

    }else if($_GET['type']=="signUp"){
        $router->render("signUp",["type"=>"signUp","database"=>$database,"query"=>$query,"router"=>$router]);
    }

} 