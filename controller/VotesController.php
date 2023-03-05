<?php 
namespace Controller;

require dirname(__DIR__)."/config/config.php";

function upVote(string $type,string $value){
    $query=DB->prepare("UPDATE questions SET nb_vote=(nb_vote + 1) WHERE id_{$type}=?");
    return $query->execute([$value]);
}
function downVote(string $type,string $value){
    $query=DB->prepare("UPDATE questions SET nb_vote=(nb_vote - 1) WHERE id_{$type}=?");
    return $query->execute([$value]);
}