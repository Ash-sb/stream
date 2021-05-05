<section class="container">
    <h2 class="text-center mb-3">Connexion</h2>

    <form action="config/login_traitement.php" method="post">
        <div class="form-error">
                    <p><?= $content; ?></p>
        </div>

        <!-- email-->
        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <!-- mot de passe-->
        <div class="mb-3">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>

        <!--bouton se connecter-->
        <div class="mb-3">
            <input class="form-submit-button" type="submit" value="Se connecter" name="seconnecter">
        </div>

    </form>

</section>