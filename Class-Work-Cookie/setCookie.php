<?php
$cookie_name = "color";
$cookie_value = $_POST['color'];
setcookie($cookie_name, $cookie_value, time() + (86400*30) ,"/"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SERVER['REQUEST_METHOD'] === 'GET'){

        if(empty($_POST['color'])){
            
            header("Location: cookie.php");
            
        }else{
           
            header("Location: cookie.php?color="."$cookie_value");
            
        }
        
    }else{
        echo "Invalid Request .. It should be GET request ... " ;
    }
   
    
    
    ?>
</body>
</html>