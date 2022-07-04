<?php
$v1 =$_GET["v1"];
$v2 = $_GET["v2"];
$v3 = $_GET["v3"];

$soma = somar ($v1 , $v2 , $v3);


function somar(int $v1 , int $v2 , int $v3){
  $valor = 0;
  $valor = $v1 + $v2 + $v3;
  echo ("A soma obtida foi de: $valor");
}
?>