<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="pageAjouterProduit.css">

</head>

<body>
<?php
include '../NavBar/navbar.php';
returnUtilisateur($id);
$id = $_SESSION['idclient'];
?>
<div class="container">
        <div class="clearfix"></div>
        <div class="Product_Content tab-content">
            <div id="Product_main" class="tab-pane active">
                <form class="form-horizontal" action='Ajout.php' method="POST">
                    <fieldset>
                        <div class="col-lg-12 form-group margin50">
                            <label class="col-lg-2"  for="Nom">Nom</label>
                            <div class="col-lg-4">
                                <input type="text" id="NomProduit" name="NomProduit" placeholder="" class="form-control name">
                            </div>
                        </div>

                        <div class=" col-lg-12 form-group">
                            <label class="col-lg-2" for="Materiaux">Materiaux</label>
                            <div class="col-lg-4">
                                <select id="productType" name="MateriauxProduit" class="form-control product-type">
                                    <option value="0">-Select-</option>
                                    <option value="1">Bois</option>
                                    <option value="2">Metaux</option>
                                    <option value="3">Plastique</option>
                                    <option value="4">Pierre</option>
                                    <option value="4">Tissue</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2" for="Type">Type</label>
                            <div class="col-lg-4">
                                <select id="manufacturer" name="TypeProduit" class="form-control manufacturer">
                                    <option value="0">-Select-</option>
                                    <option value="1">Chaise</option>
                                    <option value="2">Tabouret</option>
                                    <option value="3">Transat</option>
                                    <option value="4">Chaise de Bureau</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2" for="Description">Description</label>
                            <div class="col-lg-4">
                                <input type="text" id="Description" name="DescriptionProduit" placeholder="" class="form-control sku">
                            </div>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2"  for="StockProduit">Nombre de pièce</label>
                            <div class="col-lg-4">
                                <input type="text" id="StockProduit" name="StockProduit" placeholder="" class="form-control manufacturer-part">
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2" for="PoidProduit">Poid</label>
                            <div class="col-lg-4">
                                <input type="text" id="PoidProduit" name="PoidProduit" placeholder="" class="form-control column-width">
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2" for="CouleurProduit">Couleur</label>
                            <div class="col-lg-4">
                                <input type="text" id="CouleurProduit" name="CouleurProduit" placeholder="" class="form-control weight">
                            </div>
                        </div>


                        <h3>Information Prix</h3>

                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2" for="PrixAchatProduit">Prix d'Achat</label>
                            <div class="col-lg-4">
                                <input type="text" id="PrixAchatProduit" name="PrixAchatProduit" placeholder="" class="form-control price">
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label class="col-lg-2" for="PrixVenteProduit">Prix de Vente</label>
                            <div class="col-lg-4">
                                <input type="text" id="PrixVenteProduit" name="PrixVenteProduit" placeholder="" class="form-control sale-price">
                            </div>
                        </div>
                        <input type="number" name="idclient" value="<?php echo $id ?>" hidden>




                    </fieldset>
                    <div class="form-group ">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>