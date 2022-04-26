<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
</head>

<style>
    .td {
        color: #009;
        font-size:20px;
        padding:50px;
        font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial ", sans-serif;
    }
    .btn{
        cursor: pointer;
    }
</style>

<body>
    <!-- FUNCION INSERT -->    
    <table style="margin: 0 auto;" border="20">
        <tr>
            <td class="td" align="left">Ingrese los datos del reclutador</td>
            <td>
                <form action="../Reclutador/controllers/Insert_DB.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">ID:</td>
                            <td><input type="text" name="ID"></td>
                        </tr>
                        <tr>
                            <td align="center">Nombre:</td>
                            <td><input type="text" name="Nombre"></td>
                        </tr>
                        <tr>
                            <td align="center">ApellidoPat:</td>
                            <td><input type="text" name="ApellidoPat"></td>
                        </tr>
                        <tr>
                            <td align="center">Empresa:</td>
                            <td><input type="text" name="Empresa"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" value="Insertar registro" class="btn">
                            </td> 
                        </tr>             
                    </table>
                </form>
            </td>
        </tr>               
    
    <!-- FUNCION SELECT -->
        <tr>
            <td class="td" align="left">Registro de Reclutadores</td>
            <td>
                <form action="../Reclutador/controllers/Select_DB.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" value="Ver registros" class="btn">
                            </td> 
                        </tr> 
                    </table>
                </form>
            </td>
        </tr>
                         
    <!-- FUNCION UPDATE -->
        <tr>
            <td class="td" align="left">Actualizar reclutador</td>
            <td>    
                <form action="../Reclutador/controllers/Update_DB.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">ID:</td>
                            <td><input type="text" name="ID"></td>
                        </tr>
                        <tr>
                            <td align="center">Nombre:</td>
                            <td><input type="text" name="Nombre"></td>
                        </tr>
                        <tr>
                            <td align="center">Ap. Paterno:</td>
                            <td><input type="text" name="ApellidoPat"></td>
                        </tr>
                        <tr>
                            <td align="center">Empresa:</td>
                            <td><input type="text" name="Empresa"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" value="Modificar registro" class="btn">
                            </td> 
                        </tr> 
                    </table>
                </form>
            </td>
        </tr>
                           
    <!-- FUNCION DELETE -->
   
        <tr>
            <td class="td" align="left">Eliminar reclutador</td>
            <td>    
                <form action="../Reclutador/controllers/Delete_DB.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">ID:</td>
                            <td><input type="text" name="ID"></td>
                        </tr>                
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" value="Eliminar registro" class="btn">
                            </td> 
                        </tr> 
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
