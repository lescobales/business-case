<?php include('head.php'); ?>
<body class="connexion-form">
    
    <?php include('header.php');?>
    <main>
        <form action="" method="POST" class="connexion">
            <h2>Connexion</h2>
            <div class= "mb-4">
                <label for="identifiant" class="d-block p-1">Identifiant</label>
                <input type="text" name="identifiant" id="identifiant">
            </div>
            <div class= "mb-4">
                <label for="mdp" class="d-block p-1">Mot de passe</label>
                <input type="password" name="mdp" id="mdp">
            </div>
            <div class="btn red">
                <p>Connexion</p>
            </div>
            <a href="inscription.php">Pas encore incrit !</a>
        </form>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>