<?php
class metod{

    public function muestraDato($sql){
        $conx= new conecta();
        $conexion =$conx->conectar();
        $respuesta=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
    }

public function ingresarproduc($datos){
    $conx= new conecta();
    $conexion =$conx->conectar();
    $sql= "INSERT into  compra (nom,quantitat,preu)
                                    values ('$datos[0]','$datos[1]','$datos[2]')";
                                    return $result=mysqli_query($conexion,$sql);
}
public function actualizadata($datos){
    $conx = new conecta();
    $conexion=$conx->conectar();
    $sql="UPDATE   compra set nom = '$datos[0]',
                                                      quantitat= '$datos[1]',
                                                      preu=  '$datos[2]', 
                                                                  where id='$datos[3]'";

return $result=mysqli_query($conexion,$sql);
}

public function borradatos($id){
    $conx = new conecta();
    $conexion=$conx->conectar();
    $sql="DELETE   from compra where id='$id'";
    return $result=mysqli_query($conexion,$sql);
}
}

?>