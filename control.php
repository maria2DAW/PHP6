<?php

if($_POST["usuario_txt"] == "maria" && $_POST["password_txt"] == "123")
{
    //Inicio la sesión
    session_start();
    
    //Declaro mis variables de sesión
    $_SESSION["autentificado"] = true;
    $_SESSION["usuario"] = $_POST["usuario_txt"];
    
    //Redirijo el flujo de la aplicación
    header("Location: archivo-protegido.php");
}

else 
{
    header("Location: index.php?error=si");
}