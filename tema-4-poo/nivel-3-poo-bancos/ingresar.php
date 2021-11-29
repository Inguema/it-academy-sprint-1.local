<?php

include "Account.php";

if (empty($_POST)) {
    header("location: /tema-4-poo/nivel-3-poo-bancos/ingresar.html");
    exit();
}

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$cuenta = $_POST["cuenta"];
$saldo = $_POST["saldo"];
$cantidad = $_POST["cantidad"];

$account = new Account($nombre, $apellidos, $cuenta, $saldo);
$account->ingresarDinero($cantidad);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar dinero</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1 class="nombre-banco">IT Academy Banco</h1>
    <h3>Bienvenido a nuestro banco, sus datos son los siguientes, <?php echo $nombre; ?> : </h3>
    <div class="caja-formulario">
        <p>Nombre: <?php echo $account->getNombre(); ?></>
        <p>Apellidos: <?php echo $account->getApellidos(); ?></p>
        <p>Número de cuenta: <?php echo $cuenta; ?></p>
        <p>Saldo disponible: <?php echo $saldo; ?> euros.</p>
        <p>La cantidad de dinero que desea ingresar: <?php echo $cantidad; ?> euros.</p>
        <p>Saldo actual después del ingreso: <?php echo $account->getSaldo() ; ?> euros.</p>
    </div>
</body>
</html>