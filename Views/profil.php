<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="?p=home">
            <img src="images/logo.png" alt="logo" class="logo head-left">
        </a>
        <div class="head-right">
            <div class="pseudo">
                <img src="images/pngegg.png" alt="" class="pdp">
                <span><span>@</span><p>mon_pseudo</p></span>
                <ul>
                    <li>Profil</li>
                    <li><a href="?action=logout">Déconnexion</a></li>
                    <li><a href="?p=list&by=date">Nouvelle question</a></li>
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
            <div class="pdp_G"><img src="images/pngegg.png" alt="img"></div>
            <div class="infos">
                <ul>
                    <li class="li">
                        <div class="char">Nom de profil: </div>
                        <div class="value">@<span class="aut auteur">pseudo</span></div>
                    </li>
                    <li class="li">
                        <div class="char">Mail: </div>
                        <div class="value">user@gmail.com</div>
                    </li>
                    <li class="li">
                        <div class="char">nombre de vote: </div>
                        <div class="value">0</div>
                    </li>
                    <li class="li">
                        <div class="char">nombre de question: </div>
                        <div class="value">0</div>
                    </li>
                    <li class="li">
                        <div class="char">niveau: </div>
                        <div class="value">L$</div>
                    </li>
                    <li class="li">
                        <div class="char">N° matricule: </div>
                        <div class="value">0000</div>
                    </li>
                </ul>
            </div>
            <button class="b">modifier le profil</button>
            <div class="modif">
                <div class="pdp_G2">
                    <p>cliquer pour modifier l'image</p>
                    <input type="file" name="f" id="f">
                    <label for="f"><img src="images/pngegg.png" alt="img"></label>
                </div>
                <form action="" method="post">
                    <ul>
                        <li class="li">
                            <div class="char">Nom de profil: </div>
                            <input type="text" name="nom2" id="nom2" required>
                        </li>
                        <li class="li">
                            <div class="char">Mail: </div>
                            <input type="mail2" name="mail2" id="mail2" required>
                        </li>
                        <li class="li">
                            <div class="char">nombre de vote: </div>
                            <input type="number2" name="number2" id="number2" required>
                        </li>
                        <li class="li">
                            <div class="char">nombre de question: </div>
                            <input type="quets2" name="quets2" id="quets2" required>
                        </li>
                        <li class="li">
                            <div class="char">niveau: </div>
                            <input type="niv2" name="niv2" id="niv2" required>
                        </li>
                        <li class="li">
                            <div class="char">N° matricule: </div>
                            <input type="mat2" name="mat2" id="mat2" required>
                        </li>
                    </ul>
                    <div class="buttons2">
                        <button type="reset" id="res">annuler</button>
                        <button type="submit" id="sub">confirmer</button>
                    </div>
                </form>
            </div>
        </nav>
        <section>
            <div class="quest">
                <div class="filtre">
                    <label for="tri">trier par:</label>
                    <select name="tri" id="tri">
                        <option value="">plus reçent</option>
                        <option value="">plus ançien</option>
                        <option value="">plus votés</option>
                    </select>
                </div>
                <div class="quest-list">

                    <h1 id="h1">Liste de toutes les questions posées par @ <span class="aut auteur">auteur</span> </h1>
                    <div class="quest-box">
                        <h1>Titre du message</h1>
                        <span class="aut">@</span><span class="aut auteur">auteur</span>   
                            <div class="content">
                                
                            </div>
                            <div class="_foot">
                                <div class="foot-box">
                                    <span>0</span>
                                    <span>tags</span>
                                </div>
                                <div class="foot-box">
                                    <span>0</span>
                                    <span>votes</span>
                                </div>
                                
                                <div class="foot-box">
                                    <span>le</span>
                                    <span>0000-00-00</span>
                                </div>
                                <div class="foot-box btn-repondre">
                                    <span>Repondre</span>
                                </div>
                                <div class="foot-box btn-voter">
                                    <span>voter</span>
                                </div>
                            </div>
                    </div>
                    <div class="quest-box">
                        <h1>Titre du message</h1>
                        <span class="aut">@</span><span class="aut auteur">auteur</span>   
                            <div class="content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, aperiam.
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic minima quasi sapiente esse officia aspernatur qui voluptas illo aliquam doloribus?
                            </div>
                            <div class="_foot">
                                <div class="foot-box">
                                    <span>0</span>
                                    <span>tags</span>
                                </div>
                                <div class="foot-box">
                                    <span>0</span>
                                    <span>votes</span>
                                </div>
                                
                                <div class="foot-box">
                                    <span>le</span>
                                    <span>0000-00-00</span>
                                </div>
                                <div class="foot-box btn-repondre">
                                    <span>Repondre</span>
                                </div>
                                <div class="foot-box btn-voter">
                                    <span>voter</span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="js/profile.js"></script>
</body>
</html>