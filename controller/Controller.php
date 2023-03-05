<?php
namespace Controller;

function logOut(){
    if(isset($_GET['action']) && $_GET['action']=="logout"){
        
        session_abort();
        header("location:?p=auth&type=login");
    }
}