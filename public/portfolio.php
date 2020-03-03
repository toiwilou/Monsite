<?php require'header.php'; ?>

<main class="main_portfolio">

    <div>
        <ul class="tabs">
            <li class="active"><a href="#pub">Publications</a></li>
            <li><a href="#algo">Algorithmes</a></li>
            <li id="divers"><a href="#">Divers</a></li>
        </ul>
        <div class="tabs-content">
            <div class="tab-content active" id="pub">
                <p>
                    Pendant mon parcours, comme la majorité des étudiants d'ailleurs, la plupart des fois, 
                    il est nécessaire de faire un projet de fin d'année, une mémoire ou tout simplement des 
                    expositions de recherches aboutissant à un sujet précis.<br><br>

                    <span class="titre_algo">1. Théoreme du rang et système linéaire</span><br><br>

                    C'est un travail sindé en deux parties : une partie basée sur la détermination du rang 
                    d'une famille de vecteurs, d'une application linéaire, d'une matrice… et d'une autre basée
                    sur la résolution de systèmes linéaires par la méthode de Gauss et les méthodes numériques.
                    <br><br>
                </p>
                <div>
                    <iframe src="fichier/th_rg_sys_lin.pdf" width="100%" height="800px"></iframe><br><br>
                </div>
                <div id="spoiler1">
                    <a class="btn btn-primary" href="#pubs" role="button">Voir plus &raquo;</a>
                    <span class="spoiler-content">
                        <span id="pubs" class="titre_algo">1. Principe de la NAT</span><br><br>
                        <p>
                            Le principe de la <strong>NAT</strong> est une étude sur les adresses IP, qui consiste à 
                            expliciter la façon dont une adresse IP public parvient à communiquer avec une adresse IP
                            privée et inversement. Ce travail nous propose de découvrir trois parties essentielles :<br><br>
                            - La <strong>NAT</strong> <strong>statique</strong><br>
                            - La <strong>NAT</strong> <strong>dynamique</strong><br>
                            - Les problèmes liés à la <strong>NAT</strong> <strong>dynamique</strong><br><br>
                        </p>
                        <iframe src="fichier/nat.pdf" width="100%" height="500px"></iframe><br><br>
                        
                        <span id="pubs" class="titre_algo">2. La méthode <strong>SCRUM</strong></span><br><br>
                        <p>
                            Dans la gestion de projet moderne, des renouvellements méthodologiques sont mis en place 
                            afin de pouvoir bien organiser les projets, essentiellement des projets informatiques, et 
                            avoir une interaction qualifiée entre les acteurs du projet. Il s'agit des méthodes agiles. 
                            La méthode <strong>SCRUM</strong> est une méthode agile dont les ressources sont actualisées 
                            régulièrement et a comme principe de base, de s'apprêter à reorienter le projet pendant son 
                            evolution.<br><br>
                        </p>
                        <iframe src="fichier/scrum.pdf" width="100%" height="500px"></iframe><br><br>
                        <iframe src="fichier/Quiz_TOIWILOU_HASSANE.pdf" width="100%" height="500px"></iframe><br><br>
                    </span>
                </div>  
            </div>

            <div class="tab-content" id="algo">
                <p>
                    L'objectif de cette partie est de mettre au point des algorithmes réutilisable pour des 
                    différents cas afin de faciliterer le codage. Il s'agit essentiellement de fonctions. 
                    Cependant, il ne sera pas possible de copier le code pour réessayer parce que ce sont des 
                    photos importées.  
                    <br><br>

                    <span class="titre_algo">1. Fonction de recuperation d'une matrice carrée</span><br><br>

                    Il s'agit d'une fonction qui prend comme argument des réels, verifie si le nombre de réels 
                    saisis est bien un carré parfait et renvoie une matrice carrée qui a comme ordre la racine 
                    carrée du nombre de réels saisis.
                </p>
                <div class="container">
                    <div class="slide"><img src="img/recup_mat.jpg"></div>
                </div>
                <br><br>
                <div id="spoiler2">
                    <a class="btn btn-primary" href="#algos" role="button">Vois plus &raquo;</a>
                    <span class="spoiler-content">
                        <p>
                            <span id="algos" class="titre_algo">1. Fonction de verification d'un réel</span><br><br>

                            C'est une fonction qui prend comme argument un réel, vérifie si ce dernier est 
                            un entier ou pas et renvoie finalement un booléen.<br><br>
                        </p>
                        <img src="img/isint.jpg"><br><br>

                        <p>
                            <span class="titre_algo">1. Fonction de parité</span><br><br>

                            Il s'agit de deux fonctions qui prennent comme argument un réel et renvoie une chaine 
                            de caractère qui donne la parité. L'une d'elles se base sur la division et l'autre se 
                            base sur un tableau.<br><br>
                            
                            <span style="color: #940c87;">public</span> String <span style="color: #076ab0;">parite</span>;
                        </p>
                        <img src="img/parit.jpg"><br><br>
                    </span>
                </div>  
            </div>

            <div class="tab-content" id="diver">
                <p>
                    A propos ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                    <a class="btn btn-primary" href="#diver" role="button">Voir plus &raquo;</a>
                </p>
            </div>
        </div>
    </div>

</main>

<?php require'footer.php'; ?>