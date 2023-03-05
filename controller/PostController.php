<?php
namespace Controller;

use Model\Database;
require  dirname(__DIR__)."/config/config.php";
require  dirname(__DIR__)."/vendor/autoload.php";


function listAllPosts(){
    $query=DB->prepare("SELECT utilisateur.image_path,utilisateur.nom_utilisateur,num_matricule,contenu,tag.contexte,questions.nb_vote,questions.nb_reponses,questions.date_post,questions.id_question
    FROM utilisateur INNER JOIN questions 
    USING(num_matricule) INNER JOIN tag using(id_tag)");
    $exec=$query->execute();

    $data=$query->fetchAll(\PDO::FETCH_OBJ);
    return $data;
}

function listUnicPost(string $user){
    $query=DB->prepare("SELECT num_matricule,contenu,nb_vote,tag.contexte FROM questions INNER JOIN tag using(id_tag) WHERE num_matricule=?");
    $exec=$query->execute([$user]);

    $data=$query->fetchAll(\PDO::FETCH_OBJ);
    return $data;
}

function listResponses(string $question){
    $query=DB->prepare("SELECT num_matricule,contenu,reponses.nb_vote,
    date_reponse,questions.contenu FROM reponses JOIN questions USING(id_question)
    WHERE id_question= ? ");
    $exec=$query->execute([$question]);

    $data=$query->fectAll(\PDO::FETCH_OBJ);
    return $data;
}
function listByDate(){
    $query=DB->prepare("SELECT utilisateur.image_path,utilisateur.nom_utilisateur,num_matricule,contenu,tag.contexte,questions.nb_vote,questions.nb_reponses,questions.date_post,questions.id_question
    FROM utilisateur INNER JOIN questions 
    USING(num_matricule) INNER JOIN tag using(id_tag) ORDER BY questions.date_post ");

    $exec=$query->execute();

    $data=$query->fetchAll(\PDO::FETCH_OBJ);

    return $data;
}

function listTags(){
    $query=DB->prepare("SELECT contexte,id_tag FROM tag");
    $data=$query->execute();

    return $query->fetchAll(\PDO::FETCH_OBJ);
}

function DateClass(string $entity , $order){
    $cl=DBREF->prepare("SELECT * FROM ? ORDER BY ? DESC");
    $query=$cl->execute([$entity,$order]);

    return $cl->fetchAll(\PDO::FETCH_OBJ);
}
function listByVotes(){
    $query=DB->prepare("SELECT utilisateur.image_path,utilisateur.nom_utilisateur,num_matricule,contenu,tag.contexte,questions.nb_vote,questions.nb_reponses,questions.date_post,questions.id_question
    FROM utilisateur INNER JOIN questions 
    USING(num_matricule) INNER JOIN tag using(id_tag) ORDER BY questions.nb_vote ");
    $exec=$query->execute();

    $data=$query->fetchAll(\PDO::FETCH_OBJ);
    return $data;
}