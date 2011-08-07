<?php

class conecto_pg
{
  var $host;
  var $bd;
  var $usuario;
  var $password;
  var $link;
  var $port;

  //Constructor con los datos por defecto
  function __construct($host='localhost',$port='5432',$bd='postgres',$user='postgres',$pass='1234')
  {
    //se asignan valores ara ensamblar el string de conexion
    $this->host=$host;
    $this->port=$port;
    $this->bd=$bd;
    $this->usuario=$user;
    $this->password=$pass;
  }
  function connex_bd(){
    //ensamblamos el string de conexion
    $datos_bd="host='$this->host' port='$this->port 'dbname='$this->bd' user='$this->usuario' password=$this->password";
    //establecemos el link
    $link=pg_connect($datos_bd);
    //$this->link=$link;
    return $link;
  }
  function consultar($sql,$link)
  { 
    //cargamos la variable para el destructor el cual elimina la conexion
    $this->link=$link;
    //ejecutamos la consulta
    $query=pg_query($link,$sql);
    if(!$query) echo $sql;//si no se ejecuta la consulta, se imprime el sql que llega
    return $query;  
  }
  //destructor, elimina la conexion con postgres
  /*function __destruct()
  {
    //pg_close($this->link);
   if(!pg_close($this->link)) {
        print "Failed to close connection to ";
    } else {
        print "Successfully disconnected from database";
    }
  }*/
function testo(){
  echo 'que la chingada';
}
}

function __destruct($link)
  {
    pg_close($link);
   /*if(!pg_close($link)) {
        echo "<h1>Failed to close connection to</h1> ";
    } else {
        echo "<h1>Successfully disconnected from database</h1>";
    }*/
}
?>
