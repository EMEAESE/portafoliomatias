<?php
if(empty($_POST['n1']) || empty($_POST['n2']) && ($_POST['n2']==0)){
echo"ingrese valores validos";
}else{
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if ($_POST["consulta"] == "suma") {
$suma=$n1+$n2;
echo "la suma de ".$n1. " y ".$n2. " es ", $suma;
}
if ($_POST["consulta"] == "resta") {
$resta=$n1-$n2;
echo "la resta de ".$n1. " y ".$n2. " es ", $resta;
}
if ($_POST["consulta"] == "multiplicacion") {
$multiplicacion=$n1*$n2;
echo "la multiplicacion de ".$n1. " y ".$n2. " es ", $multiplicacion;
}
if ($_POST["consulta"] == "division") {
$division=$n1/$n2;
echo "la division de ".$n1. " y ".$n2. " es ", $division;
}
if ($_POST["consulta"] == "potencia") {
$potencia=$n1*$n1;
echo "la potencia de ".$n1.  " es ", $potencia;
}
}
?>
