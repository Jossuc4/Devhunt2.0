<?php

function loadPath(string $typeFile):string
{
    $Files=[
        "image"=>['jpg','img','png','gif','jpeg','mpeg'],
        "document"=>['docx','pdf','xls','csv']
    ];

    foreach($Files as $key=>$ArrayValue){

        if(in_array($typeFile,$ArrayValue))
        {
            return $key;
        }

    }

    return "error";
}