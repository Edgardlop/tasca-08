<?PHP
require_once "conexion.php";
require_once "funciones.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
Tasca 08
        </title>
    </head>
    <body>
                <form action ="archivos/ingresar.php" method="post">
                   <br><br>
                   <label ><b>Nombre</b></label>
                    <input type="text" name="nomtxt">
                    <br><br>
                    <label ><b>Preu</b></label>
                    <input type="text" name="preutxt">  
                    <br><br>
                    <label ><b>Quantitat</b></label>
                    <input type="text" name="quantitatxt">
                    <br><br>
                    <button >Nou Producte</button>

                </form>
        <table border="1">
            <tr>
                    <td><b>ID </b></td>
                    <td><b>Nom </b></td>
                    <td><b>Preu </b></td>
                    <td><b>Quantitat </b></td>
                    <td><b>Total </b></td>
                    <td><b>Modificar </b></td> 
                    <td><b>Borrar </b></td>
            </tr>
            <?php
                    $obj= new metod();
                    $sql ="SELECT id,nom,quantitat,preu from compra";
                    $datos=$obj-> muestraDato($sql);

                    foreach ($datos as $campo) {
           ?>
            <tr>
                <td><?php echo $campo['id']; ?></td>
                <td><?php echo $campo['nom']; ?></td>
                <td><?php echo $campo['preu']; ?></td>
                <td><?php echo $campo['quantitat']; ?></td>
                <td><?php echo $campo['quantitat'] *  $campo['preu']; ?></td>               
                <td><a href="edit.php?id=<?php echo $campo[ 'id' ] ?>">Editar</a></td>
                <td><a href="archivos/elimina.php?id=<?php echo $campo[ 'id' ] ?>">Borrar</a></td>
            </tr>
      
<?php 
            }
?>
        </table >
    </body>
</html>
