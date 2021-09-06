<?php
    require_once "conexion.php";

    $obj = new conecta();
    $conexion=$obj->conectar();
    $id=$_GET['id'];
    $sql="SELECT nom, quantitat,preu from compra where id= '$id ' ";
    $result=mysqli_query($conexion,$sql);
    $muestra=mysqli_fetch_row($result);

    ?>

<html>
    <head>
        <title></title>
    </head>
    <body>

                <form action ="archivos/actualiza.php" method="post">
                    <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                   <br>
                   <label ><b>Nombre</b></label>
                    <input type="text" name="nomtxt" value="<?php echo $muestra[0] ?>">
                    <br>
                    <label ><b>Quantitat</b></label>
                    <input type="text" name="quantitatxt" value="<?php echo $muestra[1] ?>">
                    <br>
                    <label ><b>Preu</b></label>
                    <input type="text" name="preutxt" value="<?php echo $muestra[2] ?>">   
                    <br><br>
                    <button >Edit Producte</button>

                </form>
    </body>
</html>