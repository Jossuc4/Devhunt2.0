<?php

use function Controller\getQuestionId;
use function Controller\listAllPosts;
use function Controller\listByDate;
use function Controller\listTags;


require dirname(__DIR__)."/controller/PostController.php";
//require dirname(__DIR__)."/controller/VotesController.php";
    if(session_status()== PHP_SESSION_NONE){
        session_start();
    }
    

if((isset($_SESSION['pseudo']) && isset($_SESSION['pdp']))){
    
    $pseudo=$_SESSION['pseudo'];
    $pdp=$_SESSION['pdp'];

    //var_dump(listAllPosts());
    $data=listAllPosts();
    //var_dump(listTags());
    //exit();
}



//!déconnexion
if(isset($_GET['action']) && $_GET['action']=="logout"){   
    session_abort();
    header("location:?p=auth&type=login");
}
    

if(isset($_GET['tri']) && $_GET['tri']=="true"){
    $data=listByDate();
    header("location:?p=home");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/index.css"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <style>
        a{
            text-decoration:none;
            color:white;
            font-style: italic;
        }
    </style>
    <header>
        <a href="" id="test">
            <img src="images/logo.png" alt="logo" class="logo head-left">
        </a>
        <div class="head-right">
            <div class="pseudo">
                <img src=<?= "images/pngegg.png"?> alt="" class="pdp">
                <span><span>@</span><p><?= $pseudo?></p></span>
                <ul>
                    <li><a href="#test">Profil</a></li>
                    <li><a href="?action=logout">Deconnexion</a></li>
                    <li><a href="?p=list&by=date">Nouveau message</a></li>
                </ul>
            </div>
            <div class="recherche">
                <input type="search" name="search" value="" id="search_in" placeholder="Rechercher">
                <button><img src="images/_blanc.png" alt=""></button>
            </div>
        </div>
    </header>
    <div class="body">
        <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
        </div >
    </div>
    <div class="sec">
        <nav>
            <h1>Les Tags:</h1>
            <ul class="nav_tag_list" id="tag">
                <?php foreach(listTags() as $tag): ?>
                    <li><a href="#tag"><?= $tag->contexte?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <section>
            <div class="filtre">
                <div class="filtre-i activeFilter"><a href="?tri=true">Par date</a></div>
                <div class="filtre-i">Nbr de vote</div>
            </div>

            <div class="list-container">
                <?php foreach($data as $elem):?>
                    <div class="msg-container">
                        <h1><?= $elem->contexte?></h1>

                        <div class="auteur">
                            <img src=<?=$elem->image_path?> alt="pdp">@<p class="nom"><?=$elem->nom_utilisateur?></p> 
                        </div>

                        <h4><?= $elem->contenu?></h4>
                        <p></p>
                        <div class="msg-foot">
                            <div class="msg-foot-repondre">Répondre</div>
                            <div class="char">
                                <div class="value"><?= $elem->nb_vote?></div>
                                <span class="prop"><a href="?action=vote">votes</a></span>
                            </div>
                            <div class="char">
                                <div class="value"><?=$elem->nb_reponses?></div>
                                <span class="prop"> reponses</span>
                            </div>
                            <div class="char">
                                <span class="prop">le: </span>
                                <div class="value"><?=$elem->date_post?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
    </div>
    <div class="new_message"><a style="text-decoration:none;color:white" href="?p=question&id=<?=$elem->num_matricule?>">+</a></div>
    <script src="js/index.js"></script>
</body>
</html>