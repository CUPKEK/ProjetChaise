<html>


<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="AchatCredit.css" media="screen" type="text/css" />
</head>
<body>
<?php
include '../NavBar/navbar.php'
?>
<div class="container">
    <div class="row">
        <div class="paymentCont">
            <div class="headingWrap">
                <h3 class="headingTop text-center">Choisir un moyen de Payement</h3>
                <p class="text-center">1 Euro sur notre site vaut 1 crédit</p>
                <p class="text-center">Les crédits sont directement déplacé sur votre comptre après payement</p>
            </div>
            <div class="paymentWrap">
                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                    <label class="btn paymentMethod active">
                        <div class="method visa"></div>
                        <input type="radio" name="options" checked>
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method master-card"></div>
                        <input type="radio" name="options">
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method amex"></div>
                        <input type="radio" name="options">
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method vishwa"></div>
                        <input type="radio" name="options">
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method ez-cash"></div>
                        <input type="radio" name="options">
                    </label>

                </div>
            </div>
            <div class="footerNavWrap clearfix">
                <li><a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="../PageProduit/AchatProduitForm.php" aria-expanded="false" aria-controls="nav-collapse2">Retour Shopping</a></li>
            </div>
        </div>
    </div>
</div>

</body>
</html>