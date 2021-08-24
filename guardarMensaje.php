<?php
    header("Access-Control-Allow-Origin: *");

    $para = $_REQUEST["correoM"];
    $mensaje = $_REQUEST["mensajeM"];

    require("conexion.php");

    $sql = "INSERT INTO tblMensajes VALUES ('$para', '$mensaje', NOW())";

    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    
    echo "Mensaje enviado";

?>