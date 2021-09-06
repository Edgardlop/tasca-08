<?php
    require_once "../conexion.php";
    require_once "../funciones.php";


    $nom=$_POST['nomtxt'];
    $quantitat=$_POST['quantitatxt'];
    $preu=$_POST['preutxt'];


    $datos = array(
        $nom,
        $quantitat,
        $preu
    );
    $obj= new metod();
   if($obj->ingresarproduc($datos)==1){
       header("location:../index.php");
   }else{
      echo "No pudo agregarse el producto";
   }


?>