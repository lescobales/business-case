<?php include('head.php'); ?>
<body>
    <?php include('header.php');?>
    <!-- MAIN -->
    <main>
        <form action="" method="POST" class="connexion" id="inscription">
            <h2>Inscription</h2>
            <div class="container p-0">
                <div class="row">
                    <div class="col-12 d-sm-block col-md-6">
                        <div class= "mb-4">
                            <label for="firstname" class="d-block p-1">Prénom</label>
                            <input type="text" name="firstname" id="firstname">
                        </div>
                        <div class= "mb-4">
                            <label for="last-name" class="d-block p-1">Nom</label>
                            <input type="text" name="last-name" id="last-name">
                        </div>
                        <div class= "mb-4">
                            <label for="birthday" class="d-block p-1">Date de naissance</label>
                            <input type="text" name="birthday" id="birthday">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class= "mb-4">
                            <label for="e-mail" class="d-block p-1">E-mail</label>
                            <input type="text" name="e-mail" id="e-mail">
                        </div>
                        <div class= "mb-4">
                            <label for="mdp" class="d-block p-1">Mot de passe</label>
                            <input type="password" name="mdp" id="mdp">
                        </div>
                        <div class= "mb-4">
                            <label for="check-mdp" class="d-block p-1">Vérification mot de passe</label>
                            <input type="password" name="check-mdp" id="check-mdp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn red">
                <p>Inscription</p>
            </div>
        </form>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>