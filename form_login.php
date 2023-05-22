<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css"


</head>
<body>

    <form action= "login.php" method="post">
   
       <?php
             if(isset($_GET("error"))){
                   $error=$_GET('error');
                   echo "<div class='error'>";
                   echo $error;
                   echo "</div>";
        } 
        ?>


    <label for="user">usuario</label>
    <input type="text" name="user" id="user">
    <label for="pass" >  password </label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="login" name="login" id="login">

    </form>

</body>
</html>


<?php

if (isset($_GET['error'])){
    $error=$_GET['error'];

    if($error==0){
        echo "El usuario o contraseña son incorrectos";
    }
}