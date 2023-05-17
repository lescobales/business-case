<!-- Affiche la liste des utilisateurs avec une description (nb collections, type) -->    
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.min.css" rel="stylesheet">
    <title>Taty Josy NFTs</title>
    </head>
    <body>
        <?php include('header.php');?>
        <main>
            <div class="search">
                <h1>Recherche</h1>
                <!-- Search Bar -->
                <div class="inputsearch">
                    <label for="searchCollection">Recherche</label>
                    <div id="inputvalid">
                        <input type="search" name="search" id="searchcollection">
                        <a href="" class="btn valid"></a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <!-- Result Serach -->
                <div class="row">
                    <!-- List users with card Users -->
                    <div class="listuser container col-12 col-md-6">
                        <h2>Liste des Utilisateurs</h2>
                        <div class="scroll-zone row col-12 col-md-6">
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carduser col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Nico</dt>
                                            <dd>Février 2023</dd>
                                            <dd>3 Collections</dd>
                                            <dd>17 NFT</dd>
                                            <dd>2 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Result on carduser click -->
                    <div class="collection col-md-1 d-none">
                        <h2>Collections</h2>
                        <div class="scroll-zone col-12">
                            <div class="cardcollection col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Collection name</dt>
                                            <dd>Février 2023</dd>
                                            <dd>10 NFT</dd>
                                            <dd>1 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cardcollection col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Collection name</dt>
                                            <dd>Février 2023</dd>
                                            <dd>10 NFT</dd>
                                            <dd>1 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cardcollection col-12 col-lg-3">
                                <div class="flexcontainer">
                                    <div class="left">
                                        <dl>
                                            <dt>Collection name</dt>
                                            <dd>Février 2023</dd>
                                            <dd>10 NFT</dd>
                                            <dd>1 ETH</dd>
                                        </dl>
                                    </div>
                                    <div class="right">
                                        <div class="avatar" id="user1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nft container col-md-5 d-none">
                        <h2>NFTs</h2>
                        <div class="scroll-zone row col-12 col-md-6">
                        <div class="cardnft col-12 col-lg-3">
                            <div class="flexcontainer">
                                <div class="left">
                                    <dl>
                                        <dt>NFT name</dt>
                                        <dd>Février 2023</dd>
                                        <dd>0.12 ETH</dd>
                                    </dl>
                                </div>
                                <div class="right">
                                    <div class="avatar" id="user1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cardnft col-12 col-lg-3">
                            <div class="flexcontainer">
                                <div class="left">
                                    <dl>
                                        <dt>NFT name</dt>
                                        <dd>Février 2023</dd>
                                        <dd>0.12 ETH</dd>
                                    </dl>
                                </div>
                                <div class="right">
                                    <div class="avatar" id="user1"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include('footer.php'); ?>

        <script src="search.js"></script>
    </body>
    </html>