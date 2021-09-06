<?php

class conecta{
      private $Server="localhost";
      private $usuario="root";
      private $db="php_m8";
      private $password="";
      public function conectar(){
          $conexta=mysqli_connect($this->Server,
                                                            $this->usuario,
                                                            $this->password,
                                                            $this->db);

                                       return $conexta;
      }
}
$obj= new conecta();
if($obj->conectar()){
    echo '<h2>Connectat</h2>';

}else{
    echo 'Fallo al conectar';
}

?>