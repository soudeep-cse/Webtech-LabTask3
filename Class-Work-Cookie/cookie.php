<?php 
$color='#FFFFFF'; 
$backgroundcolor='#FFFFFF';       
if(isset($_GET['color'])){
    $backgroundcolor=$_GET['color'];
}
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


    <div style="background-color: <?= $pageColor ?>" >
    
        <h1>Cookie Example</h1><br>
        <p><strong>Time zone :</strong> Asia/Dhaka</p>

        <hr>

        <h4>Set Cookie</h4>

        <hr>

        <form action="setCookie.php" method="post">
            <table>
            <tr>
                <td>Select color </td>
                <td><input type="color" name="color" id="color"></td>
            </tr>
            <tr>
                <td><label for="expireOn">Expire on : </label></td>
                <td><input type="time" name ="expireOn" id="expireOn"></td>
                <td>    <?php $_GET['expireOn'] ?> </td>
            </tr>
            <tr>
                <td><button type="submit">Set Cookie</button></td>
            </tr>
        </table>
        </form>

        <h4>Destroy Cookie</h4>
        <form action="Destroy.php">
        <button>Destroy Cookie</button> 
        </form>
        <?php 
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        ?>
        

        <hr>
        
    </div>

</body>
</html>