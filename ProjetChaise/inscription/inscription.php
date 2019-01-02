<?php

include '../PHP/fonction.php';
$idclient = postVar("idclient");
$NomCli = postVar("NomCli");
$PrenomCli = postVar("PrenomCli");
$MailCli = postVar("MailCli");
$UsernameCli = postVar("UsernameCli");
$NumeroCli = postVar("NumeroCli");
$MdpCli = postVar("MdpCli");
$idVille = postVar("idVille");

$id = addProfil($idclient, $NomCli, $PrenomCli, $MailCli, $UsernameCli,$NumeroCli, $MdpCli, $idVille);
error_log("Utilisateur ajouté avec l'identifiant ".$idclient);
