<?php
    include '../model/Conex_DB.php';
    $SGOT = new Database();

    $result = $SGOT->query("SELECT * FROM Reclutador");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['ID'] ."<br />";
        echo "Nombre: " . $row['Nombre'] ."<br />";
        echo "ApellidoPat: " . $row['ApellidoPat'] ."<br />";
        echo "Empresa: " . $row['Empresa'] ."<br />";
         
        echo "<hr />";
    }
?>