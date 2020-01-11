<?php require'header.php'; ?>
<main>
    <section class="section_haute">
        <div class="image_index"><img src="img/photo-index.jpg"></div>
        <div class="texte_parcours">
            <h1 class="titre_parcours">Mon parcours</h1>
            <h2 class="titre_domaine">Domaine informatique</h2>
            <p class="paragraphe_domaine">
                Lorem ipsum dolor sit amet, consectetur adipisicing <br>
                elit, sed do eiusmodtempor incididunt ut labore et <br>
                dolore magna aliqua. Ut enim ad minim veniam,quis <br>
                nostrud exercitation ullamco laboris nisi ut aliquip
            </p>
            <div class="esp_parcours"><a href="#">En savoir plus</a></div>
            <div class="icon_informatique"><a href="#"><img src="img/ai.png"></a></div>
            <div class="icon_informatique"><a href="#"><img src="img/maths.png"></a></div>
            <div class="icon_informatique"><a href="#"><img src="img/physic.png"></a></div>
        </div>
    </section>
    <section class="section_basse">
        <div class="block_menu">
            <a href="profil.php">
                <div class="div_block">
                    <img class="icon" src="img/user.png">
                    <figcaption class="legend">PROFIL</figcaption>
                </div>
            </a>
            <a href="portfolio.php">
                <div class="div_block">
                    <img class="icon" src="img/file.png">
                    <figcaption class="legend">PORTFOLIO</figcaption>
                </div>
            </a>
            <a href="contact.php">
                <div class="div_block">
                    <img class="icon" src="img/message">
                    <figcaption class="legend">CONTACT</figcaption>
                </div>
            </a>
        </div>
        <div class="projet_index">
            <h1 class="titre_projet">Projets Professionnels</h1>
            <p class="paragraphe_projet">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="esp_projet"><a href="#">En savoir plus</a></div>
        </div>
    </section>
</main>

<?php require'footer.php'; ?>