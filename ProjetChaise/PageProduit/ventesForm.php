<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="ventes.css" media="all" />
    <script type="text/javascript" src="ventes.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>


<?php
include '../NavBar/navbar.php';
returnUtilisateur($id);
$accueil = affichageProduit();
$image = affichageImage($id);
for($i=0;$i<8;$i++)
{
?>
    <div class="col-sm-3">
        <article class="col-item">
            <div class="photo">
                <div class="options-cart-round">
                    <button class="btn btn-default" title="Add to cart">
                        <span class="fa fa-shopping-cart"></span>
                    </button>
                </div>
                <a href="../PageProduit/AchatProduitForm.php?idProduit='<?=$accueil[$i]->idProduit;?>'"> <img src="../PageAjoutProduit/uploads/<?=$image[$i]->file_name;?>" class="img-responsive" alt="Product Image" /> </a>
            </div>
            <div class="info">
                <div class="row">
                    <div class="price-details col-md-6">
                        <p class="details">
                            <?=$accueil[$i]->DescriptionProduit;?>
                        </p>
                        <h1><?=$accueil[$i]->NomProduit;?></h1>
                        <span class="price-new"><?=$accueil[$i]->PrixVenteProduit;?>  Crédit</span>
                    </div>
                </div>
            </div>
        </article>
    </div>
<?php
}
?>
</body>
</html>
