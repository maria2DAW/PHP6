<?php
//Con esto se valida si la sesión está activa
include("sesion.php");
?>

Bienvenido:

<?php
echo $_SESSION["usuario"];
?>

<br /><br />
Estás en otra página segura con sesiones en PHP
<br /><br />
<a href="archivo-protegido2.php" >Ir a la primera página segura</a>
<br /><br />
<a href="salir.php">Salir</a>
