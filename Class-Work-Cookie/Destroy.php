<?php
setcookie("color", "", time()+(60)*(60)*10); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy cookie</title>
</head>
<body>
    <?php 
        header("Location: cookie.php?msg=". "Destroyed cookie");
    ?>
</body>
</html>