<?php
    include '../model/Conex_DB.php';
    $SGOT = new Database();
    
    $ID = $_POST["ID"];
    $Nombre = $_POST["Nombre"];
    $ApellidoPat= $_POST["ApellidoPat"];
    $Empresa = $_POST["Empresa"];

    $sql = "UPDATE Reclutador SET Nombre='$Nombre', ApellidoPat='$ApellidoPat',  Empresa='$Empresa' WHERE ID=$ID";

    if ($SGOT->query($sql) == TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error actualizando registro: " . $SGOT->error;
    }
?>



