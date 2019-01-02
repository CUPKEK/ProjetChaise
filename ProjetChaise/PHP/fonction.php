<?php


function getDataBase()
{
    $host = "localhost";
    $dbName = "projetbdd";
    $login = "root";
    $password = "";

    try
    {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        $bdd = null;
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}



function addProfil($idclient, $NomClient, $PrenomClient, $MailClient, $UsernameClient, $NumeroCli, $MdpClient, $idVille)
{
    $db = getDatabase();
    $sql='INSERT INTO client (NomCli, PrenomCli, MailCli, UsernameCli, NumeroCli, MdpCli, idVille) 
          VALUES(:NomCli, :PrenomCli, :MailCli, :UsernameCli, :NumeroCli, :MdpCli, :idVille)';
    $insert=$db->prepare($sql);
    $values = array('NomCli' => $NomClient, 'PrenomCli' => $PrenomClient, 'MailCli' => $MailClient,
        'UsernameCli' => $UsernameClient, 'NumeroCli' => $NumeroCli, 'MdpCli' => $MdpClient, 'idVille' => $idVille);
    $insert->execute($values);
    header('location: ../PageProduit/ventesForm.php');
    return $db->lastInsertId();

}

function postVar($name){
    if(isset($_POST[$name])){
        if(!empty($_POST[$name])){
            return $_POST[$name];
        }
        return true;
    }
    return false;
}

function ajouterProduit($idProduit, $PrixVenteProduit, $PrixAchatProduit, $StockProduit, $PoidProduit, $NomProduit, $DescriptionProduit, $MateriauxProduit, $TypeProduit, $CouleurProduit, $idclient){
    $db = getDatabase();
    $sql='INSERT INTO produit (PrixVenteProduit, PrixAchatProduit, StockProduit, PoidProduit, NomProduit, DescriptionProduit, MateriauxProduit, TypeProduit, CouleurProduit, idclient)
          VALUES(:PrixVenteProduit, :PrixAchatProduit, :StockProduit, :PoidProduit, :NomProduit, :DescriptionProduit, :MateriauxProduit, :TypeProduit, :CouleurProduit, :idclient)';
    $insert=$db->prepare($sql);
    $values = array('PrixVenteProduit' => $PrixVenteProduit, 'PrixAchatProduit' => $PrixAchatProduit, 'StockProduit' => $StockProduit, 'PoidProduit' => $PoidProduit, 'NomProduit' => $NomProduit, 'DescriptionProduit' => $DescriptionProduit, 'MateriauxProduit' =>$MateriauxProduit, 'TypeProduit' =>$TypeProduit, 'CouleurProduit' => $CouleurProduit, 'idclient' =>$idclient);
    $insert->execute($values);
    header('location: ../PageAjoutProduit/PageAjouterPhoto.php');
    return $db->lastInsertId();
}



function returnUtilisateur($id)
{
    $bdd = null;
    if ($bdd == null) {
        $bdd = getDataBase();
    }

    if ($bdd) {
        $resultat = $bdd->query("SELECT * FROM client WHERE idclient = $id");
        if ($resultat) {
            $utilisateur = $resultat->fetchAll(PDO::FETCH_OBJ);
            $resultat->closeCursor();
        }
    }
    return $utilisateur;
}

function infoClient($id)
{
    $bdd = null;

    if ($bdd == null) {
        $bdd = getDataBase();
    }

    if ($bdd) {
        $resultat = $bdd->prepare("SELECT * FROM client WHERE idclient = :idclient");
        $resultat->bindParam(':idclient', $id);
        if ($resultat->execute()) {
            $client = $resultat->fetchAll(PDO::FETCH_OBJ);
            $resultat->closeCursor();
        }
    }
    return $client;
}


function affichageProduit(){
    $bdd = null;

    if ($bdd == null) {
        $bdd = getDataBase();
    }
    if ($bdd) {
        $stmt = $bdd->prepare("SELECT * FROM produit ORDER BY idProduit ASC ");
        if ($stmt->execute()) {
            $chaise = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt->closeCursor();
        }
    }
    return $chaise;
}

function affichageDescriptionProduit($idProduit){
    $bdd = null;

    if ($bdd == null) {
        $bdd = getDataBase();
    }
    if ($bdd) {
        $stmt = $bdd->prepare("SELECT * FROM produit WHERE idProduit = :pid");
        $stmt->bindParam(':pid', $idProduit);
        if ($stmt->execute()) {
            $chaise = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt->closeCursor();
        }
    }
    return $chaise;
}

function affichageCreditCli($id){
    $bdd = null;

    if ($bdd == null) {
        $bdd = getDataBase();
    }

    if ($bdd) {
        $resultat = $bdd->prepare("SELECT CreditCli FROM client WHERE idclient = :pid");
        $resultat->bindParam(':pid', $id);
        if ($resultat->execute()) {
            $client = $resultat->fetchAll(PDO::FETCH_OBJ);
            $resultat->closeCursor();
        }
    }
    return $client;
}

function affichageClient(){
    $bdd = null;

    if ($bdd == null) {
        $bdd = getDataBase();
    }
    if ($bdd) {
        $stmt = $bdd->prepare("SELECT * FROM client WHERE idclient = :pid");
        $stmt->bindParam(':pid', $id);
        if ($stmt->execute()) {
            $affCli = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt->closeCursor();
        }
    }
    return $affCli;
}

function affichageImage($id){
    $bdd = null;

    if ($bdd == null) {
        $bdd = getDataBase();
    }

    if ($bdd) {
        $resultat = $bdd->prepare("SELECT file_name FROM images, produit WHERE idProduit = id");
        if ($resultat->execute()) {
            $images = $resultat->fetchAll(PDO::FETCH_OBJ);
            $resultat->closeCursor();
        }
    }
    return $images;
}