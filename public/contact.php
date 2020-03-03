<?php require'header.php'; ?>
<main class="main_contact">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><b>Bonjour !</b></h1>
            <p>
                Merci pour votre visite. Vous pouvez toujours me contacter en cas  
                de besoin en me laissant un message. Toutefois vous pouvez me 
                contacter directement par téléphone ou par e-mail.
            </p>
        </div>
    </div>

    <div class="formulaire">
        <form method="POST" name="form" action="form.php">
            <div class="radio"><input type="radio" name="sexe" value="Mme" required>Madame</div>
            <div class="radio"><input type="radio" name="sexe" value="Mr" required>Monsieur</div>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" id="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenom" id="prenom" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                <input type="tel" class="form-control" placeholder="Entrez votre téléphone" name="telephone" id="telephone" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Entrez votre e-mail" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea style="width: 40%;" class="form-control" placeholder="Entrez votre message" name="message" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" id="envoyer" class="btn btn-success">Envoyer</button>
        </form>
    </div>
    <div class="carte">
        <h1 class="localisation">LOCALISATION</h1>
        <div class="maps">
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2632.085479040339!2d2.4183312151963228!3d48.722958318187736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e675179c90f5bf%3A0x97663ef81bd7f26b!2s13%20Rue%20Saint-Georges%2C%2094480%20Ablon-sur-Seine!5e0!3m2!1sfr!2sfr!4v1570629206412!5m2!1sfr!2sfr" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>


</main>

<?php require'footer.php'; ?>