<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>

<! début du header -->
            <div class="header_navbar-logo">
                <img class="header_navbar-logo" src="../../image/logo-stjo.png"></a>


            </div>
            <div class="header_navbar-menu">
                <a href="inscription.php" class="header_navbar-menu">Inscription</a>

                <a href="connexion.php" class="header_navbar-menu">Connexion</a>
            </div>
        </div>
    </div>
</div>
<! fin du header -->

<! debut du body -->

    <div id="formContent">
        <h2 class="active">Inscrivez-vous</h2>
        <!-- Ligne de connexion et mot de passe -->

        <form method="post" action="../envoyer_de_donnee/envoyer_inscription.php" enctype="multipart/form-data">
            <input type="text" id="login"  name="identifiant" placeholder="Identifiant" required>
            <input type="text" id="nom" name="nom" placeholder="Nom" required>
            <input type="text" id="prenom"  name="prenom" placeholder="Prenom" required>
            <input type="password" id="password"  name="mdp" placeholder="Mot de passe" required>

            <input type="submit"  name="valider" value="Vous inscrire">
        </form>

    </div>
</div>
<! fin du body -->

<! début du footer -->

<! fin du footer -->

</body>
</html>