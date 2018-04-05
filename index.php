<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sesiones con PHP</title>
        <link rel="stylesheet" href="css/estilo.css" />
    </head>
    <body>
        <h1>Sesiones con PHP</h1>
        
        <form name="autentificacion_frm" action="control.php" 
              method="post" enctype="application/x-www-form-urlencoded">
            <?php
                error_reporting(E_ALL ^ E_NOTICE);
            
                if($_GET["error"] == "si")
                {
                    echo "<span>Verifica tus datos</span>";
                }
                
                else
                {
                    echo "<span>Introduce tus datos</span>";
                }
            ?>
            
            <br /><br />
            Usuario:
            <input type="text" name="usuario_txt" />
            <br /><br />
            Contraseña:
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="submit" name="entrar_btn" value="Entrar"/>
        </form>
    </body>
</html>
