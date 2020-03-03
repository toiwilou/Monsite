<?php require'header.php'; ?>
<main>
    <section class="section_haute">
        <div class="image_index"><img src="img/photo-index.jpg"></div>
        <div class="texte_parcours">
            <h1 class="titre_parcours">Mon parcours</h1>
            <h2 class="titre_domaine">Domaine informatique</h2>
            <p class="paragraphe_domaine">
                C'est après avoir eu une licence de mathématiques en 2019<br>
                que j'ai décidé de me lancer dans le domaine informatique.<br>
                Je n'était pas complétement perdu sur ce qui est de  <br>
                l'informatique.
            </p>
            <div class="esp_parcours"><a href="profil.php#parcour">En savoir plus</a></div>
            <div class="icon_informatique"><a href="profil.php#parcour"><img src="img/ai.png"></a></div>
            <div class="icon_informatique"><a href="profil.php#parcour"><img src="img/maths.png"></a></div>
            <div class="icon_informatique"><a href="profil.php#parcour"><img src="img/physic.png"></a></div>
        </div>
    </section>
    <section class="section_basse">
        <div class="block_menu">
            <button class="bouton">
                <a href="profil.php">
                    <div class="div_block">
                        <img class="icon" src="img/profil.png">
                        <figcaption class="legend">PROFIL</figcaption>
                    </div>
                </a>
            </button>
            <button class="bouton">
                <a href="portfolio.php">
                    <div class="div_block" id="porfolio_block">
                        <img class="icon" src="img/portfo.png">
                        <figcaption class="legend">PORTFOLIO</figcaption>
                    </div>
                </a>
            </button>
            <button class="bouton">
                <a href="contact.php">
                    <div class="div_block">
                        <img class="icon" src="img/contact.png">
                        <figcaption class="legend">CONTACT</figcaption>
                    </div>
                </a>
            </button>
        </div>
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4"><b>Projets</b></h1>
                <p>
                    On observe dans le monde d'aujourd'hui une evolution exponentielle 
                    dans le domaine des numéruques. On peut bien constater que dans les 
                    années suivantes, tout sera informatisé. Pour cela j'ai décidé 
                    d'intégrer le domaine informatique afin de devenir entrepreneur, plus
                    précisement sur des projets informatisé.
                </p>
                <div class="esp_projets"><a href="profil.php#projetpro">En savoir plus</a></div>
            </div>
        </div>
        
    </section>  
</main>

<?php require'footer.php'; ?>