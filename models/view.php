<?php
require "autoModel.php";

    $cel=$_POST["num_celular"];
    $pre=$_POST["precio"]; 
    $mar=$_POST["marca"];
    $mod=$_POST["modelo"];
    $ano=$_POST["ano"];
    $tit=$_POST["titulo"];
    $num_cil=$_POST["num_cilindros"];
    $col=$_POST["color"];
    $ac=$_POST["AC"];
    $ub=$_POST["ubicacion"];
    $mil=$_POST["millaje"];
    $son=$_POST["sonido"];
    $tran=$_POST["transmision"];
    $des=$_POST["descripcion"];

$vista=new auto();
$vista->alta($cel,$pre,$mar,$mod,$ano,$tit,$num_cil,$col,$ac,$ub,$mil,$son,$tran,$des);
?>
