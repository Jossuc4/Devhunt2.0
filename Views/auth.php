<?php

    if(isset($_POST['nom']) && ($_POST['mdp'])){
        //require dirname(__DIR__)."/vendor/autoload.php";

        $ps=$_POST['nom'];
        $pswd=$_POST['mdp'];

        $log=$database->prepare("SELECT *  FROM `utilisateur` WHERE utilisateur.nom_utilisateur = ?");
        $data=$log->execute([$ps]);
        $data=$log->fetchAll(PDO::FETCH_OBJ)[0];

        //var_dump($data);

            $queryImg=$database->prepare("SELECT image_path FROM utilisateur WHERE utilisateur.nom_utilisateur = ?");
            $img=$queryImg->execute([$ps]);

            if(session_status()== PHP_SESSION_NONE)
                session_start();

                $_SESSION['pseudo']=$ps;
                $_SESSION['pdp']=$queryImg->fetch(PDO::FETCH_COLUMN);

                header("location:/?p=home");
            //exit("Hourra");
        }else{
            $erreur="Vérifier le mot de passe";
            
        }



?>

<!DOCTYPE html>
<html lang="en">
<?php $path=getcwd();?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/auth.css">
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
    <div class="context">
        <div class="acceuil">
            <h1 style="text-align:center">E-fampizara <br> Une plateforme d'échanges de connaissance pour les étudiants de l'ENI.</h1>
            <button class="loginButt">se connecter</button>
        </div>
    </div>
    <div class="login-container">
            <div class="hide" id="hide"><img src="images/arrow.png" alt="arrow"></div>
            <div class="login">
                <div class="avatar">
                    <img src="images/pngegg.png"id="pnge" alt="avatar">
                </div>
        
                <form action="" method="post" class="login-form">
                    <div class="input-box">
                        <input type="text" name="nom" id="pseudo_in" required>
                        <label for="nom">Pseudo</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="mdp" id="pwd_in" required>
                        <label for="mdp">Mot de passe</label>
                    </div>
                    <div class="alert alert-danger">
                        <?php if(isset($erreur)){echo $erreur;}?>
                    </div>
                    <div class="buttons">
                        <button type="submit">se connecter</button>
                        <button type="reset">s'inscrire</button>
                    </div>
                    <div class="se-souvenir">
                        <input type="checkbox" name="se_souvernir" id="">
                        <label for="se_souvernir">se souvenir de moi sur cet appareil</label>
                    </div>
                </form>
            </div>
    </div>
    <script src="js/auth.js"></script>
</body>
</html>