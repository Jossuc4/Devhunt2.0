<?php 
if(isset($_POST)){
    var_dump($_POST);
    exit();
}
session_start();
 $_SESSION ['nom'] =$_POST['contenu'];

