<?php
    include '../model/Conex_DB.php';
    $SGOT = new Database();
    
    $ID = $_POST["ID"];
    $Nombre = $_POST["Nombre"];
    $ApellidoPat= $_POST["ApellidoPat"];
    $Empresa = $_POST["Empresa"];

    $sql = "INSERT INTO Reclutador (ID,Nombre,ApellidoPat,Empresa)
    VALUES ($ID,'$Nombre', '$ApellidoPat','$Empresa' )";

    if ($SGOT->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $SGOT->error;
    }
?>
