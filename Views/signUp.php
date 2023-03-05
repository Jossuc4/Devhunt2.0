<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/signUp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    
    <div class="container">
        <div class="sing-container">
            <div class="head"> 
                <button class="back">back</button>
                INSCRIPTION
            </div>
            <form method="post" action="" class="sing" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" name="pseudo" id="pseudo_in" autocomplete="false" required>
                    <label for="pseudo">Votre pseudo</label>
                </div>
                <div class="input-box">
                    <input type="text" name="matricule" id="matricule_in" autocomplete="false" required>
                    <label for="matricule">numero matricule</label>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" id="pass_in" autocomplete="false" required>
                    <label for="pass">mot de passe</label>
                    <p class="errMDP">*les mots de passes de correspondent pas</p>
                </div>
                <div class="input-box">
                    <input type="password" name="pass2" id="pass_in2" autocomplete="false" required>
                    <label for="pass2" id="passe_in2">confirmer votre mot de passe</label>
                    <p class="errMDP">*les mots de passes de correspondent pas</p>
                </div>
                <div class="input-box">
                    <input type="mail" name="mail" autocomplete="false" required>
                    <label for="mail">Entrer votre addresse mail</label>
                </div>
                <div class="input-select-box">
                    <label for="niveau">Niveau: </label>
                    <select name="niveau" id="niveau_in">
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="l3">L3</option>
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
                    </select>
                </div>
                
                <div id="error">

                </div>
                <div class="input-file-box">     
                    <div class="box__input">
                        
                    </div>
                </div>
                <div class="buttons">
                    <button id="inscrire" type="submit">s'inscrire</button>
                    <button id="reset" type="reset">anuler</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/signUp.js"></script>
</body>
</html>
<?php

use Model\Database;

$db=new Database("efanampy;port=3308","root","");
    if(isset($_POST['pseudo'])){

        $matricule=$_POST['matricule'];
        $pseudo=$_POST['pseudo'];
        $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);
        $niveau=$_POST['niveau'];
        $mail=$_POST['mail'];


        if($_POST['pass'] !== $_POST['pass2']){
?>
   <script>
        var error_place=document.querySelector("#error");
        error_place.style="color:red;text-align:center;margin-top:0";
        error_place.innerHTML="Vérifier que les mots de passe soient mêmes";

        document.querySelector("#pseudo_in").value=$pseudo;
        document.querySelector("#matricule_in").value=$matricule;
        document.querySelector("#mail_in").value=$mail;

   </script>
<?php

        }else{
            

            try{
                $query=$db->prepare("INSERT INTO utilisateur(num_matricule,nom_utilisateur,niveau_utilisateur,mdp_utilisateur,mail_utilisateur) VALUES (?,?,?,?,?)");
                $insertion=$query->execute([$matricule,$pseudo,$niveau,$pass,$mail]);
                
                header("location:/?p=auth&type=login");
            }catch(Exception $e){
                $e->getMessage();
            }
            
        }

    }
    
?>