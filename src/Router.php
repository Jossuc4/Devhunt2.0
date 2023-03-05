<?php
namespace App;

class Router {

    public function load(){
        if(!isset($_GET['p']) || empty($_GET['p'])){
            //die("another test (Router.php line 8)");
            $this->render("home",["success"=>true,"data"=>"Hello World"]);
        }
    }

    public function render($filename, $data = null) {

        /*if(empty($filename)){
            ob_start();
            include dirname(__DIR__)."/Views/"."home.php";
            echo  ob_get_clean();
            exit();
        }*/

        $filename=explode(".",$filename)[0];

        if (is_array($data) && !empty($data)) {

            extract($data);

        }

        ob_start();
        include dirname(__DIR__)."/Views/".$filename.".php";
        echo  ob_get_clean();

    }

    public function get(string $path,string $attribute){

    }

}