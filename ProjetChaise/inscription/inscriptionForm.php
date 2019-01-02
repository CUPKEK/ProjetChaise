<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website CSS style -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="inscription.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <title>Inscription</title>
</head>
<body>


<?php
include '../PHP/fonction.php';
?>


<div class="container">
    <div class="row main">
        <div class="main-login main-center">

            <form name="inscription" method="post" action="inscription.php">
                <div class="form-group">
                    <label for="NomClient" class="cols-sm-2 control-label">Ton Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="NomCli" id="NomCli"  placeholder="Entrer ton nom"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="PrenomClient" class="cols-sm-2 control-label">Ton Prenom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="PrenomCli" id="PrenomCli"  placeholder="Entrer ton prenom"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="MailClient" class="cols-sm-2 control-label">Ton Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="MailCli" id="MailCli"  placeholder="Entrer ton email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="UsernameClient" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="UsernameCli" id="UsernameCli"  placeholder="Entre ton Username"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="MdpClient" class="cols-sm-2 control-label">Numero de téléphone</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="NumeroCli" id="NumeroCli"  placeholder="Entre ton numero"/>
                        </div>
                    </div>
                </div>




                <select type="text" class="custom-select mr-sm-2 form-center" name='idVille' required>
                    <option value="0">Choisir la ville...</option>
                    <?php
                    $req = getDatabase()->prepare('SELECT * FROM ville');
                    $req->execute();
                    $row = $req->fetch();
                    while ($row) {
                        $idVille = $row["idVille"];
                        $NomVille = $row["NomVille"];
                        echo "<option value='$idVille'>$NomVille</option>";
                        $row = $req->fetch();
                    }
                    ?>
                </select>







                <div class="form-group">
                    <label for="MdpClient" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="MdpCli" id="MdpCli"  placeholder="Entre ton Password"/>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <input type="submit" name="valider" value="OK"/>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>