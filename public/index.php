<?php include('head.php'); ?>
<body>
    <?php include('header.php');?>
    <!-- MAIN -->
    <main>
        <!-- Call To Action -->
        <p><a href="feature-search.php" id="blink">Liste des NFTs disponibles</a></p>
        <!-- Section Présentation Entreprise-->
        <section title="Présentation de l'entreprise" id="entreprise" class="bg-light">
            <h3>Présentation de l'entreprise</h3>
                <button class="accordion">Présentation de l'entreprise</button>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
        </section>
        <!-- Section Présentation du Projet -->
        <section title="Présentation du projet" id="projet" class="bg-dark">
            <h3>Présentation du projet</h3>
            <button class="accordion">Présentation du projet</button>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
        </section>
        <!-- Section NFT -->
        <section title="NFT.....?" id="nft" class="bg-light">
            <h3>Qu'est de qu'un NFT ?</h3>
            <button class="accordion">Qu'est ce qu'un NFT ?</button>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
        </section>
        <div class="connect-card">
            <p>Rejoignez nous !!</p>
            <div>
                <div class="btn red">
                    <p>Connexion</p>
                </div>
                <div class="btn red">
                    <p>Inscription</p>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        } 
    </script>
    <script src="index.js"></script>
</body>
</html>