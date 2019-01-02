<?php


session_start();
session_destroy();
header("location:../PageProduit/ventesForm.php");

exit;