<?php
    require_once "../conexion.php";
    require_once "../funciones.php";


    $nom=$_POST['nomtxt'];
    $quantitat=$_POST['quantitatxt'];
    $preu=$_POST['preutxt'];
    $id=$_POST['id'];

    $datos = array(
        $nom,
        $quantitat,
        $preu,
        $id
                     );
    $obj= new metod();

    if($obj-> actualizadata($datos)==1){
        header("location:../index.php");
    }else{
       echo "No se pudo editar el producto";
    }

    ?>