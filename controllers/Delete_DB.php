<?php 
    include '../model/Conex_DB.php';
    $SGOT= new Database();
    
    $idalumno = $_POST["ID"];

    $sql = "DELETE FROM Reclutador WHERE ID = $ID";

    if ($SGOT->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $SGOT->error;
    }
?>
