<?php
/*session_start();
$_SESSION["saludo"]="Hola Mundo";*/
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        <?php if(isset($_SESSION['USR'])){?>
        <form>
            <div><input type="text" name="nombre"></div>
            <div><input type="password" nombre="clave"></div>
            <input type="submit" value="Acceder">
        </form>
        <?php } ?>
        <h1>ejemplos de encriptacion con el hash md5</h1>
        <?php 
            echo md5('#holamundo&');
            echo '<br>';
            echo md5('holamundo');
            echo '<br>';
            echo md5('HoLaMundo');
            echo '<br>';
            echo md5('HOLAMundo');
            echo '<br>';                                                                                                                                                                                    
        ?>
    </body>
</html>