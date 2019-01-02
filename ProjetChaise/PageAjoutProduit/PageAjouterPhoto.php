<!DOCTYPE html>
<html>
<head>
    <?php
    include '../NavBar/navbar.php';
    ?>
</head>
<body>
<div class="btn-group" role="group">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <button type="button" class="btn btn-default btn-create" name="file"><input type="file" name="file"></button>
    <button type="submit" class="btn btn-default btn-create" name="submit" value="Upload">Sauvegarder</button>
</div>
</body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>
