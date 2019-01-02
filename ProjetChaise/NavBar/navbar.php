<!DOCTYPEhtml>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="navbar.css" media="screen" type="text/css" />
    <?php
    session_start();
    include '../PHP/fonction.php';
    $id = $_SESSION['idclient'];
    $infoCredit = infoClient($id);
    ?>
</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../PageProduit/ventesForm.php">CHAISE.com</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../">Profil</a></li>
                    <li><a href="../PageProduit/ventesForm.php">Acheter</a></li>
                    <li><a href="../PageAjoutProduit/pageAjouterProduitForm.php">Vendre</a></li>
                    <?php if (isset($_SESSION['Login']) && $_SESSION['Login']==1): ?>
                        <li><a class="btn btn-default btn-outline btn-circle" href="../AcheterCredit/AchatCreditForm.php" aria-expanded="false" aria-controls="nav-collapse2"><?=$infoCredit[0]->CreditCli;?>Crédit</a></li>
                        <li><a class="btn btn-default btn-outline btn-circle" href="../PHP/deconnexion.php" aria-expanded="false" aria-controls="nav-collapse2">Deconnexion</a></li>
                    <?php else: ?>
                        <li><a href="../inscription/inscriptionForm.php">Inscription</a></li>
                        <li><a class="btn btn-default btn-outline btn-circle" href="../Connexion/connexionForm.php" aria-expanded="false" aria-controls="nav-collapse2">Connexion</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>
</html>



