<?php

include '../PHP/fonction.php';
$idProduit = postVar("idProduit");
$PrixVenteProduit = postVar("PrixVenteProduit");
$PrixAchatProduit = postVar("PrixAchatProduit");
$StockProduit = postVar("StockProduit");
$PoidProduit = postVar("PoidProduit");
$NomProduit = postVar("NomProduit");
$DescriptionProduit = postVar("DescriptionProduit");
$MateriauxProduit = postVar("MateriauxProduit");
$TypeProduit = postVar("TypeProduit");
$CouleurProduit = postVar("CouleurProduit");
$idclient = postVar("idclient");



$id = ajouterProduit($idProduit, $PrixVenteProduit, $PrixAchatProduit, $StockProduit, $PoidProduit, $NomProduit, $DescriptionProduit, $MateriauxProduit, $TypeProduit, $CouleurProduit, $idclient) ;

