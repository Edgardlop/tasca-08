<?php
$id=$_GET[ 'id' ];

    require_once "../conexion.php";
    require_once "../funciones.php";

    $obj= new metod();
    if($obj-> borradatos($id)==1){
        header("location:../index.php");
    }else{
       echo "No pudo agregarse el producto";
    }